    function displayTime(){          
        var time = new Date();          
        var sh = time.getHours() + "";          
        var sm = time.getMinutes() + "";          
        var ss = time.getSeconds() + "";          
        document.getElementById("clock1").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
