<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/1/19
 * Time: 4:25 PM
 */
include('header.php');
?>
    <header class="home-area overlay angle" style="padding: 150px 15px 50px !important;margin: 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="page-title text-center">
                        <h5 class="title white-color">Gallery</h5>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="space-30"></div>
                </div>
            </div>
        </div>
        <div class="row masonry">
            <?php for ($i = 1;$i <= 12;$i++) :?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 masonry-item">
                    <article class="post-single post-single-sm">
                        <figure class="post-media no-margin">
                            <img src="images/blog-<?=rand(1,10)?>.jpg" alt="">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags"><a href="#" class="label label-default">People</a></div>
                                <div class="post-date"><?=date('d M Y', strtotime( '+'.mt_rand(0,30).' days'))?></div>
                            </div>
                            <h5 class="dark-color"><a href="single.html">Lorem ipsum dolor sit amet, consectetur adipiing elit</a></h5>
                            <a href="detail.php" class="read-more">View More</a>
                        </div>
                    </article>
                </div>
            <?php endfor ?>
        </div>
    </div>



<?php
include('footer.php');
