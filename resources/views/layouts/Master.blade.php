<!doctype html>
<html lang="{{ app()->getLocale() }}" style="height:100%">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>{{ $title or '刀劍神域Alicization Rising Steel' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="Shortcut Icon" type="image/x-icon" href="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" integrity="sha256-9vPVPdIkAmHxV2la3zhqXAgBQpjBn2LM9jzRYploktA=" crossorigin="anonymous" /-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="{{ asset('css/masterbase.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N9R8Y3MZBV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N9R8Y3MZBV');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146643945-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146643945-1');
</script>
    <style>
        .nv-h{
            padding-top: 35px;
        }

        .nav-link {
            z-index: 7;
            cursor: pointer;
        }

        .rote {
            -ms-transform: rotate(0deg);
            /* IE 9 */
            -webkit-transform: rotate(0deg);
            /* Safari prior 9.0 */
            transform: rotate(0deg);
            /* Standard syntax */
        }

        .topr0 {
            padding-top: 42px;
        }

        .topr1 {
            margin-top: 45px;
        }

        .topr2 {
            margin-top: 30px;
        }

        .topr3 {
            margin-top: 10px;
        }

        .topr4 {
            margin-top: -10px;
        }

        .log0{
            height:100%;
            background-image: url({{URL::asset('img/PC/bg-1.jpg')}});
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center;
            z-index:0;
            position: absolute;
        }

        .log00{
            height:100%;
            background-image: url({{URL::asset('img/PC/main_character.png')}});
            background-size:85%;
            background-repeat:no-repeat;
            background-position:bottom center;
            z-index:1;
            position: absolute;
        }

        .golog{
            width: 100%;
            padding-bottom: 4%;
            background-color: transparent;            
        }

        .btngolog{
            border: none;
            /*animation: twinkle 0.6s alternate infinite;*/
            animation: twinkle20 0.8s alternate infinite linear;
        }

        @keyframes twinkle20 {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            50% {
                -webkit-transform: scale3d(1.15, 1.15, 1.15);
                transform: scale3d(1.15, 1.15, 1.15);
            }
            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes twinkle {
            from {
                width: 20%;
            }

            to {
                width: 23%;
            }
        }

        .mainlogo{            
            width: 200px;
        }

        .rightnav{
            z-index: 5;
            right:0;
            position:absolute;
            margin-top: 10vmin;
            float:right ;
        }

        .maintitle{
            width: 68vmin;
            margin-top: 3vmin!important;
            margin-left: 39vw!important;
            z-index: 2!important;
            position: absolute;
            left: 0;
            right: 0;
            animation: maintitle 0.6s alternate infinite;
        }

        @keyframes maintitle {
            from {
                content: url({{asset('img/PC/main_title.png')}});                
            }

            to {
                content: url({{asset('img/PC/main_title_effect.png')}});
            }
        }

        .maintitle_2{
            width: 90vmin;
            margin-top: 10vmin!important;
            margin-left: 2vw!important;
            z-index: 2!important;
            position: absolute;
            left: 0;
            right: 0;
            animation: maintitle2 0.6s alternate infinite;
        }
        

        @keyframes maintitle2 {
            from {
                content: url({{asset('img/Mobile/main_title_m.png')}});                
            }

            to {
                content: url({{asset('img/Mobile/main_title_m_effect.png')}});
            }
        }

        .mainplay{
            width: 14vmin;
            margin-top: 25vmin!important;
            margin-left: 45vw!important;
            z-index: 2!important;
            position: absolute;
            left: 0;
            right: 0;
        }

        .mainplay:hover{
            content: url({{asset('img/PC/main_play_bt_effect.png')}});
            cursor: pointer;
        }

        
        @media (max-width: 1360.98px) {
            .maintitle{
                width: 68vmin;
                margin-top: 5vmin!important;
                margin-left: 29vw!important;
            }

            .mainplay{
                width: 13vmin;
                margin-top: 32vmin!important;
                margin-left: 45vw!important;
            }
        }

        @media (max-width: 960.98px) {
            .maintitle{
                width: 58vmin;
                margin-top: 10vmin!important;
                margin-left: 20vw!important;
            }
            .log00{
                background-size:100%;
            }

            .mainlogo{
                width: 180px;
            }

            .rightnav{
                margin-top: 160px;
            }
        }

        @media (max-width: 767.98px) {
            .nv-h{
                padding-top: 5px;
            }
            .rote {
                -ms-transform: rotate(0deg);
                /* IE 9 */
                -webkit-transform: rotate(0deg);
                /* Safari prior 9.0 */
                transform: rotate(0deg);
                /* Standard syntax */
            }

            nav {
                height: auto !important;
                background-image: url()!important;
                background-color: rgb(255, 255, 240, 0.7);
                /*background-color: azure;*/
                /*opacity: 0.7;*/
            }

            .log00{
                height: 100%;
                background-image: url({{URL::asset('img/Mobile/main_character_m.png')}});
                background-size:100%;
                background-position:bottom center;
            }

            .golog{
                padding-bottom: 13%;
            }

            .btngolog{
                width: 30%!important;
            }

            @keyframes twinkle {
                from {
                    width: 30%;
                }

                to {
                    width: 32%;
                }
            }

            .mainlogo{
                width: 120px;
                padding-left: 5px!important;
                padding-top: 5px;                
            }

            .rightnav{
                z-index: 2!important;
                margin-top: 140px;
            }

            .mainplay{
                width: 12.5vmin;
                margin-top: 45vmin!important;
                margin-left: 45vw!important;
            }

            .topr1 {
                margin-top: 10px;
            }
    
            .topr2 {
                margin-top: 0px;
            }
    
            /*.topr3 {
                padding-top: 24px;
            }*/
    
            .topr4 {
                margin-top: 0px;
            }

        }

        @media (max-width: 576.98px) {

            .topr0 {
                padding-top: 0px;
            }

            .log0{
                background-image: url({{URL::asset('img/Mobile/bg_m-1.jpg')}});                
            }

            .log00{
                background-size:120%;
            }

            .btngolog{
                width: 40%!important;
            }

            @keyframes twinkle {
                from {
                    width: 40%;
                }

                to {
                    width: 42%;
                }
            }

            .mainlogo{
                height: 30%;
                padding-left: 0px!important;
                padding-top: 5px; 
            }

            .maintitle_2{
                width: 95vmin;
                margin-top: 40vmin!important;
                margin-left: 0vw!important;
            }

            .mainplay{
                width: 12.5vmin;
                margin-top: 72.5vmin!important;
                margin-left: 45vw!important;
            }

        }
    </style>

</head>

<body
    style="font-family:Microsoft JhengHei;height:100%;">

    <div id="header" class="container-fluid m-0 p-0 " style="height:100%;overflow:hidden;" >



        <nav class="navbar navbar-expand-md navbar-light "
            style="height:180px;width:100%;background-image: url({{URL::asset('img/PC/bg.png')}});background-size: 1300px;background-repeat:no-repeat;position:absolute;z-index:3">
            <a class="" href="{{ route('Index') }}"><img id="mainlogo" class="mainlogo" src="{{URL::asset('img/PC/logo.png')}}" alt=""></a>

            <button class="navbar-toggler ml-auto mr-1" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mb-2 mt-lg-0 rote" style="z-index:6;">
                    <li class="nav-item active rote px-2 topr1">
                        <div id="top" class="nav-link"><input class="btntop" type="image" src="{{URL::asset('img/PC/menu_01_on.png')}}" style="width:90px;"></div>
                    </li>
                    <li class="nav-item rote px-2 topr2">
                        <div id="login" class="nav-link"><input class="btnmenu02" type="image" src="{{URL::asset('img/PC/menu_02.png')}}" style="width:80px;"></div>
                    </li>
                    <li class="nav-item rote px-2 topr3">
                        <div id="Reward" class="nav-link"><input class="btnmenu03" type="image" src="{{URL::asset('img/PC/menu_03.png')}}" style="width:80px;"></div>
                    </li>
                    <li class="nav-item rote px-2 topr4">
                        <div id="friends" class="nav-link"><input class="btnmenu04" type="image" src="{{URL::asset('img/PC/menu_04.png')}}" style="width:80px;"></div>
                    </li>
                </ul>
            </div>

            
            
            
        </nav>
        
        

        @include('saoLoad')     

        



    </div>

    <div class="container-fluid m-0 p-0 " style="height:80%;">
        @yield('content')
    </div>



    <!-- Optional JavaScript -->

    <!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"
        integrity="sha256-Tb4gdeCN/ACKmhKQ3BSfbuNgIVYQzBlEvbYlwK7juDw=" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    <script>
        $(function () {
            $('.navbar li').click(function(){
                $('.navbar-toggler').click();
            });


            $("#top").click(function () {
                $('html,body').animate({ scrollTop: '0px' }, 800);
                $(".btntop").attr("src","{{URL::asset('img/PC/menu_01_on.png')}}").css("width","90px");
                $(".btnmenu02").attr("src","{{URL::asset('img/PC/menu_02.png')}}").css("width","80px");
                $(".btnmenu03").attr("src","{{URL::asset('img/PC/menu_03.png')}}").css("width","80px");
                $(".btnmenu04").attr("src","{{URL::asset('img/PC/menu_04.png')}}").css("width","80px");
                btntopOn();
            });

            btntopOn();
            function btntop(){
                $(".btntop").hover(function(){
                    $(this).attr("src","{{URL::asset('img/PC/menu_01_effect.png')}}");
                },function() {
                    $(this).attr("src","{{URL::asset('img/PC/menu_01.png')}}");
                });
            }

            function btntopOn(){
                $(".btntop").hover(function(){
                    $(this).attr("src","{{URL::asset('img/PC/menu_01_on_effect.png')}}");
                },function() {
                    $(this).attr("src","{{URL::asset('img/PC/menu_01_on.png')}}");
                });
            }          


            $('#golog').click(function () {
                $('html,body').animate({ scrollTop: $('#log').offset().top }, 800);
                $(".btntop").attr("src","{{URL::asset('img/PC/menu_01.png')}}").css("width","40px");
                $(".btnmenu02").attr("src","{{URL::asset('img/PC/menu_02_on.png')}}").css("width","100px");
                $(".btnmenu03").attr("src","{{URL::asset('img/PC/menu_03.png')}}").css("width","80px");
                $(".btnmenu04").attr("src","{{URL::asset('img/PC/menu_04.png')}}").css("width","80px");
                btntop();
            });

            $('#login').click(function () {
                $('html,body').animate({ scrollTop: $('#log').offset().top }, 800);
                $(".btntop").attr("src","{{URL::asset('img/PC/menu_01.png')}}").css("width","40px");
                $(".btnmenu02").attr("src","{{URL::asset('img/PC/menu_02_on.png')}}").css("width","100px");
                $(".btnmenu03").attr("src","{{URL::asset('img/PC/menu_03.png')}}").css("width","80px");
                $(".btnmenu04").attr("src","{{URL::asset('img/PC/menu_04.png')}}").css("width","80px");
                btntop();
            });

            $('#Reward').click(function () {
                $('html,body').animate({ scrollTop: $('#log2').offset().top }, 800);
                $(".btntop").attr("src","{{URL::asset('img/PC/menu_01.png')}}").css("width","40px");
                $(".btnmenu02").attr("src","{{URL::asset('img/PC/menu_02.png')}}").css("width","80px");
                $(".btnmenu03").attr("src","{{URL::asset('img/PC/menu_03_on.png')}}").css("width","100px");
                $(".btnmenu04").attr("src","{{URL::asset('img/PC/menu_04.png')}}").css("width","80px");
            });

            $('#friends').click(function () {
                $('html,body').animate({ scrollTop: $('#log3').offset().top }, 800);
                $(".btntop").attr("src","{{URL::asset('img/PC/menu_01.png')}}").css("width","40px");
                $(".btnmenu02").attr("src","{{URL::asset('img/PC/menu_02.png')}}").css("width","80px");
                $(".btnmenu03").attr("src","{{URL::asset('img/PC/menu_03.png')}}").css("width","80px");
                $(".btnmenu04").attr("src","{{URL::asset('img/PC/menu_04_on.png')}}").css("width","100px");
            });
        });

        $(window).resize(function() {
            var wdth=$(window).width();
            var winWidth = window.innerWidth;
            if (winWidth < 768) {
                $('#maintitle').attr("src","{{asset('img/Mobile/main_title_m.png')}}").removeClass('maintitle').addClass('maintitle_2');
                $('.navbar-nav').removeClass('mb-2');
                $('#mainlogo').attr("src","{{asset('img/Mobile/logo_m.png')}}");
    
            }else if(winWidth > 768){
                $('#maintitle').attr("src","{{asset('img/PC/main_title.png')}}").removeClass('maintitle_2').addClass('maintitle');
                $('.navbar-nav').addClass('mb-2');
                $('#mainlogo').attr("src","{{asset('img/PC/logo.png')}}");
            }
        });
        var winWidth = window.innerWidth;
        if (winWidth <= 768) {
            $('#maintitle').attr("src","{{asset('img/Mobile/main_title_m.png')}}").removeClass('maintitle').addClass('maintitle_2');
            $('#mainlogo').attr("src","{{asset('img/Mobile/logo_m.png')}}");
        }else if(winWidth > 768){
            $('#maintitle').attr("src","{{asset('img/PC/main_title.png')}}").removeClass('maintitle_2').addClass('maintitle');
            $('#mainlogo').attr("src","{{asset('img/PC/logo.png')}}");
        }

        var items = document.getElementsByClassName("layer");
        document.addEventListener('mousemove', function (evt) {
            var x = evt.clientX;
            var y = evt.clientY;
            //console.log(x); 
            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;
            if (winWidth > 768) {
                var halfWidth = winWidth / 2;
                var halfHeight = winHeight / 2;
                var rx = x - halfWidth;
                var ry = halfHeight - y;
                var length = items.length;
                var max = 70;
                for (var i = 0; i < length; i++) {
                    var dx = (items[i].getBoundingClientRect().width / max) * (rx / -halfWidth);
                    var dy = (items[i].getBoundingClientRect().height / max) * (ry / halfHeight);
                    items[i].style['transform'] = items[i].style['-webkit-transform'] = 'translate(0px,'+ dy +'px)';
                }
            }else{
                items[0].style['transform'] = items[0].style['-webkit-transform'] = 'translate(0px,0px)';
            }

        }, false);

    </script>
</body>

</html>