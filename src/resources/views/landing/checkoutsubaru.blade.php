<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Checkout | Car Renting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/landing/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!--====== Logo Icon ======-->

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/slick.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/LineIcons.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/materialdesignicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/jquery-ui.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/nice-select.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/default.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/style.css') }}">

</head>

<body>

    <HEAD>
        <link href="{{ asset('css/main2.css') }}" rel="stylesheet" type="text/css">
    </HEAD>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" >
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>SUBARU IMPREZA WRC </h1>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/landing/assets/img/subaru.png') }}" class="img-fluid" alt=""> 
            </div>
        
        </div>

    </section><!-- End Hero -->

    <br><br>
    <div class="container" data-aos="fade-left" data-aos-delay="100">
                
    <p class="fst-italic" style="text-align: justify">
        El Subaru Impreza WRC es un vehículo de rally basado en el Subaru Impreza con homologación World Rally Car. Fue usado principalmente por el equipo oficial de Subaru en el mundial y por equipos privados tanto en el mundial como en otras competiciones. Hizo su debut en 1997 y participó en el Campeonato Mundial de Rally hasta 2008.
        Fue construido por la empresa inglesa Prodrive, para el equipo Subaru World Rally Team que compitió en el Mundial desde 1993 hasta 2008. La marca japonesa ya había usado el Subaru Impreza pero como Grupo A. Este vehículo que ha tenido 12 evoluciones, ha conseguido 35 victorias y tres títulos: dos de pilotos (Burns 2001, Solberg 2003) y uno de constructores (1997).
    </p>  
    </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">CAR RENTING</a></h1>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Inicio</a></li>
          <li><a class="nav-link scrollto" href="/#about">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="/#services">Servicios</a></li>
          <li class="dropdown"><a href="#"><span>Vehículos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#alquilaa">FERRARI TESTARROSA</a></li>
              <li><a href="/checkoutsupra">FORD MUSTANG SHELBY GT500</a></li>
              <li><a href="/#alquilaa">LAMBORGHINI CENTENARIO ROADSTER</a></li>
              <li><a href="/#alquilaa">BUGATTI VEYRON</a></li>
              <li><a href="/#alquilaa">AUDI R8</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/#contact">Contacto</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
  

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('customer.store') }}" method="POST">
        @csrf    
        <section class="checkout-wrapper pt-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="checkout-steps-form-style-1 mt-50">
                            <ul id="checkout-steps">
                                <li data-vjstepno="1">
                                    <h6 class="title">Detalles personales </h6>
                                    <section class="checkout-steps-form-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label for="txtNombre">Nombre de Usuario</label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-input form">
                                                            <input type="text" class="form-control" id="txtNombre" placeholder="Nombre" name="txtNombre">
                                                        </div>
                                                        <div class="col-md-6 form-input form">
                                                            <input type="text" class="form-control" id="txtApellidos" placeholder="Apellidos" name="txtApellidos">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label for="txtEmail">Email</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtEmail" placeholder="Email" name="txtEmail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label for="txtNumero">Número de Teléfono</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtNumero" placeholder="Teléfono" name="txtNumero">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label for="txtDireccion">Dirección del envío</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtDireccion" placeholder="Direccion" name="txtDireccion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label for="txtCiudad">Ciudad</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtCiudad" placeholder="Direccion" name="txtCiudad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label for="txtCodigoPostal">Código Postal</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtCodigoPostal" placeholder="Direccion" name="txtCodigoPostal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label for="txtPais">Pais</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtPais" placeholder="Direccion" name="txtPais">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label for="txtMunicipio">Municipio</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtMunicipio" placeholder="Direccion" name="txtMunicipio">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <br><br><br><br><br>
                                            
                                            <h6 class="title">Método de Pago</h6>
                                            <div class="checkout-payment-form">
                                                <div class="single-form form-default">
                                                    <label for="txtTitularT">Titular de la Tarjeta</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtTitularT" placeholder="Titular" name="txtTitularT">
                                                    </div>
                                                </div>
                                                <div class="single-form form-default">
                                                    <label for="txtNumeroT">Número de la Tarjeta</label>
                                                    <div class="form-input form">
                                                        <input type="text" class="form-control" id="txtNumeroT" placeholder="0000 0000 0000 0000" name="txtNumeroT">
                                                        <img src="{{ asset('assets/landing/assets/img/card.png') }}" alt="card">
                                                    </div>
                                                </div>
                                                <div class="payment-card-info">
                                                    <div class="single-form form-default">
                                                        <label for="txtFechaExpiracion">Fecha Expiración</label>
                                                        <div class="expiration d-flex">
                                                            <div class="form-input form">
                                                                <input type="text" class="form-control" id="txtMesExpiracionT" placeholder="MM" name="txtMesExpiracionT">
                                                            </div>
                                                            <div class="form-input form">
                                                                <input type="text" class="form-control" id="txtAnhoExpiracionT" placeholder="AAAA" name="txtAnhoExpiracionT">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-form form-default">
                                                        <label for="txtCvvT">CVC/CVV </label>
                                                        <div class="form-input form">
                                                            <input type="text" class="form-control" id="txtCvvT" placeholder="***" name="txtCvvT">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-form">
                                                        <button type="submit" class="main-btn primary-btn">Pagar Ahora</button>
                                                        
                                                    </div>
                
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </section>
                                </li>
 
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-sidebar pt-20">
                            <div class="checkout-sidebar-coupon mt-30">
                                <p>Introducir Cupón de Descuento</p>
                                <form action="#">
                                    <div class="single-form form-default">
                                        <div class="form-input form">
                                            <input type="text" placeholder="Código de Descuento">
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="checkout-sidebar-price-table mt-30">
                                <h5 class="title">Resumen de Compra</h5>
                                <div class="sub-total-price">
                                    <div class="total-price">
                                        <p class="value">Productos:</p>
                                        <p class="price">750 €</p>
                                    </div>
                                    <div class="total-price shipping">
                                        <p class="value">Fianza y Seguro:</p>
                                        <p class="price">500 €</p>
                                    </div>
                                    <div class="total-price discount">
                                        <p class="value">Descuento:</p>
                                        <p class="price">0 €</p>
                                    </div>
                                </div>
                                <div class="total-payable">
                                    <div class="payable-price">
                                        <p class="value">Importe Total:</p>
                                        <p class="price">1250 €</p>
                                    </div>
                                </div>
                                <div class="checkout-sidebar-accordion mt-50">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <a href="javascript:void(0)" data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">Seleccionar producto</a>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="checkout-table table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="checkout-product">
                                                                        <div class="product-cart d-flex">
                                                                            <div class="product-thumb">
                                                                                <img src="{{ asset('assets/landing/assets/img/images.jpg') }}"
                                                                                    alt="Product">
                                                                            </div>
                                                                            <div class="product-content media-body">
                                                                                <h5 class="title"><a href="#alquilaa">SUBARU IMPREZA WRC</a></h5>
                                                                                <ul>
                                                                                    <li><span>Eco</span></li>
                                                                                    <li><span>Gr</span></li>
                                                                                
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="checkout-price">
                                                                        <p class="price">750€</p>
                                                                    </td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="pricing-table">
                                                        <div class="sub-total-price">
                                                            <div class="total-price">
                                                                <p class="value">Total:</p>
                                                                <p class="price">1250€</p>
                                                            </div>
                                    
                                                            <div class="total-price discount">
                                                                <p class="value">Promociones:</p>
                                                                <p class="price">0.00€</p>
                                                            </div>
                                                        </div>
                                                        <div class="total-payable">
                                                            <div class="payable-price">
                                                                <p class="value">Resumen:</p>
                                                                <p class="price">1.250€</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </form>


    
 <!-- ======= Footer ======= -->
 <footer id="footer">


    <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Car Renting</h3>
              <p>
                Santa Engracia 123<br>
                Madrid, 28053<br>
                España <br><br>
                <strong>Phone:</strong> +34 6589 554 885<br>
                <strong>Email:</strong> info_email@carenting.com<br>
              </p>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Información Legal</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Nosotros</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Condiciones del servicio</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Política de Privacidad</a></li>
              </ul>
            </div>
  
  
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Política de Privacidad</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      A través de este sitio web no se recaban datos de carácter personal de los usuarios sin su conocimiento, ni se ceden a terceros.<br/>
  
                      En este sentido, el Titular garantiza el cumplimiento de la normativa vigente en materia de protección de datos personales, reflejada en la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y de Garantía de Derechos Digitales (LOPD GDD). Cumple también con el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protección de las personas físicas (RGPD).<br/><br/>
  
                      El uso de sitio Web implica la aceptación de esta Política de Privacidad así como las condiciones incluidas en el Aviso Legal.<br/><br/>
  
                      Según la directiva de la UE, las Cookies que requieren el consentimiento informado por parte del usuario son las Cookies de analítica y las de publicidad y afiliación, quedando exceptuadas las de carácter técnico y las necesarias para el funcionamiento del sitio Web o la prestación de servicios expresamente solicitados por el usuario.
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
              </div>
              </div>
            </div>
  
  
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Servicios</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Redes sociales</h4>
              <p>Siguenos en nuestras redes sociales.</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>Car Renting</span></strong>.
        </div>
        <div class="credits"> All Rights Reserved </div>
      </div>
    </footer><!-- End Footer -->
  
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/landing/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/landing/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/landing/assets/js/main.js') }}"></script>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/checkout/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/checkout/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <script src="{{ asset('assets/checkout/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery-vj-accordion-steps.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery.form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery.formatter.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/main.js') }}"></script>


</body>

</html>