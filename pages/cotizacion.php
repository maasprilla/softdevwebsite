<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>SoftDev Corporation</title>
  <link rel="stylesheet" href="../static/css/bootstrap.min.css">
  <link rel="stylesheet" href="../static/css/mdb.min.css">
  <link rel="stylesheet" href="../static/css/cotizacion.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="../static/images/favicon/softdevfavicon2.ico">
</head>
<body id="Body">
  <header>

    

    <div class="navbar navbar-dark navbar-fixed-top scrolling-navbar MainMenu">

      <!-- <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
        <i class="fa fa-bars"></i></button> -->

      <div class="container">
        <div class="navbar-header">
          <div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapseEx" style="border-color:none">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
        </div>
        
                <div class="collapse navbar-collapse" id="collapseEx">

                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link MainMenu-link" href="../index.html">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link MainMenu-link" href="servicios.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link MainMenu-link" href="portafolio.html">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link MainMenu-link" href="cotizacion.php">Cotización</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link MainMenu-link" href="nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link MainMenu-link" href="contacto.php">Contáctenos</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link Icon-link" href="https://www.facebook.com/softdevcolombia" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link Icon-link" href="https://twitter.com/softdevcolombia" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link Icon-link" href="https://plus.google.com/u/0/103866878122635071238" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link Icon-link" href="https://www.linkedin.com/in/softdevcolombia" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>

                </div>

            </div>
    </div>

        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container Coti-container">
                    <div class="row CotiContent-container" id="home">

                        <div class="col-lg-8 col-md-8 FormCoti-container">

                            <div class="card wow fadeInLeft">
                              <form class="Coti-form" action="mailcotizacion.php" method="POST" enctype="multipart/form-data">
                                <div class="card-block Coti-content">

                                    <div class="text-center text-xs-center">
                                        <h3><i class="fa fa-usd"></i> Cotización:</h3>
                                        <hr>
                                    </div>

                                    <div class="md-form Input-majorContainer">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                        <label for="name">Nombre</label>
                                    </div>
                                    <div class="md-form Input-majorContainer">
                                        <i class="fa fa-phone prefix"></i>
                                        <input type="text" id="phone" name="phone" class="form-control" required>
                                        <label for="phone">Teléfono</label>
                                    </div>
                                    <div class="md-form Input-majorContainer">
                                        <i class="fa fa fa-at prefix"></i>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="md-form Input-majorContainer">
                                        <i class="fa fa-home prefix"></i>
                                        <input type="text" id="address" name="address" class="form-control" required>
                                        <label for="address">Dirección</label>
                                    </div>
                                    <div class="md-form Input-majorContainer">
                                        <i class="fa fa-map-marker prefix"></i>
                                        <input type="text" id="city" name="city" class="form-control" required>
                                        <label for="city">Ciudad</label>
                                    </div>

                                    <div class="md-form form-group SelectInput-majorContainer Input-majorContainer">
                                      <i class="fa fa-briefcase prefix"></i>
                                      <label for="service">Elija el servicio</label>
                                      <select class="mdb-select form-control Select-input" type="text" name="service" id="service" required>
                                        <option value="" disabled selected></option>
                                        <option value="1">Desarrollo de Software</option>
                                        <option value="2">Diseño página Web</option>
                                        <option value="3">Mantenimiento equipos de computo</option>
                                        <option value="3">Redes</option>
                                      </select>
                                    </div>


                                    <div class="md-form">
                                        <i class="fa fa-pencil prefix"></i>
                                        <textarea type="text" id="comments" name="comments" class="md-textarea" cols="30" rows="10" required></textarea>
                                        <label for="comments">Descripción</label>
                                    </div>

                                    <div class="text-center text-xs-center FormButton-container">
                                      <input type="submit" class="Form-button" value="Enviar"></input>
                                    </div>

                                </div>
                              </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 CotiInfo-container">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInRight">Solicita tu Cotización </h2>
                                <hr class="hr-light wow fadeInRight">
                                <p class="wow fadeInRight" data-wow-delay="0.4s">Completa el formulario e indicanos detalladamente tus requerimientos; nos comunicaremos en la mayor brevedad posible contigo.</p>
                                <br>
                                <div class="Social-netContainer wow fadeInRight">
                                  <ul class="Social-list wow fadeInRight">
                                    <li class="Social-item"><a href="https://www.facebook.com/softdevcolombia" target="_blank" class="Social-link Soc-f"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="Social-item"><a href="https://twitter.com/softdevcolombia" target="_blank" class="Social-link Soc-t"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="Social-item"><a href="https://plus.google.com/u/0/103866878122635071238" target="_blank" class="Social-link Soc-g"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="Social-item"><a href="https://www.linkedin.com/in/softdevcolombia" target="_blank" class="Social-link Soc-l"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                  </ul>
                                </div>
                                <div class="ContactUs-info wow fadeInRight">
                                  <p><i class="fa fa-envelope" aria-hidden="true"></i> softdevcorporation@gmail.com</p>
                                  <p><i class="fa fa-phone" aria-hidden="true"></i> 315 429 2549 / 311 622 3445 / 317 235 2111</p>
                                  <p><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 70 # 26 - 38</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      
  </header>

  <script src="../static/js/jquery-3.1.1.min.js"></script>
  <script src="../static/js/bootstrap.min.js"></script>
  <script src="../static/js/mdb.min.js"></script>

  <script>

    new WOW().init();

    $(document).ready(function() {
      $("#service").click(function(){
        $(".SelectInput-majorContainer>label").addClass("active");
      });
    });

  </script>
</body>
</html>