<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../mytemplate/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../mytemplate/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
Pengaduan    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('mytemplate/css/material-kit.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
</head>

<body class="landing-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
        id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#">
                    Pengaduan </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <form action="{{route("logout")}}" method="POST">
                            @csrf
                            <button class="btn btn-primary nav-link">Logout</button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">
                            {{Auth::user()->email}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" data-parallax="true"
        style="background-image: url('../mytemplate/img/profile_city.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Selamat datang di web pengaduan.</h1>

                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Let&apos;s talk </h2>
                        <h5 class="description">Disini kami siap untuk menyelesaikan masalah mu, tim kami akan siap 24
                            jam untuk
                            melayani
                            masyarakat !</h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Free Chat</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, magni. Lorem ipsum dolor
                                    sit amet
                                    consectetur adipisicing elit. Molestiae, dolore!</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Verified Users</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque repellat consectetur
                                    quaerat quos
                                    dolore asperiores doloribus nam aperiam dicta sapiente?</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">https</i>
                                </div>
                                <h4 class="info-title">Private</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, unde asperiores
                                    quis eos ducimus
                                    labore illum aliquam alias totam nisi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section text-center">
                <h2 class="title">Solusi</h2>
                <div class="team">
                    <div class="row">

                        @foreach ($advices as $a)
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">

                                    <h4 class="card-title">{{$a->reports->judul_laporan}}
                                        <br>
                                        <small class="card-description text-muted">{{$a->users->name}},
                                            {{$a->tanggal_tanggapan}}</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">Solusi:</p>
                                        <p class="card-description">{{$a->tanggapan}}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="section section-contacts">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">Contact us</h2>
                        <h4 class="text-center description">Cepat hubungi kami !</h4>

                        @if(session('status'))
                      <div class="alert alert-success mb-2 mt-2">
                          {{session('status')}}
                      </div>
                      @endif 

                      <form class="contact-form" enctype="multipart/form-data" action="{{route('reports.store')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Judul Laporan</label>
                                        <input value="{{old('judul_laporan')}}"
                                            class="form-control {{$errors->first('judul_laporan') ? "is-invalid": ""}}"
                                            type="text" name="judul_laporan" id="judul_laporan" />

                                        <div class="invalid-feedback">
                                            {{$errors->first('judul_laporan')}}
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-15">
                                        <label for="exampleFormControlFile1">Upload Image</label>
                                        <div class="input-items default">

                                            <i class='lni lni-image'></i>
                                            <input type="file" class="form-control {{$errors->first('image') ? "is-invalid" : ""}}" name="image">
                                            <div class="invalid-feedback">
                                              {{$errors->first('image')}}
                                          </div>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleMessage" class="bmd-label-floating">Isi Laporan</label>
                                <textarea name="isi_laporan" id="isi_laporan"
                                    class="form-control {{$errors->first('isi_laporan') ? "is-invalid" : ""}} ">{{old('isi_laporan')}}</textarea>

                                <div class="invalid-feedback">
                                    {{$errors->first('isi_laporan')}}
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <button class="btn btn-primary btn-raised">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-default">
        <div class="container">

            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())

                </script>, made with <i class="material-icons">favorite</i>
                <a href="https://www.creative-tim.com/" target="_blank">Ujikom 2020</a>
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="../mytemplate/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../mytemplate/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../mytemplate/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../mytemplate/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../mytemplate/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../mytemplate/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../mytemplate/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>
