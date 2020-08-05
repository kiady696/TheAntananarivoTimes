
<?php echo form_open('user/login'); ?>

    <label for="username">Nom d'Utilisateur</label>
    <input type="text" name="username" /><br />

    <label for="pwd">Mot de passe</label>
    <input type="text" name="pwd"/><br />

    <input type="submit" name="submit" value="Se Connecter" />

</form>

<?php echo validation_errors(); ?>
<h5> <?php if(ISSET($erreur_login)){
    echo $erreur_login;
} ?> </h5>