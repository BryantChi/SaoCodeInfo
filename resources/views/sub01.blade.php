<style>
    label, input {
			vertical-align: middle!important;
		}

    label{
        margin-bottom: 0;
    }

    .googleicon{
        width: 20vmin!important;
    }

    

    .appleicon{
        width: 16.5vmin!important;
        
    }

    


    @media (max-width: 767.98spx){
        .googleicon{
            width: 30vmin!important;
        }

        .appleicon{
            width: 26.5vmin!important;
        }
    }

</style>
<div class="" style="height:100%;overflow:hidden;" >
    <img id="sub01title" class="sub01title" src="{{asset('img/PC/sub01_title.png')}}" alt="">
    
    <img class="sub01girl" src="{{asset('img/PC/character.png')}}" alt="">  
    <img class="sub01girl" style="z-index: 0!important;position:absolute;" src="{{asset('img/PC/sub01_character.png')}}" alt="">  
    <div class="loginForm font-weight-bold text-center">
        <table class="mx-auto" style="" >

            <tr>
                <td class="" style="">

        <div class="pt-4 mt-2">
            <label for="">選擇裝置</label>
            <div class="form-check form-check-inline pr-1 pl-3">
                <input class="form-check-input" type="radio" name="mobiletype" id="Android" value="Android" checked>
                <label class="form-check-label" for="Android">Android</label>
            </div>
            <div class="form-check form-check-inline pr-3 pl-1">
                <input class="form-check-input" type="radio" name="mobiletype" id="iOS" value="iOS">
                <label class="form-check-label" for="iOS">iOS</label>
            </div>

        </div>

        <div class="pt-1">
            <label for="">登入FB+粉絲團按讚</label>
            <div class="fb-like" data-href="https://www.facebook.com/saoars.as/" data-width="" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
            
        </div>

        <div class="pt-1">
            <label for="tel">請輸入手機號碼(台灣/香港)</label>

            <input type="tel" name="tel" id="tel" class="form-control mx-auto" style="width:75%;" placeholder="">
        </div>

        
        <div class="pt-1 gree" style="">
            <div class="">
                <input class="" type="checkbox" name="agreeAll" id="agreeAll" value="agreeAll" >
                <label class="" for="agreeAll">                        
                    同意所有内容
                </label>
            </div>
        </div>
        <hr>
        <div class="gree" style="">
            <div class="form-check">
                <input class="" type="checkbox" name="agree01" id="agree01" value="agree01" >
                <label class="" for="agree01">                        
                    同意個人訊息搜集和使用<font color="red">（必須）</font>
                </label>
                <a href="{{ route('Usageagreement') }}" target="_blank"><img class="privacybtn" type="image" src="{{asset('img/PC/sub01_bt1_1.gif')}}" alt=""></a>
                
            </div>
            
        </div>
        <div class="gree" style="">
            <div class="form-check">
                <input class="" type="checkbox" name="agree02" id="agree02" value="agree02" >
                <label class="" for="agree02" >                        
                    同意個人訊息處理委托<font color="red">（必須）</font>
                </label>
                <a href="{{ route('Privacy-policy') }}" target="_blank"><img class="privacybtn" type="image" src="{{asset('img/PC/sub01_bt1_1.gif')}}" alt=""></a>
            </div>            
        </div>

        <div class="pt-2 text-center">
            <input id="login" class="btngolog2" type="image" onclick="saologin();" src="{{URL::asset('img/PC/main_bt.png')}}">
        </div>

                </td>

            </tr>

        </table>
        
    </div>

    <div class="applink text-center" style="display:none;">
        <a href="https://play.google.com/store/apps/details?id=com.bandainamcoent.saoars">
            <img class="googleicon" type="image" src="{{URL::asset('img/PC/app_google_big.png')}}" alt="">
        </a>
        <a href="https://apps.apple.com/us/app/id1474952614">
            <img class="appleicon" type="image" src="{{URL::asset('img/PC/app_ios_big.png')}}" alt="">
        </a>
    </div>
    
    <div style="clear: both;"></div>

</div>

<script>
        $('#agreeAll').click(function(){
            if($('#agreeAll').prop("checked")){
                $('#agree01').prop("checked",true);
                $('#agree02').prop("checked",true);
            }else{
                $('#agree01').prop("checked",false);
                $('#agree02').prop("checked",false);
            }
        });

        $('#agree01').click(function(){
            if($('#agree01').prop("checked") && $('#agree02').prop("checked")){
                $('#agreeAll').prop("checked",true);
            } else {
                $('#agreeAll').prop("checked",false);
            }
        });
        $('#agree02').click(function(){
            if($('#agree01').prop("checked") && $('#agree02').prop("checked")){
                $('#agreeAll').prop("checked",true);
            } else {
                $('#agreeAll').prop("checked",false);
            }
        });

        var thetime = '2019-09-14 12:00:00';
        var d = new Date(Date.parse(thetime .replace(/-/g,"/")));

        var curDate = new Date();
        if(d <= curDate){
            $('.applink').show();
        }

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        function saologin(){
            if($('#agree01').prop("checked") && $('#agree02').prop("checked")){                
                var code = '<?php echo (isset($_GET["code"]))?$_GET["code"]:''; ?>';console.log('sode:'+code);
                var mobiletype = $('input[name=mobiletype]:checked').val();
                var phone = $('#tel').val();console.log('sode2:'+phone);
                var rule = /^09[0-9]{8}$/;
                var rule2 = /^(5|6|8|9)[0-9]{7}$/;
                if(rule.test(phone) || rule2.test(phone)){
                    var location = "";
                    if(rule.test(phone)){
                        location = "台灣";
                    }
                    
                    if(rule2.test(phone)){
                        location = "香港";
                    }

                    FB.getLoginStatus(function(response) {
                        
                        if (response.status === 'connected') {
                            var accessToken = response.authResponse.accessToken;//console.log(accessToken);
                            FB.api('/me?fields=id,name,email', function(response) {
                                var fbid = response.id;
                                var fbname = response.name;
                                var fbemail = response.email;
                                $.ajax({ 
                                    url: "{{ route('SaoLogin') }}" , 
                                    type: 'POST',
                                    data: { _token : '<?php echo csrf_token()?>', tel : phone, type : mobiletype, id : fbid, name : fbname, mail : fbemail, codes: code, locations: location,accessToken:accessToken  },
                                    dataType: 'json', 
                                    success: function(data){ 
                                        //console.log(data.res);
                                        if(data.res == "true"){
                                            alert('恭喜 事前登錄成功!!!');
                                            $('input[name="mobiletype"]')[0].checked = true;
                                            $('#tel').val('');
                                            $('#agreeAll').prop("checked", false);
                                            $('#agree01').prop("checked", false);
                                            $('#agree02').prop("checked", false);
                                        }else if(data.res == "手機號碼重複!!!"){
                                            alert('手機號碼不可重複登錄!!!');
                                        }else if(data.res == "已登錄過!!!"){
                                            alert('您已經登錄過了!!!');
                                        }
                            
                                    }, 
                                    error: function(xhr, type){ 
                                        alert('Ajax error!') ;
                                    } 
                                });
                            });
                        }else{
                            
                            FB.login(function(response) {
                                if (response.authResponse) {
                                    //console.log('Welcome!  Fetching your information.... ');
                                    var accessToken = response.authResponse.accessToken;
                                    FB.api('/me?fields=id,name,email', function(response) {                                        
                                        var fbid = response.id;
                                        var fbname = response.name;
                                        var fbemail = response.email;    
                                                                            
                                        $.ajax({ 
                                            url: "{{ route('SaoLogin') }}" , 
                                            type: 'POST',
                                            data: { _token : '<?php echo csrf_token()?>', tel : phone, type : mobiletype, id : fbid, name : fbname, mail : fbemail, codes: code, locations: location,accessToken:accessToken },
                                            dataType: 'json', 
                                            success: function(data){ 
                                                //console.log(data.res);                                                
                                                if(data.res == "true"){                                                                                                        
                                                    alert('恭喜 事前登錄成功!!!');
                                                    $('input[name="mobiletype"]')[0].checked = true;
                                                    $('#tel').val('');
                                                    $('#agreeAll').prop("checked", false);
                                                    $('#agree01').prop("checked", false);
                                                    $('#agree02').prop("checked", false);
                                                }else if(data.res == "手機號碼重複!!!"){
                                                    alert('手機號碼不可重複登錄!!!');
                                                }else if(data.res == "已登錄過!!!"){
                                                    alert('您已經登錄過了!!!');
                                                }
                            
                                            }, 
                                            error: function(xhr, type){ 
                                                alert('Ajax error!') ;
                                            } 
                                        });
                                    });
                                } else {
                                    console.log('User cancelled login or did not fully authorize.');
                                }
                            });
                        }
                    });

                    
                }else{
                    alert('電話號碼格式錯誤!!!');
                }
            }else{
                alert('尚未同意用戶協議&隱私保護聲明!!!');
            }
            
        }



       
</script>