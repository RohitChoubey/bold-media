<?php
    if (isset ($_SESSION['username']) && $_SESSION['username'] == true) {
        header('Location: addUser.php');
    }
    else {
         header('Location: login/');
    }
?>
<!DOCTYPE html>
<html>
<head>
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<style type="text/css">
			*{
			  margin:0;
			  padding:0;
			  font-family: 'Roboto Condensed', sans-serif;
			  box-sizing: border-box;
			}
			.background-img{
			  width: 100vw;
			  height: 100vh; 
			  position:fixed;
			  background-size: cover;
			  background-repeat: no-repeat;
			}

			.card-wrapper{
			  min-height: 600px;
			  min-width: 350px;
			  border-radius: 10px;
			  position:absolute;
			  left: 50%;
			  bottom: 30;
			  margin-top: 30px;
			  transform: translateX(-50%);
			  background:rgba(255,255,255,0.3);
			  backdrop-filter: blur(13px);
			  box-shadow: 0 0 20px -2px black;
			  display:flex;
			  justify-content:center;
			  flex-direction: column;
			  padding: 20px 0;
			  color: rgba(18,18,18,0.85);
			}

			.call-to-action{
			  text-align:center;
			  padding: 10px 0;
			}
			.card-wrapper form{
			  display:flex;
			  flex-direction:column;
			}
			.card-wrapper form .field{
			  width: 100%;
			  position: relative;
			  font-size: 18px;
			  padding: 7px 30px;
			  white-space: no-wrap;
			}
			.card-wrapper form .field::after{
			  content : "";
			  position: absolute;
			  left: 50%;
			  transform: translateX(-50%);
			  top: 100%;
			  height: 1px;
			  width: 85%;
			  padding-top: 5px;
			  border-top:1px solid rgba(18,18,18,0.6);
			}
			.card-wrapper form a{
			  margin-right: 10%;
			  margin-top: 10px;
			  text-align: right;
			  font-size: 16px;
			  text-decoration:none;
			  color:rgba(18,18,18,0.7);
			  
			}

			.card-wrapper form a span{
			  border-bottom: 1px solid transparent;
			  transition: all 0.3s ease;
			}
			.card-wrapper form a:hover span{
			  color: #121212;
			  border-bottom-color: #121212;
			}
			.card-wrapper form .field i{
			  font-size: 22px;
			  height: 30px;
			  width: 30px;
			  vertical-align: middle;
			  text-align:left;
			}
			.card-wrapper form .field label{
			  width: 100%;
			  font-size: 17px;
			  margin-bottom: 20px;
			  line-height: 30px;
			}

			.card-wrapper form .field input{
			  border: 0;
			  background: transparent;
			  padding:0 5px;
			  color: inherit;
			  font-family: inherit;
			  font-size: inherit;
			  height: 30px;
			  width: calc(100% - 50px);
			  vertical-align: middle;
			}
			.card-wrapper form .field input:focus{
			  outline:none;
			}
			.card-wrapper form .field input::placeholder{
			  color: rgba(18,18,18,0.7);
			}

			#login-button{
			  margin: 20px 0;
			  width: 80%;
			  height: 40px;
			  border-radius: 20px;
			  border:none;
			  background: rgba(255,255,255,0.2);
			  position:relative;
			  left: 50%;
			  transform: translateX(-50%);
			  cursor: pointer;
			  transition: all 0.3s ease;
			}
			#login-button:hover{
			  background: rgba(18,18,18,0.3);
			  color: rgba(255,255,255,0.8);
			}

			.alternate-logins{
			  margin-top: 30px;
			}
			.alternate-logins, .sign-up{
			  padding: 20px 0;
			  text-align:center;
			}

			.social-links{
			  display:flex;
			  flex-direction: row;
			  flex-wrap: no-wrap;
			  padding: 15px 0;
			  justify-content:center;
			}
			.social-links i{
			  width: 50px;
			  margin: 0 5px;
			  height: 50px;
			  border-radius: 50%;
			  line-height: 50px;
			  background: rgba(255,255,255,0.3);
			  transition: all 0.3s ease;
			  cursor: pointer;
			}

			.social-links i:hover{
			  background: rgba(18,18,18,0.3);
			  color: rgba(255,255,255,0.8);
			  
			}

			.sign-up a{
			  text-decoration: none;
			  color: inherit;
			  position: relative;
			  top: 10px;
			  border-bottom: 1px solid transparent;
			  transition: all 0.3s ease;
			}

			.sign-up a:hover{
			  color: #121212;
			  border-bottom-color: #121212;
			}
		</style>
	</head>	
<body>
		
	<img class='background-img' src='https://i.pinimg.com/736x/ca/6b/0f/ca6b0f7177229f00b2ec1ea2f48385fd.jpg'/>
	<div class='card-wrapper'>
	  <h1 class='call-to-action'>Login</h1>
	  <form method="post" id="registrationForm">
	    <div class='field'>
	      <label for='username'>Username</label><br>
	      <i class='bx bx-user'></i>
	      <input type='text'   id='username'  name='username'  placeholder='username',  spellcheck='false'/>
	    </div>
	    
	    <div class='field'>
	     <label for='pwd' name='pwd'>Password</label><br>
	      <i class='bx bx-lock-alt' ></i>
	      <input type='password'  id='password'  name='password'  placeholder='Password'/>
	    </div>

        <div class='field'>
         <label for='pwd' name='pwd'>Email</label><br>
          <i class='bx bx-lock-alt' ></i>
          <input type='email'  id='email'  name='email'  placeholder='Email'/>
      </div>
	    <a href=''><span>Forgot password?</span></a>
	    <input type='submit'id="login-button" value='LOGIN'/>
	    
	  </form>
	   <div id="result" style="color:green;"></div>
	  <div class='alternate-logins'>
	    Or Sing Up Using
	    <div class='social-links'>
	      <i class='bx bxl-google' ></i>
	      <i class='bx bxl-facebook' ></i>
	      <i class='bx bxl-twitter' ></i>
	    </div>
	  </div>
	  
	  <div class='sign-up'>
	    Or Sing Up Using<br>
	    <a href=''>SIGN UP</a>
	  </div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
    $("#login-button").click(function() {
 
        // using serialize function of jQuery to get all values of form
        var serializedData = $("#registrationForm").serialize();
 
        // Variable to hold request
        var request;
        // Fire off the request to process_registration_form.php
        request = $.ajax({
           type: "post",
            url: "addUserAction.php",
            data: serializedData
        });
 
        // Callback handler that will be called on success
        request.done(function(jqXHR, textStatus, response) {
            // you will get response from your php page (what you echo or print)
             // show successfully for submit message
            $("#result").html(response);
        });
 
        // Callback handler that will be called on failure
        request.fail(function(jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            // show error
            $("#result").html('There is some error while submit');
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });
 
        return false;
 
    });
});
</script>
</html>