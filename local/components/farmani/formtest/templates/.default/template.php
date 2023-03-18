<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form>
    <div class="form-group">
        <label>Заголовок заявки</label>
        <input type="text" class="form-control" id="requestTitle" placeholder="Просим отпустить">    
    </div>
    
    <?if(!empty($arResult['CATEGORY'])):?>
    <div class="form-group">
        <label>Категория</label>
        <?$cid = 1?> 
        <?foreach($arResult['CATEGORY'] as $category):?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category<?=$cid?>" value="<?=$category?>" <?if($cid==1):?>checked<?endif?> >
                <label class="form-check-label">
                    <?=$category?>
                </label>
            </div>
            <?$cid++?>
        <?endforeach?>
    </div>
    <?endif?>
    
    <?if(!empty($arResult['REQUEST_TYPE'])):?>
    <div class="form-group">
        <label>Вид заявки</label>
        <?$rid = 1?> 
        <?foreach($arResult['REQUEST_TYPE'] as $rtype):?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="requestType" id="rtype<?=$rid?>" value="<?=$rtype?>" <?if($rid==1):?>checked<?endif?> >
                <label class="form-check-label">
                <?=$rtype?>
                </label>
            </div>
        <?$rid++?>
        <?endforeach?>
    </div>
    <?endif?>
    
    <?if(!empty($arResult['STOCK_HOUSE'])):?>
    <div class="form-group">
        <label>Склад поставки</label>
        <select class="form-control" id="stockHouse">
            <?$stid = 1?> 
            <?foreach($arResult['STOCK_HOUSE'] as $sths):?>
            <option><?=$sths?></option>
            <?$stid++?>
            <?endforeach?>
        </select>
    </div>
    <?endif?>
    
    <div class="form-row align-items-center" id='reqRow'>
        <div class="col-md-2">
            <label>Бренд</label>
            <input type="text" class="form-control" placeholder="Бренд">
        </div>
        <div class="col-auto">
            <label>Наименование</label>
            <input type="text" class="form-control" placeholder="Наименование">
        </div>
        <div class="col-md-1">
            <label>Количество</label>
            <input type="text" class="form-control" placeholder="Количество">
        </div>
        <div class="col-md-1">
            <label>Фасовка</label>
            <input type="text" class="form-control" placeholder="Фасовка">
        </div>
        <div class="col-auto">
            <label>Клиент</label>
            <input type="text" class="form-control" placeholder="Клиент">
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary">+</button>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary">-</button>
        </div>
    </div>
    <div class="form-group">
        <input type="file" style="text-align: center;" class="form-control-file" id="inFile">
    </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>