<div class="row justify-content-center m-0" style="height:100%;width:100%;background-color: transparent;z-index: 2;position: absolute;">
    <div class="align-self-end text-center golog">
        <input id="golog" class="btngolog" type="image" src="{{asset('img/PC/main_bt.png')}}" style="width:20%;">
    </div>

</div>

<img id="maintitle" class="maintitle" src="{{asset('img/PC/main_title.png')}}" alt="">


<img id="mainplay" class="mainplay" src="{{asset('img/PC/main_play_bt.png')}}" alt="">




<div class="text-right" style="">
    <div class="rightnav pr-5">
        <a href="https://ab.sao-game.jp/tw" target="_blank" class="px-1"><img style="width:50px;z-index: 5;" src="{{asset('img/PC/nav_util_bt1.png')}}" alt=""></a>
        <a href="https://www.facebook.com/saoars.as/" target="_blank" class="pl-1 pr-3"><img style="width:50px;z-index: 5;" src="{{asset('img/PC/nav_util_bt2.png')}}" alt=""></a>
    </div>
</div>

<div class="container-fluid p-0 log0 justify-content-end">            
    
</div>

<div class="container-fluid log00 mx-auto layer">            

</div>





<button style="display:none;" type="button" class="btn btn-primary video-btn" data-toggle="modal" src="https://www.youtube.com/embed/i1I2lXnSs_E" data-target="#myModal">
    Play Video 1 - autoplay 
  </button>
  
  

  <style>
      .modal-dialog {
        max-width: 800px;
        margin: 30px auto;
        }



    .modal-body {
        position:relative;
        padding:0px;
    }
    .close {
        background-color:transparent;
        position:absolute;
        right:5px;
        top:-40px;
        z-index:999;
        font-size:2rem;
        font-weight: normal;
        color:#fff;
        opacity:1;
    }
  </style>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
      
                <button type="button" id="videoclose" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button> 
            <div class="modal-body">
      
                    
              <!-- 16:9 aspect ratio -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
      </div>
              
              
            </div>
      
          </div>
        </div>
      </div> 

  <script>
    $('#mainplay').click(function(){
        $('.video-btn').click();
        
    });

    $(document).ready(function(){
    var $videoSrc;  
        $('.video-btn').click(function() {
            $videoSrc = $(this).attr("src");
            console.log($videoSrc);
            $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
        });

        $('#videoclose').click(function(){
            $("#video").attr('src',''); 
        });

  
  
// when the modal is opened autoplay it  

    });
  </script>