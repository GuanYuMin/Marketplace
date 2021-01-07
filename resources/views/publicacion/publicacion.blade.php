<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- FONTS only -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;400;600&display=swap"
        rel="stylesheet">

    <title>HOME</title>
</head>

<body>

    <header>
        <nav class="navbar sticky-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <a class="navbar-brand" href="#">
                            <i class="material-icons md-48">account_circle</i>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" style="text-decoration: none;"><img class="" src="img/logo.png" alt=""></a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <i class="material-icons md-48">search</i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section style="height:100%;">
    
    <div class="row">
    @foreach ($tbl_Publicacion as $ObjPublicacion)
      <div class="container post col-xs-12 col-md-6 col-lg-3">
            <div class="row header">
                <div class="col-2">
                    <img class="rounded-circle" src="img/dummy.jpg" alt="">
                </div>
                <div class="col-10">
                    <p class="title">{{ $ObjPublicacion->cveComprador }}</p>
                    <p class="subTitle">Hace 0hr</p>
                </div>
            </div>
            <div class="row post-img">
                <img class="rounded mx-auto" src="img/imgdumy.png" alt="">
            </div>
            <div class="row body">
                <div class="col-9">
                    <p style="cursor:pointer" class="productName">{{ $ObjPublicacion->tituloProducto }}</p>
                    <p class="productDesc">{{ $ObjPublicacion->descripcion }}</p>
                </div>
                <div class="col-2">
                    <p class="productName">${{ number_format((float)$ObjPublicacion->presupuesto, 2, '.', '') }}</p>
                </div>
            </div>
            <div class="row footer">
                <div class="col">
                    <a href="#"><i class="material-icons md-48">chat_bubble_outline</i></a>
                    <a href="#"><i class="material-icons md-36">favorite_border</i></a>
                    <a href="#"><i class="material-icons md-36">turned_in_not</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    </section>
    <footer>
        <nav class="navbar fixed-bottom" style="background-color: white !important">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <a class="navbar-brand" href="#">
                            <i class="material-icons md-48">home</i>
                        </a>
                    </div>
                    <!-- <div class="col-4">
                        <a href="#">
                            <i class="material-icons md-48">add_circle</i>
                        </a>
                    </div> -->
                    <div class="col-4">
                        <a href="#">
                            <i class="material-icons md-48">chat_bubble_outline</i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </footer>

</body>

</html>