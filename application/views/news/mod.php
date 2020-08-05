<?php   
    echo $news_item['title'].' : '.$news_item['text'].' : '.$news_item['slug']; 

?></br>

<?php echo form_open('news/change'); ?>

    <label for="title">Titre</label>
    <input type="text" name="title" value="<?php echo $news_item['title']; ?>" /><br />

    <input type="hidden" name="slug" value="<?php echo $news_item['slug']; ?>"/>

    <label for="text">Text</label>
    <input name="text" value="<?php echo $news_item['text'];  ?>"/><br />

    <input type="submit" name="submit" value="Modifier" />

</form>

<?php echo validation_errors(); ?>

<a href="<?php echo base_url('news/delete/'.$news_item['id']); ?>"> Supprimer cet article </a>
