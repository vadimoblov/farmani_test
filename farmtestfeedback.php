<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая заявка");
?>
<div>
<? $APPLICATION->IncludeComponent(
    "farmani:formtest",
    ".default",
    Array(
    ),
    false
    );
?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>