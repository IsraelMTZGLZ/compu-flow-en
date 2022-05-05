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
                                <span itemprop="name">Support</span>
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




                <div id="content-contact-page" class="col-md-8 col-sm-12 col-xs-12">
                    <div class="bonus-title"><strong>Contact Us</strong></div>
                    <section class="contact-form">
                        <form action="<?=base_url('email')?>" method="post" enctype="multipart/form-data">


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
                                <style>
                                    input[name=url] {
                                        display: none !important;
                                    }
                                </style>
                                <input type="text" name="url" value="" />
                                <input type="hidden" name="token" value="1c0375ec7eaad576c21e7c989ed667ef" />
                                <input class="btn btn-primary" type="submit" name="submitMessage" value="Send">
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
                        </div>
                    </div>
                </div>


            </div>




        </div>
    </div>



</section>
