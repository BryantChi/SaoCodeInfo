<style>

        .sub03title{
            width: 60vmin!important;
            margin-top: 10vmin!important;
            margin-left: 38vw!important;
            z-index: 2!important;
            position: absolute;
            left: 0;
            right: 0;
            animation: sub3title 0.6s alternate infinite;
        }
    
        @keyframes sub3title{
            from {
                content: url({{asset('img/PC/sub03_title.png')}});                
            }
    
            to {
                content: url({{asset('img/PC/sub03_title_effect.png')}});
            }
        }

        .sub03title_2{
            width: 100vmin!important;
            margin-top: 25vmin!important;
            /*margin-left: 10vw!important;*/
            z-index: 2!important;
            position: absolute;
            left: 0;
            right: 0;
            animation: sub3title2 0.6s alternate infinite;
        }
    
        @keyframes sub3title2{
            from {
                content: url({{asset('img/Mobile/sub03_title_m.png')}});                
            }
    
            to {
                content: url({{asset('img/Mobile/sub03_title_m_effect.png')}});
            }
        }

        .sub03content{
            width: 95vmin!important;
            margin-top: 38vmin!important;
            margin-left: 32vw!important;
            z-index: 1!important;
            position: absolute;
            left: 0;
            right: 0;
        }

        .sub03character{
            height: 90vmin!important;
            margin-top: 2vmin!important;
            margin-left: 6vw!important;
            z-index: 1!important;
            position: absolute;
            left: 0;
            right: 0;
        }

        .sub3btngroup{
            /*width: 90vmin!important;*/
            margin-top: 80vmin!important;
            margin-left: 43.5vw!important;
            z-index: 1!important;
            position: absolute;
            left: 0;
            right: 0;
            cursor: pointer;
        }

        .sub3url:hover{
            content: url({{asset('img/PC/sub03_bt1_2.png')}});
            cursor: pointer;
        }

        .sub3invite:hover{
            content: url({{asset('img/PC/sub03_bt2_2.png')}});
            cursor: pointer;
        }


        @media (max-width: 1500.98px ) {

            .sub03character{
                height: 90vmin!important;
                margin-top: 2vmin!important;
                margin-left: 4vw!important;
            }    

        }

        @media (max-width: 1400.98px ) {

            .sub03character{
                height: 90vmin!important;
                margin-top: 2vmin!important;
                margin-left: 3vw!important;
            }    

        }

        @media (max-width: 1360.98px ) {

            .sub03character{
                height: 90vmin!important;
                margin-top: 2vmin!important;
                margin-left: 2vw!important;
            }    

        }

        @media (max-width: 1260.98px ){
            .sub03content{
                width: 85vmin!important;
                margin-top: 38vmin!important;
                margin-left: 26vw!important;
            }
            .sub03character{
                height: 80vmin!important;
                margin-top: 6vmin!important;
                margin-left: -6vw!important;
            }

            .sub3btngroup{                
                margin-top: 76vmin!important;
                margin-left: 40.5vw!important;
            }

            .sub3url{
                width: 20vmin!important;
            }
    
            .sub3invite{
                width: 20vmin!important;
            }
        }


        @media (max-width: 1060.98px ){
            .sub03title{
                width: 60vmin!important;
                margin-top: 10vmin!important;
                margin-left: 32vw!important;
            }

            .sub03content{
                width: 80vmin!important;
                margin-top: 38vmin!important;
                margin-left: 23vw!important;
            }
            .sub03character{
                height: 80vmin!important;
                margin-top: 7vmin!important;
                margin-left: -15vw!important;
            }

            .sub3btngroup{                
                margin-top: 74vmin!important;
                margin-left: 40.5vw!important;
            }

            .sub3url{
                width: 18vmin!important;
            }
    
            .sub3invite{
                width: 18vmin!important;
            }
        }


        @media (max-width: 768.98px ){
            .sub03title_2{
                width: 76%!important;
                margin-top: 0vmin!important;
                margin-left: 12vw!important;
            }

            .sub03content{
                width: 85%!important;
                margin-top: 30vmin!important;
                margin-left: 9vw!important;
                content: url({{asset('img/Mobile/sub03_content_m.png')}});
            }
            .sub03character{
                display: none;
            }

            .sub3btngroup{                
                margin-top: 123vmin!important;
                margin-left: 27vw!important;
            }

            .sub3url{
                width: 22vmin!important;
            }
    
            .sub3invite{
                width: 22vmin!important;
            }
        }

        @media (max-width: 576.98px ){
            .sub03title_2{
                width: 76%!important;
                margin-top: 23vmin!important;
                margin-left: 12vw!important;
            }

            .sub03content{
                width: 85%!important;
                margin-top:53vmin!important;
                margin-left: 9vw!important;
                content: url({{asset('img/Mobile/sub03_content_m.png')}});
            }

            .sub3btngroup{                
                margin-top: 147vmin!important;
                margin-left: 29vw!important;
            }

        }

</style>

<div class="" style="height:100%;display:flex;position:relative;overflow: hidden!important;" >
    <img id="sub03title" class="sub03title" src="{{asset('img/PC/sub03_title.png')}}" alt="">
    <img id="sub03content" class="sub03content" src="{{asset('img/PC/sub03_content.png')}}" alt="">
    <img id="sub03character" class="sub03character" src="{{asset('img/PC/sub03_character.png')}}" alt="">

    <div class="sub3btngroup">
        <img id="sub3url" class="sub3url" src="{{asset('img/PC/sub03_bt1_1.png')}}">
        <img id="sub3invite" class="sub3invite" src="{{asset('img/PC/sub03_bt2_1.png')}}" style="/*display:none;*/">
    </div>
</div>


<button style="display:none;" type="button" class="btn btn-primary invite-btn" data-toggle="modal" data-target="#myModal2">
    inviteinfo 
  </button>

  <style>

.close2 {
        background-color:transparent;
        position:absolute;
        right:5px;
        top:0px;
        z-index:999;
        font-size:2rem;
        font-weight: normal;
        color:#fff;
        opacity:0;
    }

    .invitebg{
        background-size:100% 100%;
        background-repeat:no-repeat;
        height:40vmin;
    }

    @media (max-width: 768.98px){
        .invitebg{
            height:42vmin;
        }
        .invitetxt{
            margin-top:30vmin;
        }
    }

    @media (max-width: 576.98px){
        .invitebg{
            height:52vmin;
        }
    }
  </style>

  <div  class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:600px!important;">
          <div class="modal-content">
      
                <button type="button" id="inviteclose" class="close2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button> 
            <div class="modal-body invitebg" style="background-image:url({{ asset('img/PC/pop_invite_bg.png') }});">
                
                <span class="text-center invitetxt" style="margin-top:20vmin;position:absolute;z-index:2;color:#ffffff;right:0;left:0;">當前已成功邀請<span id="invitecount">  </span>名好友。</span>
            </div>
      
          </div>
        </div>
      </div>


<script>
        $(window).resize(function() {
            var wdth=$(window).width();
            var winWidth = window.innerWidth;
            if (winWidth < 768) {
                $('#sub03title').attr("src","{{asset('img/Mobile/sub03_title_m.png')}}").removeClass('sub03title').addClass('sub03title_2');
                $('.invitebg').attr("src","{{ asset('img/PC/pop_invite_bg_m.png') }}")
    
            }else if(winWidth > 768){
                $('#sub03title').attr("src","{{asset('img/PC/sub03_title.png')}}").removeClass('sub03title_2').addClass('sub03title');                
            }
        });
        var winWidth = window.innerWidth;
        if (winWidth <= 768) {
            $('#sub03title').attr("src","{{asset('img/Mobile/sub03_title_m.png')}}").removeClass('sub03title').addClass('sub03title_2');
    
        }else if(winWidth > 768){
            $('#sub03title').attr("src","{{asset('img/PC/sub03_title.png')}}").removeClass('sub03title_2').addClass('sub03title');
        }

        

        $('.sub3url').click(function(){
            saoshare();
        });

        $('.sub3invite').click(function(){
            //alert('尚未開放!!!');
            saoinvite();
        });


        function saoshare(){
            FB.getLoginStatus(function(response) {
			  	if (response.status === 'connected') {
			    	// The user is logged in and has authenticated your
			    	// app, and response.authResponse supplies
			    	// the user's ID, a valid access token, a signed
			    	// request, and the time the access token 
			    	// and signed request each expire.
			    	
                    FB.api('/me', function(response) {
                        var uid = response.id;
                        FB.ui({
						    method: 'share',
					        //hashtag:'#555',
					        href: 'https://ab-tw-201909.sao-game.jp/?code='+uid,
                            mobile_iframe: true,
					    }, function(response){
						    
					    });

	
     				});
			    	
			 	}else {
				    FB.login(function(response) {
    					if (response.authResponse) {
     						console.log('Welcome!  Fetching your information.... ');
     						FB.api('/me', function(response) {
                                var uid = response.id;
                                FB.ui({
						            method: 'share',
					                //hashtag:'#555',
					                href: 'https://ab-tw-201909.sao-game.jp/?code='+uid,
					                mobile_iframe: true,
					            }, function(response){
						            
					            });
     						});
    					} else {
     					    console.log('User cancelled login or did not fully authorize.');
    					}
					});
			  	}
			});
        }


        function saoinvite(){
            FB.getLoginStatus(function(response) {
			  	if (response.status === 'connected') {
			    	// The user is logged in and has authenticated your
			    	// app, and response.authResponse supplies
			    	// the user's ID, a valid access token, a signed
			    	// request, and the time the access token 
			    	// and signed request each expire.
			    	
                    FB.api('/me', function(response) {
                        var fbid = response.id;
                        
                        $.ajax({
                            url: "{{ route('SaoInviteCount') }}" , 
                            type: 'POST',
                            data: { _token : '<?php echo csrf_token()?>', uid : fbid },
                            dataType: 'json',
                            success: function(data){
                                $('#invitecount').text(data.res);    
                                $('.invite-btn').click();   
                            },
                            error: function(xhr, type){
                                alert('Ajax error!') ;
                            } 
                        });
	
     				});
			    	
			 	}else {
				    FB.login(function(response) {
    					if (response.authResponse) {
     						console.log('Welcome!  Fetching your information.... ');
     						FB.api('/me', function(response) {
                                var fbid = response.id;
                        
                                $.ajax({
                                    url: "{{ route('SaoInviteCount') }}" , 
                                    type: 'POST',
                                    data: { _token : '<?php echo csrf_token()?>', uid : fbid },
                                    dataType: 'json', 
                                    success: function(data){
                                        $('#invitecount').text(data.res);
                                        $('.invite-btn').click(); 
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
        }
</script>