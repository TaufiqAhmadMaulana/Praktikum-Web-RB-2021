function tema(){
    var selectBox = document.getElementById("tema");
    var value = selectBox.options[selectBox.selectedIndex].value;
    if(value=="0"){
        var b = document.getElementById("id");
        b.style.color = "black";
        b.style.backgroundColor = "white";
        
    }
    else if(value=="1"){
        var b = document.getElementById("id");
        b.style.color = "white";
        b.style.backgroundColor = "black";
    }
    else if(value=="2"){
        var b = document.getElementById("id");
        b.style.backgroundColor = "lightblue";
        b.style.color = "white";
    }
    else{
        var b = document.getElementById("id");
        b.style.backgroundColor = "darkorange";
        b.style.color = "black";
    }
}

function weather(){
    var selectBox = document.getElementById("weather");
    var value = selectBox.options[selectBox.selectedIndex].value;
    var situation = document.getElementById("tulisan");
    if(value == "0"){
        situation.innerText = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream";
    }
    else if(value=="1"){
        situation.innerText = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long."
    }
    else if(value=="2"){
        situation.innerText = "Save some water for use during dry season."

    }
    else{
        situation.innerText = "What good is the warmth of summer, without the cold of winter to give it sweetness."

    }

}
function faktorial(){
    var x = document.getElementById("faktorial").value;
    var a = x;
    var hasil = document.getElementById("hasil");
    for(i = a-1; i > 1;i--){
        a*=i;
    }
    hasil.innerText = "The Factorial of "+x+" is "+a;
}