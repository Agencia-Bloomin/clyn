<?php include 'inc/inc.seo.php' ?>
</head>

<body>



  <?php include 'inc/inc.header.php' ?>

  <!-- ====================================================== -->
  <!--====== Edite aqui URLs das imagens dos Banners ======== -->
  <!-- ====================================================== -->
  <?php

  //   == banner 1 ====
  define("IMG_BANNER1", "img/banners/banner.jpg");
  define("IMG_BANNER1_MOB", "img/banners/bannermob.jpg");
  //   == banner 2 ====
  define("IMG_BANNER2", "img/banners/banner.jpg");
  define("IMG_BANNER2_MOB", "img/banners/bannermob.jpg");
  //   == banner 3 ====
  define("IMG_BANNER3", "img/banners/banner.jpg");
  define("IMG_BANNER3_MOB", "img/banners/bannermob.jpg");
  ?>

  <!-- ===================================================== -->
  <!-- ===================================================== -->

  <div class="banner-full">
    <div class="swiper-container banner-main" id="banner-main">
      <div class="swiper-wrapper">
        <!-- Slide item -->
        <div class="swiper-slide">
          <div class="content-area">
            <div class="bg">
              <picture>
                <source media="(max-width: 769px)" srcset="<?php echo IMG_BANNER1_MOB; ?>">

                <source media="(min-width: 576px)" srcset="<?php echo IMG_BANNER1; ?>">
                <img class="img-slide img-fluid" src="<?php echo IMG_BANNER1; ?>" alt="Banner 1" title="Banner 1">
              </picture>
            </div>
            <div class="content">
              <div class="text fadeUp">
                <span>Tapete de Vinil</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit officiis veniam provident quos
                  repellendus illum modi adipisci error inventore.</p>
                <a href="produtos" class="btn-one">Saiba Mais <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide item -->
        <div class="swiper-slide">
          <div class="content-area">
            <div class="bg">
              <picture>
                <source media="(max-width: 769px)" srcset="<?php echo IMG_BANNER2_MOB; ?>">

                <source media="(min-width: 576px)" srcset="<?php echo IMG_BANNER2; ?>">
                <img class="img-slide img-fluid" src="<?php echo IMG_BANNER2; ?>" alt="Banner 2" title="Banner 2">
              </picture>
            </div>
            <div class="content">
              <div class="text fadeUp">
                <span>Tapete Duo</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vel id laudantium quasi
                  corporis fuga repellendus praesentium voluptate porro.</p>

                <a href="produtos" class="btn-one">Saiba Mais <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="content-area">
            <div class="bg">
              <picture>
                <source media="(max-width: 769px)" srcset="<?php echo IMG_BANNER3_MOB; ?>">

                <source media="(min-width: 576px)" srcset="<?php echo IMG_BANNER3; ?>">
                <img class="img-slide img-fluid" src="<?php echo IMG_BANNER3; ?>" alt="Banner 3" title="Banner 3">
              </picture>
            </div>
            <div class="content">
              <div class="text fadeUp">
                <span>Piso Moeda</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vel id laudantium quasi
                  corporis fuga repellendus praesentium voluptate porro.</p>

                <a href="produtos" class="btn-one">Saiba Mais <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="controls">
        <div class="swiper-pagination"></div>
        <div class="swiper-buttons swiper-button-prev"> </div>
        <div class="swiper-buttons  swiper-button-next"></div>
      </div>

    </div>


  </div>

  <!-- 
  <section class="welcome ">
    <h1>Seja Bem-Vindo á <?php echo CONF_SITE_NAME; ?></h1>
  </section>
 -->




  <!-- ===================== Section About ===================== -->
  <!-- ========================================================= -->

  <section class="section-about section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mt-3">
          <div class="about-thumbnail fade-in">
            <!-- <div class="box-counter ">
              <div class="box-number">
                <div class="icon"><i class="fa-solid fa-business-time"></i></div>
                <div class="counter" data-val="60">60</div><span class="plus">+</span>
              </div>
              <div class="text text-center">
                <p>Anos de <span>experiência mercado</span></p>
              </div>
            </div> -->

            <!-- <div class="mini-image">
              <img src="img/gallery/about2.jpg" alt="about" title="about">
            </div> -->

            <div class="thumbnail">
              <img src="img/gallery/about.jpg" alt="about" title="about">
            </div>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="about-content slide-up">
            <div class="title-area">
              <!-- <p class="subtitle"><span>Conheça a</span></p> -->
              <h1 class="title">Conheça a <b><?php echo CONF_SITE_NAME; ?></b> </h1>
            </div>
            <div class="text-content ">
              <div class="desc mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, maxime. Nostrum saepe
                  eveniet hic, nam necessitatibus sed id totam? Porro eum aliquid vel ipsa corporis? Itaque
                  recusandae modi voluptatibus culpa.
                  Fuga facere in, omnis rerum praesentium culpa dolores nihil reprehenderit reiciendis tenetur
                  consectetur. Dicta blanditiis assumenda rem recusandae possimus, aperiam accusantium quisquam
                  aspernatur. Quae commodi corporis explicabo? Dicta, aliquam debitis.</p>
              </div>



              <a class="btn-two color2" href="quem-somos">
                <span>Saiba Mais</span>
                <div class="icon">
                  <i class="i1 fa-solid fa-arrow-right-long"></i>
                  <i class="i2 fa-solid fa-arrow-right-long"></i>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>


  </section>
  <!-- ========================= End =========================== -->
  <!-- ========================================================= -->


  <!-- diferenciais -->
  <div class="container-fluid features-top-wrapper">
    <div class="row g-0">
      <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12 item">
        <a href="#">
          <div class="features-top ">
            <div class="icon">
              <i class="fa-solid fa-square-check"></i>
            </div>
            <div class="content">
              <spam class="title">Alta Qualidade</spam>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12 item">
        <a href="#">
          <div class="features-top ">
            <div class="icon">
              <i class="fa-solid fa-pen-ruler"></i>
            </div>
            <div class="content">
              <spam class="title">Personalização</spam>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12 item">
        <a href="#">
          <div class="features-top ">
            <div class="icon">
              <i class="fa-solid fa-thumbs-up"></i>
            </div>
            <div class="content">
              <spam class="title">Atendimento ao cliente</spam>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12 item">
        <a href="#">
          <div class="features-top ">
            <div class="icon">
              <i class="fa-solid fa-truck-fast"></i>
            </div>
            <div class="content">
              <spam class="title">Entrega rápida</spam>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>


  <section class="product-area section-padding ">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-12 col-md-12 padding-content slide-left mb-3">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-9">
              <div class="title-area">
                <h2 class="title">
                  Nossos <b>Produtos</b>
                </h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci labore assumenda necessitatibus
                  minus.
                  Assumenda accusantium aut modi, ratione reprehenderit quas, asperiores incidunt omnis minus ab
                  similique
                  sed quibusdam minima voluptates.
                </p>


              </div>
            </div>

            <div class="col-lg-3 d-flex justify-content-center">
              <a class="btn-two" href="#">
                <span>Veja Todos</span>
                <div class="icon">
                  <i class="i1 fa-solid fa-arrow-right-long"></i>
                  <i class="i2 fa-solid fa-arrow-right-long"></i>
                </div>
              </a>
            </div>
          </div>

        </div>
        <div class="col-lg-12">
          <div class="swiper serviceSwiper1 slide-right">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <a href="#">
                  <div class="card-03">
                    <div class="image">
                      <img src="img/produtos/tapete-vinil-capacho.png" alt="Tapete de Vinil" title="Tapete de Vinil">
                    </div>
                    <div class="content">
                      <div class="info">
                        <div>
                          <h2>Tapete de Vinil</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptate quod enim corrupti
                            eius animi quasi, temporibus facilis quidem beatae consequuntur commodi error? Facere
                            suscipit fugiat eaque at odio voluptas.</p>
                        </div>
                        <span class="btn-link">Saiba mais <i class="fas fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="#">
                  <div class="card-03">
                    <div class="image">
                      <img src="img/produtos/tapete-duo.png" alt="Tapete Duo" title="Tapete Duo">
                    </div>
                    <div class="content">
                      <div class="info">
                        <div>
                          <h2>Tapete Duo</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptate quod enim corrupti
                            eius animi quasi, temporibus facilis quidem beatae consequuntur commodi error? Facere
                            suscipit fugiat eaque at odio voluptas.</p>
                        </div>
                        <span class="btn-link">Saiba mais <i class="fas fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="#">
                  <div class="card-03">
                    <div class="image">
                      <img src="img/produtos/tapete-waterkap.png" alt="Tapete Waterkap" title="Tapete Waterkap">
                    </div>
                    <div class="content">
                      <div class="info">
                        <div>
                          <h2>Tapete Waterkap</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptate quod enim corrupti
                            eius animi quasi, temporibus facilis quidem beatae consequuntur commodi error? Facere
                            suscipit fugiat eaque at odio voluptas.</p>
                        </div>
                        <span class="btn-link">Saiba mais <i class="fas fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>



              <div class="swiper-slide">
                <a href="#">
                  <div class="card-03">
                    <div class="image">
                      <img src="img/produtos/tapete-cleankap.png" alt="Tapete Cleankap" title="Tapete Cleankap">
                    </div>
                    <div class="content">
                      <div class="info">
                        <div>
                          <h2>Tapete Cleankap</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptate quod enim corrupti
                            eius animi quasi, temporibus facilis quidem beatae consequuntur commodi error? Facere
                            suscipit fugiat eaque at odio voluptas.</p>
                        </div>
                        <span class="btn-link">Saiba mais <i class="fas fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="#">
                  <div class="card-03">
                    <div class="image">
                      <img src="img/produtos/piso-moeda.png" alt="Piso Moeda" title="Piso Moeda">
                    </div>
                    <div class="content">
                      <div class="info">
                        <div>
                          <h2>Piso Moeda</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptate quod enim corrupti
                            eius animi quasi, temporibus facilis quidem beatae consequuntur commodi error? Facere
                            suscipit fugiat eaque at odio voluptas.</p>
                        </div>
                        <span class="btn-link">Saiba mais <i class="fas fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="#">
                  <div class="card-03">
                    <div class="image">
                      <img src="img/produtos/piso-bus.png" alt="Piso Bus" title="Piso Bus">
                    </div>
                    <div class="content">
                      <div class="info">
                        <div>
                          <h2>Piso Bus</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptate quod enim corrupti
                            eius animi quasi, temporibus facilis quidem beatae consequuntur commodi error? Facere
                            suscipit fugiat eaque at odio voluptas.</p>
                        </div>
                        <span class="btn-link">Saiba mais <i class="fas fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- <div class="swiper-slide">
                <a href="produto-interna">
                  <div class="card-two">
                    <div class="cart-img">
                      <img src="img/produtos/no-image.png"  alt="produto" title="produto">
                    </div>
                    <div class="card-prod-content">
                      <div class="card-prod-text">
                        <h2>Produto</h2>
                      </div>
                      <div class="">
                        <span class="btn-a"><i class="fa-solid fa-angles-right"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div> -->

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>



      </div>
    </div>
  </section>



  <section class="brands-area section-padding">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-3">
          <h2 class="title">
            Principais Fornecedores
          </h2>
        </div>

        <div class="col-lg-9">
          <div class="swiper brandSwiper">
            <div class="swiper-wrapper">
              <?php $items = glob("img/brand/*.{jpg,jpeg,png,webp}", GLOB_BRACE); ?>
              <?php $max_items = 100;
              $count = 0;
              foreach ($items as $item) : if ($count >= $max_items) break;
                $count++;
              ?>
              <div class="swiper-slide">
                <div class="item-brand">
                  <img src="<?= $item; ?>" alt="marcas" title="marcas">
                </div>
              </div>

              <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  <div class="section-gallery section-padding ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 ">
          <div class="title-area text-center slide-up">
            <!-- <p class="subtitle"><span>Confira</span></p> -->
            <h2 class="title mb-4">
              Nossa <b>Galeria</b>
            </h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="box-gallery slide-right">
            <div class="row justify-content-center g-2">

              <!-- pasta -->
              <?php $items = glob("img/gallery/galeria/*.{jpg,jpeg,png,webp}", GLOB_BRACE); ?>
              <?php
              $max_items = 8;
              $count = 0;
              foreach ($items as $item) :
                if ($count >= $max_items) break;
                $count++;
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="<?= $item; ?>" data-fancybox="gallery">
                  <div class="g-item">
                    <img src="<?= $item; ?>" alt="galeria" title="galeria">
                  </div>
                </a>
              </div>

              <?php endforeach; ?>


            </div>
          </div>

          <div class="col-lg-12 d-flex justify-content-center">
            <a class="btn-two" href="#">
              <span>Veja mais</span>
              <div class="icon">
                <i class="i1 fa-solid fa-arrow-right-long"></i>
                <i class="i2 fa-solid fa-arrow-right-long"></i>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>


  <section class="home-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="shadow-contact">
            <span>Entre</span>
            <h2>Entre em Contato</h2>
          </div>
          <div class="contact-card">
            <div class="row justify-content-center">
              <div class="col-12 mb-4 mt-4">
                <div class="icon-contact">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="content">
                  <p><a href="mailto:<?php echo CONF_SITE_EMAIL; ?>"><?php echo CONF_SITE_EMAIL; ?></a>
                  </p>
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="icon-contact">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="content">
                  <p>
                    <a href="tel:<?php echo CONF_SITE_PHONE_LINK; ?>"><?php echo CONF_SITE_PHONE; ?></a>
                    <a href="tel:<?php echo CONF_SITE_PHONE_LINK2; ?>"><?php echo CONF_SITE_PHONE2; ?></a>
                  </p>
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="icon-contact">
                  <i class="fab fa-whatsapp"></i>
                </div>
                <div class="content">
                  <p>
                    <a href="<?php echo CONF_SITE_WHATSAPP_LINK; ?>"><?php echo CONF_SITE_WHATSAPP; ?></a>
                  </p>
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="icon-contact">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="content">
                  <p> <a class="dn_btn" href="<?php echo CONF_SITE_MAP_LINK; ?>"
                      target="_blank"><?php echo CONF_SITE_STREET; ?></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">

          <div class="shadow-contact">
            <span>Solicite</span>
            <h2>Solicite seu Orçamento</h2>
          </div>
          <div class="mt-4">
            <?php include 'inc/inc.form.php' ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'inc/inc.footer.php' ?>
  <?php include 'inc/inc.js.php' ?>

  <script>
  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
  </script>




</body>



</html>