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
        <div class="container-fluid page">
            <h1 class="text-center"> Haz login en la Tienda </h1>
            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="<?= FOLDER ?>/login" method="post">
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
                        <div class="form-group">
                            <input type="submit"  id="login" class="btn btn-primary" value="Entra" >
                        </div>
                    </form>
                    <?php
                        if( isset($error) && !empty($error) ){
                            echo "<div class='alert alert-danger'> $error </div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>


<?php
    
    require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/modules/footer.php");

?>
    
    
</body>
</html>