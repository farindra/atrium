<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/1/19
 * Time: 3:10 PM
 */
include('header.php');
?>
    <header class="home-area angle" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-6">
                    <h3 class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet</h3>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused. </p>
                    </div>
                    <a href="detail.php" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-arrow-right-circle"></i> View More</a>
                    <div class="space-100"></div>
                    <div class="space-100 hidden-xs"></div>
                </div>
            </div>
        </div>
    </header>

    <section class="testimonial-area" id="testimonial_page" style="padding: 0 0 50px !important;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Events</h5>
                        <h3 class="dark-color">Upcoming / Latest Events</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused. Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <?php for ($i = 1;$i <= 12;$i++) :?>
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
                                    <a href="events.php" class="read-more">View More</a>
                                </div>
                            </article>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="progress-area gray-bg" id="progress_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Loyalty Program</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Join our programs</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                        </div>
                        <div class="space-50"></div>
                        <a href="loyalty.php" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Membership</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 wow fadeInRight">
                    <figure class="mobile-image">
                        <img src="images/download-image.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-area" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="page-title text-center">
                        <h5 class="title wow fadeInUp">Tenants</h5>
                        <h3 class="dark-color wow fadeInUp">Our Client Loves US</h3>
                        <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                        <div class="space-40"></div>
                        <a href="directory.php" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Directory</a>
                    </div>
                    <div class="space-40 visible-sm visible-xs hidden"></div>
                </div>
                <div class="col-md-8">
                    <div class="page-title text-center">
                        <h5 class="title wow fadeInUp">Follow Us on Instagram</h5>
                    </div>
                    <div class="team-slide instagram-feed">
                        <?php for ($i=1;$i<10;$i++) :?>
                            <div class="team-box" style="margin: 50px 10px 30px;">
                                <img src="images/blog-<?= rand(1, 10) ?>.jpg" class="wow fadeInDown">
                                <div class="content wow fadeInUp">
                                    <h6 class="position">
                                        <i class="lnr lnr-heart text-danger"></i> &nbsp;
                                        <?= rand(100, 200) ?> likes
                                    </h6>
                                    <small>
                                        Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod.
                                    </small>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="subscribe-area">
        <div class="space-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="subscribe-form text-center wow fadeInUp">
                        <div class="page-title text-center wow fadeInLeft">
                            <h5 class="title">Subscribe for More Features</h5>
                        </div>
                        <div class="space-20"></div>
                        <form id="mc-form" class="wow fadeInRight">
                            <input type="email" class="control" placeholder="Enter your email" required="required" id="mc-email">
                            <button class="bttn-white active" type="submit"><span class="lnr lnr-location"></span> Subscribe</button>
                            <label class="mt10" for="mc-email"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
    </div>
<?php
include('footer.php');