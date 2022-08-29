<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Our Café - Landing Page</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/img/icon1.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <style>
            .img-fluid {
                height: 620px; 
                width: 620px; 
                object-fit: cover;
            }
            .bg-gradient-primary {
                background-image: linear-gradient(195deg, #c8846b 0%, #c88d6b 100%); 
            }
    
            .btn-primary {
                color: #FFF;
                background-color: #c88d6b;
                border-color: #c88d6b; }
                .btn-primary:hover {
                    color: #FFF;
                    background-color: #8a3d27;
                    border-color: #94432d; }
                .btn-check:focus + .btn-primary, .btn-primary:focus {
                    color: #FFF;
                    background-color: #8a3d27;
                    border-color: #94432d;
                    box-shadow: 0 0 0 0.2rem rgb(148, 67, 45, 0.50); }
                .btn-check:checked + .btn-primary,
                .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active,
                .show > .btn-primary.dropdown-toggle {
                    color: #FFF;
                    background-color: #8a3d27;
                    border-color: #94432d; }
                    .btn-check:checked + .btn-primary:focus,
                    .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus,
                    .show > .btn-primary.dropdown-toggle:focus {
                    box-shadow: 0 0 0 0.2rem rgb(148, 67, 45, 0.5); }
                .btn-primary:disabled, .btn-primary.disabled {
                    color: #FFF;
                    background-color: hsl(22, 46%, 60%);
                    border-color: #c88d6b; }
    
            .btn-primary,
            .btn.bg-gradient-primary {
            box-shadow: 0 3px 3px 0 rgb(133, 96, 63, 0.15), 0 3px 1px -2px rgb(133, 96, 63, 0.2), 0 1px 5px 0 rgb(133, 96, 63, 0.15); }
            .btn-primary:hover,
            .btn.bg-gradient-primary:hover {
                background-color: #c88d6b;
                border-color: #c88d6b;
                box-shadow: 0 14px 26px -12px rgb(133, 96, 63, 0.4), 0 4px 23px 0 rgb(133, 96, 63, 0.15), 0 8px 10px -5px rgb(133, 96, 63, 0.2); }
            .btn-primary .btn.bg-outline-primary,
            .btn.bg-gradient-primary .btn.bg-outline-primary {
                border: 1px solid #c88d6b; }
            .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active,
            .show > .btn-primary.dropdown-toggle,
            .btn.bg-gradient-primary:not(:disabled):not(.disabled).active,
            .btn.bg-gradient-primary:not(:disabled):not(.disabled):active,
            .show >
            .btn.bg-gradient-primary.dropdown-toggle {
                color: color-yiq(#c88d6b);
                background-color: #c88d6b; }
            .btn-primary.focus, .btn-primary:focus,
            .btn.bg-gradient-primary.focus,
            .btn.bg-gradient-primary:focus {
                color: #fff; }
            
            .btn-outline-primary {
            color: #c88d6b;
            border-color: #c88d6b;
            }
            .btn-outline-primary:hover {
            color: #fff;
            background-color: #c88d6b;
            border-color: #c88d6b;
            }
            .btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(100, 161, 157, 0.5);
            }
            .btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
            color: #fff;
            background-color: #c88d6b;
            border-color: #c88d6b;
            }
            .btn-check:checked + .btn-outline-primary:focus, .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
             box-shadow: 0 0 0 0.25rem rgba(200, 141, 107, 0.5);
            }
            .btn-outline-primary:disabled, .btn-outline-primary.disabled {
            color: #c88d6b;
            background-color: transparent;
            }
        </style>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Our Café</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#menus">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Masuk</a></li>
                        @auth()
                            @if(Auth::user()->role == 'admin')
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.registration.index') }}">Home</a></li>
                            @elseif(Auth::user()->role == 'kasir')
                                <li class="nav-item"><a class="nav-link" href="{{ route('kasir.transaction.index') }}">Home</a></li>
                            @elseif(Auth::user()->role == 'manajer')
                                <li class="nav-item"><a class="nav-link" href="{{ route('manajer.dashboard') }}">Home</a></li>
                            @endif
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Our Café</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Web Kafe Responsive untuk memanajemen Our Café dengan Mudah.</h2>
                        <a class="btn btn-primary" href="#about">Ayo Mulai</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">{{ $total_transaksi }} Total Transaksi Dalam 1 Minggu Terakhir</h2>
                        <p class="text-white-50">
                            Our Café dibuat untuk memudahkan user untuk mengelola web. Ada 4 Jenis User; Admin, Kasir, Manajer, dan Costumer.
                        </p>
                    </div>
                </div>
                <img class="" src="{{ asset('img') }}/bg-coffee.png" alt="..." />
            </div>
        </section>
        <!-- Menus -->
        <section class="menus-section bg-light" id="menus">
            <div class="container px-4 px-lg-5">
                <!-- Featured Menu Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img') }}/Iced Matcha Latte.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Matcha</h4>
                            <p class="text-black-50 mb-0">Matcha adalah Teh Hijau yag berasal dari Jepang. Matcha Latte diracik dari teh hijau Jepang dan susu. Minuman ini cocok untuk menjadi pemasok energi di pagi hari, buat kamu yang gak suka Kopi.</p>
                        </div>
                    </div>
                </div>
                <!-- Menu One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('img') }}/chocolate cake.jpg" alt="..."/></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="menu-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Chocolate Coffee Cake</h4>
                                    <p class="mb-0 text-white-50">Gak cuman minuman, Our Café juga punya makanan. Kue Coklat Kopi ini dibuat dari bahan dasar kopi dan krim coklat.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('img') }}/americano.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="menu-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Espresso</h4>
                                    <p class="mb-0 text-white-50">Kopi Espreso yang dibuat oleh barista terpercaya. Dijamin enak!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('img') }}/mouse cake.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="menu-text w-100 my-auto text-center text-lg-left">
                                    <h5 class="text-white">Lihat Menunya Dengan Lengkap Sekarang Juga !!</h5>
                                    <a href="{{ route('pelanggan.menu.index') }}" class="mb-0 btn btn-outline btn-outline-primary text-white-50">Klik</a>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Ayo Mulai. Sekarang!</h2>
                        <form class="form-signup">
                            <div class="row input-group-newsletter">
                                <div class="col text-center">
                                    @if (Route::has('login'))
                                        @auth()
                                            @if(Auth::user()->role == 'admin')
                                                <a href="{{ route('admin.registration.index') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                            @elseif(Auth::user()->role == 'kasir')
                                                <a href="{{ route('kasir.transaction.index') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                            @elseif(Auth::user()->role == 'manajer')
                                                <a href="{{ route('manajer.dashboard') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                            @endif
                                        @else
                                            <a href="{{ route('login') }}"><button class="btn btn-primary" type="button">Masuk</button></a>
                                        @endauth
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        {{-- <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://wa.me/6281283885955"><i class="fab fa-whatsapp"></i></a>
                    <a class="mx-2" href="https://twitter.com/_kmrsha_"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://instagram.com/kmrsha"><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="https://github.com/kmarsha"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section> --}}
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Macca - Our Café 2022</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @include('_partials.session-script')
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
