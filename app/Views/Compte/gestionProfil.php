<form method='post' action="<?php echo DIR;?>mon-compte/gestion-profil">
	<label>Login : </label><input type='text' name="login" value="<?=$_POST['login'];?>" /><br />
    <label>Email: </label><input type='text' name="email" value="<?=$_POST['email'];?>" /><br />
    <label>Mot de passe : </label><input type='password' name="password"/><br />
    <input type="submit" value="Valider" />
</form>