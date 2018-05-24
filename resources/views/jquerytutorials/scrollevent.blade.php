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
            $("h3").css("display","none")
                    .css("margin-left"," 650px")
                    .css("color","red")
            $("h4") .css("margin-left"," 650px")
                    .css("color","red")
            $("h2") .css("margin-left"," 650px")
                    .css("color","green")
            //var count= 0;
            var lastscroll=0;
           
            $(".card").scroll(function(){
                var scrollposition=$(this).scrollTop();
                //$("h3").css("display","inline").fadeOut(1000);
                //$("span").text(count+=1);
                if(scrollposition>lastscroll)
                $("h2").text("you are scrolling down");
                else
                $("h2").text("you  are scrolling up");
                lastscroll=scrollposition


            });
            
        });       
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card" style="max-width: 50rem; max-height: 20rem; overflow:scroll">
                <div class="card-header">
                    <h1>scroll event</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="#" enctype="multipart/form-data">
                        <div class="form-row">
                                <p><mark>Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. “It's not Latin, though it looks like it, and it actually says nothing,” Before & After magazine answered a curious reader, “Its ‘words’ loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.”

                                        As Cicero would put it, “Um, not so fast.”
                                        
                                        The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.
                                        
                                        Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum (“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.
                                        
                                        In particular, the garbled words of lorem ipsum bear an unmistakable resemblance to sections 1.10.32–33 of Cicero's work, with the most notable passage excerpted below:
                                        
                                        “Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                                        A 1914 English translation by Harris Rackham reads:
                                        
                                        “Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.”
                                        McClintock's eye for detail certainly helped narrow the whereabouts of lorem ipsum's origin, however, the “how and when” still remain something of a mystery, with competing theories and timelines.
                                        
                                </mark></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h3>Scroll Event Handler</h3>
    <!--<h4>Scroll Event Handled <span> 0 </span>time(s)</h4>-->
    <h2></h2>
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