<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

	<div class="container">
		<form action="<?=site_url('RegistratieGids/registratie')?>" method="post">
			<label for="naam">Naam</label>
			<input type="text" name="naam"/>

			<label for="voornaam">Voornaam</label>
			<input type="text" name="voornaam"/>

			<label for="gebruikersnaam">Gebruikersnaam</label>
			<input type="text" name="gebruikersnaam"/>

			<label for="email">Email</label>
			<input type="text" name="email"/>

			<label for="wachtwoord">Password</label>
			<input type="password" name="wachtwoord"/>

			<label for="opleiding">Opleiding</label>
			<input type="text" name="opleiding"/>

			<label for="school">School</label>
			<input type="text" name="school"/>

			<input type="submit" value="Registreer" name="registeer"/>
		</form>
	</div>

</body>
</html>