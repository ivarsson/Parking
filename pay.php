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

	<label for="slider">Timmar: </label>
	<input type="range" name="timmar" id="timmar" value="0" min="0" max="23"  />
	<br />
	<label for="slider">Minuter: </label>
	<input type="range" name="minuter" id="slider" value="0" min="0" max="59"  />
	<br />
	<br />
	<label for="slider">Att betala: </label>
	<input type="text" id="betala" name="betala" />
	
</div>


<div data-role="footer" data-theme="a">
	<p>
		<a class="back" href="#start" data-rel="back" data-role="button" data-inline="true" data-icon="back">Tillbaka</a>
		<a class="forward" href="#start" data-rel="forward" data-role="button" data-inline="true" data-icon="forward">Nästa</a>
	</p>
</div>

