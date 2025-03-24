<?php
$datPreparatoria['datos'] = "<div>
<h3>Medio Superior</h3>
   <ul>
        <li>Nombre: Centro de Estudios Científicos y Tecnológicos N° 3 Estanislao Ramírez Ruíz</li>
        <li>Dirección: Manzana 027, 55118 Ecatepec de Morelos, Méx.</li>
        <li>Grado o reconocimiento: Certificado de estudios (SEP)</li>
        <li>Promedio: 8.1 </li>
        <li>Periodo: 2019-2022</li>
    </ul>
</div>";

echo "<article id='Preparatoria'>";
echo $datPreparatoria['datos'];

// Imagen
echo "<div>
    <img src='./imagenes/preparatoria.png' 
    alt='voca'>
</div>";

// Google Maps
echo "<div>
    <iframe 
        src='https://www.google.com/maps/embed?pb=!3m2!1ses!2smx!4v1733649823044!5m2!1ses!2smx!6m8!1m7!1sr-1JpO8Cioho1kskSxWX2Q!2m2!1d19.57127684909669!2d-99.01920463480444!3f209.7203514770847!4f-8.578446147475077!5f0.7820865974627469' 
        loading='lazy' 
        referrerpolicy='no-referrer-when-downgrade'>
    </iframe>
</div>";

// Video de YouTube
echo "<div>
    <iframe
        src='https://www.youtube.com/embed/-KqCVN88c0M?si=hytBj8rRwzZL0f2R' 
        loading='lazy'
        frameborder='0'
        allowfullscreen>
    </iframe>
</div>";

echo "</article>";
?>
