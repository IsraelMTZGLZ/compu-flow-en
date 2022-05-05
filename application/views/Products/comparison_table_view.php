<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
<style>/* -------------------------------- 

Primary style

-------------------------------- */
*, *::after, *::before {
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
}

body {
  font-size: 1.6rem;
  font-family: "Source Sans Pro", sans-serif;
  color: #404042;
  background-color: #ffffff;
}

a {
  color: #9dc997;
  text-decoration: none;
}

img {
  max-width: 100%;
}

h1 {
  font-size: 2.2rem;
  text-align: center;
  padding: 4em 5%;
}
@media only screen and (min-width: 1170px) {
  h1 {
    font-size: 4rem;
    font-weight: 300;
    padding: 3em 5%;
  }
}

/* -------------------------------- 

Main Components 

-------------------------------- */
.cd-products-comparison-table {
  margin-bottom: 6em;
}
.cd-products-comparison-table::after {
  /* never visible - this is used in jQuery to check the current MQ */
  display: none;
  content: 'mobile';
}
.cd-products-comparison-table header {
  padding: 0 5% 25px;
}
.cd-products-comparison-table header::after {
  clear: both;
  content: "";
  display: table;
}
.cd-products-comparison-table h2 {
  float: left;
  font-weight: bold;
}
.cd-products-comparison-table .actions {
  float: right;
}
.cd-products-comparison-table .reset, .cd-products-comparison-table .filter {
  font-size: 1.4rem;
}
.cd-products-comparison-table .reset {
  color: #404042;
  text-decoration: underline;
}
.cd-products-comparison-table .filter {
  padding: .6em 1.5em;
  color: #ffffff;
  background-color: #cccccc;
  border-radius: 3px;
  margin-left: 1em;
  cursor: not-allowed;
  -webkit-transition: background-color 0.3s;
  -moz-transition: background-color 0.3s;
  transition: background-color 0.3s;
}
.cd-products-comparison-table .filter.active {
  cursor: pointer;
  background-color: #9dc997;
}
.no-touch .cd-products-comparison-table .filter.active:hover {
  background-color: #a7cea1;
}
@media only screen and (min-width: 1170px) {
  .cd-products-comparison-table {
    margin-bottom: 8em;
  }
  .cd-products-comparison-table::after {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'desktop';
  }
  .cd-products-comparison-table header {
    padding: 0 5% 40px;
  }
  .cd-products-comparison-table h2 {
    font-size: 2.4rem;
  }
  .cd-products-comparison-table .reset, .cd-products-comparison-table .filter {
    font-size: 1.6rem;
  }
  .cd-products-comparison-table .filter {
    padding: .6em 2em;
    margin-left: 1.6em;
  }
}

.cd-products-table {
  position: relative;
  overflow: hidden;
}

.cd-products-table .features {
  /* fixed left column - product properties list */
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 120px;
  border-style: solid;
  border-color: #e6e6e6;
  border-top-width: 1px;
  border-bottom-width: 1px;
  background-color: #fafafa;
  opacity: .95;
}
.cd-products-table .features::after {
  /* color gradient on the right of .features -  visible while scrolling inside the .cd-products-table */
  content: '';
  position: absolute;
  top: 0;
  left: 100%;
  width: 4px;
  height: 100%;
  background-color: transparent;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.06), transparent);
  background-image: linear-gradient(to right,rgba(0, 0, 0, 0.06), transparent);
  opacity: 0;
}
@media only screen and (min-width: 1170px) {
  .cd-products-table .features {
    width: 210px;
  }
}

.cd-products-table.scrolling .features::after {
  opacity: 1;
}

.cd-products-wrapper {
  overflow-x: auto;
  /* this fixes the buggy scrolling on webkit browsers - mobile devices only - when overflow property is applied */
  -webkit-overflow-scrolling: touch;
  border-style: solid;
  border-color: #e6e6e6;
  border-top-width: 1px;
  border-bottom-width: 1px;
}

.cd-products-columns {
  /* products list wrapper */
  width: 1200px;
  margin-left: 120px;
}
.cd-products-columns::after {
  clear: both;
  content: "";
  display: table;
}
@media only screen and (min-width: 1170px) {
  .cd-products-columns {
    width: 2480px;
    margin-left: 210px;
  }
}

.cd-products-columns .product {
  position: relative;
  float: left;
  width: 150px;
  text-align: center;
  -webkit-transition: opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
  -moz-transition: opacity 0.3s, visibility 0.3s, -moz-transform 0.3s;
  transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
}
.filtering .cd-products-columns .product:not(.selected) {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
}
.no-product-transition .cd-products-columns .product.selected {
  -webkit-transition: opacity 0.3s, visibility 0.3s;
  -moz-transition: opacity 0.3s, visibility 0.3s;
  transition: opacity 0.3s, visibility 0.3s;
}
.filtered .cd-products-columns .product:not(.selected) {
  position: absolute;
}
@media only screen and (min-width: 1170px) {
  .cd-products-columns .product {
    width: 310px;
  }
}

.cd-features-list li {
  font-size: 1.4rem;
  font-weight: bold;
  padding: 25px 40px;
  border-color: #e6e6e6;
  border-style: solid;
  border-top-width: 1px;
  border-right-width: 1px;
}
.cd-features-list li.rate {
  /* rating stars */
  padding: 21px 0;
}
.cd-features-list li.rate span {
  display: inline-block;
  height: 22px;
  width: 110px;
  background: url(../img/cd-star.svg);
  color: transparent;
}
@media only screen and (min-width: 1170px) {
  .cd-features-list li {
    font-size: 1.6rem;
  }
  .cd-features-list li.rate {
    padding: 22px 0;
  }
}

.features .cd-features-list li,
.cd-products-table .features .top-info {
  /* fixed left column - items */
  font-size: 1.2rem;
  font-weight: bold;
  /* set line-height value equal to font-size of text inside product cells */
  line-height: 14px;
  padding: 25px 10px;
  text-align: left;
}
@media only screen and (min-width: 1170px) {
  .features .cd-features-list li,
  .cd-products-table .features .top-info {
    text-transform: uppercase;
    line-height: 16px;
    padding: 25px 20px;
    letter-spacing: 1px;
  }
}

.features .cd-features-list li {
  /* truncate text with dots */
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.cd-products-table .top-info {
  position: relative;
  height: 177px;
  width: 150px;
  text-align: center;
  padding: 1.25em 2.5em;
  border-color: #e6e6e6;
  border-style: solid;
  border-right-width: 1px;
  -webkit-transition: height 0.3s;
  -moz-transition: height 0.3s;
  transition: height 0.3s;
  cursor: pointer;
  background: #ffffff;
}
.cd-products-table .top-info::after {
  /* color gradient below .top-info -  visible when .top-info is fixed */
  content: '';
  position: absolute;
  left: 0;
  top: 100%;
  height: 4px;
  width: 100%;
  background-color: transparent;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.06), transparent);
  background-image: linear-gradient(to bottom,rgba(0, 0, 0, 0.06), transparent);
  opacity: 0;
}
.cd-products-table .top-info h3 {
  padding: 1.25em 0 0.625em;
  font-weight: bold;
  font-size: 1.4rem;
}
.cd-products-table .top-info img {
  display: block;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.cd-products-table .top-info h3, .cd-products-table .top-info img {
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
}
.cd-products-table .top-info .check {
  position: relative;
  display: inline-block;
  height: 16px;
  width: 16px;
  margin: 0 auto 1em;
}
.cd-products-table .top-info .check::after, .cd-products-table .top-info .check::before {
  /* used to create the check icon and green circle dot - visible when product is selected */
  position: absolute;
  top: 0;
  left: 0;
  content: '';
  height: 100%;
  width: 100%;
}
.cd-products-table .top-info .check::before {
  /* green circle dot */
  border-radius: 50%;
  border: 1px solid #e6e6e6;
  background: #ffffff;
  -webkit-transition: background-color 0.3s, -webkit-transform 0.3s, border-color 0.3s;
  -moz-transition: background-color 0.3s, -moz-transform 0.3s, border-color 0.3s;
  transition: background-color 0.3s, transform 0.3s, border-color 0.3s;
}
.cd-products-table .top-info .check::after {
  /* check icon */
  background: url(../img/cd-check.svg) no-repeat center center;
  background-size: 24px 24px;
  opacity: 0;
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  transition: opacity 0.3s;
}
@media only screen and (min-width: 1170px) {
  .cd-products-table .top-info {
    height: 280px;
    width: 310px;
  }
  .cd-products-table .top-info h3 {
    padding-top: 1.4em;
    font-size: 1.6rem;
  }
  .cd-products-table .top-info .check {
    margin-bottom: 1.5em;
  }
}

.cd-products-table .features .top-info {
  /* models */
  width: 120px;
  cursor: auto;
  background: #fafafa;
}
@media only screen and (min-width: 1170px) {
  .cd-products-table .features .top-info {
    width: 210px;
  }
}

.cd-products-table .selected .top-info .check::before {
  /* green circle dot */
  background: #9dc997;
  border-color: #9dc997;
  -webkit-transform: scale(1.5);
  -moz-transform: scale(1.5);
  -ms-transform: scale(1.5);
  -o-transform: scale(1.5);
  transform: scale(1.5);
  -webkit-animation: cd-bounce 0.3s;
  -moz-animation: cd-bounce 0.3s;
  animation: cd-bounce 0.3s;
}

@-webkit-keyframes cd-bounce {
  0% {
    -webkit-transform: scale(1);
  }
  60% {
    -webkit-transform: scale(1.6);
  }
  100% {
    -webkit-transform: scale(1.5);
  }
}
@-moz-keyframes cd-bounce {
  0% {
    -moz-transform: scale(1);
  }
  60% {
    -moz-transform: scale(1.6);
  }
  100% {
    -moz-transform: scale(1.5);
  }
}
@keyframes cd-bounce {
  0% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
  60% {
    -webkit-transform: scale(1.6);
    -moz-transform: scale(1.6);
    -ms-transform: scale(1.6);
    -o-transform: scale(1.6);
    transform: scale(1.6);
  }
  100% {
    -webkit-transform: scale(1.5);
    -moz-transform: scale(1.5);
    -ms-transform: scale(1.5);
    -o-transform: scale(1.5);
    transform: scale(1.5);
  }
}
.cd-products-table .selected .top-info .check::after {
  /* check icon */
  opacity: 1;
}

@media only screen and (min-width: 1170px) {
  .cd-products-table.top-fixed .cd-products-columns > li,
  .cd-products-table.top-scrolling .cd-products-columns > li,
  .cd-products-table.top-fixed .features,
  .cd-products-table.top-scrolling .features {
    padding-top: 160px;
  }

  .cd-products-table.top-fixed .top-info,
  .cd-products-table.top-scrolling .top-info {
    height: 160px;
    position: fixed;
    top: 0;
  }
  .no-cssgradients .cd-products-table.top-fixed .top-info, .no-cssgradients
  .cd-products-table.top-scrolling .top-info {
    border-bottom: 1px solid #e6e6e6;
  }
  .cd-products-table.top-fixed .top-info::after,
  .cd-products-table.top-scrolling .top-info::after {
    opacity: 1;
  }
  .cd-products-table.top-fixed .top-info h3,
  .cd-products-table.top-scrolling .top-info h3 {
    -webkit-transform: translateY(-116px);
    -moz-transform: translateY(-116px);
    -ms-transform: translateY(-116px);
    -o-transform: translateY(-116px);
    transform: translateY(-116px);
  }
  .cd-products-table.top-fixed .top-info img,
  .cd-products-table.top-scrolling .top-info img {
    -webkit-transform: translateY(-62px) scale(0.4);
    -moz-transform: translateY(-62px) scale(0.4);
    -ms-transform: translateY(-62px) scale(0.4);
    -o-transform: translateY(-62px) scale(0.4);
    transform: translateY(-62px) scale(0.4);
  }

  .cd-products-table.top-scrolling .top-info {
    position: absolute;
  }
}
.cd-table-navigation a {
  position: absolute;
  z-index: 2;
  top: 0;
  right: 15px;
  -webkit-transform: translateY(55px);
  -moz-transform: translateY(55px);
  -ms-transform: translateY(55px);
  -o-transform: translateY(55px);
  transform: translateY(55px);
  /* replace text with image */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  color: transparent;
  height: 60px;
  width: 40px;
  background: rgba(64, 64, 66, 0.8) url("../img/cd-arrow.svg") no-repeat center center;
  border-radius: 3px;
  -webkit-transition: background-color 0.3s, opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
  -moz-transition: background-color 0.3s, opacity 0.3s, visibility 0.3s, -moz-transform 0.3s;
  transition: background-color 0.3s, opacity 0.3s, visibility 0.3s, transform 0.3s;
}
.cd-table-navigation a.inactive {
  opacity: 0;
  visibility: hidden;
}
.cd-table-navigation a.prev {
  left: 120px;
  right: auto;
  -webkit-transform: translateY(55px) translateX(15px) rotate(180deg);
  -moz-transform: translateY(55px) translateX(15px) rotate(180deg);
  -ms-transform: translateY(55px) translateX(15px) rotate(180deg);
  -o-transform: translateY(55px) translateX(15px) rotate(180deg);
  transform: translateY(55px) translateX(15px) rotate(180deg);
}
.no-touch .cd-table-navigation a:hover {
  background-color: #404042;
}
@media only screen and (min-width: 1170px) {
  .cd-table-navigation a {
    -webkit-transform: translateY(100px);
    -moz-transform: translateY(100px);
    -ms-transform: translateY(100px);
    -o-transform: translateY(100px);
    transform: translateY(100px);
  }
  .cd-table-navigation a.prev {
    left: 210px;
    -webkit-transform: translateY(100px) translateX(15px) rotate(180deg);
    -moz-transform: translateY(100px) translateX(15px) rotate(180deg);
    -ms-transform: translateY(100px) translateX(15px) rotate(180deg);
    -o-transform: translateY(100px) translateX(15px) rotate(180deg);
    transform: translateY(100px) translateX(15px) rotate(180deg);
  }
  .top-fixed .cd-table-navigation a {
    position: fixed;
  }
  .top-fixed .cd-table-navigation a, .top-scrolling .cd-table-navigation a {
    -webkit-transform: translateY(45px);
    -moz-transform: translateY(45px);
    -ms-transform: translateY(45px);
    -o-transform: translateY(45px);
    transform: translateY(45px);
  }
  .top-fixed .cd-table-navigation a.prev, .top-scrolling .cd-table-navigation a.prev {
    -webkit-transform: translateY(45px) translateX(15px) rotate(180deg);
    -moz-transform: translateY(45px) translateX(15px) rotate(180deg);
    -ms-transform: translateY(45px) translateX(15px) rotate(180deg);
    -o-transform: translateY(45px) translateX(15px) rotate(180deg);
    transform: translateY(45px) translateX(15px) rotate(180deg);
  }
}

/* -------------------------------- 

No JS

-------------------------------- */
.no-js .actions {
  display: none;
}

.no-js .cd-products-table .top-info {
  height: 145px;
}
@media only screen and (min-width: 1170px) {
  .no-js .cd-products-table .top-info {
    height: 248px;
  }
}

.no-js .cd-products-columns .check {
  display: none;
}
</style>
<style>
    /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/


ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
</style>
<section id="wrapper" class="clearfix">


    <nav data-depth="3" class="breadcrumb breadcrumb-nav clearfix">
        <div class="container">
            <div class="row">
                <div class="breadcrumb_nobg col-xs-12">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList" style="margin: 0;">


                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="../index.html">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>


                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="../13-coronavirus-prevention.html">
                                <span itemprop="name">Products</span>
                            </a>
                            <meta itemprop="position" content="2">
                        </li>


                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="50-maximus-nibh-hendrerit.html">
                                <span itemprop="name">COMPU-FLOW™ C6D FIXED DOPPLER METER</span>
                            </a>
                            <meta itemprop="position" content="3">
                        </li>


                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">



            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <section id="main" class="product-page" itemscope itemtype="https://schema.org/Product">
                    <section class="cd-intro">
                        <h1>Products Comparison Table</h1>
                    </section> <!-- .cd-intro -->

                    <section class="cd-products-comparison-table">
                        <header>
                            <h2>Compare Models</h2>

                            <div class="actions">
                                <a href="#0" class="reset">Reset</a>
                                <a href="#0" class="filter">Filter</a>
                            </div>
                        </header>

                        <div class="cd-products-table">
                            <div class="features">
                                <div class="top-info">Models</div>
                                <ul class="cd-features-list">
                                    <li>Price</li>
                                    <li>Customer Rating</li>
                                    <li>Resolution</li>
                                    <li>Screen Type</li>
                                    <li>Display Size</li>
                                    <li>Refresh Rate</li>
                                    <li>Model Year</li>
                                    <li>Tuner Technology</li>
                                    <li>Ethernet Input</li>
                                    <li>USB Input</li>
                                    <li>Scart Input</li>
                                </ul>
                            </div> <!-- .features -->
                            <div class="features">
                                <div class="top-info">Models</div>
                                <ul class="cd-features-list">
                                    <li>Price</li>
                                    <li>Customer Rating</li>
                                    <li>Resolution</li>
                                    <li>Screen Type</li>
                                    <li>Display Size</li>
                                    <li>Refresh Rate</li>
                                    <li>Model Year</li>
                                    <li>Tuner Technology</li>
                                    <li>Ethernet Input</li>
                                    <li>USB Input</li>
                                    <li>Scart Input</li>
                                </ul>
                            </div> <!-- .features -->


                            <div class="cd-products-wrapper">
                                <ul class="cd-products-columns">
                                    <li class="product">
                                        <div class="top-info">
                                            <!-- <div class="check"></div> -->
                                            <!-- <img src="img/product.png" alt="product image"> -->
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> 

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> 

                                    <li class="product">
                                        <div class="top-info">
                                            <div class="check"></div>
                                            <img src="img/product.png" alt="product image">
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> <!-- .top-info -->

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> <!-- .product -->

                                    <li class="product">
                                        <div class="top-info">
                                            <div class="check"></div>
                                            <img src="img/product.png" alt="product image">
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> <!-- .top-info -->

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> <!-- .product -->

                                    <li class="product">
                                        <div class="top-info">
                                            <div class="check"></div>
                                            <img src="img/product.png" alt="product image">
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> <!-- .top-info -->

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> <!-- .product -->

                                    <li class="product">
                                        <div class="top-info">
                                            <div class="check"></div>
                                            <img src="img/product.png" alt="product image">
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> <!-- .top-info -->

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> <!-- .product -->

                                    <li class="product">
                                        <div class="top-info">
                                            <div class="check"></div>
                                            <img src="img/product.png" alt="product image">
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> <!-- .top-info -->

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> <!-- .product -->

                                    <li class="product">
                                        <div class="top-info">
                                            <div class="check"></div>
                                            <img src="img/product.png" alt="product image">
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> <!-- .top-info -->

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> <!-- .product -->

                                    <li class="product">
                                        <div class="top-info">
                                            <div class="check"></div>
                                            <img src="img/product.png" alt="product image">
                                            <h3>Sumsung Series 6 J6300</h3>
                                        </div> <!-- .top-info -->

                                        <ul class="cd-features-list">
                                            <li>$600</li>
                                            <li class="rate"><span>5/5</span></li>
                                            <li>1080p</li>
                                            <li>LED</li>
                                            <li>47.6 inches</li>
                                            <li>800Hz</li>
                                            <li>2015</li>
                                            <li>mpeg4</li>
                                            <li>1 Side</li>
                                            <li>3 Port</li>
                                            <li>1 Rear</li>
                                        </ul>
                                    </li> <!-- .product -->
                                </ul> <!-- .cd-products-columns -->
                            </div> <!-- .cd-products-wrapper -->

                            <ul class="cd-table-navigation">
                                <li><a href="#0" class="prev inactive">Prev</a></li>
                                <li><a href="#0" class="next">Next</a></li>
                            </ul>
                        </div> <!-- .cd-products-table -->
                    </section> <!-- .cd-products-comparison-table -->
                </section>


            </div>

        </div>
    </div>


</section>