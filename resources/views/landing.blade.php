<!DOCTYPE html>
<html>

<head>
  <title>Pengaduan Online</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat:500&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> -->
  <link rel="stylesheet" href="{{asset('template/css/mycss.css')}}">
  <link type="text/css" rel="stylesheet" href="{{asset('template/css/froala_blocks.css')}}">
  <style>
    .fdb-block {
      border-bottom: 1px solid var(--light);
    }
  </style>
</head>

<body>

  <header class="fixed-top"style="background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%)">
    <div class="container">
      <nav class="navbar navbar-expand-md no-gutters ">
        <div class="col-2 text-left">
          <a href="">
            <i class="fas fa-shield-alt fa-2x" style="color: #dd2476;"></i>
          </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4"
          aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center col-md-8" id="navbarNav4">
          <ul class="navbar-nav justify-content-center">
            <li class="nav-item active">
              <a class="nav-link" href="/landing">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#SERVICES">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#CONTACT">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/see_advices">ADVICE</a>
            </li>

          </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-between col-md-4" id="navbarNav4">
            <ul class="navbar-nav justify-content-between">
              
              <li class="nav-item">
                  <a class="nav-link" href="">{{Auth::user()->email}}</a>
                </li>

                <li class="nav-item">
                    <form action="{{route("logout")}}" method="POST">
                        @csrf
                        <button class="btn btn-mine">Logout</button>
                    </form>
                  </li>
  
            </ul>
          </div>


      </nav>
    </div>
  </header>


  <!-- Contents 15 -->
  <section class="fdb-block" style="background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 col-lg-5">
          <h1 class="text-white">Laporkan keresahan mu</h1>
          <p class="lead text-white">Disini kami siap untuk menyelesaikan masalah mu, tim kami akan siap 24 jam untuk melayani
            masyarakat !</p>
        </div>
        <div class="col-10 col-sm-6 m-auto col-md-4 pt-4 pt-md-0">
          <img alt="image" class="img-fluid rounded-0" src="{{URL::asset('template/imgs/draws/security.svg')}}">
        </div>
      </div>
    </div>
  </section>

  <section class="fdb-block" id="SERVICES">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h1>Services</h1>
        </div>
      </div>

      <div class="row text-center justify-content-center mt-5">
        <div class="col-12 col-sm-4 col-xl-3 m-md-auto">
          <i class="fdb-icon fas fa-fist-raised fa-4x" style="color:#6C63FF;"></i>
          <h3 class="mt-4"><strong>Siap 24 jam</strong></h3>
          <p>Kami siap 24 jam untuk membantu masyarakat yang butuh jasa kami.</p>
        </div>

        <div class="col-12 col-sm-4 col-xl-3 m-auto pt-4 pt-sm-0">
          <i class="fdb-icon fas fa-thumbs-up fa-4x" style="color:#FF7F3C;"></i>
          <h3 class="mt-4"><strong>Pelayanan memuaskan</strong></h3>
          <p>Kami bisa pastikan jasa kami tidak akan mengecewakan, karna kami sudah sangat profesional.</p>
        </div>

        <div class="col-12 col-sm-4 col-xl-3 m-auto pt-4 pt-sm-0">
          <i class="fdb-icon fas fa-user-shield fa-4x" style="color:#00B0FF;"></i>
          <h3 class="mt-4"><strong>Dijamin aman</strong></h3>
          <p>Kami jaminkan keamanan bagi mereka yang mengadukan masalah mereka disini.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacts 4 -->
  <section class="fdb-block py-0" id="CONTACT">
    <div class="container py-5 my-5" style="background-image: url(template/imgs/shapes/9.svg);">
      <div class="row py-5">
        <div class="col py-5">
          <div class="fdb-box fdb-touch-mine">
            <div class="row text-center justify-content-center">
              <div class="col-12 col-md-9 col-lg-7">
                <h1>Contact Us</h1>
                <p class="lead">Cepat hubungi kami dan beritahu masalah yang harus kami selesaikan !</p>
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif 
              </div>

            </div>

            <div class="row justify-content-center pt-4">
              <div class="col-12 col-md-8">
                <form enctype="multipart/form-data" action="{{route('reports.store')}}" method="POST">

                    @csrf
            
                    <label for="judul_laporan">Judul Laporan</label>
            
                        <input value="{{old('judul_laporan')}}" class="form-control {{$errors->first('judul_laporan') ? "is-invalid": ""}}" placeholder="Judul Laporan" type="text" name="judul_laporan" id="judul_laporan"/>
            
                         <div class="invalid-feedback">
                            {{$errors->first('judul_laporan')}}
                         </div>
            
                    <br>
            
                    <label for="isi_laporan">Isi Laporan</label><br>
                        <textarea name="isi_laporan" id="isi_laporan" class="form-control {{$errors->first('isi_laporan') ? "is-invalid" : ""}} "placeholder="Masukan isi laporan">{{old('isi_laporan')}}</textarea>
            
                        <div class="invalid-feedback">
                            {{$errors->first('isi_laporan')}}
                        </div>
                        <br>
            
                        
                    <label>Image</label>
                    <input type="file" class="form-control {{$errors->first('image') ? "is-invalid" : ""}}" name="image">
                    <div class="invalid-feedback">
                        {{$errors->first('image')}}
                    </div>
            
                    
                    <br>
            
                        <input class="btn btn-mine" type="submit" value="Save">
            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footers 2 -->
  <footer class="fixed-bottom fdb-block footer-small" style="background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-8">
          <ul data-spy="scroll" class="nav justify-content-center justify-content-md-start">
            <li class="nav-item active">
              <a class="nav-link" href="/landing">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#SERVICES">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#CONTACT">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/see_advices">ADVICE</a>
            </li>

              
            
          </ul>
        </div>

        <div class="col-12 col-md-4 mt-4 mt-md-0 text-white text-center text-md-right">
          © 2020 Ujikom. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>


</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/20e16e5617.js"></script>


</html>