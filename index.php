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
                <p>Transforme seu ambiente com o tapete de vinil da Clyn. Elevando o padrão de seus
                  espaços, o Tapete de Vinil da Clyn é a solução perfeita para quem valoriza a
                  combinação de resistência, praticidade e estilo. Desenvolvido para atender às
                  necessidades dos ambientes mais exigentes, nosso tapete oferece uma robustez
                  incomparável, resistência a manchas e umidade, e um design elegante que complementa
                  qualquer decoração.
                </p>
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
                <p>Apresentamos o tapete duo da Clyn, a solução definitiva para quem procura um produto
                  que harmoniza praticidade e sofisticação. Projetado para atender a uma ampla gama de
                  necessidades e aplicações, o Tapete Duo se destaca como a escolha perfeita para
                  transformar qualquer espaço com um toque de classe e inovação.
                </p>

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
                <p>O piso moeda da Clyn é a ideal para quem procura um revestimento que combina de
                  maneira excepcional funcionalidade, durabilidade e estética. Desenvolvido com
                  atenção aos detalhes e às necessidades específicas de diferentes ambientes, o Piso
                  Moeda é projetado para proporcionar não apenas um visual sofisticado, mas também um
                  desempenho superior em diversos contextos.
                </p>

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
                <p>Com uma trajetória de 33 anos de excelência, a Clyn é uma das empresas mais
                  tradicionais e respeitadas na confecção de tapetes e revestimentos personalizados no
                  mercado nacional. A Clyn é reconhecida por sua capacidade de atender a uma ampla
                  gama de aplicações, tanto em ambientes comerciais quanto residenciais. </p>

                <p>Com um portfólio diversificado, a empresa oferece tapetes e capachos personalizados
                  que são a escolha ideal para criar espaços que se destacam pela sua qualidade e
                  estética. </p>

                <p>O compromisso com a inovação é uma marca registrada da Clyn, que investe
                  constantemente em tecnologia e processos para garantir produtos que não só atendem,
                  mas superam as exigências do mercado.</p>
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
                <p>Os principais produtos da Clyn incluem tapetes e capachos personalizados para
                  empresas, ideais para criar uma primeira impressão positiva e reforçar a identidade
                  da marca. </p>
                <p>Nossos produtos são confeccionados com materiais de alta qualidade, garantindo
                  resistência a condições adversas e um visual sofisticado. </p>
                <p>Além disso, oferecemos tapetes e capachos para retenção de sujeira e umidade, que são
                  perfeitos para ambientes de alto tráfego onde a manutenção da limpeza e da segurança
                  é essencial.</p>


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
                          <p>O tapete de vinil da Clyn é a solução perfeita para quem busca um
                            revestimento que combine durabilidade, estilo e facilidade de
                            manutenção. Desenvolvido para atender a uma ampla gama de
                            aplicações, o Tapete de Vinil é a escolha ideal para ambientes
                            que exigem resistência e um visual sofisticado.</p>
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
                          <p>O tapete duo da Clyn é a escolha ideal para aqueles que buscam um
                            produto que não apenas atende às necessidades funcionais, mas
                            também adiciona um toque de elegância a qualquer espaço. Este
                            tapete foi desenvolvido com um foco minucioso nos detalhes,
                            oferecendo uma combinação única de praticidade e sofisticação
                            que transforma ambientes comuns em espaços de destaque.
                          </p>
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
                          <p>O tapete Waterkap da Clyn é uma escolha excepcional para quem
                            busca um revestimento altamente resistente e eficaz na
                            manutenção da limpeza de ambientes internos. Projetado para ser
                            colocado na entrada de edifícios e outros espaços com alta
                            circulação de pessoas, o Waterkap é ideal para enxugar os pés
                            antes de entrar em áreas internas, ajudando a reduzir a sujeira
                            e umidade que podem ser trazidas do exterior.
                          </p>
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
                          <p>O tapete Cleankap da Clyn é a escolha perfeita para quem busca um
                            tapete que combine excelência na retenção de sujeira e umidade
                            com um design sofisticado. Ideal para ambientes comerciais e
                            residenciais, o Cleankap é desenvolvido para maximizar a
                            eficiência na limpeza e melhorar a estética do seu espaço.</p>
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
                          <p>O Piso Moeda da Clyn é a solução perfeita para quem busca um
                            revestimento que combine estética, funcionalidade e resistência.
                            Ideal para uma ampla gama de ambientes comerciais e
                            residenciais, o Piso Moeda se destaca por sua capacidade de
                            oferecer um visual moderno e sofisticado, aliado a uma
                            durabilidade excepcional.
                          </p>
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
                          <p>O piso bus da Clyn é a solução perfeita para quem busca um
                            revestimento robusto e esteticamente atraente, ideal para áreas
                            de alta circulação. Projetado para atender às demandas de
                            ambientes comerciais e públicos, o Piso Bus oferece uma
                            combinação única de durabilidade, funcionalidade e design.
                          </p>
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
                  <p> <a class="dn_btn" href="<?php echo CONF_SITE_MAP_LINK; ?>" target="_blank"><?php echo CONF_SITE_STREET; ?></a></p>
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