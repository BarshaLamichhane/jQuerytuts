<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
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
           /* var employeeJSON=[{
                "firstname":"Barsha",
                "lastname":"Lamichhane",
                "gender":"Female",
                "occuptaion":"Engineer",
                "salary":"Secret"
            },
            {
                "firstname":"Kanti",
                "lastname":"Pokharel",
                "gender":"Female",
                "occuptaion":"Accountant",
                "salary":"Secret"

            } ]; 
            $('.form-group.col-sm-12.col-md-12.col-lg-12').html("First Name: " + employeeJSON[0].firstname)
            $('.form-group.col-sm-12.col-md-12.col-lg-12.ball').html(employeeJSON[0].lastname);*/

             var employeeJSON={
                 Barsha:{
                "firstname":"Barsha",
                "lastname":"Lamichhane",
                "gender":"Female",
                "occuptaion":"Engineer",
                "salary":"Secret"
                },
                Kanti:{
                "firstname":"Kanti",
                "lastname":"Pokharel",
                "gender":"Female",
                "occuptaion":"Accountant",
                "salary":"Secret"

            }}; 
            $('.form-group.col-sm-12.col-md-12.col-lg-12').html("First Name: " + employeeJSON.Barsha.occuptaion)
            $('.form-group.col-sm-12.col-md-12.col-lg-12.ball').html(employeeJSON.Kanti.occuptaion);
            
        });       
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card" style="max-width: 50rem;">
                <div class="card-header">
                    <h1>JSON</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="#" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-12" >
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-12 ball" >
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
    </style>

</html>