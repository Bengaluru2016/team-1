  
var fb_name;

//Google + code
 
			function validate()
			{
			//alert("test");
			var fname=document.getElementById("fname");
			var lname=document.getElementById("lname");
			var uname=document.getElementById("uname");
			var email=document.getElementById("email");
			var password=document.getElementById("password");
			var mobile=document.getElementById("mobile");
			var gender=document.getElementById("g");
			
			var namePattern=/^[a-z A-Z]{1,50}$/;
			var unamePattern=/^[a-z A-Z]{1}[a-z A-Z 0-9]{1,50}$/;
			var emailpattern=/^[a-z]{1}[a-z 0-9]{1,10}@[a-z]{3,5}\.[a-z]{3}$/;
			var passwordpattern=/^[a-z A-Z 0-9]{5}$/;
			var mobilepattern=/^[0-9]{10}$/;
			if(!namePattern.test(fname.value)){
				alert("invalid first name");
				return false;
			}

			if(!namePattern.test(lname.value)){
				alert("invalid last name");
				return false;
			}
			if(!unamePattern.test(uname.value)){
				alert("invalid Username");
				return false;
			}
			if((fname.value).length==0)
			{
			alert("please enter  firstname");
			document.getElementById("fname").focus();
			return false;
			}
			if(lname.value.length==0)
			{
			alert("please enter  lastname");
			document.getElementById("lname").focus();
			return false;
			}
			if(name.value.length==0)
			{
			alert("please enter  username");
			document.getElementById("name").focus();
			return false;
			}
			if(!emailpattern.test(email.value))
			{
			alert("please enter email ex. abc@xyz.com");
			document.getElementById("email").focus();
			return false;
			}
			if(!mobilepattern.test(mobile.value)){
				alert("invalid mobile no.");
				return false;
			}
			
			if(email.length==0)
			{
			alert("please enter email");
			document.getElementById("email").focus();
			return false;
			}
			if(!email.match(emailpattern))
			{
			alert("please enter email ex. abc@xyz.com");
			document.getElementById("email").focus();
			return false;
			}
			if(password.length==0)
			{
			alert("Please enter password");
			document.getElementById("password").focus();
			return false;
			}
			if(mobile.length!=10)
			{
			alert("please enter mobile and 10 numbers");
			document.getElementById("mobile").focus();
			return false;
			}
			if(gender.length==0)
			{
				alert("Choose Male or Female");
				return false;
			}
			
				return true;	
			}

//Facebook code 


// This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      fetchName();
	FB.ui(
 {
  method: 'share',
  href: 'https://www.rangde.org/',
   hashtag:'#'+fb_name+'starInvestor',
   quote:'Star Investor in the house'
}, function(response){});

    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '287816978242508',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function fetchName() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
   		fb_name=response.name;
                console.log(fb_name);
		$("#uname").val(fb_name);
    });
  }




//models
document.write(""+
  "<div class='modal fade' id='myModal' role='dialog'>"+
    "<div class='modal-dialog'>"+
    
      
      "<div class='modal-content'>"+
        "<div class='modal-header'>"+
          "<button type='button' class='close' data-dismiss='modal'>&times;</button>"+
          "<h4 class='modal-title'>Login</h4>"+
        "</div>"+
        "<div class='modal-body'>"+
          "<form class='form-horizontal' role='form'>"+
"    <div class='form-group'>"+
      "<label class='control-label col-sm-2' for='email'>Username:</label>"+
      "<div class='col-sm-10'>"+
        "<input type='password' class='form-control' id='pwd' placeholder='username'>"+
"      </div>"+
    "</div>"+
    "<div class='form-group'>"+
      "<label class='control-label col-sm-2' for='pwd'>Password:</label>"+
      
	  "<div class='col-sm-10'>"+
        "<input type='password' class='form-control' id='pwd' placeholder='password'>"+
      "</div>"+
 
"</div>"+
        "<div class='modal-footer'>"+
        
        "</div>"+
      "</div>"+
      
    "</div>"+
  "</div>"+


      "</ul>"+
    
	"</div>"+


  "<div class='modal fade' id='myModal2' role='dialog'>"+
    "<div class='modal-dialog'>"+
    
      
      "<div class='modal-content'>"+
        "<div class='modal-header'>"+
          "<button type='button' class='close' data-dismiss='modal'>&times;</button>"+
          "<h4 class='modal-title'>Register</h4>"+
        "</div>"+

    "<div class='modal-body'>"

+"<div w3-include-html='http://localhost/Rang%20De/team-1/fol1/form.html'>"+"</div>"   

    +"</div>"
    
   +"<div class='modal-footer'>"+"</div>"
   
   +"</div>"+
      
    "</div>"+
  "</div>"+


      "</ul>"+
    
	"</div>");


w3IncludeHTML();