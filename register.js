var http_request = false ;

function CreateRequest(url,name,account,passwd,nouce)
{
    http_request = false ;

    if(window.XMLHttpRequest)
    {
        http_request = new XMLHttpRequest() ;
        if(http_request.overrideMimeType)
        {
            http_request.overrideMimeType("text/xml") ;
        }
    }else if(window.ActiveXObject)
    {
        try{
            http_request = new ActiveXObject("Msxml2.XMLHTTP") ;
        }catch(e)
        {
            try{
                http_request = new ActiveXObject("Microsoft.XMLHTTP") ;
            }catch(e)
            {

            }
        }
    }

    if(!http_request)
    {
        alert("can't connect to server ") ;
        return false ;
    }
 
    http_request.onreadystatechange = alertContents ;
    alert(url) ;
    http_request.open("POST",url,true) ;
    http_request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http_request.send('name='+name+'&account='+account+'&passwd='+passwd+'&nouce='+nouce) ;

}
function alertContents()
{
    if(http_request.readyState==4)
    {
        if(http_request.status==200)
        {
            document.write(http_request.responseText) ;
        }else{
            alert(http_request.status) ;
            alert("find a mistake of you page") ;
        }
    }
}
function submit()
{
    var name = document.getElementById("name").value ;
    var account = document.getElementById("account").value ;
    var passwd = document.getElementById("passwd").value ;
    var nouce = document.getElementById("nouce").value ;
    var url = "index.php" ;

    CreateRequest(url,name,account,passwd,nouce) ;

}
function init()
{
    
    var button = document.getElementById("submit") ;

    button.onclick = function(){
        submit() ;
    }
}
window.onload = init ;