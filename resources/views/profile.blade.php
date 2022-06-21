<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

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
        .profil {
            /* background-image: url("assets/img/bgPro.svg"); */
            /* background-position: 100% 0%;
            background-repeat: no-repeat; */
            background-color: #000000 !important;

            position: relative;
            /* height: 91.9vh; */
            margin-top: 54px;
            padding: 50px;


            background-image: url(img/bigGlobe.svg);
        }

        .imgUtam2 {
            width: 132px !important;
            height: 132px !important;
            object-fit: cover;
            border-radius: 50%;
        }


        .frameImgPro2 {
            background-color: #FF90FF;
            padding: 7px;
            width: 160px;
            height: 160px;
            border: 7px solid #FFFF50;
            border-radius: 50%;
        }

        .mt-101 {
            padding: 50px;
        }

        .cardPro {
            border: 4px solid #000000;
            box-shadow: 7px 7px #000000;
            /* margin-right: 250px; */
            background-color: #FF5C5C;
        }

        .subNavCardPro {
            background-color: #000000;
            z-index: 1000;
        }

        .imgNavCard4 {
            height: 15px;
            margin: 10px 0px 10px 15px;
        }

        .imgNavCard5 {
            height: 19px;
            margin: 10px 15px 10px 0px;
        }

        .mar30 {
            margin: 20px 0px !important;
        }

        .namePro {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #000000;
            padding: 0px !important;
            font-size: 25px;
            font-weight: 800;
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .emailPro {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #000000;
            padding: 0px !important;
            font-size: 20px;
            font-weight: 400;
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .resultRec {
            background-image: url(img/bgCons.gif);
            height: 100vh;
            padding-top: 70px;
        }

        .cardRec {
            border: 4px solid #000000;
            box-shadow: 7px 7px #000000;
            background-color: #7FFF5B;
        }

        .resultListRec {
            padding: 40px !important;
        }

        .imgRec {
            width: 100px !important;
            height: 100px !important;
            object-fit: cover;
        }

        .frameImgRec {
            background-color: #FF90FF;
            padding: 15px;
            width: 160px;
            height: 160px;
            border: 15px solid #4D7BFF;
        }

        .linkRec {
            text-decoration: none !important;
        }

        .nomRec {
            font-family: 'Spline Sans Mono', monospace !important;
            color: #000000;
            padding: 0px !important;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 0px;
        }

        .textContennt4 {
            font-family: 'Spline Sans Mono', monospace;
            font-size: 15px;
            font-weight: 800;
            color: #000000;
            font-weight: 20px;
            margin-bottom: 0px;
        }

        .textContennt5 {
            font-family: 'Spline Sans Mono', monospace;
            font-size: 13px;
            font-weight: 400;
            color: #000000;
            font-weight: 20px;
            margin-bottom: 0px
        }

        .textContennt6 {
            font-family: 'Spline Sans Mono', monospace;
            font-size: 11px;
            font-weight: 700;
            color: #000000;
            font-weight: 15px;
            margin-bottom: 0px
        }

        .imgGlobe2 {
            width: 8%;
        }
    </style>

</head>

<body>
    @extends('layouts.navbar')

    <div class="profil">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="cardPro">
                        <div class="subNavCardPro">
                            <div class="row align-items-center">
                                <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                                <div class="col-4">
                                    <h6 class="textNavCard">Profil</h6>
                                </div>
                                <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/navPro.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mar30">
                            <div class="col-3" style="text-align: -webkit-center;">
                                <div class="frameImgPro2"><img class="imgUtam2" src="{{url('/img/tikus.jpg')}}" alt=""></div>
                            </div>
                            <div class="col-8">
                                <h3 class="namePro">{{ $user->name }}</h3>
                                <h4 class="emailPro">{{ $user->email }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <img src="{{url('/img/quote3.svg')}}" alt="">
                </div>
            </div>


        </div>
    </div>


    <div class="resultRec">
        <div class="container">
            <div class="cardRec">
                <div class="subNavCardPro">
                    <div class="row align-items-center">
                        <div class="col-4"><img class="imgNavCard4" src="{{url('/img/o3.svg')}}" alt=""></div>
                        <div class="col-4">
                            <h6 class="textNavCard">Recommendation result</h6>
                        </div>
                        <div class="col-4 d-flex justify-content-end"><img class="imgNavCard5" src="{{url('/img/navRec.svg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="resultListRec">
                    <div class="row">
                        <div class="col-6 mb-5">
                            <a class="linkRec" href="">
                                <div class="row align-items-center">
                                    <div class="col-1" style="text-align: -webkit-center;">
                                        <h1 class="nomRec">1</h1>
                                    </div>
                                    <div class="col-4" style="text-align: -webkit-center;">
                                        <div class="frameImgRec"><img class="imgRec" src="{{url('/img/conKos.svg')}}" alt=""></div>
                                    </div>
                                    <div class="col-7">
                                        <h2 class="textContennt4">Kost Singgahsini Kozroom</h2>
                                        <h4 class="textContennt5 mt-1">PUTRA</h4>
                                        <h4 class="textContennt4 mt-1">Rp1.773.000 / Bulan</h4>

                                        <p class="textContennt5 mt-3"># Kamar mandi dalam</p>
                                        <p class="textContennt5"># Termasuk listrik</p>
                                        <p class="textContennt5"># Wifi</p>

                                        <div class="d-flex justify-content-end">
                                            <h6 class="textContennt6"><img class="imgGlobe2" src="{{url('/img/globe.svg')}}" alt="">
                                                Lowokwaru,Kota
                                                Malang</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 mb-5">
                            <a class="linkRec" href="">
                                <div class="row align-items-center">
                                    <div class="col-1" style="text-align: -webkit-center;">
                                        <h1 class="nomRec">2</h1>
                                    </div>
                                    <div class="col-4" style="text-align: -webkit-center;">
                                        <div class="frameImgRec"><img class="imgRec" src="{{url('/img/conKos.svg')}}" alt=""></div>
                                    </div>
                                    <div class="col-7">
                                        <h2 class="textContennt4">Kost Singgahsini Kozroom</h2>
                                        <h4 class="textContennt5 mt-1">PUTRA</h4>
                                        <h4 class="textContennt4 mt-1">Rp1.773.000 / Bulan</h4>

                                        <p class="textContennt5 mt-3"># Kamar mandi dalam</p>
                                        <p class="textContennt5"># Termasuk listrik</p>
                                        <p class="textContennt5"># Wifi</p>

                                        <div class="d-flex justify-content-end">
                                            <h6 class="textContennt6"><img class="imgGlobe2" src="{{url('/img/globe.svg')}}" alt="">
                                                Lowokwaru,Kota
                                                Malang</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 mb-5">
                            <a class="linkRec" href="">
                                <div class="row align-items-center">
                                    <div class="col-1" style="text-align: -webkit-center;">
                                        <h1 class="nomRec">3</h1>
                                    </div>
                                    <div class="col-4" style="text-align: -webkit-center;">
                                        <div class="frameImgRec"><img class="imgRec" src="{{url('/img/conKos.svg')}}" alt=""></div>
                                    </div>
                                    <div class="col-7">
                                        <h2 class="textContennt4">Kost Singgahsini Kozroom</h2>
                                        <h4 class="textContennt5 mt-1">PUTRA</h4>
                                        <h4 class="textContennt4 mt-1">Rp1.773.000 / Bulan</h4>

                                        <p class="textContennt5 mt-3"># Kamar mandi dalam</p>
                                        <p class="textContennt5"># Termasuk listrik</p>
                                        <p class="textContennt5"># Wifi</p>

                                        <div class="d-flex justify-content-end">
                                            <h6 class="textContennt6"><img class="imgGlobe2" src="{{url('/img/globe.svg')}}" alt="">
                                                Lowokwaru,Kota
                                                Malang</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>



</body>

</html>