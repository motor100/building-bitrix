<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта проектов");
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="/">Главная</a>
    </div>
    <div class="separator">|</div>
    <div class="active">Карта проектов</div>
  </div>
</div>

<div class="projects-map-page">
  <div class="container">
    <div class="map-wrapper">
      <div class="map">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/projects-map.jpg" alt="">
      </div>
    </div>
    
  </div>
</div>

<script>
  const topMenuItemActive = 0;
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>