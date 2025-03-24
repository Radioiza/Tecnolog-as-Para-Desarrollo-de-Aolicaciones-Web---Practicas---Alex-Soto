<?php
$datPrimaria['datos'] = "<div>
<h3>Primaria</h3>
    <ul>
        <li>Nombre: Mario Molina</li>
        <li>Dirección: Pto. San Manuel 11, Villa del Real, 55749 Ojo de Agua, Méx.</li>
        <li>Grado o reconocimiento: Certificado de estudios (SEP)</li>        
        <li>Promedio: 8.5</li>
        <li>Periodo: 2009-2015</li>
    </ul>
</div>";

echo "<article id='Primaria'>";
echo $datPrimaria['datos'];

// Imagen
echo "<div>
    <img src='./imagenes/primaria.png' 
    alt='molina'>
</div>";

// Google Maps
echo "<div>
    <iframe
        src='https://www.google.com/maps/embed?pb=!3m2!1ses!2smx!4v1733649423769!5m2!1ses!2smx!6m8!1m7!1sjT3dB6riupyjU0EI7M7zig!2m2!1d19.68786969991153!2d-98.981423325413!3f122.26699733521775!4f-7.930545762838435!5f0.7820865974627469' 
        loading='lazy' 
        referrerpolicy='no-referrer-when-downgrade'>
    </iframe>
</div>";

// Video de YouTube
echo "<div>
    <iframe
        src='https://www.youtube.com/embed/9-lG5_dHxVU?si=JHW8cKh-PhiVQaz1' 
        loading='lazy'
        frameborder='0'
        allowfullscreen>
    </iframe>
</div>";

echo "</article>";
?>
