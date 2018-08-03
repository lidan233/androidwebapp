function login1()
{
    alert("you click") ;
    CreateRequest("index.php?status="+1) ;
}

function register1()
{
    alert("you have click") ;
    CreateRequest("index.php?status="+2) ;

}

function init()
{
    var login = document.getElementById("login") ;
    login.onclick = function()
    {
        login1() ;
    } ;
    var register = document.getElementById("register") ;
    register.onclick = function(){
        register1() ;
    } ;
}

window.onload = init ;
