<!DOCTYPE html>
<html>
<head>
    <title>How app</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script>
            $(document).ready(function(){
                $('header').css("background-color","grey")
                        .css("width","1850px")
                        .css("height","120px");
                        $('body').css("background-color","grey")
                var height=$('header').height();
                $(window).scroll(function(){
                    if($(window).scrollTop()>height){
                        $('header').addClass('.img-fluid.img-thumbnail.images');


                    }
                    
                });
            $(".card").css("margin","0 auto");
            $("#howtitle").css("text-align","center");
            $("#desctitle").css("text-align","center");
            $('.img-fluid.img-thumbnail.images').css("margin-left","825px")
                        .css("margin-top","10px")
                        .css("border-color","white");
            $('.card-footer').css("background-color","orange")
            .css("text-align","center");
           
    
            });
            
                        
        </script>
    
</head>
<body>
    <header> 
        <img src="/images/how.jpg"  class="img-fluid img-thumbnail images" height:"200px" width="200px" id="logo" alt="">    
    </header>
    <div class="container">
        <div class="row">
            <div class="card" style="max-width: 50rem;">
                <div class="card-header">
                    <h1 id="howtitle">How App Title</h1>
                </div>
                <div class="card-body">
                    <picture>
                        <img src="http://thehowapp.com/img/demo-screen-1.jpg" class="img-fluid img-thumbnails" height:"100px" alt="">  
                    </picture>
                </div>
                <div class="card-body">
                    <p class="card-text"> since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, 
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum       
                    </p>   
                </div>
                <div class="card-footer">    
                     <img src="http://thehowapp.com/img/google-play-badge.svg"  height:"200px" width="200px" alt="">
                     <img src="http://thehowapp.com/img/app-store-badge.svg"  height:"200px" width="200px" alt="">       
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
   
</body>
    <style>
       
       
        

        
    </style>

</html>