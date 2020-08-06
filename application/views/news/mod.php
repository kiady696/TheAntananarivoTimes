<body>
    <center> <h1> Modifier l'article </h1> </center>
    <div class="container">
    <?php echo form_open('news/change'); ?>

        <label for="title">Titre</label>
        <input type="text" name="title" value="<?php echo $news_item['title']; ?>" /><br />

        <input type="hidden" name="slug" value="<?php echo $news_item['slug']; ?>"/>

        <label for="text">Text</label>
        <input id="inputText" name="text" size=100% value="<?php echo $news_item['text'];  ?>"/><br />

        <input type="submit" name="submit" value="Modifier" />

        </form>

        <?php echo validation_errors(); ?>

        <h4><a href="<?php echo base_url('news/delete/'.$news_item['id']); ?>"> Supprimer cet article </a></h4>


    </div>
</body>


