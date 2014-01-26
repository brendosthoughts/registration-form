<html>
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
	<link rel="stylesheet" href="form.css">
</head>
<body>
<h1 class="welcome">
Registration for the 2014 Annual Meeting of Stockholders
</h1>
<img class="backdrop" src="images/backdrop.jpg">

<h2 class="bottom-pic"> 
Enter the Information Below to Get Started
</h2>


<form  id="start-form" action="handle_form.php" method="POST" parsley-validate>
<p>
<label for="firstName">Firstname</label>
<input id="firstName" parsley-required="true" parsley-mincheck="2" parsley-focus="first"  type="text" name="firstname" class="required textArea" placeholder="First Name"/>
</p>
<p>
<label for="lastName">Last name</label>
<input id="lastName" parsley-required="true" parsley-mincheck="2" parsley-focus="first"  type="text" name="lastname" class="required textArea" placeholder="Last Name"/>
</p>
<p>
<label for="email" >Email</label> 
<input id="email" data-trigger="change" parsley-required="true" parsley-type="email" name="email" class="textArea" placeholder="Email address"/>
</p>

<input type="submit" class="submit" name="Submit" value="Next >>" placeholder="">
</form>
<script>
var dd= $.noConflict();

dd(function() { 
  dd(":text:first").focus();
  dd(".success").hide();
  dd('#frmContact').submit(function(e) { 
    if ( false ) {
      dd.post("index.php",  dd(".success").show());       
    }
    return false;
  });
}); 
</script>

</body>
</html>