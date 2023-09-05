const myform = document.getElementById("myform");
const input = document.querySelectorAll("#myform input");
myform.addEventListener("submit",function(event){
    
    input.forEach(function(element){
        if(element.value ===""){
            event.preventDefault();
            element.classList.add("is-invalid");
        }
    })
});

input.forEach(function(element){
    element.addEventListener("focus",function(){
        element.classList.remove("is-invalid");
    });
})






