<?php
include '../../controllers/product.controller.php';
$productController = new ProductController();
$productList = $productController->getAllProducts();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="The beauty of nature, the sky, the mountain, the tree..., Unseen beauty, 9 Things You Can Do to Save the Environment, 1, 2, 3, 4, 5, 6, Current projects, Save The World!, Save The World!, INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/LogoWeb1.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap"><header class="u-align-center-sm u-align-center-xs u-clearfix u-header u-header" id="sec-e4db"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="830" data-image-height="439">
          <img src="images/LogoWeb1.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2d3f"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2d3f"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-488d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-488d"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3fa1"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3fa1"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div>
        <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-border u-custom-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-2-base" href="Accueil.html" style="padding: 10px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-2-base" style="padding: 10px;" href="Orders.php">My Orders</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-2-base" style="padding: 10px;" href="Products.php"> Products</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-2-base" href="About.html" style="padding: 10px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html" style="padding: 18px 4px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 18px 4px;">Espace Membre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 18px 4px;">S'inscrire</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 18px 4px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 18px 4px;">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-shading u-section-1" id="carousel_fe3e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-opacity u-opacity-15 u-palette-1-base u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-border-3 u-border-white u-shape u-shape-bottom u-shape-left u-shape-1"></div>
            <h1 class="u-align-center u-text u-text-body-alt-color u-title u-text-1">Soyons le changement</h1>
            <a href="https://nicepage.com/c/about-us-html-templates" class="u-border-1 u-border-palette-1-base u-btn u-button-style u-palette-1-base u-btn-1">Consulter</a>
            <div class="u-border-3 u-border-white u-shape u-shape-right u-shape-top u-shape-2"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-image u-section-4" id="carousel_769c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <?php foreach ($productList as $product) { ?>
            <div class="u-align-left u-container-style u-list-item u-opacity u-opacity-60 u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">

                <h3 class="u-text u-text-2"><?php echo $product["name"]?></h3>
                <p class="u-text u-text-3">Quantity: <?php echo $product["quantity"]?></p>
                <p class="u-text u-text-3">Size: <?php echo $product["size"]?></p>
                <p class="u-text u-text-3">Color: <?php echo $product["color"]?></p>
                <p class="u-text u-text-3">Price: <?php echo $product["price"]?>$</p>
                <br/>
                <img src="../../uploads/<?php echo $product['image']; ?>"  style="width: 300px; height: 337px; object-fit: fill;"/>

                <a href="AddOrder.php?id=<?php echo $product['id']; ?>" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-text-body-color u-text-hover-palette-2-base u-btn-1">Buy this !</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>

    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-dd62"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Exemple de texte. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>