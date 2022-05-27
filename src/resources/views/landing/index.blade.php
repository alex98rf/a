@extends('landing.layouts.landing')

@section('contenido')

<!DOCTYPE html>

<HTML lang="es">

<HEAD>
<link href="{{ url('css/main.css') }}" rel="stylesheet" type="text/css">
</HEAD>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" >
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>El sitio web perfecto para el amante de los coches </h1>
          <h2 style="text-align: justify">Disfruta de todas las novedades de todo tipo de coches desde deportivos hasta clásicos y siente la adrenalina de la conducción</h2> 
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('assets/landing/assets/img/Audi.png') }}" class="img-fluid" alt=""> 
        </div>
       
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" >

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/landing/assets/img/clients/mercedes-benz-logo-1-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/landing/assets/img/clients/Porsche-Logo.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/landing/assets/img/clients/Mclaren_PNG47.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/landing/assets/img/clients/bmw-logo-1-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/landing/assets/img/clients/dos.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/landing/assets/img/clients/Lamborghini-Logo.png') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>NOSOTROS</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <br>
            <br>
            <p><b>
             Somos una empresa de renting con más de medio siglo de trabajo. Ofrecemos:
            </b></p>
            <ul>
              <li><i class="ri-check-double-line"></i>Lo último en coches del mercado, los mejores y más preciados modelos.</li>
              <li><i class="ri-check-double-line"></i>Marcas como Ferrari, BMW, Lamborghini, Buggati, Mclaren, Honda, Ford... </li>
              <li><i class="ri-check-double-line"></i> Puedes subscribirte con nosotros a nuestra revista donde te haremos llegar todas las novedades del mundo del motor.</li>
              <br>
              <a href="#" class="btn-learn-more">Mira más novedades</a>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <img src="{{ asset('assets/landing/assets/img/NPAZ_8c7dc159f741469f960e1af9ebff8651.jpg') }}" >
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

  

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">

       

           <div class="row content">
          <div class="col-lg-6">
            <img src="{{ asset('assets/landing/assets/img/DKUdhe0XkAEzA3V.jpg') }}" class="img-fluid" alt="dsdfs" >
          </div>
          

          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Los mejores coches clásicos</h3>
            <p class="fst-italic">
           En Car Renting tenemos un gran cariño por éstos modelos y ofrecemos una gran variedad de clásicos como por ejemplo:
           </p>
           <ul>
              <li><i class="ri-check-double-line"></i> Ferrari Testarrosa</li>
              <li><i class="ri-check-double-line"></i> Aston Martin</li>
              <li><i class="ri-check-double-line"></i> Ford Mustang</li>
            </ul>   
          </div>

          
         
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>En Car Renting tenemos una gran cantidad de servicios disponibles para ti.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-dollar-circle"></i></div>
              <h4><a href="">Ofertas y Promociones</a></h4>
              <p style="text-align: justify">Disponemos de ofertas y promociones en el alquiler de coches.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Variedad</a></h4>
              <p style="text-align: justify">Disponemos de una gran variedad de coches, disfruta de todas las novedades del mercado</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-shield"></i></div>
              <h4><a href="">Compromiso de Limpieza Completa</a></h4>
              <p style="text-align: justify">Nos comprometemos en realizar rigurosos procesos de limpieza para proteger su salud.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Comodidad</a></h4>
              <p style="text-align: justify">Haremos los trámites de los papeles del vehículo sencillo y rápido, gracias a nuestros asesores. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  

              
    <div id="alquilaa" class="bg-light py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Alquila tu coche </h1>
                <p class="lead fw-normal text-black-50 mb-0">Y disfruta de las mejores ofertas del mundo</p>
            </div>
        </div>
    </div>
    
    <!-- Section-->
    <section class="py-5">
          <div id="coches" class="container px-4 px-lg-5 mt-5">
              <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="{{ asset('assets/landing/assets/img/ferrari-testarossa-gts-targa-straman-202067661-1590231402_9.jpg') }}" alt=".,jh" />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">FERRARI TESTARROSA</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  1.250 € / Día
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkout">Reservar</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="{{ asset('assets/landing/assets/img/shelby.jpg') }}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">FORD MUSTANG SHELBY GT500</h5>
                                  <!-- Product reviews-->
                                  
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                            
                                  <!-- Product price-->
                                  910 € / Día
                              </div>
                          </div>
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkoutford">Reservar</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="{{ asset('assets/landing/assets/img/126725_3-2.jpg') }}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">LAMBORGHINI CENTENARIO ROADSTER</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  <span class="text-muted text-decoration-line-through">1.300 €</span>
                                  1.100 € / Día
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkoutlamborghini">Reservar</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="{{ asset('assets/landing/assets/img/bugatti_veyron_supersport.jpg') }}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">BUGATTI VEYRON</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  <span class="text-muted text-decoration-line-through">1.800 €</span>
                                  1.500 € / Día
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkoutbuggatti">Reservar</a></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

    
          <div class="container px-4 px-lg-5 mt-5">
              <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top " src="{{ asset('assets/landing/assets/img/audi-r8-spyder-2019-1600-01.jpg') }}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">AUDI R8</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  820 € / Día
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkoutaudi">Reservar</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top"  src="{{ asset('assets/landing/assets/img/the-fast-and-the-furious-toyota-supra-auction-three-quarters.jpg') }}" alt="..." />
                            <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">TOYOTA SUPRA</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  750 € / Día
                              </div>
                          </div>
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkoutsupra">Reservar</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="{{ asset('assets/landing/assets/img/images.jpg') }}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">SUBARU IMPREZA WRC</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  750 € / Día
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkoutsubaru">Reservar</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Disponible</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="{{ asset('assets/landing/assets/img/1366_521.jpg') }}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">McLAREN SENNA</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  1000 € / Día
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/checkoutmclaren">Reservar</a></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> 
               

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contactanos para cualquier duda o sugerencia.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localización</h4>
                <p>Santa Engracia 123,Madrid, 28053</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info_email@carenting.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono:</h4>
                <p>+34 6589 554 885</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.63851845009!2d-3.7030106852368094!3d40.43900256220966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228f670720d71%3A0x43cfff9cf73bf38b!2sCalle%20de%20Sta%20Engracia%2C%20123%2C%2028003%20Madrid!5e0!3m2!1ses!2ses!4v1651602422268!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form"> <!-- para el formulario -->
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Mandar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection