$(document).ready(function() {
    $("#loginLink").click(function( event ){
           event.preventDefault();
           $(".overlay").fadeToggle("fast");
     });
    
    $(".overlayLink").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');
        
        $("#loginTarget").load("ajax/" + action);
        
        $(".overlay").fadeToggle("fast");
    });
    
    $(".close").click(function(){
        
        $(".overlay").fadeToggle("fast");
    });
    $( "#e-mail" ).blur(function() {
        checkEmail();
});
    $( "#password2" ).blur(function() {
        confirmPass();
});
    $( "#username" ).blur(function() {
        checkUser();
});
    
    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) { 
            event.preventDefault();
            $(".overlay").fadeToggle("fast");
        }
    });
});
function checkUserLength(user)
{
    if(user.value.length>2)
    {
       checkUser();
    }
}
    function checkUser()
    {
        //alert("i hate u");
      var user = document.getElementById("username");
      params  = "user=" + user.value
      request = new ajaxRequest()
      request.open("POST", "chkuser.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
        {
            if (this.status == 200)
          {
            if (this.responseText != null)
            {
                if(this.responseText=='bad')
                {
                     document.getElementById('userinfo').innerHTML = "username taken &#10008";
                    $('#register-submit').attr('disabled','disabled');
                    
                }
                if(this.responseText=='good')
                {
                     document.getElementById('userinfo').innerHTML = "username available &#9989";
                    $('#register-submit').removeAttr('disabled');
                }
                //document.getElementById("userinfo").innerHTML=xmlhttp.responseText ;
                O('userinfo').innerHTML = this.responseText;
                //document.getElementById('userinfo').innerHTML = "meep"
            }
             //document.getElementById('userinfo').innerHTML = this.responseText
          }
        }
          
      }
      request.send(params)
    }

    function ajaxRequest()
    {
      try { var request = new XMLHttpRequest() }
      catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
          try { request = new ActiveXObject("Microsoft.XMLHTTP") }
          catch(e3) {
            request = false
      } } }
      return request
    }

function checkPassLength(pass)
{
   
   if(pass.value.length>4)
    {
       confirmPass();
    }
}
function GetElementInsideContainer(containerID, childID) {
    var elm = document.getElementById(childID);
    var parent = elm ? elm.parentNode : {};
    return (parent.id && parent.id === containerID) ? elm : {};
}
 function confirmPass()
    {
      var password = document.getElementById("password");
      var pass = document.getElementById("password2");
      if(password.value == pass.value)
      {
          params= "confirmBool=1";
          $('#register-submit').removeAttr('disabled');
      }else{
          params="confirmBool=0";
          $('#register-submit').attr('disabled','disabled');
      }
      request = new ajaxRequest()
      request.open("POST", "chkuser.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
        {
            if (this.status == 200)
          {
            if (this.responseText != null)
            {
                if(this.responseText=='bad')
                {
                    //alert("dsfs");
                     document.getElementById('passinfo').innerHTML = "Passwords do Not Match &#10008";
                }
                if(this.responseText=='good')
                {
                     document.getElementById('passinfo').innerHTML = "Passwords Match &#9989";
                }
                //O('passinfo').innerHTML = this.responseText
                //document.getElementById('userinfo').innerHTML = this.responseText
            }
             //document.getElementById('userinfo').innerHTML = this.responseText
          }
        }
          
      }
      request.send(params)
    }

    function checkEmail()
    {
      var email = document.getElementById("e-mail");
      params  = "email=" + email.value
      request = new ajaxRequest()
      request.open("POST", "chkuser.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")

      request.onreadystatechange = function()
      {
          
        if (this.readyState == 4)
        {
            if (this.status == 200)
          {
            if (this.responseText != null)
            {
                if(this.responseText=='bad')
                {
                    //alert("dsfs");
                     document.getElementById('mailinfo').innerHTML = "E-mail taken &#10008";
                    $('#register-submit').attr('disabled','disabled');
                }
                if(this.responseText=='good')
                {
                     document.getElementById('mailinfo').innerHTML = "&#9989";
                    $('#register-submit').removeAttr('disabled');
                }
                //O('passinfo').innerHTML = this.responseText
                //document.getElementById('userinfo').innerHTML = this.responseText
            }
             //document.getElementById('userinfo').innerHTML = this.responseText
          }
        }
          
      }
      request.send(params)
    }
