let container= document.querySelector(".container");
let first__slide = document.querySelector(".lastschool");
let second__slide = document.querySelector(".lastclass");
let third__slide = document.querySelector(".annualaverage");
let firstnext__button = document.querySelector(".next__button1");
let secondnext__button = document.querySelector(".next__button2");
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

firstnext__button.onclick =function displaychange(){
    first__slide.classList.toggle("active");
    second__slide.classList.toggle("activetwo");
}
secondnext__button.onclick =function hidechange(){
    second__slide.classList.remove("activetwo");
    second__slide.classList.remove("active");
    third__slide.classList.toggle("activethree");
}

