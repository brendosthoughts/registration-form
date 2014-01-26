
<html>
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
		<link rel="stylesheet" href="form.css">
</head>
<body>
<div class="wrapper">
<div class="pre-activities">
<h1>
Activities Registration
</h1>
<P>
Mannington invites you to participate in your choice of optional activity on the afternnons of Saturday, May 3, 2014 and Sunday, May 4, 2014. 
As space is limited, we encourage you to send back your activity registration form no later than <strong>FRIDAY, FEBRAURY 14, 2014 </strong>. All 
activities will be offered concurrently, therefore only one may be chosen per day, and not all activities are available each day.
</P>

<span class="note">
<span>Note:</span> This form will be used as a guideline for making reservations. <span> It is not an activity confirmation.</span> Your 
activity confirmation will be included in your travel package which will be sent to you approximately 10 days prior to departure.
</span>
</div>
<form action="handle_form.php" method="POST" parsley-validate>
<div class="day-activities top">
<span class="day"> Activites for Saturday, May 3rd</span>
<div class="golf activity">
	<div class="mainInfo">
	<img src="images/golf.jpg">
		<div class="right">
		<h3> 18 hole golf game</h3>
		<p>
		The Rees Jones designed Oconee course was opened in 2002 and is named after the 19,000 acre lake that serves as the centerpiece of the Reynolds Plantation. The Oconne course challenges golfers with distracting views and tempts them to shorten holes by taking more direct routes over watery inlets. The defining feature of the course is its set of magnificent par 3’s, featuring elevated tee shots and numerous water hazards. 
		</p>
		</div>
	<span class="click2register">Click to register</span>
	</div>
	<div class="extraInfo"> 
			<h3> 18 hole golf game</h3>
			<div class="me">
				<span> Me</span>
			  	<span>Rentals Required?</span>
			  	<label for="me_rental_no">No</label>
				<input id="me_rental_no" type="radio" value="no"name="me_golf_rental_1" >
				<label for="me_rental_left">Yes, left handed</label>
				<input id="me_rental_left" type="radio" value="left" name="me_golf_rental_1" >
				<label for="me_rental_right">Yes, right handed</label>
				<input type="radio" value="right" name="me_golf_rental_1" >
				<span>Golf Shoes?</span>
				<div class="golfShoes">
					<label for="guest_shoe_no">No</label>
					<input type="radio" value="no_shoe" name="me_shoe_rental_1" >
					<label for="guest_rental_left">Mens</label>
					<input id="guest_rental_left" type="radio" value="men_shoe" name="me_shoe_rental_1" >
					<label for="guest_rental_right">Ladies</label>
					<input id="guest_rental_right" type="radio" value="lady_shoe" name="me_shoe_rental_1" >	
				</div>
				<span class="shoe-size">Shoe size 5-13<input type="number" name="me_shoe_size_1" min="5" max="13"></span>
			</div>
			<div class="guest">
				<span> My Guest</span>
			  	<span>Rentals Required?</span>
			    <label for="guest_rental_no">No</label>
				<input id="guest_rental_no" type="radio" value="no" name="guest_golf_rental_1" >
				<label for="guest_rental_left">Yes, left handed</label>
				<input id="guest_rental_left" type="radio" value="left" name="guest_golf_rental_1" >
				<label for="guest_rental_right">Yes, right handed</label>
				<input id="guest_rental_right" type="radio" value="right" name="guest_golf_rental_1" >	
				<span>Golf Shoes?</span>
				<div class="golfShoes">
					<label for="guest_shoe_no">No</label>
					<input type="radio" value="no_shoe" name="guest_shoe_rental_1" >
					<label for="guest_rental_left">Mens</label>
					<input id="guest_rental_left" type="radio" value="men_shoe" name="guest_shoe_rental_1" >
					<label for="guest_rental_right">Ladies</label>
					<input id="guest_rental_right" type="radio" value="lady_shoe" name="guest_shoe_rental_1" >	
				</div>
				<span class="shoe-size">Shoe size 5-13<input  type="number" name="guest_shoe_size_1" min="5" max="13"></span>
			</div>	
	</div>
</div>
<div class="spa activity">
<div class=" mainInfo">
	<img src="images/spa.jpg">
		<div class="right">
		<h3> A Spa treatment of your choice</h3>
		<p>
		Please select one treatment from the attached “Spa Menu” and indicate your preference on the registration form. We encourage you to book your preferred treatments early as space is limited. 
		</p>
		</div>
	<span class="click2register">Click to register</span>	
	</div>
	<div class="extraInfo">
	<nav>
	 <div id="touch">Touch Therapy</div>
	 <div id="rain">Vichy Rain Experience</div>
	 <div id="body">Body Therapy</div>
	 <div id="facial">Facial Therapy</div>
	 <div id="nails">Nails & Hair</div>
	 </nav>
	 <ul class="spa_type touch">
	 	<li class="spaTreatment" role="button">
	 		<span>The Ritz Carlton Signature Massage </span>Our signature massage combines Swedish with various massage techniques, customized to your specific needs. Choose the scent your body craves from a variety of Aromatherapy oils.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="The-Ritz-Carlton-Signature-Massage"  name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="The-Ritz-Carlton-Signature-Massage" name="guest_1" >	
				</div>

	 		</div>
	 		 		
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Intuitive Healing</span> Gentle touch therapy combines various energy healing techniques according to your individual needs. This treatment reduces stress and restores vital energy flow to harmonize mind and body.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Intuitive-Healing" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Intuitive-Healing" name="guest_1" >	
				</div>

	 		</div>

	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Reconnect Couples Massage</span>Our signa- ture massage, performed in our luxury couples suite side-by-side with a loved one. Alternate therapies are available for an additional fee depending on avail- ability.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Reconnect-Couples-Massage" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Reconnect-Couples-Massage" name="guest_1" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Deep Massage with Arnica and Steamed Towels</span> Arnica has been widely used for centuries for its healing properties and as a natural anti-inflammatory. Warmsteamed towels infuse Arnica oil into thebody to soothe muscles. This deliberate massage with firm pressure is ideal for specific areas of tension, pain or chronic issues.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Deep-Massage-with-Arnica-and-Steamed-Towels" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Deep-Massage-with-Arnica-and-Steamed-Towels" name="guest_1" >	
				</div>

	 		</div>	 	
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Ultimate Journey</span> This unique journeyfeatures a Ritz Carlton Signature massage incorporating a muscle melting back mas-sage with steaming stones. Continue the bliss with your hands and feet smothered and softened with paraffin while enjoying a citrus infused scalp massage. Finish your journey of relaxation with a “sole” soothing foot treatment.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ultimate-Journey" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Ultimate-Journey" name="guest_1" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Soothing Stone Massage</span> We use our own uplifting blend of essential oils with the penetrating heat of smooth basalt stones to relax and purify the body and soul. Light to medium pressure is used to relieve tense muscles and sore joints.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Soothing-Stone-Massage" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Soothing-Stone-Massage" name="guest_1" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Citrus Infused Scalp and Body Massage</span> Precious, nutrient rich oils combine with uplifting citrus essential oils in this luxurious scalp and full body massage. The scent enlivens your spirit, and the oils bring a healthy sheen to your hair. This is the ideal treatment for anyone wanting to relax both mind and body.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Citrus-Infused-Scalp-and-Body-Massage"  name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Citrus-Infused-Scalp-and-Body-Massage"  name="guest_1" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Maternity Massage</span> This complete body massage uses specific techniques to help increase circulation, alleviate tired muscles, and reduce excess water retention. Pre-natal massage is only available after the first trimester.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Maternity-Massage"  name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Maternity-Massage" name="guest_1" >	
				</div>

	 		</div>
		</li>
		<li class="spaTreatment" role="button">
			<span>Reflexology</span> This ancient Eastern technique is used to relieve stress andbring balance to the entire body. Thumband finger pressure are used to massagespecific points on the feet correspond- ing to different body areas. A refreshing camphor-infused foot balm finishes this relaxing foot treatment to wake the feet up, and make you feel like you are walking on air.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Reflexology" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Reflexology" name="guest_1" >	
				</div>

	 		</div>
		</li>
	 </ul>
	 <ul class="spa_type rain">
	 	<li class="spaTreatment" role="button">
	 	<span>Bamboo Lemongrass Body Polish </span> Zesty lemongrass and bamboo exfoliate the skin, leaving it cleansed, polished and softened to perfection. A full body massage using pure essence of lavender destresses and relaxes the mind and body.
	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value= name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value= name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 	<span>Loblolly Body Glow</span> Enjoy a luxurious body exfoliation that will leave your skin glowing and feeling softer than a puff of Georgia cotton. Have your experience your way by choosing from evergreen scrub, lavender scrub, or citrus salt scrub. Each one has its own unique body lotion which is applied for added moisture.
			 	<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Bamboo-Lemongrass-Body-Polish" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Bamboo-Lemongrass-Body-Polish" name="guest_1" >	
				</div> </div>

	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Moor Mud Detox Wrap</span> A light body brushing begins this treatment, allowing the nerve pathways to be calmed, and prepping the skin for the mineral rich mud wrap. After showering the mud off, a soothing lotion applicationcompletes this luxurious treatment.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Moor-Mud-Detox-Wrap" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Moor-Mud-Detox-Wrap" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Oconee Rain</span> Creek medicine recognizes four key elements in its healing system: Fire, Water, Air and Earth. Performed in our Vichy room this unique treatment brings all four elements together to revitalize both mind and body. The treatment begins with a lavender dry brushing to relax tired nerves and soften skin. Warm lavender-infused stones are then placed on key touch points while the scalp is massaged. A warm rain shower further calms while your therapist uses cool eucalyptus stones to strengthen the body’s energy pathways.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value= name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value= name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 	 	<span>The Georgian</span> Welcome to the South and all that Georgia has to offer! This scrumptious peach scrub and Georgia red clay wrap will smooth and nourish your skin from neck to toes. After a slathering of sugary peaches comes the warm Georgia red clay cocoon, followed by a warm afternoon Vichy rain shower to wash it all away. The end of your visit to the south will be a delightful Shea butter infused with the essence of magnolia.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Oconee-Rain" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Oconee-Rain" name="guest_1" >	
				</div> </div>
	 	</li>
	 </ul>

	 <ul class="spa_type body">
		 <li class="spaTreatment" role="button">
		 	<span>Surrender To Serenity</span> This experience begins with a scalp, neck and shoulder massage followed by a hand and foot scrub and massage, then ending with an invigorating back massage. This treatment relieves exhaustion, stress, aches, pains, and calms the nerves.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Surrender-To-Serenity" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Surrender-To-Serenity"name="guest_1" >	
				</div> </div>
	 	</li>
		 <li class="spaTreatment" role="button">
		 	<span>"Creek Herbal Wrap"</span> Bask in a detoxifying herbal steamed towel wrap which allows your body to naturally boost cellular metabolism. Your wrap begins with a light dry brushing of the skin to calm the nerve pathways and prepare for the warmth of infused wraps. Choose from: mustard powder for muscle aches and pains, lavender for relaxation, or juniper for circulation. Following the wrap, enjoy a massage with the complementary essential oil of your wrap.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Creek-Herbal-Wrap" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Creek-Herbal-Wrap" name="guest_1" >	
				</div> </div>
	 	</li>
		 <li class="spaTreatment" role="button">
		 	<span>Four Paths Foot Treatment</span> This specialized foot treatment is designed to refresh the sole. This treatment starts with a ginger/rosemary foot scrub, includes an in-depth massage of the feet, and finishes with steamed towels and a rosemary/peppermint foot balm to relieve tired achy feet.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Four-Paths-Foot-Treatment" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Four-Paths-Foot-Treatment" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Drift to Sleep</span> A tantalizing journey that is designed to help you let go and take you through a ritual that will promote sleep at a deep state of sub-consciousness. Begin your ritual with a calming body scrub. Enjoy an romatherapy milk bath, followed by a peaceful body massage utilizing warm aromatherapy oils. Once you enter adeep relaxation, your therapist will use intuitive healing techniques to transition you into the alpha state of sleep. After a 30-minute power nap on a warmed, down duvet and massage table you will awaken refreshed, renewed and ready to take on the remainder of the day.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Drift-to-Sleep" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Drift-to-Sleep" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Wake Me Up</span> Enjoy a unique blend of ground Coffee Arabica, Dead Seasalt and essential oils in this full bodytreatment. Our coffee scrub will exfoliate dry skin cells and draw impurities from the body while softening the skin. An energizing body oil application will then rejuvenate tired muscles and tone cellulite-prone skin with this blend of coffee extract and the essential oils of citrus, mint, peppermint and rosemary.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Wake-Me-Up" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Wake-Me-Up" name="guest_1" >	
				</div> </div>
	 	</li>
	</ul>
		<ul class="spa_type facial">
		 <li class="spaTreatment" role="button">
		 	<span>Ritz Carlton Signature Renewal Facial</span>Beautiful skin begins with personalized treatments to restore vitality and health to all skin types. This facial offers the most fundamental needs for moisture, nutrition and intensive care.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ritz-Carlton-Signature-Renewal-Facial"name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value=value="Ritz-Carlton-Signature-Renewal-Facial" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Native Herbal Facial</span>This facial journey immerses you into a state of total relax- ation with a warm lavender essential oil infused poultice treatment. We utilize the power of premium organic products to increase circulation and oxygenate your skin, bringing it to a healthy luminous balance. Your hands and feet will be massaged with a hydrat- ing lotion of lavender as your journey continues with a citrus scalp treatment.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Native-Herbal-Facial" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Native-Herbal-Facial" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Tranquility Facial</span> This ultimate facial experience leaves you stress free and rejuvenated. We use relaxing and inno- vative massage techniques to encourage stronger muscles to plump under the skin. We deliver effective organic prod- ucts filled with nutrients that leave you glowing and youthful. Melt away stress and tension as we nourish your scalp and drench your hands and feet in a warm natural soy paraffin mask.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Tranquility-Facial" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Tranquility-Facial" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Stone Sensation Facial</span> This rejuvenating facial brings together the blend of warm and cool sensations into one treatment that will melt away those tensions that settle onto the face. The warmth of the stones eases the muscle fibers while the coolness will reduce inflammation and puffiness.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Stone-Sensation-Facial" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Stone-Sensation-Facial" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Collagen Infusion Facial</span> This incredibly firming and plumping facial utilizes the purest products to hydrate and rejuvenate your skin. A specialized collagen veil works to infuse nutrients deep into the layers of the skin relieving dehydration and softening fine lines and wrinkles. This collagen enriched facial delivers dramatic and instant results.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Collagen-Infusion-Facial" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Collagen-Infusion-Facial" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Gentlemen's Deep Cleansing Facial</span> A facial designed especially for men’s unique skin care needs. This deep cleansing facial will exfoliate, detoxify, and improve circulation to rejuvenate the skin to its natural glow. A relaxing face, neck, and shoulder massage is included.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Gentlemens-Deep-Cleansing-Facial" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Gentlemens-Deep-Cleansing-Facial" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Illuminating Facial</span> Illuminate your skin and turn back the hands of time for a younger looking, radiant complexion. We start by resurfacing the skin using Alpha and Beta hydroxy acids then we deliver powerful anti-aging nutrients and vitamins into the skin. A masque is also used to nourish and hydrate the skin.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Illuminating-Facial" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Illuminating-Facial" name="guest_1" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Organic Back Facial</span> The often neglected back and shoulders will bedeeply cleansed and steamed to lift impurities and firm the skin. Follow-ing an exhilarating exfoliation with the deep cleansing brush, the back will be toned with a mask, and then drenched in scrumptious hydrating lotion.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Organic-Back-Facial" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Organic-Back-Facial" name="guest_1" >	
				</div> </div>
	 	</li>

	</ul>
	 <ul class="spa_type nails-hair">
	 	<li class="spaTreatment" role="button">
	 		<span>Georgia Peach Manicure or Pedicure</span> This southern inspired combination uses a gentle and natural peach exfoliation. Your skin will love the warm moisturizing mask and a massage with a delicious peach moisture rich cream.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Georgia-Peach-Manicure-or-Pedicure" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Georgia-Peach-Manicure-or-Pedicure" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>French Manicure or Pedicure</span> Whether it is for your wedding day or a special treat for your hands or toes they will look beautiful. This treatment will smooth your skin with a delicious blueberry soy sugar scrub followed by a hydrating mask with warm towels. A massage with a rich blueberry lotion leaves skin shimmering along with a beautiful, natural French polish.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="French-Manicure-or-Pedicure" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="French-Manicure-or-Pedicure" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Rejuvenating Cucumber and Mint Manicure and Pedicure</span> Enjoy a therapeutic treatment that will soften and soothe chapped hands and feet. A cucumber, mint and sugar scrub will exfoliate dry skin followed by moisture rich cucumber mask. We will massage with rich Shea butter to hydrate and heal the skin.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Rejuvenating-Cucumber-and-Mint-Manicure-and-Pedicure" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Rejuvenating-Cucumber-and-Mint-Manicure-and-Pedicure" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Ultimate Manicure or Pedicure</span> A decadent treatment for hands or feet using nutrient and antioxidant rich oils. Begin this treatment with an orange scented scrub, followed by a honey papaya treatment to smooth your skin. A paraffin mask draws moisture to skins surface and an application of ultra rich hydrating butters leave skin soft and velvety.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ultimate-Manicure-or-Pedicure" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Ultimate-Manicure-or-Pedicure" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Warm Stone Manicure or Pedicure</span>Essence of Ginger and Rosemary will work to soothe the body and mind with an intense pumice exfoliation. Be indulged as we massage with warm stones and your choice of lavender calming oil or Rosemary and Juniper oil to encourage circulation.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Warm-Stone-Manicure-or-Pedicure" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Warm-Stone-Manicure-or-Pedicure" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li>
	 		<strong><span>Hair</span></strong>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Shampoo and Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Shampoo-and-Style" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Shampoo-and-Style" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Ladies Cut and Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ladies-Cut-and-Style" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Ladies-Cut-and-Style" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Men's cut and Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Mens-cut-and-Style" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Mens-cut-and-Style" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Celebration Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Celebration-Style" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Celebration-Style" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Highlights</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Highlights" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Highlights" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Single Process Color</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Single-Process-Color" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Single-Process-Color" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Celebration Makeup Application</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Celebration-Makeup-Application" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Celebration-Makeup-Application" name="guest_1" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Nourishing Hair and Scalp Treatment</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Nourishing-Hair-and Scalp-Treatment" name="me_1" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Nourishing-Hair-and Scalp-Treatment" name="guest_1" >	
				</div> </div>

	 	</li>
	 	
	 </ul>


	</div>
</div>
<div class="activity">
	<div class="tennis mainInfo">

	<img src="images/tennis.jpg">
		<div class="right">
		<h3> Play some Tennis</h3>
		<p>
		I need some love dubby bulshit about tennis to go in here :)
		</p>
		</div>
	<span class="click2register">Click to register</span>
	</div>
	<div class="extraInfo">
	<h3> When you would like to play Tennis?</h3>
		<div class="me">
		<span> Me </span>	
		<label for="me_tennisMorning">Morning</label>
		<input id="tennisMorning" type="radio" value="morning" name="me_1" >
		<label for="me_tennisMorning">Afternoon</label>
		<input id="tennisMorning" type="radio" value="afternoon" name="me_1" >
		</div>
		<div class="guest">
		<span> My Guest </span>	
		<label for="guest_tennisMorning">Morning</label>
		<input id="tennisMorning" type="radio" value="morning" name="guest_1" >
		<label for="guest_tennisMorning">Afternoon</label>
		<input id="tennisMorning" type="radio" vlaue="afternoon" name="guest_1" >
		</div>
	</div>
</div>
<div class="activity">
	<div class="tour mainInfo">
	<img src="images/golf.jpg">
	<div class="right">
	<h3> Historic Madison Tour</h3>
	<p>
	Enjoy a guided tour through Historic downtown Madison. This tour features a visit to the Heritage Hall, Rogers House and Rose Cottage. A celebration of southern history, architecture, and art. Historic Madison, Georgia, renowned as one of Georgia’s largest designated National Register Historic Districts, will celebrate the 2014 spring season in grand style with the region’s most popular tour event. You will also be able to enjoy shopping in downtown Madison as the tour comes to an end. 
	</p>
	</div>
		<span class="click2register">Click to register</span>
	</div>
		<div class="extraInfo">
			<h3> Historic Madison Tour</h3>
			<div class="me">
			<span>Me</span>
			<input value="tour" type="radio" name="me_1" >
			</div>
			<div class="guest">
			<span>My Guest</span>
			<input value="tour" type="radio" name="guest_1" >	
			</div>
		</div>

</div>
<div class="activity">
	<div class="bike mainInfo">

		<img src="images/golf.jpg">
		<div class="right">
		<h3> Reynolds Plantation Bike Ride</h3>

		<p>
			Guided bike rides are the best way to explore Reynolds Plantation and get in a great work-out. Your guide will take you on an 8 mile ride through scenic Reynolds Plantation to the Plantation Commons where you can catch your breath and relax in the Zen Gardens. The route back travels to the Plantation Marina and then back to the Lodge. 	
		</p>
		</div>
			<span class="click2register">Click to register</span>
	</div>
	<div class="extraInfo">
			<h3> Reynolds Plantation Bike Ride</h3>
			<div class="me">
				<span>Me</span>
				<input value="bike" type="radio" name="me_1" >
			</div>
			<div class="guest">
				<span>My Guest</span>
				<input value="bike" type="radio" name="guest_1" >
			</div>
	</div>
</div>

<div class="activity">
	<div class="leisure mainInfo">
	<img src="images/leisure.jpg">
	<div class="right">
		<h3> Leisure Time</h3>
		<p>
		Just take the time and play it by ear, maybe sit by the pool or take in the lake , the day is yours!
		</p>
	</div>
		<span class="click2register">Click to register</span>
	</div>
	<div class="extraInfo">
			<h3> Leisure Time</h3>
			<div class="me">
				<span>Me</span>
				<input value="leisure" type="radio" name="me_1" >
			</div>
			<div class="guest">
				<span>My Guest</span>
				<input value="leisure" type="radio" name="guest_1" >
		</div>
	</div>
</div>
</div> <!-- end of day 1 -->



<div class="day-activities">
<span class="day">Activites for Sunday, May 4th</span>

<div class="golf activity">
	<div class="mainInfo">
	<img src="images/golf.jpg">
		<div class="right">
		<h3>9 hole golf game</h3>
		<p>
		The Rees Jones designed Oconee course was opened in 2002 and is named after the 19,000 acre lake that serves as the centerpiece of the Reynolds Plantation. The Oconne course challenges golfers with distracting views and tempts them to shorten holes by taking more direct routes over watery inlets. The defining feature of the course is its set of magnificent par 3’s, featuring elevated tee shots and numerous water hazards. 
		</p>
		</div>
	<span class="click2register">Click to register</span>
	</div>
	<div class="extraInfo"> 
			<h3> 9 hole golf game</h3>
			<div class="me">
				<span> Me</span>
			  	<span>Rentals Required?</span>
			  	<label for="me_rental_no">No</label>
				<input id="me_rental_no" type="radio" value="no"name="me_golf_rental_2" >
				<label for="me_rental_left">Yes, left handed</label>
				<input id="me_rental_left" type="radio" value="left" name="me_golf_rental_2" >
				<label for="me_rental_right">Yes, right handed</label>
				<input type="radio" value="right" name="me_golf_rental_2" >
				<span>Golf Shoes?</span>
				<div class="golfShoes">
					<label for="guest_shoe_no">No</label>
					<input type="radio" value="no_shoe" name="me_shoe_rental_2" >
					<label for="guest_rental_left">Mens</label>
					<input id="guest_rental_left" type="radio" value="men_shoe" name="me_shoe_rental_2" >
					<label for="guest_rental_right">Ladies</label>
					<input id="guest_rental_right" type="radio" value="lady_shoe" name="me_shoe_rental_2" >	
				</div>
				<span class="shoe-size">Shoe size 5-13<input type="number" name="me_shoe_size_2" min="5" max="13"></span>
			</div>
			<div class="guest">
				<span> My Guest</span>
			  	<span>Rentals Required?</span>
			    <label for="guest_rental_no">No</label>
				<input id="guest_rental_no" type="radio" value="no" name="guest_golf_rental_2" >
				<label for="guest_rental_left">Yes, left handed</label>
				<input id="guest_rental_left" type="radio" value="left" name="guest_golf_rental_2" >
				<label for="guest_rental_right">Yes, right handed</label>
				<input id="guest_rental_right" type="radio" value="right" name="guest_golf_rental_2" >	
				<span>Golf Shoes?</span>
				<div class="golfShoes">
					<label for="guest_shoe_no">No</label>
					<input type="radio" value="no_shoe" name="guest_shoe_rental_2" >
					<label for="guest_rental_left">Mens</label>
					<input id="guest_rental_left" type="radio" value="men_shoe" name="guest_shoe_rental_2" >
					<label for="guest_rental_right">Ladies</label>
					<input id="guest_rental_right" type="radio" value="lady_shoe" name="guest_shoe_rental_2" >	
				</div>
				<span class="shoe-size">Shoe size 5-13<input  type="number" name="guest_shoe_size_2" min="5" max="13"></span>
			</div>	
	</div>
</div>
<div class="spa activity">
<div class=" mainInfo">
	<img src="images/spa.jpg">
		<div class="right">
		<h3> A Spa treatment of your choice</h3>
		<p>
		Please select one treatment from the attached “Spa Menu” and indicate your preference on the registration form. We encourage you to book your preferred treatments early as space is limited. 
		</p>
		</div>
	<span class="click2register">Click to register</span>	
	</div>
	<div class="extraInfo">
	<nav>
	 <div id="touch">Touch Therapy</div>
	 <div id="rain">Vichy Rain Experience</div>
	 <div id="body">Body Therapy</div>
	 <div id="facial">Facial Therapy</div>
	 <div id="nails">Nail & Hair</div>
	 </nav>
	 <ul class="spa_type touch">
	 	<li class="spaTreatment" role="button">
	 		<span>The Ritz Carlton Signature Massage </span>Our signature massage combines Swedish with various massage techniques, customized to your specific needs. Choose the scent your body craves from a variety of Aromatherapy oils.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="The-Ritz-Carlton-Signature-Massage"  name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="The-Ritz-Carlton-Signature-Massage" name="guest_2" >	
				</div>

	 		</div>
	 		 		
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Intuitive Healing</span> Gentle touch therapy combines various energy healing techniques according to your individual needs. This treatment reduces stress and restores vital energy flow to harmonize mind and body.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Intuitive-Healing" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Intuitive-Healing" name="guest_2" >	
				</div>

	 		</div>

	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Reconnect Couples Massage</span>Our signa- ture massage, performed in our luxury couples suite side-by-side with a loved one. Alternate therapies are available for an additional fee depending on avail- ability.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Reconnect-Couples-Massage" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Reconnect-Couples-Massage" name="guest_2" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Deep Massage with Arnica and Steamed Towels</span> Arnica has been widely used for centuries for its healing properties and as a natural anti-inflammatory. Warmsteamed towels infuse Arnica oil into thebody to soothe muscles. This deliberate massage with firm pressure is ideal for specific areas of tension, pain or chronic issues.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Deep-Massage-with-Arnica-and-Steamed-Towels" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Deep-Massage-with-Arnica-and-Steamed-Towels" name="guest_2" >	
				</div>

	 		</div>	 	
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Ultimate Journey</span> This unique journeyfeatures a Ritz Carlton Signature massage incorporating a muscle melting back mas-sage with steaming stones. Continue the bliss with your hands and feet smothered and softened with paraffin while enjoying a citrus infused scalp massage. Finish your journey of relaxation with a “sole” soothing foot treatment.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ultimate-Journey" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Ultimate-Journey" name="guest_2" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Soothing Stone Massage</span> We use our own uplifting blend of essential oils with the penetrating heat of smooth basalt stones to relax and purify the body and soul. Light to medium pressure is used to relieve tense muscles and sore joints.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Soothing-Stone-Massage" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Soothing-Stone-Massage" name="guest_2" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Citrus Infused Scalp and Body Massage</span> Precious, nutrient rich oils combine with uplifting citrus essential oils in this luxurious scalp and full body massage. The scent enlivens your spirit, and the oils bring a healthy sheen to your hair. This is the ideal treatment for anyone wanting to relax both mind and body.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Citrus-Infused-Scalp-and-Body-Massage"  name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Citrus-Infused-Scalp-and-Body-Massage"  name="guest_2" >	
				</div>

	 		</div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Maternity Massage</span> This complete body massage uses specific techniques to help increase circulation, alleviate tired muscles, and reduce excess water retention. Pre-natal massage is only available after the first trimester.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Maternity-Massage"  name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Maternity-Massage" name="guest_2" >	
				</div>

	 		</div>
		</li>
		<li class="spaTreatment" role="button">
			<span>Reflexology</span> This ancient Eastern technique is used to relieve stress andbring balance to the entire body. Thumband finger pressure are used to massagespecific points on the feet correspond- ing to different body areas. A refreshing camphor-infused foot balm finishes this relaxing foot treatment to wake the feet up, and make you feel like you are walking on air.
	 		<div class="select">
	 			<div class="me">
	 				<span>Me</span>
					<input type="radio" value="Reflexology" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Reflexology" name="guest_2" >	
				</div>

	 		</div>
		</li>
	 </ul>
	 <ul class="spa_type rain">
	 	<li class="spaTreatment" role="button">
	 	<span>Bamboo Lemongrass Body Polish </span> Zesty lemongrass and bamboo exfoliate the skin, leaving it cleansed, polished and softened to perfection. A full body massage using pure essence of lavender destresses and relaxes the mind and body.
	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value= name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value= name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 	<span>Loblolly Body Glow</span> Enjoy a luxurious body exfoliation that will leave your skin glowing and feeling softer than a puff of Georgia cotton. Have your experience your way by choosing from evergreen scrub, lavender scrub, or citrus salt scrub. Each one has its own unique body lotion which is applied for added moisture.
			 	<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Bamboo-Lemongrass-Body-Polish" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Bamboo-Lemongrass-Body-Polish" name="guest_2" >	
				</div> </div>

	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Moor Mud Detox Wrap</span> A light body brushing begins this treatment, allowing the nerve pathways to be calmed, and prepping the skin for the mineral rich mud wrap. After showering the mud off, a soothing lotion applicationcompletes this luxurious treatment.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Moor-Mud-Detox-Wrap" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Moor-Mud-Detox-Wrap" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Oconee Rain</span> Creek medicine recognizes four key elements in its healing system: Fire, Water, Air and Earth. Performed in our Vichy room this unique treatment brings all four elements together to revitalize both mind and body. The treatment begins with a lavender dry brushing to relax tired nerves and soften skin. Warm lavender-infused stones are then placed on key touch points while the scalp is massaged. A warm rain shower further calms while your therapist uses cool eucalyptus stones to strengthen the body’s energy pathways.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value= name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value= name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 	 	<span>The Georgian</span> Welcome to the South and all that Georgia has to offer! This scrumptious peach scrub and Georgia red clay wrap will smooth and nourish your skin from neck to toes. After a slathering of sugary peaches comes the warm Georgia red clay cocoon, followed by a warm afternoon Vichy rain shower to wash it all away. The end of your visit to the south will be a delightful Shea butter infused with the essence of magnolia.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Oconee-Rain" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Oconee-Rain" name="guest_2" >	
				</div> </div>
	 	</li>
	 </ul>

	 <ul class="spa_type body">
		 <li class="spaTreatment" role="button">
		 	<span>Surrender To Serenity</span> This experience begins with a scalp, neck and shoulder massage followed by a hand and foot scrub and massage, then ending with an invigorating back massage. This treatment relieves exhaustion, stress, aches, pains, and calms the nerves.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Surrender-To-Serenity" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Surrender-To-Serenity"name="guest_2" >	
				</div> </div>
	 	</li>
		 <li class="spaTreatment" role="button">
		 	<span>"Creek Herbal Wrap"</span> Bask in a detoxifying herbal steamed towel wrap which allows your body to naturally boost cellular metabolism. Your wrap begins with a light dry brushing of the skin to calm the nerve pathways and prepare for the warmth of infused wraps. Choose from: mustard powder for muscle aches and pains, lavender for relaxation, or juniper for circulation. Following the wrap, enjoy a massage with the complementary essential oil of your wrap.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Creek-Herbal-Wrap" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Creek-Herbal-Wrap" name="guest_2" >	
				</div> </div>
	 	</li>
		 <li class="spaTreatment" role="button">
		 	<span>Four Paths Foot Treatment</span> This specialized foot treatment is designed to refresh the sole. This treatment starts with a ginger/rosemary foot scrub, includes an in-depth massage of the feet, and finishes with steamed towels and a rosemary/peppermint foot balm to relieve tired achy feet.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Four-Paths-Foot-Treatment" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Four-Paths-Foot-Treatment" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Drift to Sleep</span> A tantalizing journey that is designed to help you let go and take you through a ritual that will promote sleep at a deep state of sub-consciousness. Begin your ritual with a calming body scrub. Enjoy an romatherapy milk bath, followed by a peaceful body massage utilizing warm aromatherapy oils. Once you enter adeep relaxation, your therapist will use intuitive healing techniques to transition you into the alpha state of sleep. After a 30-minute power nap on a warmed, down duvet and massage table you will awaken refreshed, renewed and ready to take on the remainder of the day.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Drift-to-Sleep" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Drift-to-Sleep" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Wake Me Up</span> Enjoy a unique blend of ground Coffee Arabica, Dead Seasalt and essential oils in this full bodytreatment. Our coffee scrub will exfoliate dry skin cells and draw impurities from the body while softening the skin. An energizing body oil application will then rejuvenate tired muscles and tone cellulite-prone skin with this blend of coffee extract and the essential oils of citrus, mint, peppermint and rosemary.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Wake-Me-Up" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Wake-Me-Up" name="guest_2" >	
				</div> </div>
	 	</li>
	</ul>
		<ul class="spa_type facial">
		 <li class="spaTreatment" role="button">
		 	<span>Ritz Carlton Signature Renewal Facial</span>Beautiful skin begins with personalized treatments to restore vitality and health to all skin types. This facial offers the most fundamental needs for moisture, nutrition and intensive care.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ritz-Carlton-Signature-Renewal-Facial"name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value=value="Ritz-Carlton-Signature-Renewal-Facial" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Native Herbal Facial</span>This facial journey immerses you into a state of total relax- ation with a warm lavender essential oil infused poultice treatment. We utilize the power of premium organic products to increase circulation and oxygenate your skin, bringing it to a healthy luminous balance. Your hands and feet will be massaged with a hydrat- ing lotion of lavender as your journey continues with a citrus scalp treatment.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Native-Herbal-Facial" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Native-Herbal-Facial" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Tranquility Facial</span> This ultimate facial experience leaves you stress free and rejuvenated. We use relaxing and inno- vative massage techniques to encourage stronger muscles to plump under the skin. We deliver effective organic prod- ucts filled with nutrients that leave you glowing and youthful. Melt away stress and tension as we nourish your scalp and drench your hands and feet in a warm natural soy paraffin mask.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Tranquility-Facial" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Tranquility-Facial" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Stone Sensation Facial</span> This rejuvenating facial brings together the blend of warm and cool sensations into one treatment that will melt away those tensions that settle onto the face. The warmth of the stones eases the muscle fibers while the coolness will reduce inflammation and puffiness.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Stone-Sensation-Facial" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Stone-Sensation-Facial" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Collagen Infusion Facial</span> This incredibly firming and plumping facial utilizes the purest products to hydrate and rejuvenate your skin. A specialized collagen veil works to infuse nutrients deep into the layers of the skin relieving dehydration and softening fine lines and wrinkles. This collagen enriched facial delivers dramatic and instant results.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Collagen-Infusion-Facial" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Collagen-Infusion-Facial" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Gentlemen's Deep Cleansing Facial</span> A facial designed especially for men’s unique skin care needs. This deep cleansing facial will exfoliate, detoxify, and improve circulation to rejuvenate the skin to its natural glow. A relaxing face, neck, and shoulder massage is included.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Gentlemens-Deep-Cleansing-Facial" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Gentlemens-Deep-Cleansing-Facial" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Illuminating Facial</span> Illuminate your skin and turn back the hands of time for a younger looking, radiant complexion. We start by resurfacing the skin using Alpha and Beta hydroxy acids then we deliver powerful anti-aging nutrients and vitamins into the skin. A masque is also used to nourish and hydrate the skin.
		 	 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Illuminating-Facial" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Illuminating-Facial" name="guest_2" >	
				</div> </div>
	 	</li>
		<li class="spaTreatment" role="button">
		 	<span>Organic Back Facial</span> The often neglected back and shoulders will bedeeply cleansed and steamed to lift impurities and firm the skin. Follow-ing an exhilarating exfoliation with the deep cleansing brush, the back will be toned with a mask, and then drenched in scrumptious hydrating lotion.
			 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Organic-Back-Facial" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Organic-Back-Facial" name="guest_2" >	
				</div> </div>
	 	</li>

	</ul>
	 <ul class="spa_type nails-hair">
	 	<li class="spaTreatment" role="button">
	 		<span>Georgia Peach Manicure or Pedicure</span> This southern inspired combination uses a gentle and natural peach exfoliation. Your skin will love the warm moisturizing mask and a massage with a delicious peach moisture rich cream.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Georgia-Peach-Manicure-or-Pedicure" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Georgia-Peach-Manicure-or-Pedicure" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>French Manicure or Pedicure</span> Whether it is for your wedding day or a special treat for your hands or toes they will look beautiful. This treatment will smooth your skin with a delicious blueberry soy sugar scrub followed by a hydrating mask with warm towels. A massage with a rich blueberry lotion leaves skin shimmering along with a beautiful, natural French polish.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="French-Manicure-or-Pedicure" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="French-Manicure-or-Pedicure" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Rejuvenating Cucumber and Mint Manicure and Pedicure</span> Enjoy a therapeutic treatment that will soften and soothe chapped hands and feet. A cucumber, mint and sugar scrub will exfoliate dry skin followed by moisture rich cucumber mask. We will massage with rich Shea butter to hydrate and heal the skin.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Rejuvenating-Cucumber-and-Mint-Manicure-and-Pedicure" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Rejuvenating-Cucumber-and-Mint-Manicure-and-Pedicure" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Ultimate Manicure or Pedicure</span> A decadent treatment for hands or feet using nutrient and antioxidant rich oils. Begin this treatment with an orange scented scrub, followed by a honey papaya treatment to smooth your skin. A paraffin mask draws moisture to skins surface and an application of ultra rich hydrating butters leave skin soft and velvety.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ultimate-Manicure-or-Pedicure" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Ultimate-Manicure-or-Pedicure" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Warm Stone Manicure or Pedicure</span>Essence of Ginger and Rosemary will work to soothe the body and mind with an intense pumice exfoliation. Be indulged as we massage with warm stones and your choice of lavender calming oil or Rosemary and Juniper oil to encourage circulation.
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Warm-Stone-Manicure-or-Pedicure" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Warm-Stone-Manicure-or-Pedicure" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li>
	 		<strong><span>Hair</span></strong>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Shampoo and Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Shampoo-and-Style" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Shampoo-and-Style" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Ladies Cut and Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Ladies-Cut-and-Style" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Ladies-Cut-and-Style" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Men's cut and Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Mens-cut-and-Style" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Mens-cut-and-Style" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Celebration Style</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Celebration-Style" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Celebration-Style" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Highlights</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Highlights" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Highlights" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Single Process Color</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Single-Process-Color" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Single-Process-Color" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Celebration Makeup Application</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Celebration-Makeup-Application" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Celebration-Makeup-Application" name="guest_2" >	
				</div> </div>
	 	</li>
	 	<li class="spaTreatment" role="button">
	 		<span>Nourishing Hair and Scalp Treatment</span>
	 		 		<div class="select"> <div class="me">
	 				<span>Me</span>
					<input type="radio" value="Nourishing-Hair-and Scalp-Treatment" name="me_2" >
				</div>
				<div class="guest">
					<span>My Guest</span>
					<input type="radio" value="Nourishing-Hair-and Scalp-Treatment" name="guest_2" >	
				</div> </div>

	 	</li>
	 	
	 </ul>


	</div>
</div>
<div class="activity">
	<div class="tennis mainInfo">

	<img src="images/tennis.jpg">
		<div class="right">
		<h3> Play some Tennis</h3>
		<p>
		I need some love dubby bulshit about tennis to go in here :)
		</p>
		</div>
	<span class="click2register">Click to register</span>
	</div>
	<div class="extraInfo">
	<h3> When you would like to play Tennis?</h3>
		<div class="me">
		<span> Me </span>	
		<label for="me_tennisMorning">Whish to Participate</label>
		<input id="tennisMorning" type="radio" value="tennis" name="me_2" >
		</div>
		<div class="guest">
		<span> My Guest </span>	
		<label for="guest_tennisMorning">Whish to Participate</label>
		<input id="tennisMorning" type="radio" value="tennis" name="guest_2" >
		</div>
	</div>
</div>

<div class="activity">
	<div class="leisure mainInfo">
	<img src="images/leisure.jpg">
	<div class="right">
		<h3> Leisure Time</h3>
		<p>
		Just take the time and play it by ear, maybe sit by the pool or take in the lake , the day is yours!
		</p>
	</div>
		<span class="click2register">Click to register</span>
	</div>
	<div class="extraInfo">
			<h3> Leisure Time</h3>
			<div class="me">
				<span>Me</span>
				<input value="leisure" type="radio" name="me_2" >
			</div>
			<div class="guest">
				<span>My Guest</span>
				<input value="leisure" type="radio" name="guest_2" >
		</div>
	</div>
</div>

</div>

<input type="submit" class="submit" name="submit" value="NEXT >>" placeholder="">
</form>
</div>
<script>
$( ".activity" ).click(function() {
	var $this = $(this);
	$this.children('.mainInfo').slideUp(1000);
	$this.children('.mainInfo').fadeOut();
	$this.children('.extraInfo').fadeIn();
	$this.children('.extraInfo').slideDown(1000);
});


$('#touch').click(function(){
		$('.active').removeClass('active');
		$(this).addClass('active');
		$('.spa_type').fadeOut(100);
		$('.touch').fadeIn(500);

});
$('#rain').click(function(){
		$('.active').removeClass('active');
		$(this).addClass('active');
		$('.spa_type').fadeOut(100);
		$('.rain').fadeIn(500);

});
$('#body').click(function(){
		$('.active').removeClass('active');
		$(this).addClass('active');
		$('.spa_type').fadeOut(100);
		$('.body').fadeIn(500);

});
$('#facial').click(function(){
		$('.active').removeClass('active');
		$(this).addClass('active');
		$('.spa_type').fadeOut(100);
		$('.facial').fadeIn(500);

});
$('#nails').click(function(){
		$('.active').removeClass('active');
		$(this).addClass('active');
		$('.spa_type').fadeOut(100);
		$('.nails-hair').fadeIn(500);

});




$('.spaTreatment').click(function(){
	$(this).children('.select').fadeIn(500);

})
/*if golf selected select */
$("input[name=me_golf_rental_1]").click(function(){
	RadionButtonSelectedValueSet('me_1', 'golf');
});
$("input[name=guest_golf_rental_1]").click(function(){
	RadionButtonSelectedValueSet('guest_1', 'golf');
});
$("input[name=me_golf_rental_2]").click(function(){
	RadionButtonSelectedValueSet('me_2', 'golf');
});
$("input[name=guest_golf_rental_2]").click(function(){
	RadionButtonSelectedValueSet('guest_2', 'golf');
});


function RadionButtonSelectedValueSet(name, SelectdValue) {
    $('input[name="' + name+ '"][value="' + SelectdValue + '"]').prop('checked', true);
}

</script>

</body>
</html>
