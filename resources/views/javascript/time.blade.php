<script>
    function getmonthfromnumber(monthnumber){
        var monthNames=["jan","feb","march","april","may","june","july","august", "sep","oct", "nov","dec"];
        return monthNames[monthnumber];
    }
    function getdatefromnumber(daynumber){
        var dayNames=["sun","mon","tue","wed","thur","frid","sat"];
        return dayNames[daynumber];
    }
     var month=getmonthfromnumber(new Date().getMonth());
     var day=getdatefromnumber(new Date().getDay());
     var year=new Date().getFullYear();
     var daydate=new Date().getDate();
     var date=new Date();//gives current date time
     document.write("today is "+month+" month");
     document.write('</br>');  
     document.write("today is "+day+"day");
     document.write('</br>');  
     document.write('this is    '+year+"    year");
     document.write('</br>');
     document.write('Todays date is '+daydate);
     document.write('</br>');
     document.write(date);
     
     
</script>