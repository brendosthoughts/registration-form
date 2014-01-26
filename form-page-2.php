<html>
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
	<link rel="stylesheet" href="form.css">
</head>
<body>


<form class="full-page" action="handle_form.php" method="POST" parsley-validate>
<div class="section">
	<h4> Accommodation</h4>
	<span class="info">Please Indicatate your choice of room</span>
	<label for="king"> King Size Bed</label>
	<input id="king" type="radio" name="bed-size" value="king" parsley-required="true">
	<label for="double">Two Double Beds</label>
	<input id="double" type="radio" name="bed-size" value="double" parsley-required="true">
	<span>(Subject to availability)</span>
</div>
<div class="section">
	<H4>Hotel Extension Requests</H4>

	<span class="tripExtension ">
	If you wish to deviate from the group dates please complete the appropriate section below. All requests for deviations must be made by 
	<strong>Friday, February 14, 2014.</strong>
	</span>
	<span class="noteExtension note">
	Note: All program <span>pre or post extensions</span> are subject to availability at time of registration.
	</span>
	<span class="text-groupdates">

	</span>
	<label for="no_extension"> I wish to travel on only the group dates: May 2 - 5 2014</label>
	<input  type="radio" id="no_extension" name="extension" value="no" selected>
	<label for="extended">I Plan to stay outside of the group dates stated above</label>
	<input  id="extended" type="radio" value="yes" name="extension">
		TODO: JQUERY to handle extension's (both @ritz & other accomadations)

	<label for="comments-1">Additional Comments</label>
	<input id="coments-1" name="extension-comments" type="textarea" >
</div>
<div class="section">
	<h4>Flight Information & Ground Transportation</h4>
	<span class="note">
	If you have any questions, please contact Chris Jackson at (856) 339-5935 OR Bonnie Sayers at (856) 339-6106.
	</span>


	<label for="main-airport">Closet Major Airport you wish to depart from</label>
	<input id="main-airport" name="airport" type="text">
	<label for="alt-airport">Alternate</label>
	<input id="alt-airport" name="alt_airport" type="text">
</div>
<div class="section">
	<h4>Seating Prefrences</h4>
	<h7>Me</h7>
	<label for="me_window">Window</label>
	<input id="me_window" type="radio" name="me_seat" value="window" parsley-required="true">
	<label for="me_aisle">Aisle</label>
	<input id="me_aisle" type="radio" name="me_seat" value="aisle" parsley-required="true">

	<h7>My Guest</h7>
	<label for="guest_window">Window</label>
	<input id="guest_window" type="radio" name="guest_seat" value="window" parsley-required="true">
	<label for="guest_aise">Aisle</label>
	<input id="guest_aise" type="radio" name="guest_seat" value="aisle" parsley-required="true">
</div>

<div class="section">
	<h4>Frequent Flyer Information</h4>
	<h7>Me</h7>
	<label for="m_ff">Nameof Carrier</label>
	<input id="m_ff" name="me_ff_carrier" type="text">
	<label for="m_ff_num">Number</label>
	<input id="m_ff_num" name="me_ff_num" type="text">

	<h7>My Guest</h7>
	<label for="g_ff">Nameof Carrier</label>
	<input id="g_ff" name="guest_ff_carrier" type="text">
	<label for="g_ff_num">Number</label>
	<input id="g_ff_num" name="guest_ff_num" type="text">

	<label for="comments-2">Special Instructions</label>
	<input id="comments-2" name="flight-comments" type="textarea">
</div>

<input type="submit" class="submit" name="Submit" value="Next >>" placeholder="">

</form>
</body>
</html>