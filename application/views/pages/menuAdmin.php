<?php
    echo 'Bienvenu '.$user_session;

    ?> <h2> Les news </h2>
    <?php
        foreach($news_item as $news){
            echo $news['title'];?></br><?php

            //AFFICHER UN BOUTON MODIFIER/SUPPRIMER UN NEWS href="news/mod/$news['slug']"
        }
    
    //AFFICHER UN BOUTON AJOUTER UN NEWS href="news/create"
    

    if(ISSET($message_success)){
        ?><h4> <?php echo $message_success; ?> </h4> <?php
    }


?>