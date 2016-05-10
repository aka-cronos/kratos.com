<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kratos</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

  <nav class="mainNav">
    <a href="/" class="logo__mainNav">
      <img src="/img/logo__mainNav.png" alt="Kratos">
    </a>

    <ul id="mainMenu" class="mainMenu">
      <li class="mainMenu-item">
        <a class="mainMenu-link" href="/products/">Products</a>
        <ul class="mainMenu-dropdown">
          <li class="mainMenu-dropdownItem">
            <a class="mainMenu-dropdownLink" href="/products/long-products/">Long Products</a>
          </li>

          <li class="mainMenu-dropdownItem">
            <a class="mainMenu-dropdownLink" href="/products/mesh/">Mesh</a>
          </li>

          <li class="mainMenu-dropdownItem">
            <a class="mainMenu-dropdownLink" href="/products/fasteners/">Fasteners</a>
          </li>

          <li class="mainMenu-dropdownItem">
            <a class="mainMenu-dropdownLink" href="/products/bar-supports/">Bar Supports</a>
          </li>

          <li class="mainMenu-dropdownItem">
            <a class="mainMenu-dropdownLink" href="/products/concrete-accessories/">Concrete Accessories</a>
          </li>

          <li class="mainMenu-dropdownItem">
            <a class="mainMenu-dropdownLink" href="/products/">All Products</a>
          </li>
        </ul>
      </li>

      <li class="mainMenu-item">
        <a class="mainMenu-link" href="/careers.html">Careers</a>
      </li>

      <li class="mainMenu-item">
        <a class="mainMenu-link" href="/company.html">Company</a>
      </li>

      <li class="mainMenu-item">
        <a class="mainMenu-link" href="/contact.html">Contact</a>
      </li>
    </ul>

    <button id="mobileNav-trigger" class="mobileNav-trigger">
      <img src="/img/mobileNav-trigger.png" alt="">
    </button>
  </nav>

  <section class="form-confirmation">
    <h3 class="title title__red title__big">
      Thank You! <br>
      We have received your information
    </h3>


    <?php
      // el valor default que toma si no hay query param, 
      // ej si llegan direto a esta pagina.
      $redirect_to = "index.html"; 

      if (isset($_GET["back"])) {
        $redirect_to = "contact/".$_GET["back"].".html";
      }
    ?>
    <a class="btn btn__large btn__red-onWhite btn__translate" href="/<?php echo $redirect_to; ?>">Back</a>
  </section>

  <section class="homeActions">
    <a href="/careers.html" class="homeActions-careers">
    Careers <br> <span>Featured <br>Job Opportunities <br>in kratos.</span></a>
    <a href="/contact.html" class="homeActions-contact">For more details <br>on lead time offerings <br><span>contact us</span> <img src="/img/icon-mail.png" alt=""> </a>
  </section>

  <footer>
    <nav class="footerNav">
      <a href="/" class="logo__footer">
        <img src="/img/logo__footer.png" alt="Kratos">
      </a>

      <div class="footerNav-menu">
        <a class="footerNav-item" href="/products/">Products</a>
        <a class="footerNav-item" href="/careers.html">Careers</a>
        <a class="footerNav-item" href="/company.html">Company</a>
        <a class="footerNav-item" href="/contact.html">Contact</a>
      </div>

      <p class="footer-tel">
        (847) 387 4108
      </p>
    </nav>

    <div class="legals">
      <p>Copyright © 2016 Kratos. All rights reserved | <a href="">Privacy Policy</a> | <a href="/contact.html">Contact</a></p>
    </div>
  </footer>

  <nav class="mobileNav">
    <ul class="mobileNav-menu">
      <li class="mobileNav-menuItem">
        <a class="mobileNav-link" href="#">Products</a>
        <ul class="mobileNav-dropdown">
          <li><a class="mobileNav-backLink" href="#">Back</a></li>
          <li><a class="mobileNav-link" href="/products/long-products/">Long Products</a></li>
          <li><a class="mobileNav-link" href="/products/mesh/">Mesh</a></li>
          <li><a class="mobileNav-link" href="/products/fasteners/">Fasteners</a></li>
          <li><a class="mobileNav-link" href="/products/bar-supports/">Bar Supports</a></li>
          <li><a class="mobileNav-link" href="/products/concrete-accessories/">Concrete Accesories</a></li>
          <li><a class="mobileNav-link" href="/products/">All Products</a></li>
        </ul>
      </li>
      <li class="mobileNav-menuItem">
        <a class="mobileNav-link" href="/careers.html">Careers</a>
      </li>
      <li class="mobileNav-menuItem">
        <a class="mobileNav-link" href="/company.html">Company</a>
      </li>
      <li class="mobileNav-menuItem">
        <a class="mobileNav-link" href="/contact.html">Contact</a>
      </li>
    </ul>
  </nav>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="/scripts/unslider.min.js"></script>
  <script src="/scripts/main.js"></script>
</body>
</html>
