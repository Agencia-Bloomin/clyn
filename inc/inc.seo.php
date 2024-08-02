<?php
header("Content-Type: text/html; charset=utf-8", true);

# ----------------------------------------
# Catch actual page
# ----------------------------------------
$activePage = basename($_SERVER['REQUEST_URI']);
$pageId = 'home';

# ----------------------------------------
# Cases
# ----------------------------------------
switch ($activePage) {
   case "quem-somos":
      $title       = "Quem Somos";
      $description = "";
      break;

   case "produtos":
      $title       = "Produtos";
      $description = "";
      break;


   case "produto-interna":
      $title       = "Produto interna";
      $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nostrum distinctio magnam nesciunt et fuga ad id necessitatibus ipsum magni, ea obcaecati quibusdam saepe odio dignissimos corporis harum sint eum.";
      $pageId = "single-product";
      break;

   case "produto-interna2":
      $title       = "Produto interna 2";
      $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nostrum distinctio magnam nesciunt et fuga ad id necessitatibus ipsum magni, ea obcaecati quibusdam saepe odio dignissimos corporis harum sint eum.";
      $pageId = "single-product";
      break;

   case "produto-interna3":
      $title       = "Produto interna 3";
      $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nostrum distinctio magnam nesciunt et fuga ad id necessitatibus ipsum magni, ea obcaecati quibusdam saepe odio dignissimos corporis harum sint eum.";
      break;



   case "produto-interna4":
      $title       = "Produto interna 4";
      $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nostrum distinctio magnam nesciunt et fuga ad id necessitatibus ipsum magni, ea obcaecati quibusdam saepe odio dignissimos corporis harum sint eum.";
      $pageId = "single-product";
      break;



   case "contato":
      $title       = "Contato";
      $description = "Entre em contato com a , atuamos com dedicação e qualidade no segmento na área de aviamentos. Clique aqui para saber mais.";
      $pageId = "contact";
      break;

   case "politica-de-privacidade":
      $title       = "Política de Privacidade";
      $description = "Conheça a política de privacidade da! Nós temos compromisso de manter sua privacidade durante o processo de navegação. Clique aqui e confira.";
      break;

   case "mapa-do-site":
      $title       = "Mapa do Site";
      $description = "Confira o mapa do site da e tenha acesso as nossas páginas e produtos do segmento na área de aviamentos. Clique aqui e confira.";
      break;

   case "obrigado":
      $title       = "Agradecimento";
      $description = "Obrigado por ter preenchido nosso formulário, será um prazer esclarecer as suas dúvidas. Entraremos em contato na medida do possível.";
      break;
}
$keywords = "";

$proto = (isset($_SERVER['HTTPS']) === true) ? 'https' : 'http';
$canonical = $proto . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$titleHome = 'Tapetes Personalizados e Soluções em Higiene';
$descriptionHome = 'Clyn oferece tapetes personalizados de alta qualidade, soluções em higiene e segurança para empresas desde 1990. Entre em contato e descubra nossas opções.';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <!-- Sempre checar se está OK daqui para baixo -->
   <?php include_once 'inc/inc.config.php'; ?>
   <base href="<?= CONF_TAG_BASE ?>">

   <!-- Title -->
   <title>
      <?= !empty($title) ? $title : $titleHome  ?><?= $isHome = !isset($isHome) ? ' | Clyn' : ''; ?>
   </title>
   <!-- Charset -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Meta Tags -->
   <meta name="description" content="<?= !empty($description) ? $description : $descriptionHome ?>">
   <meta name="keywords" content="<?= $keywords ?>">
   <!-- Canonical -->
   <link rel="canonical" href="<?= $canonical ?>">

   <!-- OpenGraph -->
   <meta property="og:region" content="Brasil">
   <meta property="og:title" content="<?= !empty($title) ? $title : $titleHome ?>">
   <meta property="og:type" content="article">
   <meta property="og:description" content="<?= !empty($description) ? $description : $descriptionHome ?>">
   <meta property="og:site_name" content="<?= !empty($title) ? $title : $titleHome ?>">
   <meta property="og:keywords" content="<?= $keywords ?>">
   <meta property="og:canonical" content="<?= $canonical ?>">

   <meta name="author" content="Ubika Brasil">
   <meta name="fone" content="11 3673-7056 | 11 3864-6282">
   <meta name="city" content="São Paulo">

   <!-- Daqui para baixo é padrão, não mexer -->

   <meta name="country" content="Brasil">
   <meta name="geo.region" content="-BR">
   <meta name="copyright" content="Copyright ">
   <meta name="geo.position" content="-23.539351;-46.681925">
   <meta name="geo.placename" content="São Paulo-SP">
   <meta name="geo.region" content="SP-BR">
   <meta name="ICBM" content="-23.539351;-46.681925">
   <meta name="robots" content="index,follow">
   <meta name="rating" content="General">
   <meta name="revisit-after" content="2 days">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <script src="https://kit.fontawesome.com/75eaba243c.js" crossorigin="anonymous"></script>



   <!-- Favicon -->
   <link rel="icon" href="img/logo/icon.ico" type="image/x-icon">

   <!-- CSS -->
   <?php include 'inc/inc.css.php'; ?>
   <?php include 'inc/schema.php'; ?>