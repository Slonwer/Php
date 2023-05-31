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
                <form action="listusuario.php" method="POST">
                    <div class="row">
                        <div class="col-sm-12 py-4">
                            <h2 class="text-center bg-secondary mb-6 text-light">CADASTRAR USUARIO:</h2>
                        </div>


                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe seu nome completo:</h6>
                            <input type="text" name="nome" class="form-control" placeholder="Informe Seu Nome Completo" required>
                        </div>
                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe E-mail:</h6>
                            <input type="email" name="email" class="form-control" placeholder="Informe Seu E-mail" required>
                        </div>
                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe seu CPF:</h6>
                            <input type="text" name="cpf" class="form-control" placeholder="Informe Seu CPF" required>
                        </div>
                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe o seu celular:</h6>
                            <input type="tel" name="celular" class="form-control" placeholder="Informe Seu Celular" required>
                        </div>
                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe o seu telefone fixo:</h6>
                            <input type="text" name="tel_fixo" class="form-control" placeholder="Informe Seu Telefone-Fixo" required>
                        </div>
                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe o sexo:</h6>
                            <select name="sexo" class="form-control" required>
                                <option value=""> Selecione o sexo...</option>
                                <option value="masculino"> Masculino</option>
                                <option value="feminino"> Feminino</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe o usuario:</h6>
                            <select name="tipo" class="form-control" required>
                                <option value=""> Selecione o usuario...</option>
                                <option value="administrador"> Administrador</option>
                                <option value="professor">Professor</option>
                                <option value="aluno"> Aluno</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6  mb-4">
                            <h6 style="text-align: left;">Informe a data de nascimento:</h6>
                            <input type="date" name="data_nasc" class="form-control">
                        </div>
                        <div class="form-group col-sm-12 mb-4">
                            <input type="button" name="contato" class="btn btn-primary pull-right bg-secondary" value="Contato" onclick="window.location.href='contato.php'">
                            <input type="button" name="listar" class="btn btn-primary pull-right bg-secondary" value="Listar Dados" onclick="window.location.href='listusuario.php'">
                            <input type="reset" name="reset" class="btn btn-primary pull-right bg-secondary" value="Limpar">
                            <input type="submit" name="submit" class="btn btn-primary pull-right bg-secondary" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>






    <?php include_once('footer.php'); ?>



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