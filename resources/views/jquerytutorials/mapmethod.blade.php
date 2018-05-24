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
        $(document).ready(function(){
            /////CREATNG ARRAY USING each method
          /* var result=[];
           $('li').each(function(index,element){
               result.push($(element).text());

           })
           swal({
               title:'result[]',
               text:result});
        */

/******************************CREATING ARRAY USING MAP METHOD*****************************************************************************/
          /* swal({
               title:'map method()',
               text:$('li').map(function(indexsss, element){
                return $(element).text();

            }).get()});//to get n array form get() is used****************************/
           var intArray=[2,3,4,5,10];
            function functionA(index,element){
                return element*5;
            }
            function functionB(element,index){ // f you write here ndex, element then element wll receve ndex value
                return element*5;
            }
            var result1=$.each(intArray, functionA);
            var result2=$.map(intArray, functionB);
           // document.write('each = ' + result1);
            //document.write('<br/>');
           // document.write('map = ' + result2);
            $("#result1").html('each= '+result1);
            $("#result2").html('map= '+result2); 
            /***********************************************************/
           /* var intArray=[2,3,4,5,10];
            $.each(intArray, function(index,element){
                if(element==5){
                    return false; //works
                }
                document.write(element +',');    
            });
            document.write('<br/>');
            $.map(intArray, function(element,index){
                if(element==5){
                    return false; //doesnt prnt 5 but doesnt end executon of function
                }
               document.write(element +',')
            });*/
        }); 

    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card" style="max-width: 50rem;">
                <div class="card-header">
                    <h1>Chaining</h1>
                    <span>note: Chaining will not work if a method in the chain do not return object, for eg text()</span>
                </div>
                <div class="card-body">
                    <form method="post" action="#" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">Success item</li>
                                    <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                    <li class="list-group-item list-group-item-info">Info item</li>
                                    <li class="list-group-item list-group-item-warning">Warning item</li>
                                    <li class="list-group-item list-group-item-danger">Danger item</li>
                                    <li class="list-group-item list-group-item-primary">Primary item</li>
                                    <li class="list-group-item list-group-item-dark">Dark item</li>
                                    <li class="list-group-item list-group-item-light">Light item</li>
                                  </ul> 
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12" id="result1" >
                            </div> 
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-12" id="result2" >
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