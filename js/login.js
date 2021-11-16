document.getElementById("login").addEventListener("click",function(){
    var email = document.getElementById("email").value;
    localStorage.setItem("email",email);
})