<?php
    if(!isset($_SESSION['username']))
    {
        // user is not logged in
        // re-direct user to login.php
        redirect('admin/login');
    }
    
    
    //echo $_SESSION['username'];
    
    $nom = $_SESSION['username'];
    
    //$_SESSION['news'] koa anaty session
    echo 'Bienvenu '.$nom;
    
    if(ISSET($message_success)){
        ?><h4> <?php echo $message_success; ?> </h4> <?php
    }?>

    <body>
    <h2> Les articles dans la base de donnée : </h2>
        <div id="action">
            <h3><a href="<?php echo base_url('news/create');?>"> Ajouter un nouvel article </a> <h3>
            <h3><a href="<?php echo base_url('admin/deconnect');?>"> Se déconnecter </a> <h3>
        </div>
        <div class="container">
        <?php
            foreach($news as $news_item):?>
                <h2><?php echo $news_item['title'];?></h2>
                <h3><?php echo $news_item['text'].substr(0,100);?></h3>
                <a href="<?php echo base_url('admin/mod/'.$news_item['slug']); ?>"> Modifier/Supprimer </a></br>
                <hr>
                <?php endforeach; ?> 
            
            
        </div>


    </body>

    
    
