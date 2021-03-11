<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/1/19
 * Time: 6:01 PM
 */
include('header.php');
?>
<header class="home-area overlay angle" style="padding: 150px 15px 50px !important;margin: 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="page-title text-center">
                    <h5 class="title white-color">Details</h5>
                    <h3 class="white-color">Just subtitle for detail page</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="section-padding single-post">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <article class="post-single">
                    <figure class="post-media">
                        <img src="images/sticky-image.jpg" alt="">
                    </figure>
                    <div class="post-body">
                        <ul class="breadcrumb">
                            <li><a href="#">People</a></li>
                            <li>01.02.2017</li>
                        </ul>
                        <h2 class="dark-color">5 tips for those, who need to make more room in their closet</h2>
                        <div class="space-20"></div>
                        <h4>Do sit amet, consectetur adipisicing elon proidaipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non nummodi tempora incidunt ut labore et dolore quaerat voluptatem.</h4>
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Do sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etiquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia of teh deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
                                <div class="space-20"></div>
                                <p>A consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <div class="space-50"></div>
                                <blockquote>“Corem ipsum dolocupidatat non proident, suntmodi tempora incidunt ut labore et dolore quaerat voluptatem.”</blockquote>
                                <div class="space-50"></div>
                                <p>Do sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etiquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia of teh deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <div class="page-title">
                                    <h5 class="title">Participants</h5>
                                    <?php $names = ['Ashekur bakery', 'Dinner Kebab', 'Zalira Fashion', 'Hyonday motor'];?>
                                    <?php foreach ($names as $name) : ?>
                                        <div>+ <?=$name?></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');