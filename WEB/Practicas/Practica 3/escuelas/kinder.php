<?php
$datKinder['datos']="<div>
<h3>Pre-escolar</h3>
    <ul>
        <li>Nombre: Ovidio Decroly</li>
        <li>Dirección: Arqueros 41-43, Villa del Real, 55749 Ojo de Agua, Méx.</li>
        <li>Grado o reconocimiento: Certificado de estudios (SEP)</li>
        <li>Promedio: 10</li>
        <li>Periodo: 2007-2009</li>
    </ul>
    </div>";

echo "<article id='Kinder'>";
echo $datKinder['datos'];

echo "<div>
    <img src='./imagenes/kinder.png' 
    alt='ovidio'>
</div>";

echo "<div>
    <iframe 
        src='https://www.google.com/maps/embed?pb=!3m2!1ses!2smx!4v1733648888304!5m2!1ses!2smx!6m8!1m7!1sUZmyhf6vJKb4ReZ8W2O5-A!2m2!1d19.68726368565517!2d-98.98615192202992!3f120.3074!4f0!5f0.7820865974627469' 
        loading='lazy' 
        referrerpolicy='no-referrer-when-downgrade'>
    </iframe>
</div>";

echo "<div>
    <iframe
        src='https://www.youtube.com/embed/D2ls3Ts34lM?si=r0qDWfzSVbdauD7V' 
        loading='lazy'
        frameborder='0'
        allowfullscreen>
    </iframe>
</div>";

echo "</article>";
?>
