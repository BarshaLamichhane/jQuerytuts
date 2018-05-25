<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsportal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script>
        $(window).on('load',function(){
            var mainimage=$('#mountain');
            var height= mainimage.css("height","700px");
            var width=mainimage.css("width","1137px");
            var add=height.height() + 5;
            //document.write(height.height()+5);
            $("#enlarge").click(function(){
                    height=height.
                    width.width()=width.width()+100;
                    document.write( height.height());
                    
                });
                $("#shrink").click(function(){
                    height -=100;
                    width -=100;
                    mainimage.animate();   
                    
                   
                });


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
                            var effect=$('#imgeffect').val();
                            var duration=$('#imgduration').val()*1000;
                            var mountain=$("#mountain");
                            if(effect=="Fade"){
                                mountain.fadeOut(duration, function(){
                                $(this).attr('src',replaceimage);

                            }).fadeIn(duration);

                            }
                            else{
                                mountain.slideUp(duration, function(){
                                $(this).attr('src',replaceimage);

                            }).slideDown(duration);

                            }
                        
                        }
                    });
                
               
            
        });       
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            Select Effect :<select class="selectpicker" id="imgeffect">
                <optgroup label="Effect">
                    <option value="Fade">Fade</option>
                    <option value="Slide">Slide</option>
                </optgroup>
            </select>
            Time in seconds :<select class="selectpicker" id="imgduration">
                    <optgroup label="ImageDuration">
                        <option value="0.5">0.5</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        
                    </optgroup>
                </select>
            <input type="button" id="enlarge" value="Enlarge"/>
            <input type="button" id="shrink" value="Shrink"/>
            <picture>
                <img id="mountain" src="/images/mountain.jpg" class="img-fluid img-thumbnail" alt="imagess" />
                 <div id="imagegal">
                    <img src="/images/flower1.jpg" class="img-fluid img-thumbnail images" alt="img1"/>
                    <img src="/images/flower2.jpg" class="img-fluid img-thumbnail images" alt="img2"/>
                    <img src="/images/roh1.jpg" class="img-fluid img-thumbnail images" alt="img3"/>
                    <img src="/images/flower3.jpg" class="img-fluid img-thumbnail images" alt="img4"/>
                    <img src="/images/flower1.jpg" class="img-fluid img-thumbnail images" alt="img5"/>
                    <img src="/images/flower1.jpg" class="img-fluid img-thumbnail images" alt="img6"/>
                    <img src="/images/mountain.jpg" class="img-fluid img-thumbnail images" alt="imagess"/>    
                 </div>
            </picture>
        </div>
    </div>
</body>
</html>