<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Catálogo de productos">
    <title>Productos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/tienda.css">
    <link rel="stylesheet" href="css/carta.css">
    <link rel="stylesheet" href="css/icons-social.css">
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
</head>
<body>

<header class="header">
        <div class="container">
            <div class="logo">
                <h1>Online Store</h1>
            </div>
            <div class="boton">
                <label for="btn-menu">Menu</label>
            </div>
            <input type="checkbox" name="" id="btn-menu">
            <nav class="menu">
                <a href="index.html" class="inicio">Inicio</a>
                <a href="productos.php" class="modelos">Productos</a>
                <a href="crud.php" class="modelos">CRUD</a>
            </nav>
        </div>
    </header>
    <div class="separador"></div>

    <div class="caja-cartas">
<?php
include 'config.php';

    $sql = "SELECT * FROM productos";
    $resultado = $conn->query($sql);

    while($row = $resultado->fetch_assoc()){

        echo '<section class="products">
		<div class="all-products">
			<div class="product">
            <img src="data:image/jpeg;base64,' . base64_encode($row['Imagen']) . '" alt="producto-img">
				<div class="product-info">
					<h4 class="product-title">' . $row['nombre'] . '</h4>
					<p class="product-price">$' . $row['precio'] . '</p>';
                    // Aquí tienes el enlace "Ver más" concatenado
    echo '<a class="product-btn" href="producto.php?id=' . $row['id'] . '">Ver más</a>';  

		echo '</div>
			</div>
		</div>
	</section>';
    }

?>
</div>
<script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
</body>
<!-- <footer>
    <div class="footer-container">
        <p>© 2023 Mi Empresa</p>
        <ul>
            
            <li><a href="#">Política de privacidad</a></li>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </div>
</footer> -->
</html>


