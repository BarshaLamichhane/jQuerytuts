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
              $("#showhide").click(function(){
                  $("#checkBox").attr('checked','true')
              })
             
            
          });
      </script>
  </head>
  <body>
        <div class="container">
           <div class="row">
                <div class="form-group">
                    
                    <div class="col-md-6 apple">
                        <span id="showhide" class="input-group-text glyphicon glyphicon-eye-open" ></span>
                    </div>
                </div>
                <input type="checkbox" id="checkBox"  >check to  show  and uncheck to hide  Password 
            </div>
           
            
        </div>
  </body>
  </html>
  