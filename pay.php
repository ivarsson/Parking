<div data-role="header" data-theme="a">
	<h1>Hur länge vill du parkera?</h1>
</div>

<div id="progressBar">
	<span class="done">1. Välj tjänst</span>
	<span class="active">2. Välj tid</span>
	<span class="inactive">3. Biljettyp</span>
	<span class="inactive">4. Bekräfta</span>
</div>
	
<div data-role="fieldcontain" >

	<h1>Dra i reglagen för att justera timmar och minuter</h1>


	<form method="post">

	<table id="hoursMinTable">
		
	<tr>
		<td class="headerTd"><label for="timmar">Timmar: </label></td>
		<td><input type="range" name="timmar" readonly="readonly" id="timmar" value="0" min="0" max="23"  /></td>
	</tr>
	
	<tr>
		<td><label for="minuter">Minuter: </label></td>
		<td><input type="range" name="minuter" id="minuter" readonly="readonly" value="0" min="0" max="60"  /></td>
	</tr>
	</table>
	
	<div id="totalSum">
	<label for="slider">Totalsumma: </label>
	<input type="text" id="betala" name="betala" readonly="readonly" value="0"/>
	<span>SEK</span>	
	</div>
	
</div>


<div data-role="footer" data-theme="a">
	<p>
		<a class="back" href="#start" onClick="window.location.reload()" data-role="button" data-inline="true" data-icon="back">Tillbaka</a>
		<a class="forward" href="#ticket" onClick="window.location.reload()" data-rel="forward" data-role="button" data-inline="true" data-icon="forward">Nästa</a>
	</p>
	</form>
</div>

