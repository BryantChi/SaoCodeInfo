<style>

    .sub02title{
        width: 70vmin!important;
        margin-top: 10vmin!important;
        margin-left: 25vw!important;
        z-index: 2!important;
        position: absolute;
        left: 0;
        right: 0;
        animation: sub2title 0.6s alternate infinite;
    }

    @keyframes sub2title{
        from {
            content: url({{asset('img/PC/sub02_title.png')}});                
        }

        to {
            content: url({{asset('img/PC/sub02_title_effect.png')}});
        }
    }


    .sub02title_2{
        width: 100vmin!important;
        margin-top: 25vmin!important;
        /*margin-left: 10vw!important;*/
        z-index: 2!important;
        position: absolute;
        left: 0;
        right: 0;
        animation: sub2title2 0.6s alternate infinite;
    }

    @keyframes sub2title2{
        from {
            content: url({{asset('img/Mobile/sub02_title_m.png')}});                
        }

        to {
            content: url({{asset('img/Mobile/sub02_title_m_effect.png')}});
        }
    }

    .sub02gift{
        width: 90vmin!important;
        margin-top: 30vmin!important;
        margin-left: 20vw!important;
        z-index: 2!important;
        position: absolute;
        left: 0;
        right: 0;
    }

    .sub02tree{
        width: 75vmin!important;
        /*margin-top: 2vmin!important;*/
        margin-left: 55vw!important;
        z-index: 1!important;
        position: absolute;
        left: 0;
        right: 0;        
        overflow: hidden!important;
        /*animation: sub2tree 2s alternate infinite;*/
    }

    /*@keyframes sub2tree{
        0% {
            content: url({{asset('img/PC/sub02_tree0.png')}});                
        }

        33% {
            content: url({{asset('img/PC/sub02_tree20.png')}});
        }

        66% {
            content: url({{asset('img/PC/sub02_tree30.png')}});
        }

        100% {
            content: url({{asset('img/PC/sub02_tree40.png')}});
        }
    }*/

    .sub02character{
        width: 60vmin!important;
        margin-top: -6vmin!important;
        margin-left: 59vw!important;
        z-index: 1!important;
        position: absolute;
        left: 0;
        right: 0;
    }


    @media (max-width: 1200.98px ) {

        .sub02title{
            width: 60vmin!important;
            margin-top: 10vmin!important;
            margin-left: 22vw!important;
        }

        .sub02gift{
            width: 80vmin!important;
            margin-top: 30vmin!important;
            margin-left: 12vw!important;
        }


    }

    @media (max-width: 960.98px ) {

        .sub02title{
            margin-top: 15vmin!important;
        }

        .sub02gift{
            margin-top: 35vmin!important;
        }

        .sub02tree{
            width: 65vmin!important;
            margin-top: 16vmin!important;
            margin-left: 50vw!important;
        }

        .sub02character{
            width: 50vmin!important;
            margin-top: 16vmin!important;
            margin-left: 55vw!important;
        }
    }

    @media (max-width: 860.98px) {
        .sub02title{
            margin-top: 30vmin!important;
        }

        .sub02gift{
            margin-top: 49vmin!important;
        }

        .sub02tree{
            margin-top: 28vmin!important;
        }
        .sub02character{
            margin-top: 26vmin!important;
        }
    }

    @media (max-width: 768.98px) {
        .sub02title_2{
            width: 100%!important;
            margin-top:0!important;
            z-index: auto!important;
            position:relative;
            float:left;
        }
        .sub02gift{
            width: 95%!important;
            margin-left: 0vw!important;
            content: url({{asset('img/Mobile/sub02_gift0_m.png')}});
            margin-top:0!important;
            z-index: auto!important;
            position:relative;
            float:left;
        }
        .sub02tree{
            display: none;
        }
        .sub02character{
            display: none;
        }
    }

    @media (max-width: 576.98px) {
        .sub02title_2{
            width: 100%!important;            
        }
        .sub02gift{
            margin-left: 0vw!important;
        }
    }

</style>

<div class="" style="height:100%;position:relative;overflow: hidden!important;" >
    <img id="sub02title" class="sub02title" src="{{asset('img/PC/sub02_title.png')}}" alt="">
    <img id="sub02gift" class="sub02gift" src="{{asset('img/PC/sub02_gift0.png')}}" alt="">
    <img id="sub02tree" class="sub02tree" src="{{asset('img/PC/sub02_tree0.png')}}" alt="" >
    <img id="sub02character" class="sub02character" src="{{asset('img/PC/sub02_character.png')}}" alt="">
</div>

<script>
        $(window).resize(function() {
            var wdth=$(window).width();
            var winWidth = window.innerWidth;
            if (winWidth < 768) {
                $('#sub02title').attr("src","{{asset('img/Mobile/sub02_title_m.png')}}").removeClass('sub02title').addClass('sub02title_2');
    
            }else if(winWidth > 768){
                $('#sub02title').attr("src","{{asset('img/PC/sub02_title.png')}}").removeClass('sub02title_2').addClass('sub02title');
            }
        });
        var winWidth = window.innerWidth;
        if (winWidth <= 768) {
            $('#sub02title').attr("src","{{asset('img/Mobile/sub02_title_m.png')}}").removeClass('sub02title').addClass('sub02title_2');
    
        }else if(winWidth > 768){
            $('#sub02title').attr("src","{{asset('img/PC/sub02_title.png')}}").removeClass('sub02title_2').addClass('sub02title');
        }


        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $.ajax({ 
            url: "{{ route('SaoLoginCount') }}" , 
            type: 'POST',
            data: { _token : '<?php echo csrf_token()?>' },
            dataType: 'json', 
            success: function(datas){ 
                console.log(datas.res);
                if(parseInt(datas.res) >= 100000){
                    var winWidth = window.innerWidth;
                    if (winWidth <= 768) {
                        $('#sub02gift').attr("src","{{asset('img/PC/sub02_gift10_get.png')}}");

                    }else if(winWidth > 768){
                        $('#sub02gift').attr("src","{{asset('img/Mobile/sub02_gift10_m.png')}}");
                    }
                }else if(parseInt(datas.res) >= 200000 && parseInt(datas.res) < 300000){
                    var winWidth = window.innerWidth;
                    if (winWidth <= 768) {
                        $('#sub02gift').attr("src","{{asset('img/PC/sub02_gift20_get.png')}}");
                        $('#sub02tree').attr("src","{{asset('img/PC/sub02_tree20.png')}}");

                    }else if(winWidth > 768){
                        $('#sub02gift').attr("src","{{asset('img/Mobile/sub02_gift20_m.png')}}");
                    }
                }else if(parseInt(datas.res) >= 300000 && parseInt(datas.res) < 400000){
                    var winWidth = window.innerWidth;
                    if (winWidth <= 768) {
                        $('#sub02gift').attr("src","{{asset('img/PC/sub02_gift30_get.png')}}");
                        $('#sub02tree').attr("src","{{asset('img/PC/sub02_tree30.png')}}");

                    }else if(winWidth > 768){
                        $('#sub02gift').attr("src","{{asset('img/Mobile/sub02_gift30_m.png')}}");
                    }
                }else if(parseInt(datas.res) >= 400000){
                    var winWidth = window.innerWidth;
                    if (winWidth <= 768) {
                        $('#sub02gift').attr("src","{{asset('img/PC/sub02_gift40_get.png')}}");
                        $('#sub02tree').attr("src","{{asset('img/PC/sub02_tree40.png')}}");

                    }else if(winWidth > 768){
                        $('#sub02gift').attr("src","{{asset('img/Mobile/sub02_gift40_m.png')}}");
                    }
                }
                
            }, 
            error: function(xhr, type){ 
                alert('Ajax error!') 
            } 
        });
</script>