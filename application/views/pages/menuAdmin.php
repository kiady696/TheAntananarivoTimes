<?php
    
    
    //$_SESSION['news'] koa anaty session
    echo 'Bienvenu '.$_SESSION['user'];

    ?> <h2> Les news </h2>
    <?php
        foreach($_SESSION['news'] as $news){
            echo $news['title'];?></br><?php

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