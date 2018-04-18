<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>Net Age</title>
    <link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <style amp-custom>
    /* any custom style goes here */
    body {
      width: auto;
      margin: 0;
      padding: 0;
      padding-top: 50px;
      font-family: 'Raleway', sans-serif;
    }

    header {
      background: #2F4F4F;
      color: white;
      font-size: 2em;
      text-align: center;
    }

    h1 {
      margin: 0;
      padding: 0.5em;
      background: white;
      box-shadow: 0px 3px 5px grey;
    }

    p {
      padding: 0.5em;
      margin: 0.5em;
    }
    .home-button {
    margin-top: 8px;
    }
    .headerbar {
    height: 50px;
    position: fixed;
    z-index: 999;
    top: 0;
    width: 100%;
    display: flex;
    align-items: center;
    border: 1px solid #2F4F4F;

    }
    .site-name {
    flex: 1;
    margin-left: -36px;
    }
    article {
    margin-top: 50px;
    }
    .hamburger {
    padding-left: 10px;
    }      
    .sidebar {
    padding: 25px 0px 0px 25px;
    margin: 0;
    width: 250px;
    }
    .sidebar > li {
    list-style: none;
    margin-bottom:10px;
    }
    .sidebar a {
    text-decoration: none;
    font-size: 24px;
    }
    .close-sidebar {
    font-size: 1.5em;
    position: absolute;
    right: 15px;
    top: 15px;
    }
    .social-buttons {
    text-align: center;
    }
    .container {
    width: 100%;
    text-align: center;
    background-color: #2F4F4F;

    }
    .netage-logo {
    text-align: center;
    }
    .container-heart {
    text-align: center;
    background-color: rgba(0,124,217,.9);
    color: white;
    }
    .container-heart p {
    font-size: 2em;
    padding-bottom: 60px;
    }
    .fa-heart {
    padding-top: 60px;
    font-size:5em;
    }
    </style>      
  </head>
  <body>
  <header class="headerbar">
  <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger"><i class="fas fa-bars"></i></div>
  <div class="site-name">Net Age</div>
  </header> 
  <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
  <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
  <ul class="sidebar">
    <li><a href="/">Home</a></li>
    <li><a href="/about">About Us</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
  </amp-sidebar>
  <div class="container">
    <amp-img src="https://www.netage.co.za/wp-content/uploads/logo-new.png" class="netage-logo" alt="Welcome" height="127" width="221"></amp-img>
  </div>

<p class="heading social-buttons">
  <amp-social-share type="twitter"
    width="45"
    height="33"></amp-social-share>
  <amp-social-share type="facebook"
    width="45"
    height="33"
    data-attribution="254325784911610"></amp-social-share>
  <amp-social-share type="linkedin"
    width="45"
    height="33"></amp-social-share>
  <amp-social-share type="gplus"
    width="45"
    height="33"></amp-social-share>
  <amp-social-share type="pinterest"
    width="45"
    height="33"></amp-social-share>
</p>
    @yield('content')
  </body>
</html>