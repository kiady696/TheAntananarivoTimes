<?php
    if(!isset($_SESSION['username']))
    {
        // user is not logged in
        // re-direct user to login.php
        redirect('admin/login');
    }
    
    
    echo $_SESSION['username'];
    
    $nom = $_SESSION['username'];
    
    //$_SESSION['news'] koa anaty session
    echo 'Bienvenu '.$nom;

    ?> <h2> Les news </h2>
    <?php
        foreach($news as $news_item){
            echo $news_item['title'];?>
             
            <a href="<?php echo base_url('admin/mod/'.$news_item['slug']); ?>"> Modifier/Supprimer </a>

            </br><?php

            //AFFICHER UN BOUTON MODIFIER/SUPPRIMER UN NEWS href="news/mod/$news['slug']"
        }
    
    //AFFICHER UN BOUTON AJOUTER UN NEWS href="news/create"
    ?> 
       <h3><a href="<?php echo base_url('news/create');?>"> Ajouter un nouvel article </a> <h3>
       <h3><a href="<?php echo base_url('admin/deconnect');?>"> Se déconnecter </a> <h3>
 
    <?php
    if(ISSET($message_success)){
        ?><h4> <?php echo $message_success; ?> </h4> <?php
    }


?>