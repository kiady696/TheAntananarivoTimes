
<?php 

    $articleString = $news_item['title'].' '.$news_item['text'];
    $words = str_word_count($articleString, 1,'àáãçéèêîìû43');
    $words = array_count_values($words);
    //look at the number of occurence of repeated word
    
    //$strongs = array(array_keys($words,2) => '<strong>'.array_keys($words,2)[0].'</strong>');
    $strongs = array();
    foreach($words as $key => $value){                   //ATO NO BOLA MISY TSY METY KELY FA AFAKA ATAO FONCTION MITOKANA MITSY AHITANA AZY 
        if($value>1){
            $repeated = array_keys($words,$value);
            //$strongs[$repeated] = $repeated;
        }
    }
    //echo var_dump($words);

    //Les mots répétés dans le titre et le texte à mettre en <strong>
    //echo var_dump($repeated);

    //$string = "Kiady , homme , gentil";
    //echo str_replace('Kiady','strong',$string);
    
    $texteArticle = $news_item['text'];
    //echo $texteArticle;
    $temp = $texteArticle; //bola tsy nisy remplacé mitsy
    if(isset($repeated)){
        foreach($repeated as $rp => $mot){
            //echo $mot;
            if(strlen($mot)>4){
                $temp = str_ireplace($mot,'<strong>'.$mot.'</strong>',$temp);
            }
        }
        //echo var_dump($temp);
    }


?>

<!-- ##### trailing link Area Start ##### -->
<div >
        <div class="container">
            <div class="row align-items-center">
               <h4>news/<?php echo $news_item['slug']; ?></h4> 
            </div>

        </div>
    </div>
    <!-- ##### trailing link End ##### -->

    
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="<?php echo base_url('img/bg-img/video2.jpg'); ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h1><?php echo $news_item['title']; ?></h1>
                                </a>
                                <div class="post-meta">
                                    <p><?php echo $temp; ?></p>
                                   
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                <li><a href="#">categorie1</a></li>
                                                <li><a href="#">categorie2</a></li>
                                                <li><a href="#">categorie3</a></li>
                                            </ul>
                                        </div>

                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <a href="#" class="post-like"><img src="<?php echo base_url('img/core-img/like.png'); ?>" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="<?php echo base_url('img/core-img/chat.png'); ?>" alt=""> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        

                        
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?php echo base_url('img/bg-img/viewSisiny.jpg'); ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Exemple article </h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?php echo base_url('img/bg-img/viewSisiny.jpg'); ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Exemple article</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?php echo base_url('img/bg-img/viewSisiny.jpg'); ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Health</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Exemple article</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?php echo base_url('img/bg-img/viewSisiny.jpg'); ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Exemple article</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?php echo base_url('img/bg-img/viewSisiny.jpg'); ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Travel</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Exemple article</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?php echo base_url('img/bg-img/viewSisiny.jpg'); ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Exemple article</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            <h3>4 Most Popular News</h3>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>1.</span> Exemple article</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>2.</span> Exemple article</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>3.</span> Exemple article</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>4.</span>Exemple article</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->






