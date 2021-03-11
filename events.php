<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/1/19
 * Time: 4:41 PM
 */
include('header.php');
?>
    <header class="home-area overlay angle" style="padding: 150px 15px 50px !important;margin: 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="page-title text-center">
                        <h5 class="title white-color">Events</h5>
                        <h3 class="white-color"></h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
            <form action="" method="post" role="form">
                <legend>Events Search</legend>
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="">Event Name</label>
                            <input type="text" class="form-control" placeholder="Search Tenant">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="">Participants</label>
                            <select name="" id="" class="form-control">
                                <?php $names = ['Ashekur bakery', 'Dinner Kebab', 'Zalira Fashion', 'Hyonday motor'];?>
                                <?php foreach ($names as $name) : ?>
                                <option value=""><?=$name?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" class="form-control" >
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <div class="row masonry">
                <?php
                $names = ['Ashekur bakery', 'Dinner Kebab', 'Zalira Fashion', 'Hyonday motor'];
                $categories = ['Food and beverages', 'Fashion', 'Jewelry', 'Gadget']
                ?>
                <?php for ($i = 1; $i <= 20; $i++) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 masonry-item">
                        <article class="post-single post-single-sm" style="margin: 10px 20px;">
                            <figure class="post-media no-margin wow fadeInDown">
                                <img src="images/blog-<?=rand(1,6)?>.jpg" alt="">
                                <div class="post-date">
                                    <div class="date"><?=rand(10,31)?></div>
                                    <div class="month">Jan</div>
                                </div>
                            </figure>
                            <div class="post-body wow fadeInUp">
                                <div class="post-meta">
                                    <h5 class="dark-color"><a href="detail.php">Lorem ipsum dolor sit amet, consectetur adipiing elit</a></h5>
                                </div>
                                <a href="detail.php" class="read-more">View More</a>
                            </div>
                        </article>
                        <div class="space-40"></div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>

<?php
include('footer.php');
