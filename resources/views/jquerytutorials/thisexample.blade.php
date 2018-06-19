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
            var instance = null
            var person = {
                first: 'John',
                last: 'Smith',
                post:'designer',
                full: function() {
                    instance = this 
                    console.log(this.first + ' ' + this.last);
                },
                
                personTwo: {
                    first: 'Allison',
                    last: 'Jones',
                    full: function() {    
                        console.log(this.first + ' ' + this.last)
                        console.log(instance.post)
                        console.log(person.post)
                    },
                    postname:function(){
                        console.log(this.post)
                    }
                }
            }
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
                                <button id="button1"  type="button" class="form-control btn btn-success" onClick=" person.full()">clickhere</button>
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button id="button2"  type="button" class="form-control btn btn-success" onClick=" person.personTwo.full()">click2</button>
                            </div>
                            <div class="form-group col-sm-2  col-md-2  col-lg-2 ">
                                <button id="button3"  type="button" class="form-control btn btn-success" onClick=" person.personTwo.postname.bind(person)()">click3</button>
                            </div>
                        </div>
                    </form>
                   
            </div>
        </div>
    </div> 
</body>

</html>