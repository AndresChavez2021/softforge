@extends('app')

@section('content')

<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Subscriptions</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Basic Plan -->
        <div class="col-md-4 mb-4">
            <div class="card plan-card">
                <div class="card-body text-center">
                    <h5 class="card-title">BASIC</h5>
                    <h6 class="card-price">$99.9<span class="period">/ month</span></h6>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>- Usuarios: Hasta 10 usuarios</li>
                        <li>- Acceso a funcionalidades básicas del software.</li>
                        <li>- Almacenamiento: 20 GB</li>
                        <li>- Soporte por correo electrónico durante horario laboral.</li>
                        <li>- Respuesta dentro de 48 horas.</li>
                        <br>
                        <br>
                        <br>
                        <br>
                    </ul>
                    <a href="#" class="btn btn-lg btn-block btn-primary">BUY</a>
                </div>
            </div>
        </div>
        <!-- Standard Plan -->
        <div class="col-md-4 mb-4">
            <div class="card plan-card">
                <div class="card-body text-center">
                    <h5 class="card-title">STANDARD</h5>
                    <h6 class="card-price">$259<span class="period">/ month</span></h6>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>- Usuarios: Hasta 50 usuarios</li>
                        <li>- Acceso a funcionalidades avanzadas del software.</li>
                        <li>- Almacenamiento: 100 GB</li>
                        <li>- Soporte por correo electrónico y chat en vivo durante horario laboral.</li>
                        <li>- Respuesta dentro de 24 horas.</li>
                        <li>- Descuentos en servicios de consultoría.</li>
                        <br>
                    </ul>
                    <a href="#" class="btn btn-lg btn-block btn-primary">BUY</a>
                </div>
            </div>
        </div>
        <!-- Premium Plan -->
        <div class="col-md-4 mb-4">
            <div class="card plan-card">
                <div class="card-body text-center">
                    <h5 class="card-title">PREMIUM</h5>
                    <h6 class="card-price">$599<span class="period">/ month</span></h6>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>- Usuarios: ilimitado</li>
                        <li>- Acceso a todas las funcionalidades del software.</li>
                        <li>- Almacenamiento: 500 GB</li>
                        <li>- Soporte 24/7 por correo electrónico, chat en vivo y teléfono.</li>
                        <li>- Respuesta dentro de 4 horas.</li>
                        <li>- Formación personalizada y talleres en vivo.</li>
                        <li>- Prioridad en el desarrollo de nuevas funcionalidades solicitadas.</li>
                    </ul>
                    <a href="#" class="btn btn-lg btn-block btn-primary">BUY</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
