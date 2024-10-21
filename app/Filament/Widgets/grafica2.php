<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Adolescentes;

class grafica2 extends ChartWidget
{
    protected static ?string $heading = 'Participantes Adolescentes por Comunidad';
    protected static ?int $sort=7;

    protected function getData(): array
    {
       // Obtener los datos de la base de datos
       $datos = Adolescentes::query()
       ->join('espacio_seguros', 'adolescentes.espacio_seguros_id', '=', 'espacio_seguros.id')
       ->selectRaw('espacio_seguros.nombre, COUNT(*) as total_participantes')
       ->groupBy('espacio_seguros.nombre')
       ->get();

   // Preparar las etiquetas y los valores para el gráfico
   $etiquetas = $datos->pluck('nombre')->all();
   $valores = $datos->pluck('total_participantes')->all();

   // Devolver los datos en el formato esperado por ChartWidget
   return [
       'labels' => $etiquetas,
       'datasets' => [
           [
               'label' => 'Número de Participantes',
               'data' => $valores,
               'backgroundColor' => [
                    'rgba(255, 99, 132, 0.2)', // Rojo claro
                    'rgba(54, 162, 235, 0.2)', // Azul claro
                    'rgba(255, 206, 86, 0.2)', // Amarillo claro
                    'rgba(75, 192, 192, 0.2)', // Verde agua claro
                    'rgba(153, 102, 255, 0.2)', // Púrpura claro
                    'rgba(255, 159, 64, 0.2)', // Naranja claro
                    'rgba(255, 99, 255, 0.2)', // Magenta claro
                    'rgba(0, 0, 0, 0.2)', // Negro claro
               ],
               'borderColor' => [
                   // Define aquí los colores de borde para cada segmento
                    'rgba(255, 99, 132, 1)', // Rojo
                    'rgba(54, 162, 235, 1)', // Azul
                    'rgba(255, 206, 86, 1)', // Amarillo
                    'rgba(75, 192, 192, 1)', // Verde agua
                    'rgba(153, 102, 255, 1)', // Púrpura
                    'rgba(255, 159, 64, 1)', // Naranja
                    'rgba(255, 99, 255, 1)', // Magenta
                    'rgba(0, 0, 0, 1)', // Negro
               ],
               'borderWidth' => 2,
           ],
       ],
    ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
