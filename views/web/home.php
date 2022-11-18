<?php
    $products = [
        [
            "id" => 1,
            "title" => "Lenovo IdeaPad 3",
            "description" => "Lenovo IdeaPad 3 15IAU7 Intel Core i5-1235U/16GB/512GB SSD/15.6''",
            "img" => "https://thumb.pccomponentes.com/w-300-300/articles/1063/10639213/1359-lenovo-ideapad-3-15iau7-intel-core-i5-1235u-16gb-512gb-ssd-156.jpg"
        ],
        [
            "id" => 2,
            "title" => "Logitech G502",
            "description" => "Logitech G502 Hero Ratón Gaming 25600DPI",
            "img" => "https://thumb.pccomponentes.com/w-300-300/articles/17/179806/244-logitech-g502-hero-raton-gaming-16000dpi-caracteristicas.jpg"
        ],
        [
            "id" => 3,
            "title" => "Google Nest Mini",
            "description" => "Google Nest Mini Altavoz Inteligente con Asistente Tiza 22,89€",
            "img" => "https://thumb.pccomponentes.com/w-300-300/articles/24/243521/image-mini2-19-0403-0294-10-white-ttq-r04-simp.jpg"
        ],
        [
            "id" => 4,
            "title" => "HyperX Cloud Flight",
            "description" => "HyperX Cloud Flight Auriculares Gaming Inalámbricos69,99€",
            "img" => "https://thumb.pccomponentes.com/w-300-300/articles/1004/10042294/1601-hyperx-cloud-flight-auriculares-gaming-inalambricos.jpg"
        ],
        [
            "id" => 5,
            "title" => "AOC 24G2SAE",
            "description" => "AOC 24G2SAE/BK 23.8'' LED FullHD 165Hz FreeSync Premium",
            "img" => "https://thumb.pccomponentes.com/w-300-300/articles/1002/10026204/1597-aoc-27g2sae-bk-27-wled-fullhd-165hz-freesync-premium.jpg"
        ],
        [
            "id" => 6,
            "title" => "Silla Gaming",
            "description" => "AOC 24G2SAE/BK 23.8'' LED FullHD 165Hz FreeSync Premium",
            "img" => "Nacon CH-550 Silla Gaming 118,99€"
        ]
        
    ];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="<?= FOLDER ?>/assets/css/style.css" rel="stylesheet"  >

</head>
<body>
    
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/modules/navigator.php");
?>
    <main>
        <div class="container">
            <div class="row">
                <?php
                    foreach ($products as $product) {
                ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $product['img'] ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['title'] ?></h5>
                            <p class="card-text"><?= $product['description'] ?></p>
                            
                            <?php
                                if( !$session -> added($product['id'])){
                            ?>
                                <form action="<?= FOLDER ?>/addToCart" method="POST">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <input type="submit" value="Añadir al carrito" class="btn btn-primary">
                                </form>
                            <?php 
                                }else{
                            ?>
                                <form action="<?= FOLDER ?>/removeToCart" method="POST">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <input type="submit" value="Quitar del carrito" class="btn btn-primary">
                                </form>
                            <?php
                                }
                            ?>
    
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </main>

<?

    require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/modules/footer.php");

?>
    
    
</body>
</html>