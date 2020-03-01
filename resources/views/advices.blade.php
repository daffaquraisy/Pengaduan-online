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
              <a class="nav-link" href="">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">CONTACT US</a>
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

  <section class="fdb-block">
    <div class="container">
        <div class="row align-items-center justify-content-center">

          @foreach ($advices as $a)
          <div class="col-md-4 mt-4 mb-4 mt-md-0">
            <div class="fdb-box fdb-touch-mine">
                <p class="h3 mb-4">{{$a->reports->judul_laporan}}</p>

                <p class="h4 mb-4 text-black">{{$a->tanggapan}}</p>

                <p>
                <strong>{{$a->users->name}}, {{$a->tanggal_tanggapan}}</strong>
                </p>
            </div>
        </div>
          @endforeach
            

        </div>
    </div>
</section>

  <!-- Footers 2 -->
  <footer class="fixed-bottom fdb-block footer-small" style="background: linear-gradient(90deg, #ff512f 0%, #dd2476 100%)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-8">
          <ul class="nav justify-content-center justify-content-md-start">
            <li class="nav-item active">
              <a class="nav-link" href="/landing">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">CONTACT US</a>
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