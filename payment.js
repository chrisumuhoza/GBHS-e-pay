let container = document.querySelector(".container");
let container2 = document.querySelector(".container-two");
let platform = document.querySelector(".payment-platform-options");
let button = document.getElementById("payment-acceptance");
let button2 = document.getElementById("payment-reluctance");
let hiddentext = document.getElementById("muted-text");


button.onclick = 
  function hidecontainer(){
   container2.style.display= "none";
   platform.style.display= "flex"      
    }
button2.onclick =
    function showandclose(){
        function show(){
            container.style.display= "none";
            hiddentext.style.display="block";   
        }
        setTimeout(show, 500);

        function close(){
            hiddentext.style.display= "none";
           
        }
        setTimeout(close, 1500);
    }
     
 



   






