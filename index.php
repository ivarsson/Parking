<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>P-automat</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script type="text/javascript" src="maps.js"></script>
	<script type="text/javascript" charset="utf-8">
	
	var timeStore = {
        h:     undefined,
        m:     undefined,
        price: undefined,
	    getPrice: function() {
	        return "Tim " + this.h.val() + " Min " + this.m.val();
	    },
        updatePrice: function() {
            console.log(this);
            timeStore.price.val(timeStore.getPrice());
        },
	    init: function() {
            this.h     = $('#timmar');
            this.m     = $('#minuter');
            this.price =  $('#betala');
	        this.h.change(this.updatePrice);
	        this.m.change(this.updatePrice);
	    }
	};

	$(function() { timeStore.init(); });
	
	</script>
	
</head>
<body>
	
	<!-- Start of first page: #start -->
	<div data-role="page" id="start">

		<div data-role="header">
			<h1>P-automat</h1>
		</div><!-- /header -->
		
		<div data-role="content" id="main">

			<h1>Välkommen, välj ett alternativ</h1>

			<div class="buttonCont">

				<a href="#pay" class="button" background-image: data-role="button">Betala</a>
				<a href="#map" class="button" data-role="button">Parkering</a>
				<span class="button">Se lediga cyklar i närheten</span>
				<span class="button">Se närliggande kollektivtrafik</span>

			</div>

		</div>
		
		<div data-role="footer">
			<h4>Välkommen</h4>
		</div><!-- /footer -->
	</div>
	
	<!-- Map page-->
	<div data-role="page" id="map">
		<?php include 'map.php'; ?>
	</div>
	
	<!--Pay page-->
	<div data-role="page" id="pay">
		<?php include 'pay.php'; ?>
	</div>

</body>

</html>