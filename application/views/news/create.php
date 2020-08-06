<h2><?php echo $title; ?></h2>


<?php echo form_open('news/create'); ?>

    <label for="title">Titre</label>
    <input type="text" name="title" /><br />

    <label for="text">Text (tip:Vous pouvez agrandir ce champ en bas à droite)</label>
    <textarea id="inputText" name="text"></textarea><br /> 
    <input type="submit" name="submit" value="Ajouter votre article" />

</form>

<?php echo validation_errors(); ?>
