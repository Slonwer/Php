<?php
if (isset($_POST['modulo'])) {

    $modulo = $_POST['modulo'];
    $serie = $_POST['serie'];
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
    </div>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">


            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center bg-secondary mt-1 text-light">LISTA DE MÓDULO/SERIE:</h2>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary pull-center mt-1 bg-secondary" onclick="window.location.href= 'index.php'">Voltar</button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary pull-center mt-1 bg-secondary" onclick="window.location.href= 'cadmodulo.php'">Cadastrar</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mt-1" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Código</th>

                                    <th>Módulo</th>
                                    <th>Série</th>
                                    <th>Ações</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php if (isset($modulo)) { ?>

                                        <td><?php echo $codigo = 100 ?></td>
                                        <td><?php echo $modulo ?></td>
                                        <td><?php echo $serie ?></td>
                                        <td>
                                            <?php
                                            echo "<a href='editmodulo.php?id=" . $codigo . "&modulo=" . $modulo . "&serie=" . $serie . "' title='Editar'><i class='fa fa-pencil-square fa-2x text-secondary'></i></a>";
                                            ?>


                                            <?php
                                            $id = 100;
                                            echo "<a href='' onclick='confirmacaoExclusao($id)' title='clique para excluir.'><i class='fa fa-trash fa-2x text-secondary'></i></a>";
                                            ?>
                                        </td>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </header>

            <?php include_once('footer.php') ?>





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