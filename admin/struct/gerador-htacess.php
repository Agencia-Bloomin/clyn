<?php

namespace Source;

require_once 'admin/vendor/autoload.php';

use Source\Info;


// $categories = (new Info())->getAllCategories();



// $produtcts = (new Info())->getAllProducts();

// foreach($categories as $category) {
//     if(!empty($category->url)) {
//     print_r($category->url);
//     echo "<br>";
//     }
// }

// foreach ($produtcts as $product) {
//   if (!empty($product->url)) {
//     print_r($product->url);
//     echo "<br>";
//   }
// }


// Alterar as funções chamadas acima, no Info.php utilizando o código abaixo somente lá

// if (!empty($cat->url)) {
// $urlMontada = makeUrl($cat->name);
// $cat->url = "RewriteRule ^categoria/{$urlMontada}\/?$ produtos.php?id={$cat->id}&father_id={$cat->father_id} [NC,L]<br>RewriteRule ^categoria/{$urlMontada}\/([a-z,0-9,_-]+)\/([0-9-]+)\/?$ produtos.php?id={$cat->id}&father_id={$cat->father_id} [NC,L]";
// } else {
//     continue;
// }


// if (!empty($cat->url)) {
// $urlMontada = makeUrl($cat->name);
// $cat->url = "RewriteRule ^produto/{$urlMontada}\/?$ prod.php?id={$prod->id}&cat_id={$prod->category_id} [NC,L]<br>RewriteRule ^produto/{$urlMontada}\/([a-z,0-9,_-]+)\/([0-9-]+)\/?$ prod.php?id={$prod->id}&cat_id={$prod->category_id} [NC,L]";
// } else {
//     continue;
// }