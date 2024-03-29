<html lang="en">

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
        .btnCari {
            border-radius: 3px;
            background: #FFFF50;
            box-shadow: 4px 4px #000000;
            border: 3px solid #000000;

            font-family: 'Spline Sans Mono', monospace;
            font-size: 16px;
            font-weight: 400;
            line-height: 45px;
            color: #000000;
            margin-top: 50px;
            margin-bottom: 20px;
            padding: 0 15px 0 15px;
            width: 100%;
        }

        .wrapper-dropdown {
            position: relative;

            display: inline-block;
            width: 100%;
            padding: 0px 10px;

            border-radius: 3px;
            background: #FF5C5C;
            box-shadow: 4px 4px #000000;
            border: 3px solid #000000;

            text-align: left;
            line-height: 45px;
            color: #000000;

            cursor: pointer;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-top: 50px;
            margin-bottom: 20px;


            font-family: 'Spline Sans Mono', monospace;
            font-size: 16px;
            font-weight: 400;

        }

        .wrapper-dropdown2 {
            position: relative;

            display: inline-block;
            width: 100%;
            padding: 12px 10px;

            border-radius: 3px;
            background: #FF5C5C;
            box-shadow: 4px 4px #000000;
            border: 3px solid #000000;

            text-align: left;
            line-height: 45px;
            color: #000000;

            cursor: pointer;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-top: 50px;
            margin-bottom: 20px;


            font-family: 'Spline Sans Mono', monospace;
            font-size: 16px;
            font-weight: 400;

        }

        .wrapper-dropdown::before {
            content: '';
            position: absolute;
            top: 50%;
            right: 16px;

            margin-top: -2px;
            width: 0;
            height: 0;

            border-width: 6px 6px 0 6px;
            border-style: solid;
            border-color: #000000 transparent;
        }

        .wrapper-dropdown2::before {
            margin-right: 10px !important;


            border-width: 6px 6px 0 6px;
            border-style: solid;
            border-color: #000000 transparent;
        }

        .wrapper-dropdown.active::before {
            border-width: 0 6px 6px 6px;
        }

        .wrapper-dropdown .dropdown {
            position: absolute;
            top: 140%;
            right: 0;
            left: 0;

            margin: 0;
            padding: 0;

            list-style: none;

            border-radius: inherit;
            box-shadow: inherit;
            background: inherit;

            -webkit-transition: .5s ease;
            -moz-transition: .5s ease;
            -ms-transition: .5s ease;
            transition: .5s ease;

            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);

            -webkit-transform-origin: top;
            -moz-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

            opacity: 0;
            visibility: hidden;
        }

        .wrapper-dropdown .dropdown li {
            padding: 0 15px;
            border-bottom: 1px solid rgba(255, 255, 255, .2);
            overflow: hidden;

            -webkit-transition: .5s ease;
            -moz-transition: .5s ease;
            -ms-transition: .5s ease;
            transition: .5s ease;
        }

        .wrapper-dropdown .dropdown li:last-child {
            border-bottom: none;
        }

        .wrapper-dropdown .dropdown li:hover {
            font-size: 17px;
            font-weight: 800;
        }

        .wrapper-dropdown.active .dropdown {
            opacity: 1;
            visibility: visible;

            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }

        .borderDrop12 {
            border: 3px solid #000000 !important;
        }

        .optionFilter {
            font-weight: normal;
            display: block;
            white-space: normal !important;
            min-height: 2em;
            padding: 20px !important;
        }

        .wrapper-dropdown2 option:hover {

            color: #000000 !important;
            background-color: #000000 !important;
        }



        .select-hidden {
            display: none;
            visibility: hidden;
            padding-right: 10px;
        }

        .select {
            cursor: pointer;
            display: inline-block;
            position: relative;
            font-family: 'Spline Sans Mono', monospace;
            font-size: 16px;
            font-weight: 400;
            color: #000000;
            width: 220px;
            height: 50px;


            border-radius: 3px;
            background: #FF5C5C;
            box-shadow: 4px 4px #000000;
            border: 3px solid #000000;
        }

        .select-styled {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #FF5C5C;
            padding: 10px 15px 16px 15px;
            -moz-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }

        .select-styled:after {
            content: "";
            width: 0;
            height: 0;
            border: 7px solid transparent;
            border-color: #000000 transparent transparent transparent;
            position: absolute;
            top: 18px;
            right: 10px;
        }

        .select-styled:hover {
            font-size: 17px;
            font-weight: 800;
        }

        .select-styled:active,
        .select-styled.active {
            background-color: #FF4343;
        }

        .select-styled:active:after,
        .select-styled.active:after {
            top: 11px;
            border-color: transparent transparent #000000 transparent;
        }

        .select-options {
            display: none;
            position: absolute;
            top: 140%;
            right: 0;
            left: 0;
            z-index: 999;
            margin: 0;
            padding: 0;
            list-style: none;
            background-color: #FF5C5C;
            border: 3px solid #000000 !important;
            box-shadow: 4px 4px #000000;
            
        }

        .select-options li {
            margin: 0;
            padding: 12px 0;
            text-indent: 15px;
            border-top: 1px solid rgba(255, 255, 255, .2);
            -moz-transition: all 0.15s ease-in;
            -o-transition: all 0.15s ease-in;
            -webkit-transition: all 0.15s ease-in;
            transition: all 0.15s ease-in;
        }

        .select-options li:hover,
        .select-options li.is-selected {
            font-size: 17px;
            font-weight: 800;
        }

        .select-options li[rel="hide"] {
            display: none;
        }
    </style>


</head>

<body>
    @extends('layouts.navbar')


    <!-- Content. -->
    <div class="container mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-3">
                <form action="{{url('filter')}}" method="POST">
                    {{csrf_field()}}
                    <select name="kecamatan">
                        @foreach($kecamatan as $kontoru)
                        <option value={{$kontoru->id}}>{{$kontoru->nama}}</option>
                        @endforeach
                    </select>

                    <input type="submit" value="Kontoru">
                </form>
                <!-- <div class="wrapper-dropdown" id="myDropdown">
                    <span>Kecamatan</span>
                   
                    
                    <ul class="dropdown borderDrop12">
                        <li>Lowokwaru</li>
                        <li>Blimbing</li>
                        <li>Sukun</li>
                        <li>Klojen</li>
                    </ul>
                </div> -->
            </div>
            <div class="col-3">
                <div class="wrapper-dropdown" id="myDropdown2nd">
                    <span>Jenis Kos</span>
                    <ul class="dropdown borderDrop12">
                        <li>Putra</li>
                        <li>Putri</li>
                        <li>Campur</li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="wrapper-dropdown" id="myDropdown3rd">
                    <span>Rentang Harga</span>
                    <ul class="dropdown borderDrop12">
                        <li>0 - 500.0000</li>
                        <li>500.0000 - 1.000.0000</li>
                        <li>1.000.0000 - 1.500.0000</li>
                        <li>1.500.0000 - 2.000.0000</li>
                        <li>> 2.000.000</li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <button class="btnCari"><i class="bi bi-search"></i> cari</button>
            </div>
        </div>



        <div class="row">
            @foreach ($kosts as $data_kost)
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
                                <div class="frameImg2"><img class="imgUtam" src="{{ $data_kost->foto }}" alt=""></div>
                            </div>

                            <div class="col-8">
                                <h2 class="textContennt1">{{ Str::limit($data_kost->nama, 29) }}</h2>
                                <h4 class="textContennt2 mt-1">{{ $data_kost->namajen }}</h4>
                                <h4 class="textContennt1 mt-1">@currency($data_kost->real_harga) /Bulan</h4>

                                <p class="textContennt2 mt-3"># {{ $data_kost->namaman }}</p>
                                <p class="textContennt2"># {{ $data_kost->namalis }}</p>
                                <p class="textContennt2"># {{ $data_kost->namawif }}</p>

                                <div class="d-flex justify-content-end mt-2">
                                    <h6 class="textContennt3"><img class="imgGlobe" src="{{url('/img/globe.svg')}}" alt="">
                                        {{ $data_kost->namakec }}, Kota
                                        Malang
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="footCard">
                        <button class="butNavCard"><i class="bi-hand-thumbs-up-fill favButton"></i></button>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
    <!-- End Content. -->


    @extends('layouts.footer')


    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("select").each(function() {
            var $this = $(this),
                numberOfOptions = $(this).children("option").length;

            $this.addClass("select-hidden");
            $this.wrap('<div class="select"></div>');
            $this.after('<div class="select-styled"></div>');

            var $styledSelect = $this.next("div.select-styled");
            $styledSelect.text($this.children("option").eq(0).text());

            var $list = $("<ul />", {
                class: "select-options"
            }).insertAfter($styledSelect);

            for (var i = 0; i < numberOfOptions; i++) {
                $("<li />", {
                    text: $this.children("option").eq(i).text(),
                    rel: $this.children("option").eq(i).val()
                }).appendTo($list);
                //if ($this.children('option').eq(i).is(':selected')){
                //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
                //}
            }

            var $listItems = $list.children("li");

            $styledSelect.click(function(e) {
                e.stopPropagation();
                $("div.select-styled.active")
                    .not(this)
                    .each(function() {
                        $(this).removeClass("active").next("ul.select-options").hide();
                    });
                $(this).toggleClass("active").next("ul.select-options").toggle();
            });

            $listItems.click(function(e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass("active");
                $this.val($(this).attr("rel"));
                $list.hide();
                //console.log($this.val());
            });

            $(document).click(function() {
                $styledSelect.removeClass("active");
                $list.hide();
            });
        });



        $(function() {
            var dd1 = new dropDown($('#myDropdown'));

            $(document).click(function() {
                $('.wrapper-dropdown').removeClass('active');
            });
        });

        function dropDown(el) {
            this.dd = el;
            this.placeholder = this.dd.children('span');
            this.opts = this.dd.find('ul.dropdown > li');
            this.val = '';
            this.index = -1;
            this.initEvents();
        }
        dropDown.prototype = {
            initEvents: function() {
                var obj = this;

                obj.dd.on('click', function() {
                    $(this).toggleClass('active');
                    return false;
                });

                obj.opts.on('click', function() {
                    var opt = $(this);
                    obj.val = opt.text();
                    obj.index = opt.index();
                    obj.placeholder.text(obj.val);
                });
            }
        }

        $(function() {
            var dd1 = new dropDown($('#myDropdown2nd'));

            $(document).click(function() {
                $('.wrapper-dropdown').removeClass('active');
            });
        });

        function dropDown(el) {
            this.dd = el;
            this.placeholder = this.dd.children('span');
            this.opts = this.dd.find('ul.dropdown > li');
            this.val = '';
            this.index = -1;
            this.initEvents();
        }
        dropDown.prototype = {
            initEvents: function() {
                var obj = this;

                obj.dd.on('click', function() {
                    $(this).toggleClass('active');
                    return false;
                });

                obj.opts.on('click', function() {
                    var opt = $(this);
                    obj.val = opt.text();
                    obj.index = opt.index();
                    obj.placeholder.text(obj.val);
                });
            }
        }

        $(function() {
            var dd1 = new dropDown($('#myDropdown3rd'));

            $(document).click(function() {
                $('.wrapper-dropdown').removeClass('active');
            });
        });

        function dropDown(el) {
            this.dd = el;
            this.placeholder = this.dd.children('span');
            this.opts = this.dd.find('ul.dropdown > li');
            this.val = '';
            this.index = -1;
            this.initEvents();
        }
        dropDown.prototype = {
            initEvents: function() {
                var obj = this;

                obj.dd.on('click', function() {
                    $(this).toggleClass('active');
                    return false;
                });

                obj.opts.on('click', function() {
                    var opt = $(this);
                    obj.val = opt.text();
                    obj.index = opt.index();
                    obj.placeholder.text(obj.val);
                });
            }
        }
    </script>
</body>

</html>