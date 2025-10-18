<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Документы");
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="/">Главная</a>
    </div>
    <div class="separator">|</div>
    <div class="active">Документы</div>
  </div>
</div>

<div class="documents-page">

  <div class="container">
    <div class="primary-title page-title">Документы</div>
    <div class="grid-container">
      <div class="documents-item">
        <div class="documents-item__title">Политика конфиденциальности</div>
        <a href="/privacy-policy" class="full-link"></a>
      </div>
      <div class="documents-item">
        <div class="documents-item__title">Согласие на обработку персональных данных (включая cookie)</div>
        <a href="/agreement" class="full-link"></a>
      </div>
      <div class="documents-item">
        <div class="documents-item__title">Заявление об ограничении ответственности</div>
        <a href="/limitation-of-liability" class="full-link"></a>
      </div>
      <div class="documents-item">
        <div class="documents-item__title">Документы проектов строительства</div>
        <a href="#" class="full-link"></a>
      </div>
      <div class="documents-item">
        <div class="documents-item__title">Согласие на получение рекламно-информационных материалов</div>
        <a href="#" class="full-link"></a>
      </div>
      <div class="documents-item">
        <div class="documents-item__title">Карта офисов продаж</div>
        <a href="#" class="full-link"></a>
      </div>
      <div class="documents-item">
        <div class="documents-item__title">Реквизиты</div>
        <a href="/requisites" class="full-link"></a>
      </div>
      <div class="documents-item">
        <div class="documents-item__title">Контакты</div>
        <a href="#" class="full-link"></a>
      </div>
    </div>
  </div>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>