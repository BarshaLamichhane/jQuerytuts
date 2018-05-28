<!DOCTYPE html>
<html>
<head>
    <title>Image slideShow</title>
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
            $("#mountain").css("height","700px")
                          .css("width","1137px")
            $("img.img-fluid.img-thumbnail.images")
                .css("height","150px")
                .css("width","159px")
                .on({
                    mouseover:function(){
                        $(this).css({
                            'cursor':'pointer',
                            'border-color':'blue'
                        });
                    },
                    mouseout:function(){
                        $(this).css({
                            'cursor':'default',
                            'border-color':''
                        });
                    },
                    click:function(){
                        var replaceimage=$(this).attr('src');
                        $("#mountain").fadeOut(300, function(){
                            $(this).attr('src',replaceimage);

                        }).fadeIn(1000);
                       /* var replaceimage=$(this).attr('src');
                        $("#mountain").attr('src',replaceimage);

                        }*/
                    }
                });
            
        });       
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <input type="button" id="start " value="start slide show" class="btn btn-success"/>
            <input type="button" id="stop" value="stop slide show" class="btn btn-danger"/>
            
            <picture>
                <img id="mountain" src="/images/mountain.jpg" class="img-fluid img-thumbnail" alt="imagess">
            </picture>
            <picture>
                    <img src="/images/flower1.jpg" class="img-fluid img-thumbnail images" alt="img1">
                    <img src="/images/flower2.jpg" class="img-fluid img-thumbnail images" alt="img2">
                    <img src="/images/roh1.jpg" class="img-fluid img-thumbnail images" alt="img3">
                    <img src="/images/flower3.jpg" class="img-fluid img-thumbnail images" alt="img4">
                    <img src="/images/flower1.jpg" class="img-fluid img-thumbnail images" alt="img5">
                    <img src="/images/flower1.jpg" class="img-fluid img-thumbnail images" alt="img6">
                    <img src="/images/mountain.jpg" class="img-fluid img-thumbnail images" alt="imagess">
                    
            </picture>
        </div>
    </div>
</body>
</html>