<html>
<head>
  <title>Dave's Sweet Tooth</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  
  <!-- jQuery -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
  
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
  
  <!-- fontawesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <!-- Google -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  
  <!-- site css and js -->
  <script type="text/javascript" src="/js/main.js"></script>
  <link rel="stylesheet" href="/css/fonts.css">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  
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
  
  <div id="toffee">
    <!-- cherries and grapes script -->
    <div id="cg-root"></div>
    <script>
      var _cgid = "50fb035fc1277d1d2f000000"; 
    </script>
    <script type="text/javascript" src="//cherriesandgrapes.com/js/cg.js"></script>
    <script type="text/javascript">
      cg.originalBindControls = cg.bindControls;
      cg.bindControls = function() {
        productsInserted();
        cg.originalBindControls();
      };
    </script>
  </div>
  
  <div id="locations">
    <div id="map-canvas"></div>
    <script>
      function initialize() {
        var myLatlng = new google.maps.LatLng(42.544701,-83.466909);
        var mapOptions = {
          zoom: 4,
          center: myLatlng,
          scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
  </div>
  
  <div id="about">
    <table>
      <tr>
        <td class="text">
          <h1>Our Story</h1>
          <span>When Dave Chmielewski started making toffee in his home kitchen 8 years ago, 
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
          notoriety across the country.</span>
        </td>
        <td class="image" style="background-image:url(/img/about1-tall.jpg)"><img src="/img/about1.jpg" /></td>
      </tr>
      <tr>
        <td class="image" style="background-image:url(/img/about2.jpg)"><img src="/img/about2.jpg" /></td>
        <td class="text">
          <h1>Our Toffee</h1>
          <span>We keep it simple. Fancy is too complicated. Real butter, real sugar, 
          real milk chocolate, and hand sliced almonds prepared with love, one batch at a time, 
          every time. Consistency is the key to our recipe. We don't stockpile our ingredients. 
          We purchase them according to order size to ensure freshness and maintain taste integrity. 
          We have never had an unsatisfied customer, and we refuse to skip the small steps 
          in order to keep it that way. Maybe a bit old fashioned, but we do not use machines, 
          microwaves, or assembly lines to produce our toffee. Dave's Sweet Tooth is and always 
          will be; Hand Made. Homemade. Michigan Made.</span>
        </td>
      </tr>
    </table>
  </div>
  
  <div id="contact">
    <h1>Inquiries</h1>
    <div class="email-links">
      <a href="mailto:info@davessweettooth.com">info<span class="at-sign">@</span>davessweettooth.com</a><br />
      <a href="mailto:orders@davessweettooth.com">orders<span class="at-sign">@</span>davessweettooth.com</a><br />
      <a href="mailto:press@davessweettooth.com">press<span class="at-sign">@</span>davessweettooth.com</a>
    </div>
    <div class="social-links">
      <a href="http://facebook.com/mittencrate" target="blank">&#xE801;</a>
      <a href="http://twitter.com/MittenCrate" target="blank">&#xE802;</a>
      <a href="http://instagram.com/mittencrate" target="blank">&#xE803;</a>
    </div>
    <div class="copyright">Copyright &copy; <?php echo @date("Y"); ?> &middot; Dave's Sweet Tooth &middot; All Rights Reserved.</div>
  </div>
  
</body>
</html>
