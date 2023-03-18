<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма обратной связи Фармани");
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