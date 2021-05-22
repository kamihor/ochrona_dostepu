<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>    
    
<div style="width:90%; margin: 2em auto;">
    
<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
    <legend>Kalkulator kredytowy</legend>
    <fieldset>
        <label for="id_value">Kwota: </label>
        <input id="id_value" type="text" name="value" value"<?php out($value) ?>" />
        <label for="id_yers">Okres spłaty: </label>
        <input id="id_years" type="text" name="years" value"<?php out($years) ?>" />
        <label for="id_percent">Oprocentowanie: </label>
        <input id="id_percent" type="text" name="percent" value"<?php out($percent) ?>" />
    </fieldset>
 	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	 
    
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Miesięczna rata: '.$result; ?>
</div>
<?php } ?>

</div>

</body>
</html>