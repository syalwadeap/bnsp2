<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link href="{{ asset('assets/css/styleHome.css') }}" rel="stylesheet">
        <title>EventKu</title>
    </head>
    <body>

        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>EventKu</h1>
                    <h2>daftarkan diri kamu buat senang senang ikut event!!!!!!!</h2>
                    <div class="d-flex">
                    <a href="{{ url('/login') }}" class="btn-login">Login</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="" class="img-fluid animated" alt="">
                </div>
                </div>
            </div>
        </section>
        <div class="d-flex justify-content-center pb-3">
            <h2>List EventKu</h3>
        </div>
        <div class="container shadow rounded">
            <div class="pt-4 row row-cols-1 row-cols-md-3">
                
                    <div class="col mb-4">
                        @foreach($event as $eventku)
                        <div class="card bg-success shadow-sm" id="card-room">
                            <div class="card-body"> 
                                <h3 class="card-title"> {{$eventku->nama}} </h3>
                                <p>Tanggal: {{$eventku->tanggal}}</p>
                                <p>Informasi: {{$eventku->informasi}} </p>
                                <p><a href="/welcome/{{$eventku->id}}/daftar" class="text-indigo-600 hover:text-indigo-900">daftar sekarang</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
              
            </div>
        </div>
    </body>
</html>
