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
            var employeeJSON={
                "firstname":"Barsha",
                "lastname":"Lamichhane",
                "gender":"Female",
                "occuptaion":"Engineer",
                "salary":"Secret"
            }
            var result='';
            result += 'First Name : ' + employeeJSON.firstname +'</br>';
            result += 'Last Name : ' + employeeJSON.lastname +'</br>';
            result += 'Gender : ' + employeeJSON.gender +'</br>';
            result += 'Occupation : ' + employeeJSON.occuptaion +'</br>';
            result += 'Salary : ' + employeeJSON.salary +'</br>';
            $('#jsonresult').html(result);   
            //var getfirstname='First Name : ' + employeeJSON.firstname +'</br>';
            //$('#jsonresult').html(getfirstname);
            //var getlastname='Last Name : ' +employeeJSON.lastname + '</br>'
            //$('#jsonresult1').html(getlastname);

           
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
                            <div class="form-group col-sm-12 col-md-12 col-lg-12" id="jsonresult">
                            </div>
                           <!-- <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12" id="jsonresult1">
                                </div>-->
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