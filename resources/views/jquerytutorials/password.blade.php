<!DOCTYPE html>
  <html>
  <head>
      <title>Password</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
      <script>
          $(document).ready(function(){
            $(".apple").css("position","relative")
                    .css("margin-top","20px");
            $("label").css("margin-top","20px")
            
            var check = $('.showpassword').attr('type');
            var isChecked = $('#checkBox').is(':checked');
            function checkpasswordByIcon(){
                if(check=='password'){
                    $("#showhide").addClass('glyphicon-eye-close')
                    $("#checkBox").attr('checked',null);
                 
                }
                if(check=='text'){
                    $("#showhide").addClass('glyphicon-eye-open')
                    $("#checkBox").attr('checked','true');
                }
            }
            checkpasswordByIcon();
           
            
            $("#showhide").css("position","absolute")
                            .css("height","33px")
                            .css("margin-left","175px")
                            .css("margin-top","0px")
                            .click(function bcd(){
                                var checkk = $('.showpassword').attr('type');
                                if(checkk=='password'){
                                    $(this).removeClass('glyphicon-eye-close')
                                    $(this).addClass('glyphicon-eye-open') 
                                    $('.showpassword').attr('type','text')
                                    $("#checkBox").attr('checked','true');
                                    //$('#show').html(isChecked);
                                    
                                }
                                if(checkk=='text'){
                                    $(this).removeClass('glyphicon-eye-open')
                                    $(this).addClass('glyphicon-eye-close') 
                                    $('.showpassword').attr('type','password')
                                    $("#checkBox").attr('checked',null);
                                   // $('#hide').html(isChecked);
                                }
                            });               
             $("input.showpassword").css("width","200px");  
             $("#checkBox").click(function abc(){
                var checkkk = $('.showpassword').attr('type');
                if(isChecked){
                    if(checkkk=='password'){
                        $("#showhide").removeClass('glyphicon-eye-close')
                                        .addClass('glyphicon-eye-open')
                        $('.showpassword').attr('type','text');              
                    }
                    if(checkkk=='text'){ 
                        $("#showhide").removeClass('glyphicon-eye-open')
                                     .addClass('glyphicon-eye-close')
                        $('.showpassword').attr('type','password');  
                    }          
                }
                else{
                    if(checkkk=='password'){ 
                        $("#showhide").removeClass('glyphicon-eye-close')
                                    .addClass('glyphicon-eye-open') 
                        $('.showpassword').attr('type','text');              
                    }
                    if(checkkk=='text'){ 
                        $("#showhide").removeClass('glyphicon-eye-open')
                                     .addClass('glyphicon-eye-close') 
                        $('.showpassword').attr('type','password');  
                    }         
                }
             });      
          });
      </script>
  </head>
  <body>
        <div class="container">
           <div class="row">
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-6 apple">
                        <span id="showhide" class="input-group-text glyphicon"></span>
                        <input id="password-field" type="password" class="form-control showpassword" name="password" value="secret">
                    </div>
                </div>
                <input type="checkbox" id="checkBox"  >check to  show  and uncheck to hide  Password 
            </div>
            <span id="show"></span>
            <span id="hide"></span>
            
        </div>
  </body>
  </html>
  