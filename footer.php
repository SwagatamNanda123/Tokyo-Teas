 <div class="footer">
      <div class="container">
        <div class="seven columns">
          
            <h6>Mailing List</h6>
          
            
              <form action="http://outofthesandbox.us2.list-manage.com/subscribe/post?u=cfd8f79e8e3fabeb1da9f510b&amp;id=dd40fe3bfb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="contact-form" target="_blank">
                <input type="email" value="" name="EMAIL" class="required email" id="contact_email" placeholder="Enter your email address...">
                <input type="submit" value="Sign Up" id="sign_up" name="subscribe" id="mc-embedded-subscribe" class="action_button">
              </form>
            

            
              <p>Sign up to get the latest on sales, new releases and more �</p>
            
          

          
        </div>

        <div class="three columns">
          <h6>More Info</h6>
          <ul class="footer_menu">
            
              <li><a href="pages/theme-features.php" title="Theme Features">Theme Features</a></li>
            
              <li><a href="pages/theme-settings.php" title="Documentation">Documentation</a></li>
            
              <li><a href="pages/about-us.php" title="About Us">About Us</a></li>
            
          </ul>
        </div>

        <div class="three columns">
          <h6>Shop</h6>
          <ul class="footer_menu">
            
              <li><a href="collections/tea.php" title="Premium Tea">Premium Tea</a></li>
            
              <li><a href="collections/teaware.php" title="Teaware">Teaware</a></li>
            
              <li><a href="collections/sale.php" title="Sale">Sale</a></li>
            
          </ul>
        </div>

        <div class="three columns">
          

            <h6 class="social">Social</h6>

            <ul class="icons">
              
                <li class="twitter"><a href="http://twitter.com" title="Tokyo Teas on Twitter" rel="me" target="_blank">Twitter</a></li>
              
              
              
                <li class="facebook"><a href="https://www.facebook.com/" title="Tokyo Teas on Facebook" rel="me" target="_blank">Facebook</a></li>
              
              
              
                <li class="google"><a href="https://plus.google.com/" title="Tokyo Teas on Google+" rel="publisher" target="_blank">Google+</a></li>
              
              
              
                <li class="youtube"><a href="http://www.youtube.com" title="Tokyo Teas on YouTube" rel="me" target="_blank">YouTube</a></li>
              

              
              
              
                <li class="pinterest"><a href="http://pinterest.com/" title="Tokyo Teas on Pinterest" rel="me" target="_blank">Pinterest</a></li>  
              
              
              
                <li class="tumblr"><a href="http://tumblr.com/" title="Tokyo Teas on Tumblr" rel="me" target="_blank">Tumblr</a></li>  
              
              
              
                <li class="linkedin"><a href="http://www.linkedin.com/" title="Tokyo Teas on LinkedIn" rel="me" target="_blank">LinkedIn</a></li>  
              
              
              
                <li class="flickr"><a href="http://flickr.com/" title="Tokyo Teas on Flickr" rel="me" target="_blank">Flickr</a></li>  
              

              
                <li class="instagram"><a href="http://instagram.com/" title="Tokyo Teas on Instagram" rel="me" target="_blank">Instagram</a></li>  
              

              
                <li class="rss"><a href="<?php echo $hostName; ?>blogs/news.atom" title="Latest News" target="_blank">Latest News RSS</a></li>  
              
              
            </ul>
          
        </div>

        <div class="sixteen columns">
          <hr />
        </div>

        <div class="six columns">
          <p class="credits">
            &copy; 2013 Tokyo Teas
          </p>
        </div>

        <div class="ten columns credits_right">
          <p class="credits">
            <a href="http://outofthesandbox.com/collections/mobilia-theme" target="_blank" title="Mobilia Shopify Theme by Out of the Sandbox">Mobilia Shopify Theme</a>. 
            <a href="http://www.shopify.com/?ref=out-of-the-sandbox" target="_blank">Ecommerce Software by Shopify</a>
          </p>

          <div class="payment_methods">
            <img src="s/files/1/0179/8721/t/3/assets/cc-paypal2e2c.gif?3378" alt="PayPal" />
            <img src="s/files/1/0179/8721/t/3/assets/cc-visa2e2c.gif?3378" alt="Visa" />
            
            <img src="s/files/1/0179/8721/t/3/assets/cc-mastercard2e2c.gif?3378" alt="Mastercard" />
            
            
            
            
            
          </div>
        </div>
      </div>

    </div>


    
<script src="https://player.vimeo.com/api/player.js"></script>

<script>
var iframe = document.querySelector('iframe');
var player = new Vimeo.Player(iframe);
var cent, counter = 1, retVal;

player.getVideoTitle().then(function(videoname){
  digitalData.product.videoName = videoname;
});

player.on('timeupdate', function(data) {

    cent = data.percent * 100; 
    if (Math.floor(cent) === 0 && counter === 1) {
        counter ++;
        retVal = true;
        _satellite.track("videoStart");
    }
    if (Math.floor(cent) === 25 && counter === 2) {
          _satellite.track('video25');
        counter ++;
        retVal = true;
    }


    if (Math.floor(cent) === 50 && counter === 3) {
        _satellite.track("video50");
        counter ++;
        retVal = true;
    }
    if (Math.floor(cent) === 75 && counter === 4) {
        _satellite.track("video75");
        counter ++;
        retVal = true;
    }
    if (data.seconds === data.duration) {
        _satellite.track("videoCompleted");
        counter = 1;
    }
});
</script> 


<script type="text/javascript">

  var cartArray = [];

  var totalValue = 0;

  var totalQty = 0;

if (cartItem1 != null){
cartArray.push(cartItem1.productName);
totalValue+=cartItem1.productPrice * cartItem1.productQuantity;
totalQty += cartItem1.productQuantity;
}

if (cartItem2 != null){
cartArray.push(cartItem2.productName);
totalValue+=cartItem2.productPrice * cartItem2.productQuantity;
totalQty += cartItem2.productQuantity;

}

if (cartItem3 != null){
cartArray.push(cartItem3.productName);
totalValue+=cartItem3.productPrice * cartItem3.productQuantity;
totalQty += cartItem3.productQuantity;

};

digitalData.ecommerce= {
products :cartArray,
revenue : totalValue,
totalQuantity : totalQty
};

</script>






   