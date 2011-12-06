<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>P-automat</title> 
	<link rel="stylesheet" href="jqueryMobile.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="jqueryMobile.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script type="text/javascript" src="maps.js"></script>
	<script type="text/javascript" charset="utf-8">
	
	var timeStore = {
        h:     undefined,
        m:     undefined,
        price: undefined,
	    getPrice: function() {
	        return (this.h.val()*20) + parseInt((this.m.val()/3));
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

	
	$(document).ready(function() {
		
		$("#mobile").click(function() {
			$("#mobile").hide(1000, function() {
				$("#smsTicket").show(1000);
			});

		});
	
	});
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

				<a href="#pay" class="button" style="background-image:url('images/payTicket.png'); repeat:none;" onClick="window.location.reload()" data-role="button">Betala parkering</a>
				<a href="#map" class="button" style="background-image:url('images/mapsIcon.png'); repeat:none;" onClick="window.location.reload()" data-role="button">Andra parkeringar i närheten</a>
				<a href="#cycles" class="button" style="background-image:url('images/freeBikes.png'); repeat:none;" data-role="button">Lediga hyrcyklar i närheten</a>
				<a href="#publicTrans" class="button" style="background-image:url('images/publicTransport.png'); repeat:none;" data-role="button">Kollektivtrafik i närheten</a>
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
	
	<!--Ticket page-->
	<div data-role="page" id="ticket">
		<?php include 'ticket.php'; ?>
	</div>

</body>

</html>