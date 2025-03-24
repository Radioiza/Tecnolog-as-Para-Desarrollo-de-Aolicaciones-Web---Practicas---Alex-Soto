<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Curricular</title>
    <link rel="stylesheet" href="estilo/style.css?v=3.0">
</head>
<body>
    <header>
        <h1>Mapa Curricular de ESCOM de Ingeniería en Sistemas Computacionales</h1>
    </header>

    <!-- Leyenda de Colores -->
    <section class="leyenda">
        <h2>Leyenda de Colores</h2>
        <div class="leyenda-grid">
            <div class="leyenda-item aprobada-ord">Aprobada en Ordinario</div>
            <div class="leyenda-item aprobada-ext">Aprobada en Extraordinario</div>
            <div class="leyenda-item aprobada-ets">Aprobada en ETS</div>
            <div class="leyenda-item aprobada-rec">Aprobada en Recurse</div>
            <div class="leyenda-item reprobada">Reprobada</div>
            <div class="leyenda-item sin-cursar">No Cursada</div>
        </div>
    </section>

    <main>
        <div class="container">
            <?php
            // Función para leer materias del CSV
            function cargarMaterias($archivo) {
                $semestres = [];
                if (($file = fopen($archivo, 'r')) !== false) {
                    while (($row = fgetcsv($file)) !== false) {
                        if ($row[0] !== 'Clave') { // Omitir cabecera
                            $semestre = substr($row[0], 1, 1);
                            $semestres[$semestre][] = $row;
                        }
                    }
                    fclose($file);
                }
                return $semestres;
            }

            $archivoCSV = 'datos/materias.csv';
            $semestres = cargarMaterias($archivoCSV);

            $totalSum = 0; // Acumula la suma total de calificaciones
            $totalCount = 0; // Contador de calificaciones totales

            // Mostrar materias por semestre
            foreach ($semestres as $semestre => $materias) {
                $semestreSum = 0; // Suma de calificaciones para el semestre
                $semestreCount = 0; // Contador de calificaciones del semestre

                echo "<section class='semester'>";
                echo "<h2>Semestre $semestre</h2>";
                echo "<div class='grid'>";

                foreach ($materias as $materia) {
                    $calificacion = $materia[5];
                    $formaEval = $materia[4];
                    $styleClass = '';

                    if ($calificacion === '-') {
                        $styleClass = 'sin-cursar';
                    } else {
                        $calificacion = (float)$calificacion;
                        if ($calificacion >= 6) {
                            $semestreSum += $calificacion;
                            $semestreCount++;
                            switch ($formaEval) {
                                case 'ORD': $styleClass = 'aprobada-ord'; break;
                                case 'EXT': $styleClass = 'aprobada-ext'; break;
                                case 'ETS': $styleClass = 'aprobada-ets'; break;
                                case 'REC': $styleClass = 'aprobada-rec'; break;
                            }
                        } else {
                            $styleClass = 'reprobada';
                        }
                    }

                    echo "<div class='card $styleClass'>";
                    echo "<h3>{$materia[1]}</h3>";
                    echo "<p><strong>Clave:</strong> {$materia[0]}</p>";
                    echo "<p><strong>Calificación:</strong> " . ($calificacion === '-' ? '-' : $calificacion) . "</p>";
                    echo "<p><strong>Fecha:</strong> {$materia[2]}</p>";
                    echo "</div>";
                }

                echo "</div>";

                // Calcular y mostrar promedio del semestre
                $semestrePromedio = $semestreCount > 0 ? round($semestreSum / $semestreCount, 2) : '-';
                echo "<p class='promedio-semestre'><strong>Promedio del Semestre:</strong> $semestrePromedio</p>";
                echo "</section>";

                // Acumular datos para promedio final de la carrera
                $totalSum += $semestreSum;
                $totalCount += $semestreCount;
            }

            // Calcular promedio final de la carrera
            $promedioFinal = $totalCount > 0 ? round($totalSum / $totalCount, 2) : '-';
            echo "<footer class='promedio-final'>";
            echo "<h2>Promedio Final de la Carrera: $promedioFinal</h2>";
            echo "<h3>Historial académico del alumno Juan Carlos Escalona Zuñiga</h3>";
            echo "</footer>";
            ?>
        </div>
    </main>
</body>
</html>
