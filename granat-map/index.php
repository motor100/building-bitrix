<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта");
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="/">Главная</a>
    </div>
    <div class="separator">|</div>
    <div class="active">Карта</div>
  </div>
</div>

<div class="projects-map-page">
  <div class="container">
    
    <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	"projects_map", 
	array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:54.43695103629556;s:10:\"yandex_lon\";d:61.275522283034974;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:61.277491615329;s:3:\"LAT\";d:54.437792204025;s:4:\"TEXT\";s:12:\"Гранат\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "500px",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SMALLZOOM",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "yam_1",
		"COMPONENT_TEMPLATE" => ".default",
		"API_KEY" => "43769839-ea8a-4276-aede-298fecb6e04e"
	),
	false
);?>
    
  </div>
</div>

<script>
  const topMenuItemActive = 0;
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>