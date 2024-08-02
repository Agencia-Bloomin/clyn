<?php

// URL base do seu site
require_once 'inc/inc.config.php';

// URL base do seu site
$baseUrl = CONF_TAG_BASE;
$nameSite = CONF_SITE_NAME;

// Definir valores padrão se a página for index.php
if (basename($_SERVER['PHP_SELF']) === 'index.php') {
   $title = 'Home';
   $activePage = '';
}

?>

<!--############################
## PÁGINAS INSTITUCIONAIS ##
############################-->
<script type="application/ld+json">
   {
      "@context": "https://schema.org/",
      "@type": "BreadcrumbList",
      "itemListElement": [{
         "@type": "ListItem",
         "position": 1,
         "name": "Home",
         "item": "<?php echo $baseUrl; ?>"
      }, {
         "@type": "ListItem",
         "position": 2,
         "name": "<?= $title ?>",
         "item": "<?php echo $baseUrl; ?><?= $activePage ?>"
      }]
   }
</script>


<!--##################################
## PÁGINAS DE PRODUTOS/SERVIÇOS ##
##################################-->

<script type="application/ld+json">
   {
      "@context": "https://schema.org/",
      "@type": "BreadcrumbList",
      "itemListElement": [{
         "@type": "ListItem",
         "position": 1,
         "name": "Home",
         "item": "<?php echo $baseUrl; ?>"
      }, {
         "@type": "ListItem",
         "position": 2,
         "name": "Produtos",
         "item": "<?php echo $baseUrl; ?>produtos"
      }, {
         "@type": "ListItem",
         "position": 3,
         "name": "<?= $title; ?>",
         "item": "<?php echo $baseUrl; ?><?= $activePage ?>"
      }]
   }
</script>


<!-- JavaScript para encontrar e preencher as imagens -->
<script>
   window.addEventListener("load", function() {
      var images = document.querySelectorAll('img');
      var productSchema = {
         "@context": "https://schema.org/",
         "@type": "Product",
         "name": "<?= $title ?>",
         "image": "",
         "description": "Acesse nossa pagina <?= $title ?> e conheça mais sobre o que a <?php echo $nameSite; ?> pode te ajudar. ",
         "brand": {
            "@type": "Brand",
            "name": "<?php echo $baseUrl; ?>"
         },
         "review": {
            "@type": "Review",
            "reviewRating": {
               "@type": "Rating",
               "ratingValue": 4,
               "bestRating": 5
            },
            "author": {
               "@type": "Person",
               "name": "Camila Almeida"
            }
         },
         "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.4,
            "reviewCount": 89
         }
      };

      if (images.length > 0) {
         var imageUrl = "";
         for (var i = 0; i < images.length; i++) {
            if (images[i].src.match(/\.(jpg|png|webp)$/)) {
               imageUrl = images[i].src;
               break;
            }
         }
         productSchema.image = imageUrl;
      }
      var script = document.createElement('script');
      script.type = 'application/ld+json';
      script.textContent = JSON.stringify(productSchema);
      if (window.document.head) {
         window.document.head.appendChild(script);
      } else {
         window.document.body.appendChild(script);
      }
   });
</script>