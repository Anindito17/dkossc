<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dkossc.co</title>

    <!-- Favicons -->
    <link href="{{url('/img/favIcon.svg')}}" rel="icon">
    <link href="{{url('/img/favIcon.svg')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200;300;400;500;600;700;800;900&family=Spline+Sans+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('/css/main.css')}}">
    <style>
        /* ::-webkit-scrollbar {
            width: 1.1vw;
        }
        ::-webkit-scrollbar-track {
            background-color: #c4c4c4;
        }

        ::-webkit-scrollbar-thumb {
            background-color: black;
            border: 0.3vw solid #c4c4c4;
            border-radius: 5vw;
        } */
        /* .favButton:hover {
            background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        } */
    </style>
</head>

<body>
    @extends('layouts.navbar')
    <!-- <nav class="navbar navbar-expand-lg fixed-top bg-blck">
        <div class="container-fluid">
            <a class="navbar-brand logTitle" href="#">
                DKOSSC.CO
            </a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
                @if (Route::has('login'))
                <span class="navbar-text">
                    @auth
                    <a class="refLogReg" href="{{ url('/dashboard') }}">dashboard</a>
                    @else
                    <a class="refLogReg" href="{{ route('login') }}">Login / Register</a>
                    @endauth
                </span>
                @endif
               
            </div>
        </div>
    </nav> -->



    <!-- hero -->
    <div class="bgHero">

    </div>
    <!-- end hero -->



    <!-- Content. -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-6">
                <div class="cardContent">
                    <div class="subNavCard">
                        <div class="row align-items-center">
                            <div class="col-4"><img class="imgNavCard ms-2" src="{{url('/img/o3.svg')}}" alt=""></div>
                            <div class="col-4">
                                <h6 class="textNavCard">THE CANDIDATE</h6>
                            </div>
                            <div class="col-4 d-flex justify-content-end"><img class="imgNavCard" src="{{url('/img/pw.svg')}}" alt="">
                            </div>
                        </div>

                    </div>
                    <a href="" class="linkCard">
                        <div class="row align-items-center marginInnerCard">
                            <div class="col-4">
                                <div class="frameImg2"><img class="imgUtam" src="{{url('/img/conKos.svg')}}" alt=""></div>
                            </div>

                            <div class="col-8">
                                <h2 class="textContennt1">Kost Singgahsini Kozroom</h2>
                                <h4 class="textContennt2 mt-1">PUTRA</h4>
                                <h4 class="textContennt1 mt-1">Rp1.773.000 / Bulan</h4>

                                <p class="textContennt2 mt-3"># Kamar mandi dalam</p>
                                <p class="textContennt2"># Termasuk listrik</p>
                                <p class="textContennt2"># Wifi</p>

                                <div class="d-flex justify-content-end">
                                    <h6 class="textContennt3"><img class="imgGlobe" src="{{url('/img/globe.svg')}}" alt="">
                                        Lowokwaru,Kota
                                        Malang</h6>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="footCard">
                        <button class="butNavCard"><i class="bi-hand-thumbs-up-fill favButton"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="cardContent">
                    <div class="subNavCard">
                        <div class="row align-items-center">
                            <div class="col-4"><img class="imgNavCard ms-2" src="{{url('/img/o3.svg')}}" alt=""></div>
                            <div class="col-4">
                                <h6 class="textNavCard">THE CANDIDATE</h6>
                            </div>
                            <div class="col-4 d-flex justify-content-end"><img class="imgNavCard" src="{{url('/img/pw.svg')}}" alt="">
                            </div>
                        </div>

                    </div>
                    <a href="" class="linkCard">
                        <div class="row align-items-center marginInnerCard">
                            <div class="col-4">
                                <div class="frameImg2"><img class="imgUtam" src="{{url('/img/conKos.svg')}}" alt=""></div>
                            </div>

                            <div class="col-8">
                                <h2 class="textContennt1">Kost Singgahsini Kozroom</h2>
                                <h4 class="textContennt2 mt-1">PUTRA</h4>
                                <h4 class="textContennt1 mt-1">Rp1.773.000 / Bulan</h4>

                                <p class="textContennt2 mt-3"># Kamar mandi dalam</p>
                                <p class="textContennt2"># Termasuk listrik</p>
                                <p class="textContennt2"># Wifi</p>

                                <div class="d-flex justify-content-end">
                                    <h6 class="textContennt3"><img class="imgGlobe" src="{{url('/img/globe.svg')}}" alt="">
                                        Lowokwaru,Kota
                                        Malang</h6>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="footCard">
                        <button class="butNavCard"><i class="bi-hand-thumbs-up-fill favButton"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content. -->



    <!-- FOOTER. -->
    <div class="footerDiv">
        <div class="row">
            <div class="col-5">
                <h3 class="ti1Foot"><b>Dkossc.</b></h3>
                <h4 class="ti2Foot">Is a website-based platform that has a feature to recommend boarding houses
                    according to your criteria.</h4>
            </div>
            <!-- <div class="col-1"></div> -->
            <div class="col-3">
                <ul>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot1.svg')}}" alt=""> +62 895337857751</li>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot2.svg')}}" alt=""> hotmail@dkossc.com</li>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot3.svg')}}" alt=""> dkossc.hq</li>
                    <li class="linkFoot1"><img src="{{url('/img/iconFoot4.svg')}}" alt=""> dkossc.co</li>
                </ul>
            </div>
            <div class="col-2"></div>
            <div class="col-1 padRIGHT0"><img class="logAsia" src="{{url('/img/asiaLog.png')}}" alt=""></div>
            <div class="col-1 padLEFT0"><img class="logAsia2" src="{{url('/img/dkosscLog.png')}}" alt=""></div>
        </div>
        <hr class="lineFoot">
        <div style="text-align: center;">
            <h6 class="ti3Foot">Copyright © 2022 MdyDev. All Rights Reserved</h6>
        </div>

    </div>
    <!-- END FOOTER. -->





</body>

</html>