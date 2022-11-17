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
                    <div class="card" style="width: 18rem;">
                        <img src="https://thumb.pccomponentes.com/w-300-300/articles/1063/10639213/1359-lenovo-ideapad-3-15iau7-intel-core-i5-1235u-16gb-512gb-ssd-156.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Lenovo IdeaPad 3</h5>
                            <p class="card-text">Lenovo IdeaPad 3 15IAU7 Intel Core i5-1235U/16GB/512GB SSD/15.6"</p>
                            
                            <?php
                                if( !$session -> added(1)){

                            ?>
                                <form action="<?= FOLDER ?>/addToCart" method="POST">
                                    <input type="hidden" name="id" value="1">
                                    <input type="submit" value="Añadir al carrito" class="btn btn-primary">
                                </form>
                            <?php 
                                }else{
                            ?>
                                <form action="<?= FOLDER ?>/removeToCart" method="POST">
                                    <input type="hidden" name="id" value="1">
                                    <input type="submit" value="Quitar del carrito" class="btn btn-primary">
                                </form>


                            <?php
                                }
                            ?>
    
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://thumb.pccomponentes.com/w-300-300/articles/17/179806/244-logitech-g502-hero-raton-gaming-16000dpi-caracteristicas.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Logitech G502</h5>
                            <p class="card-text">Lenovo IdeaPad 3 15IAU7 Intel Core i5-1235U/16GB/512GB SSD/15.6"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://thumb.pccomponentes.com/w-300-300/articles/24/243521/image-mini2-19-0403-0294-10-white-ttq-r04-simp.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Google Nest Mini</h5>
                            <p class="card-text">Google Nest Mini Altavoz Inteligente con Asistente Tiza 22,89€</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://thumb.pccomponentes.com/w-300-300/articles/1004/10042294/1601-hyperx-cloud-flight-auriculares-gaming-inalambricos.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">HyperX Cloud Flight</h5>
                            <p class="card-text">HyperX Cloud Flight Auriculares Gaming Inalámbricos69,99€</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://thumb.pccomponentes.com/w-300-300/articles/1002/10026204/1597-aoc-27g2sae-bk-27-wled-fullhd-165hz-freesync-premium.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">AOC 24G2SAE</h5>
                            <p class="card-text">AOC 24G2SAE/BK 23.8" LED FullHD 165Hz FreeSync Premium</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://thumb.pccomponentes.com/w-300-300/articles/28/289561/nacon-ch-550-silla-gaming.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Silla Gaming</h5>
                            <p class="card-text">Nacon CH-550 Silla Gaming 118,99€</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
            
            </div>
        </div>
    </main>

<?

    require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/modules/footer.php");

?>
    
    
</body>
</html>