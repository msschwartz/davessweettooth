<html>
<head>
  <title>Dave's Sweet Tooth</title>
  <link rel="icon" type="image/png" href="/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  
  <!-- jQuery -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
  
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
  <script type="text/javascript" src="/js/slick.min.js"></script>
  
  <!-- fontawesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <!-- Google -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  
  <!-- site css and js -->
  <?php $version = '1.1'; ?>
  <script type="text/javascript" src="/js/main.js?v=<?php echo $version; ?>"></script>
  <link rel="stylesheet" href="/css/fonts.css?v=<?php echo $version; ?>">
  <link rel="stylesheet" href="/css/main.css?v=<?php echo $version; ?>">
</head>
<body id="davessweettooth" ontouchstart="">
  
  <div id="header">
    <div class="slideshow">
      <div style="background-image: url(/img/header-slide1.jpg)"></div>
      <div style="background-image: url(/img/header-slide2.jpg)"></div>
      <div style="background-image: url(/img/header-slide3.jpg)"></div>
    </div>
    <div class="overlay"></div>
    <a class="logo" href="/"><img src="/img/logo.svg" /></a>
    <div class="menu">
      <a id="menu-icon" href="#">&#xE800;</a>
      <ul id="menu-list">
        <li><a href="#">Home</a></li>
        <li><a href="#toffee">Toffee</a></li>
        <li><a href="#locations">Locations</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div><!-- #header -->
  
  <?php $product_config = json_decode(file_get_contents("products.json")); ?>
  <div id="toffee">
    <div class="toffee-slider pouches-slider">
      <?php foreach ($product_config->pouches as $pouch) : ?>
        <div class="product product-pouch">
          <img class="image" src="/img/products/pouch-<?php echo $pouch->key; ?>.jpg" />
          <div class="details">
            <table><tr><td>
              <div class="title"><?php echo $pouch->name; ?></div>
              <div class="price"><span class="dollars"><?php echo $product_config->pouch_price; ?></span> <span class="shipping">+ shipping</span></div>
              <div class="buy"><a href="#" class="btn cg-EZaddtocart" oid="<?php echo $pouch->order_id; ?>">Buy</a></div>
            </td></tr></table>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    
    <div class="toffee-collection pouches-collection">
      <div class="title">Pouch Collection</div>
      <div class="description">One of each (5 total) of our 4oz. snack pouches.</div>
      <div class="price"><span class="dollars"><?php echo $product_config->pouch_collection_price; ?></span> <span class="shipping">+ shipping</span></div>
      <div class="buy"><a href="#" class="btn cg-EZaddtocart" oid="<?php echo $product_config->pouch_collection_order_id; ?>">Buy</a></div>
    </div>
    
    
    <div class="toffee-slider mini-jars-slider">
      <?php foreach ($product_config->mini_jars as $mini_jar) : ?>
        <div class="product product-pouch">
          <img class="image" src="/img/products/mini-jar-<?php echo $mini_jar->key; ?>.jpg" />
          <div class="details">
            <table><tr><td>
              <div class="title"><?php echo $mini_jar->name; ?></div>
              <div class="price"><span class="dollars"><?php echo $product_config->mini_jar_price; ?></span> <span class="shipping">+ shipping</span></div>
              <div class="buy"><a href="#" class="btn cg-EZaddtocart" oid="<?php echo $mini_jar->order_id; ?>">Buy</a></div>
            </td></tr></table>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    
    <div class="toffee-collection mini-jar-collection">
      <div class="title">Mini Jar Collection</div>
      <div class="description">One of each (5 total) of our 8oz. mini jars.</div>
      <div class="price"><span class="dollars"><?php echo $product_config->mini_jar_collection_price; ?></span> <span class="shipping">free shipping</span></div>
      <div class="buy"><a href="#" class="btn cg-EZaddtocart" oid="<?php echo $product_config->mini_jar_collection_order_id; ?>">Buy</a></div>
    </div>
    
    
    <div class="toffee-slider jars-slider">
      <?php foreach ($product_config->jars as $jar) : ?>
        <div class="product product-pouch">
          <img class="image" src="/img/products/jar-<?php echo $jar->key; ?>.jpg" />
          <div class="details">
            <table><tr><td>
              <div class="title"><?php echo $jar->name; ?></div>
              <div class="price"><span class="dollars"><?php echo $product_config->jar_price; ?></span> <span class="shipping">+ shipping</span></div>
              <div class="buy"><a href="#" class="btn cg-EZaddtocart" oid="<?php echo $jar->order_id; ?>">Buy</a></div>
            </td></tr></table>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    
    <div class="toffee-collection">
      <div class="title">Signature Mason Jars</div>
    </div>
  
    <!-- cherries and grapes script -->
    <div id="cg-root"></div><script> var _cgid = "50fb035fc1277d1d2f000000"; (function(d) { var cg, id='cg-js', r = d.getElementsByTagName('script')[0]; if(d.getElementById(id)){return;} cg = d.createElement('script'); cg.id = id; cg.async = true; cg.src = "//cherriesandgrapes.com/js/cg.js"; r.parentNode.insertBefore(cg, r); })(document);</script>
  </div>
  
  <div id="locations">
    <div id="map-canvas"></div>
    <script type="text/javascript">
      window.locations = <?php echo file_get_contents( "locations.json" ) ?>;
    </script>
    <div id="map-canvas-overlay">
      <div class="table-display">
        <div class="table-cell-display">
          <h1>Locations</h1>
          <div>
            <input id="locations-zip" type="text" name="zipcode" placeholder="Enter Zip" />
            <a id="locations-go" href="#" class="btn btn-black">Go</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="about">
    <div class="about-row">
      <img class="image" src="/img/about1.jpg" />
      <div class="tall-image" style="background-image:url(/img/about1-tall.jpg)"></div>
      <div class="text">
        <div class="text-inner">
          <div class="text-inner-inner">
            <h1>Our Story</h1>
            <div>When Dave Chmielewski started making toffee in his home kitchen 8 years ago, 
            he never thought it would be where it is today. Dave, a retired Detroit Fire Fighter, 
            had always loved to cook and bake. When he started making his infamous almond toffee 
            however, the response was unlike anything he had seen before. People soon started 
            calling the house and demanding that he make them some of his delicious toffee. 
            With a few homemade labels and some Ball mason jars, Dave's Sweet Tooth was born. 
            What had started as a hobby was now becoming more like a full-time job. Dave's son, 
            Andrew, had always had an interest in business, and when he saw the demand that his 
            father's toffee was creating, he knew that there was something there. In early 2011, 
            he took control of the company's direction and set it on the current course. 
            What started as a home kitchen operation a few years ago, has now grown into a 
            company partnered with hundreds of retail stores and has garnered national 
            notoriety across the country.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-row">
      <img class="image" src="/img/about2.jpg" />
      <div class="tall-image" style="background-image:url(/img/about2-tall.jpg)"></div>
      <div class="text">
        <div class="text-inner">
          <div class="text-inner-inner">
            <h1>Our Toffee</h1>
            <div>We keep it simple. Fancy is too complicated. Real butter, real sugar, 
            real milk chocolate, and hand sliced almonds prepared with love, one batch at a time, 
            every time. Consistency is the key to our recipe. We don't stockpile our ingredients. 
            We purchase them according to order size to ensure freshness and maintain taste integrity. 
            We have never had an unsatisfied customer, and we refuse to skip the small steps 
            in order to keep it that way. Maybe a bit old fashioned, but we do not use machines, 
            microwaves, or assembly lines to produce our toffee. Dave's Sweet Tooth is and always 
            will be; Hand Made. Homemade. Michigan Made.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="contact">
    <h1>Inquiries</h1>
    <div class="email-links">
      <a href="mailto:info@davessweettooth.com">info<span class="at-sign">@</span>davessweettooth.com</a><br />
      <a href="mailto:orders@davessweettooth.com">orders<span class="at-sign">@</span>davessweettooth.com</a><br />
      <a href="mailto:press@davessweettooth.com">press<span class="at-sign">@</span>davessweettooth.com</a>
    </div>
    <div class="social-links">
      <a href="https://www.facebook.com/DavesSweetTooth" target="blank">&#xE801;</a>
      <a href="https://twitter.com/davessweettooth" target="blank">&#xE802;</a>
      <a href="https://instagram.com/davessweettooth/" target="blank">&#xE803;</a>
    </div>
    <div class="copyright">Copyright &copy; <?php echo @date("Y"); ?> &middot; Dave's Sweet Tooth &middot; All Rights Reserved.</div>
  </div>
  
</body>
</html>
