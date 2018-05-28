<!DOCTYPE html>
<html>
<head>
    <title>Image Zoom</title>
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
        $(window).on('load',function(){
            var mainimage=$('#mountain');
            var height= mainimage.css("height","700px");
            var width=mainimage.css("width","1137px");
            var addheight=height.height();
            var addwidth=width.width();
            
            $("#enlarge").click(function(){
                
                addheight += 100;
                addwidth += 100;
               // height.height(addheight);
               // width.width(addwidth);
                mainimage.animate({'height':addheight,
                                    'width':addwidth
                });
                   
               if(addheight >= 1000 || width >= 1437){
                   addheight =1000;
                   addwidth =1437;
                   height.height(addheight);
                   width.width(addwidth);
               }
            }); 
            $("#unzoome").click(function(){
               
               mainimage.animate({
                   'height':700,
                   'width':1137
               },"slow");

            });
            $("#shrink").click(function(){
                addheight -= 100;
                addwidth -= 100;
                //height.height(addheight);
                //width.width(addwidth);
                mainimage.animate({'height':addheight,
                                    'width':addwidth
                }); 
                if(addheight <= 400 || width <= 837){
                   addheight =400;
                   addwidth =837;
                   height.height(addheight);
                   width.width(addwidth);
               }
                   
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
            <input type="button" id="unzoome" value="unzoome"/>
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
            <div id="add"></div>
            <div id="addd"></div>
        </div>
    </div>
</body>
</html>