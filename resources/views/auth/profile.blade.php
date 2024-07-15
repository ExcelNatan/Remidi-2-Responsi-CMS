<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Profile</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{ route('index') }}"><span class="fw-bolder text-primary">Immanuel Excel Natan Arypratama</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contacts.index') }}">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">My Profile</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2017 - 2019</div>
                                                <div class="small fw-bolder">Staff Public Area</div>
                                                <div class="small text-muted">Gaia Cosmo Hotel</div>
                                                <div class="small text-muted">Yogyakarta, Indonesia</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Pengalaman bekerja sebagai pegawai Hotel di Gaia Cosmo Hotel di bagian Housekeeping</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2019 - sekarang</div>
                                                <div class="small fw-bolder">PPIC Staff</div>
                                                <div class="small text-muted">PT Kanisius</div>
                                                <div class="small text-muted">Yogyakarta, Indonesia</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Bekerja di PT Kanisius, perusahaan di bidang percetakan yang melayani Gereja dan pendidikan di Indonesia</div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2014 - 2017</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">SMK Penerbangan AAG Adisutjipto Yogyakarta</div>
                                                    <div class="small text-muted">Yogyakarta, Indonesia</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Graduated</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Lulus SMK dari jurusan Elektronika Pesawat terbang</div></div>
                                    </div>
                                </div>
                            </div>  
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO/SEM Marketing</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Statistical Analysis</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Software Suite</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
