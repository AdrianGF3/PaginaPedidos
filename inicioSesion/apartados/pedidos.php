<?php
    $productos = include '../php/productos.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>pedidos</title>
</head>
<body class="pedidosIMG">
    <header>

    </header>
    <main class="pedidosMain"> 

        <div id="titulo">
            <b><p>Nuestras Pizzas VIP</p></b>               
        </div> 

        <section class="contenedor">
            <from method="POST" class="posst">
                <?php
                    foreach ($productos as $producto) {
                        
                        echo '<div class="pizza">';

                            echo '<img class="imagenPIZZA" src="../img/' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '">';
                                
                            echo '<div class="ingredientes">';

                                echo "<h1 class=titulo>" . $producto['nombre'] . "</h1>";

                                echo '<ul>';
                                    echo "<li>" . $producto['ingrediente1'] . "<br>"; 
                                    echo "<li>" . $producto['ingrediente2'] . "<br>";
                                    echo "<li>" . $producto['ingrediente3'] . "<br>";
                                    echo "<li>" . $producto['ingrediente4'] . "<br>";
                                    echo "<li>" . $producto['ingrediente5'] . "<br>";
                                    echo "<li>" . $producto['ingrediente6'] . "<br>";
                                    echo "<li>" . $producto['ingrediente7'] . "<br>";                            
                                echo '</ul>';

                                echo '<div id="pedido">';
                                    echo '<b><p>Pedido:</p></b>';
                                    echo '<label for=""><input type="number" placeholder="0" id="cantidad"></label>';
                                echo '</div>';

                            echo '</div>';

                        echo '</div>';
                    }
                ?>
            </from>
        </section>
        
        <form action="../php/pedido.php" method="post">
        
            <div class="salir">
                <a class="salida">Confirmar Pedido</a>
            </div>

        </from>
                   
    </main>
    <footer>
        
    </footer>
</body>
</html>