let container= document.querySelector(".container");

function showtext(){
 document.getElementById("fading-text").style.display="block";
}
setTimeout(showtext, 1500);

function hidetext(){
    document.getElementById("fading-text").style.display="none";
}
setTimeout(hidetext, 3500);

function showconatiner(){
    container.style.display="flex";
}
setTimeout(showconatiner, 4500);
