
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EmprendeTEC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->

    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <?php include 'header.php' ?>
    <!--/ Nav End /-->

    <!--/ Intro Single star /-->

    <!--/ Intro Single End /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Donaciones generales</h1>
                        <big><big>
                       Participa para apoyar los proyectos mas populares.
                       <br> Es anonimo !
                    </big></big>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                               
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Contact Star /-->
   

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <big>
                       Mensualmente los proyectos mas populares serán apoyados por el fondo anonimo, Apoya para cumplir la meta 
                    </big>
            <div class="col-sm-4">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="progress" style="height:50px">
                   
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><h1>75%</h1></div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-t4">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <form class="form-a" action="donarend.php" method="post" role="form">
                                <div id="sendmessage"> Tu mensaje fue enviado correctamente!</div>
                                <div id="errormessage"></div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="hidden" id="custId" name="custId" value="">
                                            <input type="number" name="inversion" class="form-control form-control-lg form-control-a" placeholder="Cantidad a invertir" data-rule="minlen:1" data-msg="Compañia de contacto">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-b">Apoya los proyectos</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--/ Contact End /-->

    <!--/ footer Star /-->
    <?php include 'footer.php' ?>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>