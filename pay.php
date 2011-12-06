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

	<table id="hoursMinTable">
		
	<tr>
		<td class="headerTd"><label for="timmar">Timmar: </label></td>
		<td><input type="range" name="timmar" id="timmar" value="0" min="0" max="23"  /></td>
	</tr>
	
	<tr>
		<td><label for="minuter">Minuter: </label></td>
		<td><input type="range" name="minuter" id="minuter" value="0" min="0" max="60"  /></td>
	</tr>
	<tr>
		<td><label for="slider">Totalsumma: </label></td>
		<td><input type="text" id="betala" name="betala" />SEK</td>
	</tr>
	</table>
</div>


<div data-role="footer" data-theme="a">
	<p>
		<a class="back" href="#start" data-role="button" data-inline="true" data-icon="back">Tillbaka</a>
		<a class="forward" href="#ticket" onClick="window.location.reload()" data-rel="forward" data-role="button" data-inline="true" data-icon="forward">Nästa</a>
	</p>
</div>

