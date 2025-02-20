<?php

namespace Source;

require_once 'admin/vendor/autoload.php';

use Source\Info;

$categoriesMenu = null;
$categories = null;
$products = null;

if (isset($_GET['id']) && isset($_GET['father_id'])) {
   $id = intval($_GET['id']);
   $fatherId = intval($_GET['father_id']);
   $isMainCat = $fatherId == 0 ? $fatherId : $id;

   if ($isMainCat != 0) {
      $categoriesMenu = (new Info())->getAllMainCategories();
      $categories = (new Info())->getAllCategoriesByFatherId($id);
      // $products = (new Info())->getProductsByCatId($id);
      $productsPagQuantity = (new Info())->productsPagination($id, 21);
      $products = (new Info())->productsByCatIdPaginated($id, $productsPagQuantity);
      $prodPagRender = (new Info())->pagerRender($productsPagQuantity);

      $title = mb_strtoupper(((new Info())->getTitleCategoryById($id))->name);
   }
   if ($isMainCat == 0) {
      $categoriesMenu = (new Info())->getAllMainCategories();
      $categories = (new Info())->getAllCategoriesByFatherId($id);
      $title = mb_strtoupper(((new Info())->getTitleCategoryById($id))->name);
      if (!isset($categories)) {
         // $products = (new Info())->getProductsByCatId($id);
         $productsPagQuantity = (new Info())->productsPagination($id, 21);
         $products = (new Info())->productsByCatIdPaginated($id, $productsPagQuantity);
         $prodPagRender = (new Info())->pagerRender($productsPagQuantity);
      }
   }
}

if (!isset($_GET['id']) && !isset($_GET['father_id'])) {
   $categoriesMenu = (new Info())->getAllMainCategories();
   // $categories = (new Info())->getAllTreeCategories();
   $categories = (new Info())->getAllMainCategories();
}


if (!empty($_POST['search'])) {
   $categoriesMenu = null;
   $categories = null;
   $prodPagRender = null;

   $buscar = filter_var($_POST["search"], FILTER_SANITIZE_STRING);
   $products = (new Info())->getProductsByName($buscar);

   $title = "Pesquisa de produtos por {$buscar}";
   $description = "Resultado da pesquisa de produtos por {$buscar}";
}

include 'inc/inc.seo.php';
?>
<link rel="stylesheet" href="admin/theme/assets/css/paginator.raiz.css">
<link rel="stylesheet" href="css/pg-seo.css">
</head>

<body>
   <!-- header-start -->
   <?php include 'inc/inc.header.php' ?>
   <!-- header-end -->

   <!--? Hero Start -->
   <?php include 'inc/inc.breadcrumb.php' ?>
   <!-- Hero End -->

   <!-- ================ section start ================= -->
   <section class="product-area section-padding">


      <div class="container">

         <div class="row g-2 box-top parallax my-0 py-5" data-rellax-speed="1">
            <?php if (!empty($categories)) :
               foreach ($categories as $cat) : ?>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <a href="<?= $cat->url ?>">
                        <div class="card-product h-100">
                           <div class="d-flex justify-content-center">
                              <img class="img-fluid " src="admin/<?= $cat->cover ?>" alt="<?= $cat->name ?>" title="<?= $cat->name ?>">
                           </div>
                           <div class="d-flex justify-content-center">
                              <h3><?= $cat->name ?></h3>
                           </div>

                           <p><span>Saiba Mais</span></p>
                        </div>
                     </a>
                  </div>
                  <?php endforeach;
            else :

               if (!empty($products)) :
                  foreach ($products as $prod) : ?>
                     <div class="col-lg-4 col-md-6 mb-4">
                        <a href="<?= $prod->url ?>">
                           <div class="card-product h-100">
                              <div class="d-flex justify-content-center">
                                 <img class="img-fluid " src="admin/<?= $prod->cover ?>" alt="<?= $prod->name ?>" title="<?= $prod->name ?>">
                              </div>
                              <div class="d-flex justify-content-center">
                                 <h3><?= $prod->name ?></h3>
                              </div>

                              <p><span>Saiba Mais</span></p>
                           </div>
                        </a>
                     </div>


                  <?php endforeach; ?>

                  <?= !empty($prodPagRender) ? $prodPagRender : '' ?>

               <?php else : ?>
                  <div class="col-12">
                     <div class="alert alert-dark" role="alert">
                        <i class="fa-regular fa-window-maximize"></i> Não há produtos nesta categoria.
                     </div>
                  </div>
            <?php endif;
            endif; ?>

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