<html>
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
	<link rel="stylesheet" href="form.css">
</head>
<body>
<form class="full-page" action="handle_form.php" method="POST" parsley-validate >
	<h4>Participant Name</h4>
	<span>(Due to Airline regulations, the legal name, as it appears on your identification is required)</span>
	<input label="First Name" parsley-required="true" type="text" parsley-validation-minlength="2" name="particpant_firstname">
	<input label="Last Name"type="text" parsley-required="true" parsley-validation-minlength="2" name="particpant_lastname">
	<input label="Name Badge (if Different)"type="text" name="particpant_namebadge"> 
	<h4> Guest Name </h4>
	<input label=" First Name"type="text" parsley-required="true" parsley-validation-minlength="2" name="guest_firstname">
	<input label="Last Name"type="text" parsley-required="true" parsley-validation-minlength="2" name="guest_lastname">
	<input label="Name Badge (if Different)"type="text" name="guest_namebadge"> 

	<h4>Home Address</h4> 
	<h7> (for courier Delivery)</h7>

	<input label="Street" parsley-required="true" type="text" name="street">
	<input label=" Apt.#" type="text" name="apt_num">

	<h7> Do not use PO box #</h7> Karen is this for people in the states?
	<input label="City" parsley-required="true" type="text" name="city">
	<select label"State"  parsley-required="true">
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
	<input label="ZIP" parsley-required="true" type="text" name="ZIP">

	<h4>Phone Numbers</h4>
	<input label="Business"type="text" parsley-required="true" parsley-type="phone" name="phone-business">
	<input label="Mobile"type="text" parsley-required="true" parsley-type="phone" name="phone-mobile">
	<input label="Home"type="text" parsley-required="true" parsley-type="phone" name="phone-home">
	
	<h4>Fax Number</h4>
	<input label="Business"type="text" parsley-required="true" parsley-type="phone" name="fax">
	<h4>Email Address</h4> ... we should already have this 
	<input label="Email"type="text" parsley-type="email" name="email">
	
	<h4>Emergency Contact</h4>
	<input label="Last Name"type="text" parsley-required="true" name="contact-lastname">
	<input label="First Name"type="text"  parsley-required="true" name="contact-firstname">
	<input label="Relation"type="text" parsley-required="true" name="contact-relation">
	<input label="Phone Number" parsley-type="phone" parsley-required="true" name="contact-number">
	
	<h4>Special Occasions during trip</h4>
	<input label="yes" type="radio" value="no" name="special-ocassion" selected>
	<input label="no" type="radio" value="yes" name="special-ocassion">

	<input type="submit" class="submit" name="Submit" value="Next >>" placeholder="">
</form>
</body>
</html>