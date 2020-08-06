
<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
        <div class="container">
        <?php foreach ($news as $news_item): ?>
                <?php $img = mt_rand(1,32) ?>
                <?php $extrait = $news_item['text'].substr(0,100); ?>
            <div class="row">

                            <!-- Single Featured Post -->
                            <div class="col">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/<?php echo $img; ?>.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-blog-post featured-post">
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <h6><?php echo $news_item['title']; ?></h6>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-excerp" id="extrait"><?php echo $extrait.'...'; ?></p>
                                            <h6 class="link">Pour lire cet article : <a href="<?php echo base_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['slug']; ?></a></h6>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div></br>
        <?php endforeach; ?>
        
        </div>
        <script>
                var paragraphe = document.getElementById('extrait');
                paragraphe.innerHTML = paragraphe.substring(0,100)+'...';

        </script>
    </div>

    
    






