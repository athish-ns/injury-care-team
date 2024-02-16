<html>
<head>
	<title>Injury Care Team</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
     .form-control {
    border-radius: 0.75rem;
}
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Injury Care Team</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	

<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                        <img src="data:image/jpeg;base64,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" alt=""/>
                        <h3>Welcome</h3>
                       
                    </div>
                    <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin/Advocate</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index1.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3>
                                <form method="post" action="func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>

  