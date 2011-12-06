<div data-role="header" data-theme="a">
	<h1>Välj biljett-typ</h1>
</div>

<div id="progressBar">
	<span class="done">1. Välj tjänst</span>
	<span class="done">2. Välj tid</span>
	<span class="active">3. Biljettyp</span>
	<span class="inactive">4. Bekräfta</span>
</div>

	<div id="main">
		<h1>Tryck på det biljettalternativ du önskar</h1>

	<a href="#confirmPaper" class="button" style="background-image:url('images/paperTicket.png'); repeat:none;" onClick="window.location.reload()" data-role="button">Pappersbiljett</a>
		<a href="#confirmMobile" class="button" style="background-image:url('images/smsTicket.png'); repeat:none;" onClick="window.location.reload()" data-role="button">SMS-biljett</a>

</div>

<div data-role="footer" data-theme="a">
	<p>
		<a class="back" onClick="window.location.reload()" href="#pay" data-role="button" data-inline="true" data-icon="back">Tillbaka</a>

	</p>
</div>