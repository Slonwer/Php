<?php
    if (isset($_GET['evento'])) {
       
        $nome = $_GET['nome'];
        $horario_inicial = $_GET['horario_inicial'];
        $data_inicio= $_GET['data_inicio'];
        $data_fim = $_GET['data_fim'];
        $data_nasc = $_GET['data_nasc'];
        $hora_inicial = $_GET['hora_inicial'];
        $hora_fim = $_GET['hora_fim'];
    }
?>



<!DOCTYPE html>
<html lang="en">

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


<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">SIMULANDO</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                       
                        
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
    <div class="container">
        <form action="listevento.php
        " method="POST">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center bg-secondary mb-3 text-light">ALTERAÇÃO DE EVENTO:</h2>
                </div>

                <div class="row">    
                <div class="form-group col-sm-12 mb-3">
                <h6 style="text-align: left;">Informe o nome do evento:</h6>
                    <input type="text" name="nome" class="form-control" placeholder="Informe o Nome do Evento" required>
                </div>
            </div>
           
            <div class="row">
                <div class="form-group col-sm-6  mb-3">
                <h6 style="text-align: left;">Horario Inicio:</h6>
                    <input type="time" name="horario_inicial" class="form-control" placeholder="  Horario de Inicio" required>
                </div>
                <div class="form-group col-sm-6  mb-3">
                <h6 style="text-align: left;">Data Inicio:</h6>
                   <input type="date" name="data_inicio" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6  mb-3">
                <h6 style="text-align: left;">Horario de Termino:</h6>
                    <input type="time" name="horario_fim" class="form-control" placeholder="  Horario de Termino " required>
</div>
                    <div class="form-group col-sm-6  mb-3">
                    <h6 style="text-align: left;">Data do Termino:</h6>
                   <input type="date" name="data_fim" class="form-control">
                </div>
                <div class="form-group col-sm-12  mb-3">
                <h6 style="text-align: left;">Selecione o Semestre:</h6>
                    <select name="modulo" class="form-control" required>
                        <option value=""> Selecione...</option>
                        <option value="primeiro"> Primeiro Semestre</option>
                        <option value="segundo"> Segundo Semestre</option>
                        <option value="terceiro"> Terceiro Semestre</option>
                    </select>
                </div>          
            </div>




               
                <div class="form-group col-sm-12 mb-3">
                    <input type="button" name="contato" class="btn btn-primary pull-right bg-secondary" value="Contato" onclick="window.location.href='contato.php'">
                    <input type="button" name="listar" class="btn btn-primary pull-right bg-secondary" value="Listar Dados" onclick="window.location.href='listevento.php'">
                    <input type="reset" name="reset" class="btn btn-primary pull-right bg-secondary" value="Limpar">
                    <input type="submit" name="submit" class="btn btn-primary pull-right bg-secondary" value="Enviar">
                </div>
            </div>
        </form>
    </div>
            </div>
</header>
    <?php include_once('footer.php');?>
   

    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
