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
        var greeting="Hello";
        var sth="I am global";
        function Helloworld(){
            greeting=greeting + "   javascript" + '</br>';
            document.write(greeting);
        } 
        document.write(greeting); 
        document.write('</br>');  
        Helloworld();
        document.write(greeting); 
        function something(){
            var sth="i am local";
            sth +="!!!!!!";
            document.write(sth);
        }
        something();
        document.write('</br>'); 
        document.write(sth); 
        sth="i am also global";
        document.write('</br>'); 
        document.write(sth);
        
            
    </script>
</head>
<body>
    
</body>
</html>