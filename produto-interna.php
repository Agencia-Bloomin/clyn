<?php
$title = !empty($title) ? $title : '';
include 'inc/inc.seo.php' ?>
</head>

<body class="not-overflow-x">
  <!-- header-start -->
  <?php include 'inc/inc.header.php' ?>
  <!-- header-end -->

  <!--? Hero Start -->
  <div class="slider-area">
    <div class="slider-height hero-overly d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="hero-cap text-center ajust-padding">
              <h1><?= $title ?></h1>
              <div class="divider m-auto mb-1"></div>
              <p class="color-w"><a class="ajust-link" href="./" title="Ir ao início">Home</a> |<a class="ajust-link" href="produtos" title="Ir aos produtos"> Produtos</a> | <a class="ajust-link"><?= $title ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- ================ section start ================= -->
  <section class="int-page section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-12 mb-4 padding-lg-right">

          <div class="row align-items-center">
            <div class="col-lg-12">

              <div class="product-details1">
                <div class="ajust-float mb-4">
                  <div class="swiper prodintSwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>

                <h2>Confira os detalhes do nosso projeto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quod laborum sapiente aliquid
                  provident porro atque! Repellendus aliquam ab quis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus perspiciatis quasi
                  necessitatibus voluptatibus esse!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corporis nam ea maiores inventore
                  dignissimos illum nesciunt sequi maxime animi ullam accusantium, cum dicta ratione itaque
                  molestias
                  dolore distinctio provident!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil molestias eius ex totam distinctio ea
                  nostrum incidunt autem eveniet numquam! Cupiditate corporis, odit molestias praesentium optio fugiat
                  ipsam voluptates nostrum!
                  Labore odit voluptas recusandae rerum, dicta quos. Facere sunt molestias modi perspiciatis animi nemo?
                  Quisquam voluptates quos soluta obcaecati nulla? Hic voluptate optio aspernatur ex sint provident
                  aperiam, consectetur commodi?</p>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <div class="boxExpand mt-0 p-0" id="boxExpand">
                <div id="contentExpand" class="collapsed">
                  <!-- conteúdos aqui -->

                  <h2>Our Work Process</h2>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totami
                    remove tim timeli aperiamerii eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                    vitae
                    dicta sunt explicab Nemoiy enimueiiii ipsam voluptatemi quia voluptas sit aspernatur aut odit aut
                    fugit,
                    sed quia consequuntur magni dolores eosy qui ratione tiii voluptatem sequi nesciunt. Neque porro
                    quisquam
                    est, qui dolorem ipsum quia dolo consectetur adipisci velit sed quia ee non numquam eius modifiied
                    tempora
                    incidunt temper lost of time.</p>

                  <div class="swiper prodintSwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>

                  <h2>Lorem ipsum</h2>

                  <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas neque consequatur, beatae aperiam
                    fuga
                    dolorem similique nesciunt, blanditiis maiores voluptatem nisi earum veniam at laudantium error
                    optio
                    obcaecati cumque itaque.</p>

                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure voluptatum corporis modi ullam
                    fugiat, id
                    laboriosam magnam. Distinctio repellat quod ex, id cupiditate impedit! Obcaecati eveniet sit tempora
                    odit
                    neque!
                    Doloribus et quibusdam commodi sapiente ab quo quod quaerat eius laborum laboriosam accusantium
                    voluptate
                    expedita, totam odio voluptatuipsa, voluptatibus minus. Eum hic soluta tempore quia ipsum placeat
                    sit
                    quis!
                  </p>

                </div>

                <button class="btn-expand" id="expandbtn">
                  <i class="fa-solid fa-chevron-down"></i>
                  <span>Leia Mais</span>
                </button>
              </div>
            </div>
          </div>


        </div>
        <div class="col-xl-4 col-lg-12 col-md-11">
          <div class="sticky-div">
            <?php include 'inc/inc.sidebar.php' ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'inc/inc.cta.php' ?>

  <!-- ================ section end ================= -->

  <!-- footer start -->
  <?php include 'inc/inc.footer.php' ?>
  <!-- footer end  -->

  <!-- JS here -->
  <?php include 'inc/inc.js.php' ?>
</body>

</html>