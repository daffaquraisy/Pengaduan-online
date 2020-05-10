<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('mytemplate/css/materialize.min.css')}}" media="screen,projection" />

    <link rel="stylesheet" href="{{asset('mytemplate/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600&display=swap" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <!-- Nav -->
    <nav style="background:#667eea;">
        <div class="nav-wrapper container text-darken-4">
            <a href="#!" class="brand-logo">
                Security
            </a>
            <ul class="right hide-on-med-and-down">
                <ul class="right hide-on-med-and-down">
                    <li><a href="">Home</a></li>
                    <li>
                      <form action="{{route("logout")}}" method="POST">
                        @csrf

                      <button class="btn" href="#" style="background-color: #667eea;">LOGOUT</button>
                      </form>
                    </li>
                    
                </ul>
            </ul>

            <ul id="slide-out" class="sidenav">
                <li><a href="">Home</a></li>
                <li>
                  <form action="{{route("logout")}}" method="POST">
                    @csrf

                  <button class="btn" href="#" style="background-color: #667eea;">LOGOUT</button>
                  </form>
                </li>                

            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        </div>


    </nav>


    <!-- Nav -->

    <!-- Hero -->
    <section class="hero" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">

        <div class="container">
            <h1 class="myjumbo center-align">Hello, how can we help you?</h1>
            <h2 class="subjumbo center-align">This is where you teel us about your problems.</h2>
            <div class="row center">
            </div>
        </div>

    </section>
    <!-- Hero -->

    <!-- About Me -->
    <section class="about-me">

        <div class="container">
            <h3>About US</h3>

            <div class="row">

                <div class="col m6 s12">
                    <img src="mytemplate/img/1.png" class="materialboxed" width="400" alt="">
                </div>

                <div class="col m6 s12">
                    <p class="capt">
                        We'll make sure your problems is solve. Free constuling for a lifetime. Don't doubt our work, it
                        always great. We offer 100% protection to customers.
                    </p>
                </div>

            </div>

        </div>

    </section>
    <!-- About Me -->

    <!-- Skill -->
    <section class="skill " style="background: linear-gradient(90deg,#764ba2 0%, #667eea 100% )">

        <div class="container">
            <h3>Advice</h3>
            <p style="color: #b7b7b7;">Our advices to your problems</p>

            <div class="row">

              @foreach ($advices as $a)


                <div class="col m6 s12">
                    <div class="comp">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row valign-wrapper">

                                <div class="col s12">
                                    <h5><b>{{$a->reports->judul_laporan}}</b></h5>
                                    <span class="black-text">
                                      {{$a->tanggapan}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>




    </section>
    <!-- Skill -->

    <section id="contact" class="contact white">

        <div class="container">
            <h3>Contact Us</h3>
            @if(session('status'))

            <div class="msg msg-info">                         
              {{session('status')}}
            </div>

            @endif 

            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel center white-text" style="background-color: #667eea;">
                        <i class="material-icons">email</i>
                        <h5>Contact Us</h5>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header center">
                            <h4>Our Office</h4>
                        </li>
                        <li class="collection-item">My Company</li>
                        <li class="collection-item">Indonesia, Jawa Barat, Bogor.</li>
                        <li class="collection-item">Jl. Pahlawan, No 33.
                        </li>
                    </ul>
                </div>

                
                <div class="col m7 s12">
                    <form enctype="multipart/form-data" action="{{route('reports.store')}}" method="POST">
                      @csrf

                        <div class="card-panel">
                            <h5>Contact Us</h5>

                            <div class="input-field">
                              <input value="{{old('judul_laporan')}}" class="form-control {{$errors->first('judul_laporan') ? "is-invalid": ""}}" placeholder="Judul Laporan" type="text" name="judul_laporan" id="judul_laporan"/>
                            </div>

                            <div class="input-field">
                              <textarea name="isi_laporan" id="isi_laporan" class="materialize-textarea {{$errors->first('isi_laporan') ? "is-invalid" : ""}} "placeholder="Masukan isi laporan">{{old('isi_laporan')}}</textarea>
                            </div>

                            <div class="file-field input-field">
                                <div class="btn" style="background-color: #667eea;">
                                    <span>File</span>
                                    <input type="file" multiple name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload gambar">
                                </div>
                            </div>
                            <button type="submit" class="btn" style="background-color: #667eea;">Kirim</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer class="page-footer white">
        <div class="container">
            <div class="row center">
                <div class="col m12 s12">
                    <p class="black-text">© 2020 Copyright Ujikom
                    </p>
                </div>
            </div>
    </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems);

            var a = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(a);
        });
    </script>
    <script type="text/javascript" src="{{asset('mytemplate/js/materialize.min.js')}}"></script>
</body>

</html>