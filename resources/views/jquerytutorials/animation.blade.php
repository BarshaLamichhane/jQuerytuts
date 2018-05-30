<!DOCTYPE html>
<html>
<head>
    <title>Animate</title>
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
            $("button").click(function(){
                $("img").css("position","relative")
                        //.animate({height:'1000px',
                                    //opacity:'0.8'},5000)
                        .animate({height:'500px',
                                    opacity:'0.8'},5000)
                        .animate({
                            left:"100px"
                        },5000);
                $(".textt").css("position","relative")
                            .animate({fontSize:'3em' },4000)
                            .animate({left:'100px',
                            opacity:'0.8' },4000);


                

            });
           
        });       
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="text-center">
            <button type="button" class="btn btn-success" value="Animate">Animate</button>
        </div>
        <div class="text-center">
            <img src="http://globalmedicalco.com/photos/globalmedicalco/2/9046.jpg"  class=" img-thumbnail img-responsive center"  alt="">
        </div>
        <div class="textt">hello world</div>
        </div>
    </div>
</body>
</html>