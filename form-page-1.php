
<?php
require_once('../karendb.class.php');
if(isset($_POST['me_firstname'])){
		$sql = "SELECT COUNT(*) FROM people
	WHERE email=:email ";
            $stmt = db::getInstance()->prepare($sql);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->execute();

/*$stmt->fetchColumn();*/
    if( 0 > 1){
    	include 'login.php';
    }else{
    	$me=array();
    	$guest=array();
    	$me['first_name']=$_POST['me_firstname'];
    	$me['last_name']=$_POST['me_lastname'];
    	$guest['first_name']=$_POST['guest_firstname'];
    	$guest['last_name']=$_POST['guest_lastname'];
    	$me['street'] = $guest['street'] =$_POST['street'];
    	$me['apt'] = $guest['apt'] =$_POST['apt_num'];
    	$me['city'] = $guest['city'] =$_POST['city'];
    	$me['state'] = $guest['state'] =$_POST['state'];
    	$me['zip'] = $guest['zip'] =$_POST['ZIP'];
    	$me['business_phone'] = $guest['business_phone'] =$_POST['phone-business'];

    	$me['mobile_phone'] = $guest['mobile_phone'] =$_POST['phone-mobile'];
    	$me['home_phone'] = $guest['home_phone'] =$_POST['phone-home'];
    	if(isset($POST['fax'])){
    		$me['fax'] = $guest['fax'] = $_POST['fax'];
    	}else{
    		$me['fax'] = $guest['fax'] = "na";
    	}
    	$me['email'] = $guest['email'] =$_POST['email'];
    	$me['e_lastname'] = $guest['e_lastname'] =$_POST['emergency-lastname'];
    	$me['e_firstname'] = $guest['e_firstname'] =$_POST['emergency-firstname'];
    	$me['e_relation'] = $guest['e_relation'] =$_POST['emergency-relation'];
    	$me['e_phone_num'] = $guest['e_phone_num'] =$_POST['emergency-number'];
    	if(isset($_POST['special-ocassion'])){
    		$me['special_occasion'] = $guest['special_ocassion'] = $_POST['special-ocassion'];
    	}

    	$me['is_shareholder'] =1; // 1 for me , 0 for geust 
    	$guest['is_shareholder'] =0;
    	$this_session=microtime_float();
    	try{
	        $sql = "INSERT INTO people
	            (first_name, last_name, is_shareholder, street, apt, city, state, zip, business_phone, mobile_phone, home_phone, fax, email, e_lastname, e_firstname, e_relation, e_phone_num, special_occasion, session_id)
	           VALUES
	            (:first_name, :last_name, :is_shareholder, :street, :apt, :city, :state, :zip, :business_phone, :mobile_phone, :home_phone, :fax, :email, :e_lastname, :e_firstname, :e_relation, :e_phone_num, :special_occasion, :session_id)";

	        $stmt = db::getInstance()->prepare($sql);
	        $stmt->bindParam(':first_name', $me['first_name']);
	        $stmt->bindParam(':last_name', $me['last_name']);
	        $stmt->bindParam(':is_shareholder', $me['is_shareholder']);
	        $stmt->bindParam(':street', $me['street']);
	        $stmt->bindParam(':apt', $me['apt']);
	        $stmt->bindParam(':city', $me['city']);
	        $stmt->bindParam(':state', $me['state']);
	        $stmt->bindParam(':zip', $me['zip']);
	        $stmt->bindParam(':business_phone', $me['business_phone']);
	        $stmt->bindParam(':mobile_phone', $me['mobile_phone']);
	        $stmt->bindParam(':home_phone', $me['home_phone']);
	        $stmt->bindParam(':fax', $me['fax']);
	        $stmt->bindParam(':email', $me['email']);
	        $stmt->bindParam(':e_lastname', $me['e_lastname']);
	        $stmt->bindParam(':e_firstname', $me['e_firstname']);
	        $stmt->bindParam(':e_relation', $me['e_relation']);
	        $stmt->bindParam(':e_phone_num', $me['e_phone_num']);
	        $stmt->bindParam(':special_occasion', $me['special_occasion']);
	        $stmt->bindParam(':session_id', $this_session);

	        	/* now enter data in for guest! */
	        $stmt->execute();
	        $sql = "INSERT INTO people
	            (first_name, last_name, is_shareholder, street, apt, city, state, zip, business_phone, mobile_phone, home_phone, fax, email, e_lastname, e_firstname, e_relation, e_phone_num, special_occasion, session_id)
	           VALUES
	            (:first_name, :last_name, :is_shareholder, :street, :apt, :city, :state, :zip, :business_phone, :mobile_phone, :home_phone, :fax, :email, :e_lastname, :e_firstname, :e_relation, :e_phone_num, :special_occasion, :session_id)";

	        $stmt = db::getInstance()->prepare($sql);
	        $stmt->bindParam(':first_name', $guest['first_name']);
	        $stmt->bindParam(':last_name', $guest['last_name']);
	        $stmt->bindParam(':is_shareholder', $guest['is_shareholder']);
	        $stmt->bindParam(':street', $guest['street']);
	        $stmt->bindParam(':apt', $guest['apt']);
	        $stmt->bindParam(':city', $guest['city']);
	        $stmt->bindParam(':state', $guest['state']);
	        $stmt->bindParam(':zip', $guest['zip']);
	        $stmt->bindParam(':business_phone', $guest['business_phone']);
	        $stmt->bindParam(':mobile_phone', $guest['mobile_phone']);
	        $stmt->bindParam(':home_phone', $guest['home_phone']);
	        $stmt->bindParam(':fax', $guest['fax']);
	        $stmt->bindParam(':email', $guest['email']);
	        $stmt->bindParam(':e_lastname', $guest['e_lastname']);
	        $stmt->bindParam(':e_firstname', $guest['e_firstname']);
	        $stmt->bindParam(':e_relation', $guest['e_relation']);
	        $stmt->bindParam(':e_phone_num', $guest['e_phone_num']);
	        $stmt->bindParam(':special_occasion', $guest['special_occasion']);
	        $stmt->bindParam(':session_id', $this_session);
	        $stmt->execute();
    	}catch(Exception $e){
    		print_r($e);
    	}

    	session_start();
		$_SESSION["session_id"]=$this_session;
		include 'form-page-2.php';
    }

}else{
?>
<html>
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
	<link rel="stylesheet" href="form.css">
</head>
<body>
<form class="full-page" action="form-page-1.php" method="POST" parsley-validate >
	<div class="section">
		<h4>Participant's Name</h4>
		<h7>(Due to Airline regulations, the legal name, as it appears on your identification is required)</h7>
		<span class="label-input">
		<label for="FirstName" >First Name</label>
		<input id="FirstName" parsley-required="true" type="text" parsley-validation-minlength="2" name="me_firstname">
		</span>
		<span class="label-input">
		<label for="LastName" >Last Name</label>
		<input id="LastName"type="text" parsley-required="true" parsley-validation-minlength="2" name="me_lastname">
		</span>

	</div>
	<div class="section">
		<h4> Guest's Name </h4>
		<div class="clearfix"></div>
		<span class="label-input">
		<label for="g_FirstName" >First Name</label>
		<input id="g_FirstName"type="text" parsley-required="true" parsley-validation-minlength="2" name="guest_firstname">
		</span>
		<span class="label-input">
		<label for="g_LastName" >Lastname</label>
		<input id="g_LastName"type="text" parsley-required="true" parsley-validation-minlength="2" name="guest_lastname">
		</span>

	</div>
	<div class="section">
		<h4>Home Address</h4> 
		<h7> (for courier Delivery)</h7>
		<div class="clearfix"></div>
		
		<span class="label-input">
		<label for="street">Street</label>
		<input id="Street" parsley-required="true" type="text" name="street">
		</span>
		<span class="label-input">
		<label for="apt">Apt. #</label>
		<input id=" apt" type="text" name="apt_num">
		</span>
		<h7> Do not use PO box #</h7> 
		<div class="clearfix"></div>
		<span class="label-input">
		<label for="City">City</label>
		<input id="City" parsley-required="true" type="text" name="city">
		</span>
		<span class="label-input">
		<label for="State">State</label>
		<select id"State"  name="state" parsley-required="true">
			<option> </option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>	
		</span>
		<span class="label-input">
		<label for="ZIP">ZIP</label>
		<input id="ZIP" parsley-required="true" type="text" name="ZIP">
		</span>
	</div>
	<div class="section">
		<h4>Contact Information</h4>
		<div class="clearfix"></div>
		<span class="label-input">
		<label for="Business">Business</label>
		<input id="Business"type="text" parsley-required="true" parsley-type="phone" name="phone-business">
		</span>
		<span class="label-input">
		<label for="Mobile">Mobile</label>
		<input id="Mobile"type="text" parsley-required="true" parsley-type="phone" name="phone-mobile">
		</span>
		<span class="label-input">
		<label for="Home">Home</label>
		<input id="Home"type="text" parsley-required="true" parsley-type="phone" name="phone-home">
		</span>
		<span class="label-input">
		<label for="fax-business">Fax</label>
		<input id="fax-business"type="text"  parsley-type="phone" name="fax">
		</span>
		<span class="label-input">
		<label for="Email">Email</label>
		<input id="Email"type="text" parsley-type="email" name="email">
		</span>
	</div>
	<div class="section">	
		<h4>Emergency Contact</h4>
		<div class="clearfix"></div>
		<span class="label-input">
		<label for="e-last">Last Name</label>
		<input id="e-last"type="text" parsley-required="true" name="emergency-lastname">
		</span>
		<span class="label-input">
		<label for="e-first">First Name</label>
		<input id="e-first"type="text"  parsley-required="true" name="emergency-firstname">
		</span>
		<span class="label-input">
		<label for="e-reltion">Relationship</label>
		<input id="e-relation"type="text" parsley-required="true" name="emergency-relation">
		</span>
		<span class="label-input">
		<label for="e-phone">Phone #</label>
		<input id="e-phone" parsley-type="phone" parsley-required="true" name="emergency-number">
		</span>
	</div>
	<div class="section">	
	<h4>Special Occasions during trip</h4>
	<div class="clearfix"></div>
	<span class="label-input">
		<label for="e-reltion"> (Birthday, anniversary etc..)</label>
		<input id="e-relation"type="text" parsley-required="true"name="special-ocassion">
	</span>
	</div>
	<input type="submit" class="submit" name="Submit" value="Next >>" placeholder="">
</form>
</body>
</html>
<?php 
}

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

?>