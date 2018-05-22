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
            $(document).ready(function(){ //sabai load vaepachii script run garaucha, if you write script before html code and you should also link script first
                
               $("#button1").click (function(){
                   
                    swal({
                        title: 'DOM loaded',
                        type: 'success',
                        confirmButtonColor: "green",
                        confirmButtonText: "Yes, got it!",
                        text:'Your DOM has loaded successfully'
                    });
               });
            });
            $(window).on('load',function(){
            //$(document).ready(function(){ here no dfference is noted as image is loaded very fastly
                $("#imgdiv").html("Height =" +$("#img1").height()+ "<br/>" + "width="+ $("#img1").width());
                var divele=$('div');
                console.log("no of div used is:" + divele.length);//prints no of <div> element used
                var manipulate = $("#button2");
                if(manipulate.length != 1){
                    console.log("cannot find id ");
                    console.log(manipulate.length);
                }
                else{
                manipulate.css("background-color","green");
                manipulate.css("color","black");
                console.log("length =" + manipulate.length); //for id always length will be 1, since id is always unique
                console.log(manipulate[0])//provides raw DOM object
                }
                



            });
            
    </script>
</head>
<body>
     <div class="container text-left">
        <div class="row">
            <div class="card" style="max-width: 50rem;">
                <div class="card-header">
                    <h1>Password Reset</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="#" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-sm-12  col-md-12 col-lg-12">
                                <label><b>New password:</b></label>
                                <input id="input1" type="password" class="form-control" placeholder="New password">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>Confirm Password:</b></label>
                                <input type="password" class="form-control" placeholder="Re-enter password" id="barsha">
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button id="button1"  type="button" class="form-control btn btn-success">Submit</button>
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button id="button2"  type="button" class="form-control btn btn-success">TestButton</button>
                            </div>
                        </div>
                    </form>
                    <div id="imgdiv"></div>
                    <img  id="img1" src="data:image/jpeg;base64,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" alt="lock">
                </div>
            </div>
        </div>
    </div> 
    <!--<script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
   <script> 
        $(document).ready(function(){ //if you are wrtng script here then you can nclude script links here
            function submitpost(){
            console.log("success");
            swal({
                title: 'Congratulations',
                type: 'success',
                confirmButtonColor: "green",
                confirmButtonText: "Yes, got it!",
                text:'Your password has changed successfully'
                });
            
        }

        });
        
    </script>-->
     <!--<script>
        $("#button1").click(function(){
            swal({
                title: 'Congratulations',
                type: 'success',
                confirmButtonColor: "green",
                confirmButtonText: "Yes, got it!",
                text:'Your password has changed successfully'
            });
        });
            
    </script> -->

</body>
    <style>
        .container {
            background-color: white;
            margin-top: 220px;
            margin-left: 650px;
        }

        h1 {
            text-align: center;
        }

        .btn-success {
            background-color: #00b197;
            border-color: #00b197;
        }
    </style>

</html>