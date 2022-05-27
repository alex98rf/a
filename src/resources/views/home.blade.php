@extends('layouts.main')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            
            <div class="cochess" style="background-image: url(https://i0.wp.com/hipertextual.com/wp-content/uploads/2017/03/color-degradado-fondos-degradados-multicolor-51200.jpg?fit=1920%2C1200&ssl=1) ; background-repeat: no-repeat;">
                <div class="container pt-3">
                    <br><br>
                        <h2><b> {{ auth()->user()->name }}, te damos la bienvenida. </b></h2>
                    <br><br>
                </div>
            </div>

            <div class="container pt-3">
                <br><br>
                <h3 style="text-align: center"><p><b> Bienvenid@ al portal de Car Renting.</b></p></h3>
                <h3 style="text-align: center"><p> Aquí podrás gestionar tú perfil, conocer información de tus trayectos, así como también descubrir estupendas promociones adaptadas para ti.</p></h3>
                <br><br>
            </div>
            
            <div class="cochess" style="background-image: url(https://img.remediosdigitales.com/9d3ee8/impunidad-turistas-dubai-multa-velocidad-01/1366_2000.jpg) ; background-repeat: no-repeat;">
                <div class="container pt-3">
                    <br><br>
                        <h3 style="text-align: center"><b><u> Te ofrecemos coches 100% seguros </u></b></h3>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    <div class="container">
                        <h3>Descubre estupendas <b>promociones</b>!</h3>
                    </div>
                </p>
            </div>

            <!-- ======= Promociones Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">
        
                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-dollar-circle"></i></div>
                        <h4><a href="">Alquiler 2 Vehículos</a></h4>
                        <p style="text-align: justify">Necesitas un vehículo más y pagar menos, no te preocupes esta promoción es para ti. </p>
                    </div>
                    </div>
        
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a href="">Alquiler 3 días</a></h4>
                        <p style="text-align: justify">Disfruta de nuestros vehículos durante más tiempo pagando menos. </p>
                    </div>
                    </div>
        
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-shield"></i></div>
                        <h4><a href="">Viaja por horas</a></h4>
                        <p style="text-align: justify">Si lo tuyo es un viaje rápido aprovecha esta promoción y ponte en contacto con nosotros.</p>
                    </div>
                    </div>
        
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Vehículo en casa</a></h4>
                        <p style="text-align: justify">No puedes acercarte a nuestras oficinas, nosotros te llevamos el coche a tu casa. </p>
                    </div>
                    </div>
        
                </div>
        
                </div>
            </section><!-- End Services Section -->

        </section>
    </div>
</main>
@endsection
