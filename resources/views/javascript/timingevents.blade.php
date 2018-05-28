
<div id="demo"></div>
<input type="button" value="start clock" onclick="startclock()"/>
<input type="button" value="stop clock" onclick="stopclock()"/>
<input type="button" value="start timer" onclick="startTimer()"/>

<script>
    function startclock(){
       intervalId=setInterval(getdate, 1000);
   }
    function getdate(){
        var date=new Date();
        document.getElementById("demo").innerHTML=date;
    }
   //getdate();//check by calling here and without calling here, this is only static
   //setInterval(getdate,1000);
   
   function stopclock(){
       clearInterval(intervalId);
   }
   function startTimer(){
       settimer=setTimeout(getdate,1000);
   }
   
   getdate();
</script>