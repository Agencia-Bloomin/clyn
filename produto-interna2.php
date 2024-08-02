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
      <div class="row">

        <div class="col-xl-8 col-lg-8">

          <div class="row">
            <div class="col-lg-12">
              <div class="box-img"">
                <div class=" swiper prodintSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img class="img-fluid " src="https://picsum.photos/801" alt="Produto 1" title="Produto 1">
                  </div>
                  <div class="swiper-slide">
                    <img class="img-fluid " src="https://picsum.photos/802" alt="Produto 1" title="Produto 1">
                  </div>
                  <div class="swiper-slide">
                    <img class="img-fluid " src="https://picsum.photos/803" alt="Produto 1" title="Produto 1">
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <h2>Description for Our Service</h2>
            <p>Keeping your landscaping irrigated is critical to protecting your investment. Watering your property is
              essential if your tii want to appreciate its lushness and attractiveness. Our uthan irrigation
              professionals will carefully design your sprinkler system towa guarantee that your grass or property
              receives the most coverage possible. If you've justfy finished neverit landscaping or need torei upgrade
              or replace your property's irrigation and drainage system, we can help Wel give your
              a free consultation with one offf our landscape specialists to discuss installing a fresh new irrigation
              system to keep you
              wer lawn healthy or evaluating the systei replacement.</p>

          </div>
        </div>



        <div class="boxExpand" id="boxExpand">
          <div id="contentExpand" class="collapsed">
            <!-- conteúdos aqui -->


            <h2>Our Work Process</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
              totami
              remove tim timeli aperiamerii eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
              vitae
              dicta sunt explicab Nemoiy enimueiiii ipsam voluptatemi quia voluptas sit aspernatur aut odit aut fugit,
              sed quia consequuntur magni dolores eosy qui ratione tiii voluptatem sequi nesciunt. Neque porro
              quisquam
              est, qui dolorem ipsum quia dolo consectetur adipisci velit sed quia ee non numquam eius modifiied
              tempora
              incidunt temper lost of time.</p>

            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="service-details-card">
                  <div class="icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="details">
                    <h3>Lorem ipsum dolor sit </h6>
                      <p>Maintain wireless scerios after sure quality vectors future</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="service-details-card">
                  <div class="icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="details">
                    <h3>Lorem ipsum dolor sit </h6>
                      <p>Maintain wireless scerios after sure quality vectors future</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="service-details-card">
                  <div class="icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="details">
                    <h3>Lorem ipsum dolor sit </h6>
                      <p>Maintain wireless scerios after sure quality vectors future</p>
                  </div>
                </div>
              </div>
            </div>

            <h2>Lorem ipsum</h2>

            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas neque consequatur, beatae aperiam fuga
              dolorem similique nesciunt, blanditiis maiores voluptatem nisi earum veniam at laudantium error optio
              obcaecati cumque itaque.</p>

            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure voluptatum corporis modi ullam fugiat, id
              laboriosam magnam. Distinctio repellat quod ex, id cupiditate impedit! Obcaecati eveniet sit tempora odit
              neque!
              Doloribus et quibusdam commodi sapiente ab quo quod quaerat eius laborum laboriosam accusantium voluptate
              expedita, totam odio voluptatuipsa, voluptatibus minus. Eum hic soluta tempore quia ipsum placeat sit
              quis!
            </p>

          </div>

          <button class="btn-expand" id="expandbtn">
            <i class="fa-solid fa-chevron-down"></i>
            <span>Leia Mais</span>
          </button>
        </div>





        <div class="row service-content">
          <div class="col-lg-12">
            <h2 class="titles1">Frequency questions</h2>
          </div>
          <div class="col-lg-12">
            <div class="faq">
              <div class="accordion">
                <div class="accordion-item">
                  <button id="accordion-button-1" aria-expanded="false">
                    <span class="accordion-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                    <span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                      Ut tortor pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-2" aria-expanded="false">
                    <span class="accordion-title">Lorem ipsum dolor sit amet, consectetur?</span>
                    <span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                      Ut tortor pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-3" aria-expanded="false">
                    <span class="accordion-title">Lorem ipsum dolor sit amet?</span>
                    <span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                      Ut tortor pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


      </div>


      <div class="col-lg-4">
        <div class="sedebar02 sticky-div">

          <div class="box-categoria">
            <h2 class="cat-title">Services</h2>
            <ul>
              <li><a href="#"><span>Kitchen Plumbing</span><i class="fa-solid fa-arrow-right-long"></i></a></li>
              <li><a href="#"><span>Gas Line Services</span><i class="fa-solid fa-arrow-right-long"></i></a></li>
              <li><a href="#"><span>Water Line Repair</span><i class="fa-solid fa-arrow-right-long"></i></a></li>
              <li><a href="#"><span>Bathroom Plumbing</span><i class="fa-solid fa-arrow-right-long"></i></a></li>
              <li><a href="#"><span>Basement Plumbing</span><i class="fa-solid fa-arrow-right-long"></i></a></li>
            </ul>
          </div>

          <div class="sidebar-cta">
            <img src="https://picsum.photos/801" alt="image">
            <div class="content-inner">
              <i class="fa-solid fa-phone-volume"></i>
              <h2>Lorem ipsum dolor?</h2>
              <a href="#">11 99999-9999</a>
            </div>
          </div>
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