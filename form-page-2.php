<?php 
require_once('../karendb.class.php');
if(isset($_POST['bed-size'])){

	$me=array();
	$guest=array();
	$me['bed_size'] =$guest['bed_size'] = $_POST['bed-size'];
	if($_POST['extension'] == "no"){
	$me['trip_extension'] =$guest['trip_extension'] = 0;
	}else{ 
//TODO: handle trip extensions, talk to karen

	}
	if(isset($_POST['extension-comments'])){
		$me['extension_comments'] =$guest['extension_comments'] = $_POST['extension-comments'];
	}
	$me['closest_airport'] =$guest['closest_airport'] = $_POST['airport'];
	$me['seat_pref'] = $_POST['me_seat'];
	$guest['seat_pref'] = $_POST['guest_seat'];
	$me['ff_carrier'] = $_POST['me_ff_carrier'];
	$me['ff_number'] =$_POST['me_ff_num'];
	$guest['ff_carrier'] = $_POST['guest_ff_carrier'];
	$guest['ff_number'] = $_POST['guest_ff_num'];
   $temp=1;
	if(isset($_POST['flight-comments'])){
		$me['flying_instructions'] =$guest['flying_instructions'] = $_POST['flight-comments'];
	}
	$me['is_shareholder']=1;
	$guest['is_shareholder']=0;
	$this_session =  $_SESSION["session_id"];
	try{
	 	$sql = "UPDATE people
	 		SET
	 		bed_size=:bed_size,
	 		trip_extension=:trip_extension, 
	 		extension_comments=:extension_comments,
	 		closest_airport=:closest_airport, 
	 		seat_pref=:seat_pref,
	 		ff_carrier=:ff_carrier, 
	 		ff_number=:ff_number, 
	 		flying_instructions=:flying_instructions
	 		WHERE session_id=:session_id AND is_shareholder=:is_shareholder";

	    $stmt = db::getInstance()->prepare($sql);
	   	$stmt->bindParam(':bed_size', $me['bed_size']);
	   	$stmt->bindParam(':trip_extension', $me['trip_extension']);
	   	$stmt->bindParam(':extension_comments', $me['extension_comments']);
	   	$stmt->bindParam(':closest_airport', $me['closest_airport']);;
	   	$stmt->bindParam(':seat_pref', $me['seat_pref']);
	   	$stmt->bindParam(':ff_carrier', $me['ff_carrier']);
	   	$stmt->bindParam(':ff_number', $me['ff_number']);
	   	$stmt->bindParam(':flying_instructions', $me['flying_instructions']);
	    $stmt->bindParam(':session_id', $this_session);	
	   	$stmt->bindParam(':is_shareholder', $me['is_shareholder']);	
	    $stmt->execute();
	    /* now enter data in for guest! */
	    /*Note: is_shareholer now equal zero*/
	    $sql = "UPDATE people
	 		SET bed_size=:bed_size,
	 		 trip_extension=:trip_extension, 
	 		 extension_comments=:extension_comments,
	 		closest_airport=:closest_airport,  
	 		seat_pref=:seat_pref,
	 		ff_carrier=:ff_carrier, 
	 		ff_number=:ff_number, 
	 		flying_instructions=:flying_instructions
	 		WHERE session_id=:session_id AND is_shareholder=:is_shareholder";

	    $stmt = db::getInstance()->prepare($sql);
	   	$stmt->bindParam(':bed_size', $guest['bed_size']);
	   	$stmt->bindParam(':trip_extension', $guest['trip_extension']);
	   	$stmt->bindParam(':extension_comments', $guest['extension_comments']);
	   	$stmt->bindParam(':closest_airport', $guest['closest_airport']);
	   	$stmt->bindParam(':seat_pref', $guest['seat_pref']);
	   	$stmt->bindParam(':ff_carrier', $guest['ff_carrier']);
	   	$stmt->bindParam(':ff_number', $guest['ff_number']);
	   	$stmt->bindParam(':flying_instructions', $guest['flying_instructions']);
	    $stmt->bindParam(':session_id', $this_session);	
	    $stmt->bindParam(':is_shareholder', $guest['is_shareholder']);	
	    
	    $stmt->execute();

	}catch(Exception $e){
		print_r($e);

	}
	include 'activities-form.php';

}else{
?>


<html>
<head>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/parsley.js"></script>
	<link rel="stylesheet" href="form.css">
</head>
<body>

<?php 
// echo $_SESSION["session_id"];
?>
<form class="full-page" action="form-page-2.php" method="POST" parsley-validate>
<div class="section">
	<h4> Accommodation</h4>
	<span class="info">Please Indicatate your choice of room</span>
	<span class="label-input">
	<label for="king"> King Size Bed</label>
	<input id="king" type="radio" name="bed-size" value="king" parsley-required="true">
	</span>
	<span class="label-input">
	<label for="double">Two Double Beds</label>
	<input id="double" type="radio" name="bed-size" value="double" parsley-required="true">
	</span>
	<div class="clearfix"></div>
	<span>(Subject to availability)</span>
		<div class="clearfix"></div>
	<H4 class="sub">Hotel Extension Requests</H4>
	<div class="clearfix"></div>

	<span class="noteExtension note">
	Note: All program <span>pre or post extensions</span> are subject to availability at time of registration.
	</span>
	<span class="text-groupdates">

	</span>
	<span class="label-input">
	<label for="no_extension"> I wish to travel on only the group dates: May 2 - 5 2014</label>
	<input  type="radio" id="extension" name="extension" value="no" >
	</span>
	<span class="label-input">
	<label for="extended">I Plan to stay outside of the group dates stated above</label>
	<input  id="extension" type="radio" value="yes" name="extension">
	</span>
	<div class="clearfix"></div>
	<div class="extendedTravel">
		<span class="label-input">
		<label for="comments-1">Additional Comments</label>
		<input id="coments-1" name="extension-comments" type="textarea" >
		</span>
	</div>
</div>
<div class="section">
	<h4>Flight Information & Ground Transportation</h4>

	<div class="clearfix"></div>
	<span class="note">
	If you have any questions, please contact Chris Jackson at (856) 339-5935 OR Bonnie Sayers at (856) 339-6106.
	</span>
	<span class="label-input">
	<label for="main-airport">Closet Major Airport you wish to depart from</label>
	<input id="main-airport" name="airport" type="text">
	</span>
	<div class="clearfix"></div>
	<H4 class="sub">Seating Prefrences</h4>
	<div class="clearfix"></div>
	<div class="form-left">
		<h7>Participant</h7>
		<span class="label-input">
			<label for="me_window">Window</label>
			<input id="me_window" type="radio" name="me_seat" value="window" parsley-required="true">
		</span>
		<span class="label-input">
			<label for="me_aisle">Aisle</label>
			<input id="me_aisle" type="radio" name="me_seat" value="aisle" parsley-required="true">
		</span>
	</div>
	<div class="form-right">
		<h7>Guest</h7>
		<span class="label-input">
			<label for="guest_window">Window</label>
			<input id="guest_window" type="radio" name="guest_seat" value="window" parsley-required="true">
		</span>
		<span class="label-input">
			<label for="guest_aise">Aisle</label>
			<input id="guest_aise" type="radio" name="guest_seat" value="aisle" parsley-required="true">
		</span>
	</div>
	<div class="clearfix"></div>
	<H4 class="sub">Frequent Flyer Information</h4>
	<div class="clearfix"></div>
	<div class="form-left">
	<h7>Participant</h7>
		<span class="label-input">
			<label for="m_ff">Name of Carrier</label>
			<input id="m_ff" name="me_ff_carrier" type="text">
		</span>
		<span class="label-input">
			<label for="m_ff_num">Number</label>
			<input id="m_ff_num" name="me_ff_num" type="text">
		</span>
	</div>
	<div class="form-right">
		<h7>Guest</h7>
		<span class="label-input">
			<label for="g_ff">Name of Carrier</label>
			<input id="g_ff" name="guest_ff_carrier" type="text">
		</span>
		<span class="label-input">
			<label for="g_ff_num">Number</label>
			<input id="g_ff_num" name="guest_ff_num" type="text">
		</span>
	</div>
	<div class="clearfix"></div>
	<span class="label-input">
	<label for="comments-2">Special Instructions</label>
	<input id="comments-2" name="flight-comments" type="textarea">
	</span>
</div>

<input type="submit" class="submit" name="Submit" value="Next >>" placeholder="">

</form>

<script>
$("input[name=extension][value=yes]").click(function(){
	alert('something got clicked');

	$('.extendedTravel').css("display","block");
});

</script>
</body>
</html>

<?php
}
?>