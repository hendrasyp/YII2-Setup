<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!--main-->
<section class="main">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6"> 
        <!--logo-->
        <div class="logo"><img src="<?php echo Yii::$app->request->baseUrl; ?>themes/awscomingsoon/img/logo.png" data-at2x="img/logo@2x.png" alt="logo"></div>
        <!--logo end--> 
      </div>
      <div class="col-md-6 col-sm-6"> 
        
        <!--social-->
        <div class="social text-center">
          <ul>
            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="/admin"><i class="fa fa-lock"></i></a></li>
          </ul>
        </div>
        <!--social end--> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"> 
        
        <!--welcome-message-->
        <header class="welcome-message text-center">
          <h1><span class="rotate">We Are Launching Soon , Subscribe To Get Notified</span></h1>
        </header>
        <!--welcome-message end--> 
        
        <!--sub-form-->
        <div class="sub-form text-center">
          <div class="row">
            <div class="col-md-5 center-block col-sm-8 col-xs-11">
              <form role="form" id="mc-form" action="http://csmthemes.us3.list-manage.com/subscribe/post-json?u=9666c25a337f497687875a388&amp;id=5b881a50fb&amp;c=?">
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="Email" required value="" name="EMAIL">
                  <span class="input-group-btn">
                  <button type="submit" class="btn btn-default" id="mc-subscribe" value="Subscribe" name="subscribe">Submit<i class="fa fa-paper-plane"></i></button>
                  </span> </div>
              </form>
              <p id="mc-notification"></p>
            </div>
          </div>
        </div>
        <!--sub-form end--> 
        
        <!-- Countdown-->
        <ul class="countdown text-center">
          <li> <span class="days">00</span>
            <p class="days_ref">days</p>
          </li>
          <li class="seperator">:</li>
          <li> <span class="hours">00</span>
            <p class="hours_ref">hours</p>
          </li>
          <li class="seperator">:</li>
          <li> <span class="minutes">00</span>
            <p class="minutes_ref">minutes</p>
          </li>
          <li class="seperator">:</li>
          <li> <span class="seconds">00</span>
            <p class="seconds_ref">seconds</p>
          </li>
        </ul>
        <!-- Countdown end--> 
        
      </div>
    </div>
  </div>
</section>
<!--main end--> 

<!--Features-->

<section class="features section-spacing">
  <div class="container">
    <h2 class="text-center">Features</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="wow fadeInUp product-features row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-center"><img src="<?php echo Yii::$app->request->baseUrl; ?>themes/awscomingsoon/img/icon-1.png" data-at2x="img/icon-1@2x.png" alt="Features"></div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
            <!--features 1-->
            <h4>Lorem Lpsum</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
            <!--features 1 end--> 
          </div>
        </div>
        <div class="wow fadeInUp product-features row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-center"><img src="<?php echo Yii::$app->request->baseUrl; ?>themes/awscomingsoon/img/icon-2.png" data-at2x="img/icon-2@2x.png" alt="Features"></div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
            <!--features 2-->
            <h4>Lorem Lpsum</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
            <!--features 2 end--> 
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="wow fadeInUp product-features row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-center"><img src="<?php echo Yii::$app->request->baseUrl; ?>themes/awscomingsoon/img/icon-3.png" data-at2x="img/icon-3@2x.png" alt="Features"></div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
            <!--features 3-->
            <h4>Lorem Lpsum</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
            <!--features 3 end--> 
          </div>
        </div>
        <div class="wow fadeInUp product-features row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-center"><img src="<?php echo Yii::$app->request->baseUrl; ?>themes/awscomingsoon/img/icon-4.png" data-at2x="img/icon-4@2x.png" alt="Features"></div>
          <div class="col-md-9 col-sm-9 col-xs-9"> 
            <!--features 4-->
            <h4>Lorem Lpsum</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
            <!--features 4 end--> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Features end--> 

<!--Twitter feed-->

<section class="twitter-feed section-spacing text-center">
  <div class="overlay-t"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 center-block col-sm-11 col-xs-11">
        <h2>Latest Tweets</h2>
        <div class="wow fadeInUp twitter-icon"> <i class="fa fa-twitter"></i> </div>
        <div class="wow fadeInUp tweet"></div>
      </div>
    </div>
  </div>
</section>

<!--Twitter feed end--> 

<!--CONTACT-->

<section class="contact section-spacing" id="contact">
  <div class="container">
    <h2 class="text-center">Contact Us</h2>
    <div class="row">
      <div class="col-md-7"> 
        <!--map-->
        <div class="wow fadeInUp map">
          <div id="map-canvas"></div>
          
          <!--address-->
          
          <ul class="wow fadeInUp address">
            <li><i class="fa fa-map-marker"></i>Lorem ipsum dolor sit amet.</li>
            <li><i class="fa fa-phone"></i>604-788-1832</li>
            <li><i class="fa fa-envelope"></i>info@sitename.com</li>
          </ul>
          
          <!--address end--> 
          
        </div>
        <!--map end--> 
      </div>
      <div class="col-md-5"> 
        
        <!--contact form-->
        
        <div class="contact-form">
          <form role="form" action="php/contact-me.php" method="post" id="contact-form">
            <input type="text" class="wow fadeInUp form-control" name="name" id="name" placeholder="Your Name" required>
            <input type="email" class="wow fadeInUp form-control" name="email" id="email" placeholder="Email Address" required>
            <textarea class="wow fadeInUp form-control" name="message" id="message" rows="3" placeholder="Enter Your Message" required></textarea>
            <button type="submit" class="wow fadeInUp btn btn-default submit-btn" id="submit-btn" value="Send">SUBMIT</button>
          </form>
          
          <!--contact form end-->
          <div class="success-cf">
            <p>Thank You! Your message has been sent.</p>
          </div>
          <div class="error-cf">
            <p>Something went wrong, try refreshing and submitting the form again.</p>
          </div>
        </div>
      </div>
    </div><img src="http://placehold.it/653x211"> 
  </div>
</section>

<!--CONTACT END--> 

<!--site-footer-->
<footer class="site-footer section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> 
        
        <!--social-->
        
        <ul class="social">
          <li class="wow fadeInUp"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class="wow fadeInUp"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li class="wow fadeInUp"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        
        <!--social end--> 
        
        <small class="wow fadeInUp">&copy; Copyright Start. All Rights Reserved.</small> </div>
    </div>
  </div>
</footer>
<!--site-footer end--> 

<!--PRELOAD-->
<div id="preloader">
  <div id="status"></div>
</div>
<!--end PRELOAD--> 