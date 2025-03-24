<?php
// Leer el archivo CSV
$data = [];
if (($handle = fopen("medals.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $data[] = $row;
    }
    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Medal Table</title>
</head>
<body>
    <!-- Encabezado con portada -->
    <header class="header">
        <div class="top-menu">
            <div class="menu-left">
                <button>Menu</button>
                <button>Sign Up</button>
                <button>Results</button>
                <button>Medal Table</button>
                <button>Watch Highlights</button>
            </div>
            <div class="menu-right">
                <button>Shop</button>
                <button>English</button>
            </div>
        </div>
        <div class="title-container">
    <img src="paris.png" alt="Paris 2024 Logo" class="paris-logo">
    <h1>Medal Table</h1>
</div>

    </header>

    <!-- Botones negros bajo el título -->
    <main>
        <div class="buttons-below-title">
            <button class="black-button">Medal Table</button>
            <button class="black-button">Medallists</button>
        </div>

        <!-- Tabla de medallas -->
          <!-- Nueva sección con 4 cuadros -->
        <div class="icon-section">
            <div class="icon-box"><span>❤️</span></div>
            <div class="icon-box"><span>➕</span></div>
            <div class="icon-box"><span>🔄</span></div>
            <div class="icon-box"><span>⚙️</span></div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                <tr>
        <th>Order</th>
        <th>NOC</th>
        <th><span class="circle gold">G</span></th>
        <th><span class="circle silver">S</span></th>
        <th><span class="circle bronze">B</span></th>
        <th>Total</th>
    </tr>
                </thead>
                <tbody>
    <?php foreach (array_slice($data, 1) as $key => $row): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td>
                <img src="<?php echo strtolower(str_replace(' ', '_', $row[0])); ?>.png" alt="<?php echo $row[0]; ?> Flag" class="flag-icon">
                <?php echo $row[0]; ?>
            </td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>

            </table>
        </div>
        <thead>

</thead>

       
    </main>
</body>
</html>
