
<?php require_once(PATH_VIEWS.'header.php');?>
<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> <?=HOME?></a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=  $currentArticle->getTitre() ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12">

                <!-- Post Details Area -->
                <div class="single-post-details-area">
                    <div class="post-content">

                        <div class="text-center mb-50">
                            <p class="post-date"><?=  $currentArticle->getDate() ?></p>
                            <h2 class="post-title"><?=  $currentArticle->getTitre() ?></h2>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="#"><span>par</span> <?=  $currentArticle->getAuteur() ?></a>
                                <a href="#">03 <span>Commentaires</span></a>
                            </div>
                        </div>

                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="<?=PATH_IMG?>post/<?=  $currentArticle->getIm1() ?>" alt="1ere illustration">
                        </div>

                        <!-- Post Text -->
                        <div class="post-text">
                            <!-- Share -->
                            <div class="post-share">
                                <span>Share</span>
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="pin"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                            </div>

                            <?php require_once("./Post/".$currentArticle->getTexte());?>

                            <blockquote class="shortcodes">
                                <div class="blockquote-icon">
                                    <img src="<?=PATH_IMG?>core-img/quote.png" alt="">
                                </div>
                                <div class="blockquote-text">
                                    <h5><?=  $currentArticle->getCitation() ?></h5>
                                    
                                </div>
                            </blockquote>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="<?=PATH_IMG?>post/<?=  $currentArticle->getIm2() ?>" alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="<?=PATH_IMG?>post/<?=  $currentArticle->getIm3() ?>" alt="">
                                </div>
                            </div>

                            <!-- Post Tags & Share -->
                            <div class="post-tags-share">
                                <!-- Tags -->
                                <ol class="popular-tags d-flex flex-wrap">
                                    <li><a href="#">Anime</a></li>
                                    <li><a href="#">Manga</a></li>
                                    <li><a href="#">Shonen</a></li>
                                </ol>
                            </div>

                            <!-- Related Post Area -->
                            <div class="related-posts clearfix">
                                <!-- Headline -->
                                <h4 class="headline">Articles relatifs</h4>

                                <div class="row">

                                    <!-- Single Blog Post -->
                                    <div class="col-12 col-sm-6">
														<div class="single-blog-post mb-50">
																<!-- Thumbnail -->
																<div class="post-thumbnail">
																		<a href="#"><img src="<?=PATH_IMG?>blog-img/akame.jpg" alt="akame ga kill"></a>
																</div>
																<!-- Content -->
																<div class="post-content">
																		<p class="post-date">12 MARS 2019 / Article Complet</p>
																		<a href="#" class="post-title">
																				<h4>Akame Ga Kill : Le Kill Bill Japonais.</h4>
																		</a>
																		<p class="post-excerpt">Tatsumi veut rentrer dans l'armée, mais s'aperçoit bien vite que la réalité n'est pas aussi rose que l'imagination.</p>
																</div>
														</div>
												</div>

                                    <!-- Single Blog Post -->
                                    <div class="col-12 col-sm-6">
														<div class="single-blog-post mb-50">
																<!-- Thumbnail -->
																<div class="post-thumbnail">
																		<a href="#"><img src="<?=PATH_IMG?>blog-img/initialD.jpg" alt="initial D"></a>
																</div>
																<!-- Content -->
																<div class="post-content">
																		<p class="post-date">16 MARS 2019 / Article Complet</p>
																		<a href="#" class="post-title">
																				<h4>Initial D : L'histoire accrochante d'un jeune prodige.</h4>
																		</a>
																		<p class="post-excerpt">L'histoire incroyable du jeune Takumi Fujiwara qui arpente les routes du col d'Akina (Japon) au volant de sa Toyota AE86.</p>
																</div>
														</div>
												</div>

                            <!-- Comment Area Start -->
                            <div class="comment_area clearfix">
                                <h4 class="headline">12 Comments</h4>
                                <ol>
                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="img/blog-img/9.jpg" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <span class="comment-date">13 MARS 2019</span>
                                                <h5>Calantha Flower</h5>
                                                <p>Super Anime !!</p>
                                                <a href="#">J'aime</a>
                                                <a class="active" href="#">Repondre</a>
                                            </div>
                                        </div>
                                        <ol class="children">
                                            <li class="single_comment_area">
                                                <div class="comment-wrapper d-flex">
                                                    <!-- Comment Meta -->
                                                    <div class="comment-author">
                                                        <img src="img/blog-img/10.jpg" alt="">
                                                    </div>
                                                    <!-- Comment Content -->
                                                    <div class="comment-content">
                                                        <span class="comment-date">18 MARS 2019</span>
                                                        <h5>Dianna Agron</h5>
                                                        <p>J'adore l'article !</p>
                                                        <a href="#">J'aime</a>
                                                        <a class="active" href="#">Repondre</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="img/blog-img/11.jpg" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <span class="comment-date">24 MARS 2019</span>
                                                <h5>Chris Hemsworth</h5>
                                                <p>Anime ajouté à ma liste !</p>
                                                <a href="#">J'aime</a>
                                                <a class="active" href="#">Repondre</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>

                            <!-- Leave A Comment -->
                            <div class="leave-comment-area clearfix">
                                <div class="comment-form">
                                    <h4 class="headline">Laisser un commentaire</h4>

                                    <!-- Comment Form -->
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact-name" placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Commentaire"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn nikki-btn">Envoyer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Content Area End ##### -->
<?php require_once(PATH_VIEWS.'footer.php');?>
