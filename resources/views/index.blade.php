@extends('layouts.Master')


@section('content')
<style>
    .log {
        height: 140%;
        background-image: url({{asset('img/PC/bg-2.jpg')}});
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
    }

    .log2 {
        height: 140%;
        background-image: url({{asset('img/PC/bg-3.jpg')}});
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
    }

    .log3 {
        height: 140%;
        background-image: url({{asset('img/PC/bg-4.jpg')}});
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
    }

    .log4 {
        height: auto;
    }

    .gree{
        font-size: 2.5vmin;
    }

    .privacybtn{
        width: 8vmin;
        cursor: pointer;
    }

    .privacybtn:hover{
        content: url({{asset('img/PC/sub01_bt1_2.gif')}}); 
    }

    .loginForm{
        padding-top: 4vmin;
        padding-bottom: 4vmin;
        width: 75vmin;
        min-height:509px;
        margin-left: 36vw;
        background-image:url({{asset('img/PC/sub01_box.png')}});
        background-size:100% 100%;
        background-repeat:no-repeat;
        margin-top:42vmin;        
        font-family:Microsoft JhengHei;
        font-size:2.8vmin;
        z-index: 1!important;
        position:absolute;
    }

    .sub01title{
        width: 75vmin;
        margin-top: 10vmin!important;
        margin-left: 34vw!important;
        z-index: 1!important;
        position: absolute;
        left: 0;
        right: 0;
        animation: sub1title 0.6s alternate infinite;
    }

    @keyframes sub1title{
        from {
            content: url({{asset('img/PC/sub01_title.png')}});                
        }

        to {
            content: url({{asset('img/PC/sub01_title_effect.png')}});
        }
    }

    .sub01title_2{
        width: 80%;
        /*margin-top: 13vmin!important;*/
        margin-left: 10vw!important;
        z-index: 1!important;
        position: absolute;
        left: 0;
        right: 0;
        animation: sub1title2 0.6s alternate infinite;
    }

    @keyframes sub1title2{
        from {
            content: url({{asset('img/Mobile/sub01_title_m.png')}});                
        }

        to {
            content: url({{asset('img/Mobile/sub01_title_m_effect.png')}});
        }
    }

    .sub01girl{
        margin-top: 28vh;
        margin-left: 10vw;
        height: 80vmin;
        z-index:2;
        position: absolute;
    }

    .applink{
        margin-top: 100vmin!important;
        margin-left: 43vw!important;        
    }

    
    .btngolog2{
        border: none;
        animation: twinkle2 0.6s alternate infinite;
    }

    @keyframes twinkle2 {
        from {
            width: 34%;
        }

        to {
            width: 37%;
        }
    }

    .sub04notice{
        width: 18vmin;
    }

    @media (max-width: 1630.98px) {

        .loginForm{
            margin-left: 38vw!important;
       }
    }

    @media (max-width: 1400.98px) {
        .sub01girl{
            margin-left: 5vw!important;
        }
        .loginForm{
            margin-left: 40vw!important;
       }
    }

    @media (max-width: 1360.98px) {
       .loginForm{
            margin-left: 39vw!important;            
       }

       .sub01girl{
            height: 70vmin;
            margin-left: 1vw;
       }
    }
    

    @media (max-width: 1200.98px) {
       .loginForm{
           width: 60vmin;
       }
       .sub01title{
           width: 60vmin;
           margin-top: 15vw!important;
        }
       .sub01girl{
            margin-left: 3vw!important;
       }
    }

    @media (max-width: 1120.98px) {
       .loginForm{
            margin-left: 40vw!important;
        }

        .sub01girl{
            
            margin-left: 0vw!important;
       }
    }

    @media (max-width: 1000.98px) {
       .sub01girl{
            height: 65vmin;
            margin-left: 0vw!important;
       }
       .loginForm{
            margin-left: 38vw!important;
        }
    }

    @media (max-width: 960.98px) {
       .loginForm{
            width: 55min;
            margin-left: 37vw!important;
       }
       .sub01girl{
            height: 60vmin;
       }
    }

    @media (max-width: 860.98px) {
        .applink{
            margin-top: 102vmin!important;
            margin-left: 38vw!important;        
        }
    }

    @media (max-width: 768.98px) {

        .log {
            background-image: url({{asset('img/Mobile/bg_m-2.jpg')}});
    }

    .log2 {
        background-image: url({{asset('img/Mobile/bg_m-3.jpg')}});
    }

    .log3 {
        background-image: url({{asset('img/Mobile/bg_m-4.jpg')}});
    }

        .loginForm{
            background-image:url({{asset('img/Mobile/sub01_box_m.png')}});
            margin-left: auto!important;
            margin-right: auto!important;
            min-height:461px;
            width: 100%;
            font-size:3.5vmin;
            margin-top:60vmin!important; 
            left: 0;
            right: 0;           
        }

        .sub01girl{
            display: none;
        }

        .sub01title_2{
            width: 100%;
            margin-top: 24vmin!important;
            margin-left: 0!important;
        }

        .applink{
            margin-top: 124vmin!important;
            margin-left: auto!important;      
            z-index: 1!important;
            position: absolute;
            left: 0;
            right: 0; 
            text-align: center;
        }

        .sub04notice{
            width: 24vmin;
        }
    }

    @media (max-width: 576.98px) {
        

        .loginForm{
            min-height:420px;
            margin-left: auto!important;
            margin-right: auto!important;
            margin-top:78vmin!important;
            font-size:5vmin;
        }
        .sub01title_2{
           margin-top: 40vmin!important;
            
        }

        .applink{
            margin-top: 176vmin!important;
        }

        .applink>img{
            width: 40vmin;
        }

        .sub04notice{
            width: 27.5vmin;
        }

    }

    @media (max-width: 360.98px) {
        .applink{
            margin-top: 182vmin!important;
        }
    }
</style>
<div id="log" class="log" style="">

    
    @include('sub01')


</div>

<div id="log2" class="log2" style="">

    @include('sub02')
    

</div>

<div id="log3" class="log3" style="">

    @include('sub03')

</div>

<div id="log4" class="text-left log4" style="font-family:Microsoft JhengHei;position: relative;">

    <div class="container">
        <table class="mx-auto">
            <tr>
                <td><span>※Apple 和 Apple 標誌是 Apple Inc. 在美國和其他國家或地區註冊的商標。<br>
                    &nbsp;&nbsp;&nbsp;App Store 是 Apple Inc. 的服務商標</span></td>
            </tr>
            <tr>
                <td>
                    <span>※Google Play™️和 Google Play™️標誌均為 Google Inc. 的商標或註冊商標。</span>
                </td>
            </tr>
        </table>        
    </div>

    <hr>

    <div class="container-fuild pt-5" >
        <table class="mx-auto pt-5">
            <tr>
                <td ><img id="sub04notice" class="sub04notice" src="{{asset('img/PC/notice.png')}}" alt=""></td>
            </tr>
            <tr>
                <td class="px-5 mx-5">
                        <p> - 如有發現使用不當或非法手段參與活動，官方有權取消改玩家及所有相關帳號之獲獎資格。</p>
                        <p> - 事前登錄活動時間為開始日起至遊戲開放當天的 23：59：59。</p>
                        <p> - 每個Facebook帳號及電話號碼僅限參與一次登錄活動。</p>
                        <p> - 登錄人數達指定目標時，將贈送該檔次以下的相對應所有獎勵</p>
                        <p> （範例：登錄人數達到30萬人時，將贈送全體玩家 10萬人+20萬人 + 30萬人的獎勵）</p>
                        <p> - 好友邀請相關獎品將於活動結束後30天内隨機抽出，並通過官方粉絲團公佈後發獎，贈品僅限寄送台灣地區。</p>
                        <p> - 如有未盡事宜，主辦單位保有變更、調整及終止活動之權利，變更內容將由官方網站或者官方粉絲團公告，恕不另行通知。</p>
                        <p> - 活動所有獎勵不得轉讓、折抵現金，若拒絕領取規則視同放棄得獎資格。</p>
                        <p> - 盜用他人的個人訊息時，將取消得獎資格並有可能追究刑事責任。</p>
                        <p> - 如需諮詢個人訊息搜集及其他活動相關事項的更多訊息，請聯絡客服中心：bdtoweb@gmail.com。</p>
                        <p> - 如個人資料輸入錯誤導致發生的問題，恕不補發。</p>
                        <p> - 如設置了簡訊過濾設定，將有可能無法正常接收提示簡訊。</p>
                        <p> - 已完成登錄的資料，將無法修改。</p>
                        <p> - 注意使用時間、避免沉迷。</p>
                        <p> - 遊戲部分內容或服務需另行支付其他費用。</p>
                        <p> - 遊戲虛擬情節勿模仿。</p>
                        <p> - 本遊戲涉及性、暴力、戀愛等內容。</p>
                        <p> - 網頁技術諮詢請來信：boundads@gmail.com。</p>
                </td>
            </tr>

            <tr>
                <td>
                        

                </td>
            </tr>
        </table>

        <div class="footer pt-3 pb-3 text-center" style="background-color:#acb0b4;width:100%;">

                <div class="container-fuild" >
                    <table class="mx-auto p-5">
                        <tr>
                            <td>
                                    ©RK/K/SA                            
                            </td>
                            <td rowspan="2">
                                <img class="px-2" width="80" src="{{asset('img/PC/pg12.jpg')}}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    ©BNEI
                            </td>
                        </tr>
                    </table>
                </div>
        
            </div>
        
    </div>

</div>

<img id="backtop" style="position:fixed;z-index:999;right:0;bottom:0;width:8vmin;margin-right:20px;margin-bottom:20px;cursor:pointer;opacity: 0.6;" 
      src="{{ asset('img/PC/back-to-top.png') }}" alt="">

<script>
        window.fbAsyncInit = function() {
          FB.init({
            appId            : '706875053070063',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v4.0',
            display:'page'
          });
        };
    
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/zh_TW/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
      <script async defer src="https://connect.facebook.net/zh_TW/sdk.js"></script>
<script>
    $('#backtop').fadeOut();
    $('#backtop').click(function(){
        $('html,body').animate({ scrollTop: '0px' }, 800);
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 400){
            $('#backtop').fadeIn();
        } else {
            $('#backtop').fadeOut();
        }
    });


    $(window).resize(function() {
        var wdth=$(window).width();
        var winWidth = window.innerWidth;
        if (winWidth < 768) {
            $('#sub01title').attr("src","{{asset('img/Mobile/sub01_title_m.png')}}").removeClass('sub01title').addClass('sub01title_2');

        }else if(winWidth > 768){
            $('#sub01title').attr("src","{{asset('img/PC/sub01_title.png')}}").removeClass('sub01title_2').addClass('sub01title');
        }
    });
    var winWidth = window.innerWidth;
    if (winWidth <= 768) {
        $('#sub01title').attr("src","{{asset('img/Mobile/sub01_title_m.png')}}").removeClass('sub01title').addClass('sub01title_2');

    }else if(winWidth > 768){
        $('#sub01title').attr("src","{{asset('img/PC/sub01_title.png')}}").removeClass('sub01title_2').addClass('sub01title');
    }



   


</script>

@endsection