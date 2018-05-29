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
    <style>
        .cardimg{
            height: 32em;
            width: 41em;
        }
        .footerimg{
            height: 12.5em;
            width:12.5em;
            margin-top:-2em;
        }
    </style>
    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script>
        $(document).ready(function(){
                
                
            $(".card").css("margin","0 auto");
            $("#howtitle").css("text-align","center");
            $('.img-fluid.img-thumbnail.howlogo').css("border-color","white")
                                                .css("height","12.5em")
                                                .css("width","15em");
            $('.card-footer').css("background-color","orange")
                            .css("text-align","center")
                            .css("height","10em");
            $('.card-header').css("background-color"," #00b197")
                                .css("color","white");
            });                
    </script>    
</head>
<body>
    <div class="text-center"> 
        <img src="/images/how.jpg"  class=" img-fluid img-thumbnail howlogo img-responsive center" alt="">    
    </div>
    <div class="container">
        <div class="row">
            <div class="card" style="max-width:43.75em;">
                <div class="card-header">
                    <h1 id="howtitle">How App Title</h1>
                </div>
                <div class="card-body text-center">
                        <img src="https://www.davidreneke.com/wp-content/uploads/2017/07/Spiral.jpg" class="cardimg img-thumbnail img-responsive center" alt="">  
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
                     <img src="http://thehowapp.com/img/google-play-badge.svg" class="footerimg img-responsive center" alt="">
                     <img src="http://thehowapp.com/img/app-store-badge.svg" class="footerimg img-responsive center" alt="">       
                </div>
            </div>
        </div>
    </div> 
</body>
</html>