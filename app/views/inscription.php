<script src="./laravel/public//dropzone.js"></script>

<h2>Inscription au site : </h2>
<form action="http://localhost/laravel/public/inscription" method="post">
  <label for="nom"><strong>Nom :</strong></label>
  <input type="text" name="nom" id="nom"/><br>
   <?php echo $errors->first('passe', '<p>:message</p>'); ?>
  <label for="pass"><strong>Mot de passe :</strong></label>
  <input type="text" name="passe" id="pass"/><br>
  <label for="confirmepasse"><strong>Confirmation du mot de passe :</strong></label>
  <input type="text" name="confirmepasse" id="confirmepasse"/>
  <input type="submit" value="S'inscrire"/>
</form>