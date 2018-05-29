
<?php
$postId = $_GET['id'];
$type = $_GET['type'];

$url = "http://xyz-1.6gabwi2285.us-east-2.elasticbeanstalk.com/shared_post/$postId";
$response = file_get_contents($url);
$responseObject = json_decode($response);
if($responseObject->code != 0){
    header('HTTP/1.1 404 Not Found');
    exit();
}
$post = $responseObject->post;
//var_dump($post);
$imageUrl = "http://thehowapp.com/api/images/text.png";

if($post->type == 'IMAGE'){

    $imageUrl = "http://xyz-1.6gabwi2285.us-east-2.elasticbeanstalk.com/thumbnail/$post->media";
}else if($post->type == 'VIDEO'){
    $imageUrl = "http://thehowapp.com/api/images/video.jpg";
}else if($post->type == 'AUDIO'){
    $imageUrl = "http://thehowapp.com/api/images/music.jpg";
}else if($post->type == 'URL'){
    $imageUrl = "http://thehowapp.com/api/logo.jpg";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta property="og:title" content="<?php echo $post->title; ?>">
<meta property="og:description" content="<?php echo $post->description; ?>" >
<meta property="og:image" content="<?php echo $imageUrl; ?>">
<meta name="description" content="<?php echo $post->description; ?>">
<meta name="al:ios:app_name" content="HOW">
<meta name="al:ios:url" content="how://<?php echo $post->_id;?>/<?php echo $post->type; ?>">

<title><?php echo $post->title; ?></title>
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
    <img src="http://thehowapp.com/api/logo.jpg"  class=" img-fluid img-thumbnail howlogo img-responsive center"  alt="">    
</div>
<div class="container">
    <div class="row">
        <div class="card" style="width:700px">
            <div class="card-header">
                <h1 id="howtitle"><?php echo $post->title; ?></h1>
            </div>
            <div class="card-body text-center">
                    <img src="<?php echo $imageUrl; ?>" class="cardimg img-thumbnail img-responsive center" alt="">  
            </div>
            <div class="card-body">
                <p class="card-text">       
                    <?php
                        echo $post->description;
                    ?>
                </p>   
            </div>
            <div class="card-footer">    
                 <img src="http://thehowapp.com/img/google-play-badge.svg" class="footerimg img-responsive center"   alt="">
                 <img src="http://thehowapp.com/img/app-store-badge.svg" class="footerimg img-responsive center"   alt="">       
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
<script>
    function OpenAPP(){
        console.log("Hello")
        if( /iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
            // some code..
            window.location = "how://<?php echo $post->_id;?>/<?php echo $post->type; ?>";
        }
    }
    OpenAPP();
</script>
</body>
</html>