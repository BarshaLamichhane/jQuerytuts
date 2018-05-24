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
                $("#button1").click(function(){
                    swal({
                        title: 'Congratulations',
                        type: 'success',
                        confirmButtonColor: "green",
                        confirmButtonText: "Yes, got it!",
                        text:'Your password has changed successfully'
                    }).then((result)=>{   
                         location.reload(true);   
                    });   
                });  
                $('input[type="text"]').css('color','#00b197') 
                $('input[type="password"][placeholder="Re-enter password"]').css('color','#002366 ') 
                $("#exampleSelect1").change(function(){
                    var selectedvalue=$(this).val();
                    if(selectedvalue =="select"){
                        selectedvalue='please select number other than "select"'
                    }
                    $("#selected").html(selectedvalue);    
                });
                var result='';
                $('input').change(function(){
                    //var result='';// try ths also
                   
                    if(result== ''){
                       result=$(this).val();
                    }
                    else{
                        result += ',' +$(this).val();
                   }
                    $("#input1").html(result);
                    });
            });
               
    </script>
</head>
<body>
    <div class="container">
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
                                <input type="password" class="form-control" placeholder="New password">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>Confirm Password:</b></label>
                                <input type="password" class="form-control" placeholder="Re-enter password" >
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>FirstName:</b></label>
                                <input type="text" name="first" class="form-control" placeholder="Enter first name" >
                                <span id="input1"></span>
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label><b>LastName:</b></label>
                                <input type="text" name="last name" class="form-control" placeholder="Enter last name" >
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label for="exampleSelect1">Example select</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="select"> select</option>
                                    <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                </select>
                                <span id="selected"></span>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="male">Option 1</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="female">Option 2</label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio" disabled>Option 3</label>
                                </div>
                                <span id="radioopt"></span>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label class="checkbox-inline"><input type="checkbox" value="i am male">Option 1</label>
                                <label class="checkbox-inline"><input type="checkbox" value=" i am female">Option 2</label>
                                <label class="checkbox-inline"><input type="checkbox" value="i am another">Option 3</label>
                                <span id="checkopt"></span>

                            </div>

                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button id="button1"  type="button" class="form-control btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
            background-color:  #00b197;
            border-color: #00b197;
        }
    </style>

</html>