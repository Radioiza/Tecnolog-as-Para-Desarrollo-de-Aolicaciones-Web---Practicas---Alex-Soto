<?php
function leerCSV($archivo) {
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

function mostrarMaterias($semestres) {
    foreach ($semestres as $semestre => $materias) {
        echo "<h2>Semestre $semestre</h2>";
        echo "<ul>";
        foreach ($materias as $materia) {
            $calificacion = $materia[5];
            $estado = ($calificacion === '-') ? 'Sin cursar' : 
                      ($calificacion >= 6 ? 'Aprobada' : 'No aprobada');

            echo "<li>{$materia[1]} - Calificación: $calificacion ($estado)</li>";
        }
        echo "</ul>";
    }
}

$archivo = 'materias.csv';
if (!file_exists($archivo)) {
    die("El archivo CSV no se encuentra disponible.");
}

$semestres = leerCSV($archivo);
mostrarMaterias($semestres);
?>
