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
                        <h5 class="title white-color">Directories</h5>
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
                <legend>Directory Search</legend>
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="">Tenant Name</label>
                            <input type="text" class="form-control" placeholder="Search Tenant">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="">Floor</label>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="" id="" class="form-control">
                                <option value="">Food and beverages</option>
                            </select>
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
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 masonry-item">
                        <div class="team-box">
                            <div class="team-image"
                                 style="background: url(images/about-logo.png) no-repeat center center; background-size: cover">
                            </div>
                            <img src="images/blog-<?= rand(1, 10) ?>.jpg" alt="">
                            <div class="content">
                                <h4 class="title">
                                    <a href="detail.php">
                                        <?=$names[rand(0,3)]?>
                                    </a>
                                </h4>
                                <h6 class="position"><i class="lnr lnr-tag"></i> &nbsp;
                                    <?=$categories[rand(0,3)]?>
                                </h6>
                                <small>
                                    Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod
                                    tempo.
                                </small>
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>

<?php
include('footer.php');
