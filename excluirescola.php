<!DOCTYPE html>
<html>

<head>


<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIMULANDO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body>
    <?php
    $codigo = $_GET['id'];
    if ($codigo > 0) {
        echo "escola" . $codigo . ".";
        echo '<script>OpcaoMensagem(1);</script>';
         echo '<meta HTTP-EQUIV="Refresh" CONTENT="3; URL=listescola.php">';
        
}else {
        echo '<script>OpcaoMensagem(2);</script>';
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="3; URL=listescola.php">';
    }
   
    ?>
    </div>
</body>

</html>