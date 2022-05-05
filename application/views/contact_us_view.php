<section id="wrapper" class="clearfix">


    <nav data-depth="2" class="breadcrumb breadcrumb-nav clearfix">
        <div class="container">
            <div class="row">
                <div class="breadcrumb_nobg col-xs-12">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList" style="margin: 0;">


                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="<?= ("Inicio") ? './Inicio' : 'Inicio' ;?>">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>


                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="#">
                                <span itemprop="name">Contact us</span>
                            </a>
                            <meta itemprop="position" content="2">
                        </li>


                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">



            <div id="content-wrapper" class="content-full-width col-xs-12 clearfix">


                <div class="top-map col-xs-12 clearfix">
                    <div class="google-map">
                        <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.0642814927664!2d-97.71652938509708!3d26.227100795581475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866f7f447e2cc185%3A0x4a1c3ad69447725f!2sCompu%20Flow.!5e0!3m2!1ses-419!2smx!4v1642131448463!5m2!1ses-419!2smx" width="1400" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>

                <div id="content-contact-page" class="col-md-8 col-sm-12 col-xs-12">
                    <div class="bonus-title"><strong>Contact Us</strong></div>
                    <section class="contact-form">
                        <form action="" method="post" enctype="multipart/form-data">


                            <section class="form-fields">

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Name</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="from" type="text" value="" placeholder="your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Subject</label>
                                    <div class="col-md-6">
                                        <select name="id_contact" class="form-control form-control-select">
                                            <option value="2">Customer service</option>
                                            <option value="1">Webmaster</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Email address</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="from" type="email" value="" placeholder="your@email.com">
                                    </div>
                                </div>

                                <!--
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Attachment</label>
                                            <div class="col-md-6">
                                                <input type="file" name="fileUpload" class="filestyle" data-buttonText="Choose file">
                                            </div>
                                            <span class="col-md-3 form-control-comment">
                                                optional
                                            </span>
                                        </div> -->

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="message" placeholder="How can we help?" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-md-3">

                                    </div>
                                </div>

                            </section>

                            <footer class="form-footer text-sm-right">
                                <!-- <style>
                                    input[name=url] {
                                        display: none !important;
                                    }
                                </style>
                                <input type="text" name="url" value="" />
                                <input type="hidden" name="token" value="1c0375ec7eaad576c21e7c989ed667ef" /> -->
                                <!-- <input class="btn btn-primary" type="submit" name="submitMessage" value="Send"> -->
                                <button class="btn btn-primary"  >Send</button>
                            </footer>

                        </form>
                    </section>

                </div>

                <div id="left-contact-page" class="col-md-4 col-sm-12 col-xs-12">
                    <div class="contactinfo">
                        <div class="bonus-title"><strong>Contact Information</strong></div>
                        <div class="content-footer">
                            <div class="address">
                                <span class="icon"><i class="icon-map-pin"></i></span>
                                <div><label>Address:</label> 1920 Loop 499, Suite 107 Harlingen, TX 78550, USA</div>
                            </div>
                            <label for="">Harlingen, Texas.</label>
                            <div class="phone">

                                <span class="icon"><i class="icon-phone-call"></i></span>
                                <div><label>Phone:</label> 001-956-792-2683 </div>
                            </div>
                            <label for="">Guadalajara, Jal. México:</label>
                            <div class="phone">

                                <span class="icon"><i class="icon-phone-call"></i></span> 
                                <div><label>Phone:</label> (33) 3699-3750 </div>
                            </div>
                            <div class="phone">

                                 <span class="icon"><i class="icon-phone-call"></i></span> 
                                <div><label>Phone:</label> (044) 332-261-3640 </div>
                            </div>
                            <label for="">Mails:</label>
                            <div class="email">
                                <span class="icon"><i class="icon-mail1"></i></span> 
                                <div><label> Email:</label> <a href="mailto:contact@magentech.com">contacto@compuflow.com.mx</a></div>
                            </div>
                            <div class="email">
                                 <span class="icon"><i class="icon-mail1"></i></span>
                                <div><label> Email:</label> <a href="mailto:contact@magentech.com">compuflowmx@outlook.com</a></div>
                            </div>
                             <div class="opening-hours">
                                        <span class="icon"><i class="icon-clock"></i></span>
                                        <div>Hours: 10:00 - 18:00, Mon - Sat</div>
                                    </div> 
                        </div>
                    </div>
                </div>


            </div>




        </div>
    </div>

    <!-- <div class=" ">
        <div class="container">
            <div class="row">
                <div class="spcustomhtml6 col-xs-12 clearfix">

                    <div class="moduletable sp_customhtml_6_16413562611837180408
		 spcustom_html">
                        <div class="sp-block-categories">
                            <div class="title-module module-title"><strong>Our social media</strong></div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-xs-3 col-lg-3 col-md-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/facebook.png'); ?>" alt="..." class="card-img-top">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-3 col-lg-3 col-md-3 d-flex justify-content-center" >
                                        <div class="item-wrap d-flex justify-content-center">
                                            <div class="item-img item-height">
                                                <div class="item-img-info d-flex justify-content-center">
                                                    <a href="brand/3-brand-1.html" target=&quot;_blank&quot; title="Brand 1">
                                                        <img src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/facebook.png'); ?>" class="logo_manufacturer" title="Brand 1" width="100" height="100"  />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-lg-3 col-md-3">
                                        <div class="item-wrap">
                                            <div class="item-img item-height">
                                                <div class="item-img-info">
                                                    <a href="brand/3-brand-1.html" target=&quot;_blank&quot; title="Brand 1">
                                                        <img src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/whatsapp.png'); ?>" class="logo_manufacturer" title="Brand 1"  width="100" height="100" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-lg-3 col-md-3">
                                        <div class="item-wrap">
                                            <div class="item-img item-height">
                                                <div class="item-img-info">
                                                    <a href="brand/3-brand-1.html" target=&quot;_blank&quot; title="Brand 1">
                                                        <img src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/gmail.png'); ?>" class="logo_manufacturer" title="Brand 1" width="100" height="100"  />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-lg-3 col-md-3" >
                                        <div class="item-wrap" >
                                            <div class="item-img item-height">
                                                <div class="item-img-info">
                                                    <a href="brand/3-brand-1.html" target=&quot;_blank&quot; title="Brand 1">
                                                        <img src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/instagram.png'); ?>" class="logo_manufacturer" title="Brand 1"  width="100" height="100"  />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                     <div class="col-xs-3 col-lg-3 col-md-3 ">
                                        <div class="card">
                                            <img src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/whatsapp.png'); ?>" alt="..." class="img-fluid">
                                        </div>
                                    </div> 
                                </div>
                                <div class="owl-carousel owl-theme cat-wrap-slider">
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="image-cat"><a href="103-treatments.html" title="Pharmacy"> <img class="lazyload" src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/facebook.png'); ?>" width="70" height="70" alt="Pharmacy" /> </a></div>
                                            <div class="child-cat">
                                                <div class="cat-title"><a href="103-treatments.html" title="Pharmacy"> Facebook </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="image-cat"><a href="117-personal-care.html" title="Personal Care"> <img class="lazyload" src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/whatsapp.png'); ?>"width="70" height="70" alt="Personal Care" /> </a></div>
                                            <div class="child-cat">
                                                <div class="cat-title"><a href="117-personal-care.html" title="Personal Care"> Whatsapp</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="image-cat"><a href="72-family-care.html" title="Family Care"> <img class="lazyload" src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/gmail.png'); ?>" width="70" height="70" alt="Family Care" /> </a></div>
                                            <div class="child-cat">
                                                <div class="cat-title"><a href="72-family-care.html" title="Family Care"> Gmail </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="image-cat"><a href="115-accessories.html" title="Accessories"> <img class="lazyload" src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/instagram.png'); ?>" width="70" height="70" alt="Accessories" /> </a></div>
                                            <div class="child-cat">
                                                <div class="cat-title"><a href="115-accessories.html" title="Accessories"> Instagram </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="image-cat"><a href="16-fitness.html" title="Fitness"> <img class="lazyload" src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/instagram.png'); ?>" width="70" height="70" alt="Fitness" /> </a></div>
                                            <div class="child-cat">
                                                <div class="cat-title"><a href="16-fitness.html" title="Fitness"> Fitness </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="image-cat"><a href="16-fitness.html" title="Devices"> <img class="lazyload" src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/instagram.png'); ?>" width="70" height="70" alt="Devices" /> </a></div>
                                            <div class="child-cat">
                                                <div class="cat-title"><a href="16-fitness.html" title="Devices"> Devices </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="image-cat"><a href="107-oral-care.html" title="Accessories"> <img class="lazyload" src="<?= base_url('resources/landingpage/themes/sp_medisine/img/social_media/instagram.png'); ?>" width="70" height="70" alt="Accessories" /> </a></div>
                                            <div class="child-cat">
                                                <div class="cat-title"><a href="107-oral-care.html" title="Accessories"> Accessories </a></div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> -->

</section>
