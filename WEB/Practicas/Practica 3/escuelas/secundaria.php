<?php
$datSecundaria['datos'] = "<div>
<h3>Secundaria</h3>
    <ul>
        <li>Nombre: Escuela Secundaria Oficial N° 1021 Amado Nervo</li>
        <li>Dirección: Manzana 004, Villa del Real, 55749 Ojo de Agua, Méx.</li>
        <li>Grado o reconocimiento: Certificado de estudios (SEP)</li>
        <li>Promedio: 8.3</li>
        <li>Periodo: 2015-2018</li>
    </ul>
</div>";

echo "<article id='Secundaria'>";
echo $datSecundaria['datos'];

// Imagen
echo "<div>
    <img src='./imagenes/secundaria.png' 
    alt='nervo'>
</div>";

// Google Maps
echo "<div>
    <iframe 
        src='https://www.google.com/maps/embed?pb=!3m2!1ses!2smx!4v1733649548961!5m2!1ses!2smx!6m8!1m7!1sY2O1DIBT1UztT3ebpJNC8Q!2m2!1d19.69025374533302!2d-98.98559775848369!3f308.3714419750599!4f-5.457393374666225!5f0.7820865974627469' 
        loading='lazy' 
        referrerpolicy='no-referrer-when-downgrade'>
    </iframe>
</div>";

// Video de YouTube
echo "<div>
    <iframe
        src='https://www.youtube.com/embed/ngLzFuJm-7M?si=YtbazdvKulG3Jgo7'
        loading='lazy'
        frameborder='0'
        allowfullscreen>
    </iframe>
</div>";

echo "</article>";
?>
