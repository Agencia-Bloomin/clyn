<header>
  <div class="header-area header-transparent header-sticky" id="myid">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            <div class="header-social">
              <a href="<?php echo CONF_SOCIAL_FACEBOOK_PAGE; ?>" target="_blank">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="<?php echo CONF_SOCIAL_INSTAGRAM_PAGE; ?>" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
              <!-- <a href="<?php echo CONF_SOCIAL_YOUTUBE_PAGE; ?>" target="_blank">
                        <i class="fab fa-youtube"></i>
                     </a> -->
              <!-- <a href="<?php echo CONF_SOCIAL_LINKEDIN_PAGE; ?>" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                     </a> -->
            </div>
          </div>
          <div class="col-md-11 d-flex justify-content-end">
            <div class="contact-menu">
              <a class="dn_btn" href="<?php echo CONF_SITE_MAP_LINK; ?>" target="_blank">
                <i class="fa-solid fa-map-location-dot"></i>
                <?php echo CONF_SITE_STREET_1; ?>
              </a>
              <a class="dn_btn" href="mailto:<?php echo CONF_SITE_EMAIL; ?>">
                <i class="fa-solid fa-envelopes-bulk"></i>
                <?php echo CONF_SITE_EMAIL; ?>
              </a>
              <a class="dn_btn" href="tel:<?php echo CONF_SITE_PHONE_LINK; ?>">
                <i class="fa-solid fa-phone"></i>
                <?php echo CONF_SITE_PHONE; ?>
              </a>
              <a class="dn_btn" href="tel:<?php echo CONF_SITE_PHONE_LINK2; ?>">
                <i class="fa-solid fa-phone"></i>
                <?php echo CONF_SITE_PHONE2; ?>
              </a>

              <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK; ?>" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                <?php echo CONF_SITE_WHATSAPP; ?>
              </a>

              <!-- <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK2; ?>" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                <?php echo CONF_SITE_WHATSAPP2; ?>
              </a> -->

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="header-main">
      <a href="./">
        <div class="logo" id="logo">
          <img src="img/logo/logo.png" alt="<?php echo CONF_SITE_NAME; ?>" title="<?php echo CONF_SITE_NAME; ?>" class="img-fluid">
        </div>
        <div class="box-links d-flex align-items-center">
      </a>
      <div class="open-nav-menu">
        <span></span>
      </div>
      <div class="menu-overlay"></div>
      <nav class="nav-menu">
        <div class="close-nav-menu">
          <i class="fa-solid fa-xmark"></i>
        </div>
        <ul class="menu">
          <li class="menu-item">
            <a class="nav-link" href="./">Home</a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="quem-somos">Sobre nós</a>
          </li>
          <li class="menu-item has-children main-sub-menu">
            <a class="nav-link" href="produtos" data-toggle="sub-menu">Produtos <i class="plus"></i></a>
            <ul class="sub-menu">
              <li class="menu-item">
                <a class="nav-link" href="javascript:void(0)">Tapete de Vinil</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="javascript:void(0)">Tapete Duo</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="javascript:void(0)">Tapete Waterkap</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="javascript:void(0)">Tapete Cleankap</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="javascript:void(0)">Piso Moeda</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="javascript:void(0)">Piso Bus</a>
              </li>

              <!-- <li class="menu-item has-children has-children-2">
                <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">Menu Level 2<i
                    class="plus"></i></a>
                <ul class="sub-menu sub-menu-2">
                  <li class="menu-item"><a href="javascript:void(0)">Item 1</a></li>
                  <li class="menu-item"><a href="javascript:void(0)"> Item 2 </a></li>
                </ul>
              </li> -->

            </ul>
          </li>

          <li class="menu-item">
            <a class="nav-link" href="qjavascript:void(0)">Galeria</a>
          </li>

          <li class="menu-item d-lg-none d-block">
            <a class="nav-link" href="contato">Contato</a>
          </li>
        </ul>
      </nav>

      <div class="contact-btn d-lg-block d-none">
        <!-- <a href="contato" class="btn">Contato</a> -->
        <a href="contato" class="btn-one">Contato</a>

      </div>
    </div class="header-main">
  </div>
  </div>
</header>