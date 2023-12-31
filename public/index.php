<?php 
require_once("../source/views/card.php");
?> 

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css"/>
  <script src="/js/main.js"></script>
  <title>NVVN</title>
</head>
<body>
  <nav class="nav">
    <figure class="nav__logo">
      <img class="nav__img" src="./img/united_nations.webp" alt="" />
      <h2 class="nav__h2">nvvn</h2>
    </figure>
    <ul class="nav__list">
      <li class="nav__listItem">
          <a href="" class="nav__link">Home</a>
      </li>
      <li class="nav__listItem">
        <a href="" class="nav__link">SDG</a>
      </li>
      <li class="nav__listItem"><a href="" class="nav__link">Contact</a></li>
    </ul>
  </nav>
  <section class="sdgSection">
    <button class="sdg__buttonlinks"></button>
    <?php
      makeTiles();
    ?>
    <button class="sdg__buttonrechts"></button>
  </section>
  <section class="ctaSection">
      <div class="cta__item">
        <button class="cta__button">Call to Action</button>
      </div>
  </section>
  <section class="sdgdescription">
    <div class="sdgd__div">
      <p class="sdgd__p">
        Titel
        <br>
        <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex magnam aliquam temporibus non iure fugiat aliquid qui facilis a, voluptas dicta, quisquam nostrum harum similique! Deleniti corrupti doloribus et debitis.
        Temporibus, quos est! Beatae labore hic quod non maxime consequatur? Voluptates neque non laborum corporis. Provident nostrum deserunt quam et sapiente unde obcaecati suscipit autem minus id magnam, aliquid expedita.
        Magnam dolorum fugit delectus, voluptate optio explicabo vitae ducimus libero, atque natus commodi facere? Molestiae voluptas ut optio error, quos architecto dolor recusandae amet dolorum, neque unde quaerat enim omnis!
        Nemo dolorem adipisci earum eius magnam et in minima reprehenderit similique ea, explicabo quos sequi ut voluptates. Consectetur reiciendis natus voluptas sapiente! Sit eius nam deserunt tempore nobis adipisci. Natus.
        Quis praesentium libero sint labore id rem dignissimos maxime laudantium accusantium nam laborum, in, consequuntur possimus enim accusamus eveniet, est ipsam. Nulla, velit fuga dicta culpa laudantium doloremque unde dolor.
        Cumque voluptatibus libero non omnis dolores perferendis est nulla, architecto qui eligendi? Placeat repudiandae exercitationem odit molestias enim, sapiente incidunt dolores animi eos qui debitis ea nesciunt excepturi quos dolorem!
        Ducimus fugit, rerum facilis nihil cum libero velit vel ipsam aut, accusantium maiores reprehenderit corporis. Labore, nisi. Vel earum omnis ratione, molestias similique optio laboriosam tempore? Odio ullam voluptates facilis?
      </p>
      <div class="sdgd__divimg">
        
      </div>
    </div>
  </section>
  <footer>
      <div class="logo_div">
        <div class="footer-div">
          <img class="logo-f" src="img/logo.webp" alt="">
        </div>
        <p class="footer__text">NVVN </p>
        <p class="footer__text">Cookie-instellingen </p>
      </div>
    <div class="icon_div">
        <img class="footer-icons" src="img/icons8-facebook-24.webp" alt="">
        <img class="footer-icons" src="img/icons8-instagram-24.webp" alt="">
        <img class="footer-icons" src="img/icons8-linkedin-24.webp" alt="">
        <img class="footer-icons" src="img/icons8-twitter-24.webp" alt="">
    </div>
</footer>





</body>
</html>
