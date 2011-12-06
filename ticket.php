<div data-role="header" data-theme="a">
	<h1>Välj biljett typ</h1>
</div>

<div id="progressBar">
	<span class="done">1. Välj tjänst</span>
	<span class="done">2. Välj tid</span>
	<span class="active">3. Biljettyp</span>
	<span class="inactive">4. Bekräfta</span>
</div>


	<a href="#" id="paper" class="button" data-role="button">Pappersbiljett</a>
	
	<div id="mobileButton">
		<a href="#" id="mobile" class="button" data-role="button">SMS-biljett</a>
		<div id="smsTicket" class="button" style="display:none;">
			<form action="" method="POST">
			<input type="text" name="regnr" id="regnr" placeholder="Registreringsnummer" />
			<br />
			<input type="text" name="telnr" id="telnr" placeholder="Mobiltelefonnummer" />
			<br />
			<input type="submit" name="cancel" value="Ångra">
			<input type="submit" name="submit" value="Nästa" />
			<form>
		</div>
	</div>


<div id="smsTicket" style="display:none;">
	<label for="regnr">Registreringsnummer: </label>
	<input type="text" name="regnr" id="regnr" />
	<br />
	<label for="telnr">Mobilnummer: </label>
	<input type="text" name="telnr" id="telnr" />
</div>



<div data-role="footer" data-theme="a">
	<p>
		<a class="back" onClick="window.location.reload()" href="#pay" data-role="button" data-inline="true" data-icon="back">Tillbaka</a>
		<a class="forward"  onClick="window.location.reload()" href="#start" data-role="button" data-inline="true" data-icon="forward">Nästa</a>
	</p>
</div>