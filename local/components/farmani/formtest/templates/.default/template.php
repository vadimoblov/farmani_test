<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form>
    <div class="form-group">
        <label>Заголовок заявки</label>
        <input type="text" class="form-control" id="requestTitle" placeholder="Просим отпустить">    
    </div>
    <div class="form-group">
        <label>Категория</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="category1" value="Фильтры" checked>
            <label class="form-check-label" for="category1">
            Фильтры
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="category2" value="Шины">
            <label class="form-check-label" for="category2">
            Шины
            </label>
        </div>
    </div>
    <div class="form-group">
        <label>Вид заявки</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="requestType" id="rtype1" value="Запрос цены и сроков поставки" checked>
            <label class="form-check-label">
            Запрос цены и сроков поставки
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="requestType" id="rtype2" value="Пополнение складов">
            <label class="form-check-label">
            Пополнение складов
            </label>
        </div>
    </div>
    <div class="form-group">
        <label>Склад поставки</label>
        <select class="form-control" id="stockHouse">
            <option>Склад 1</option>
            <option>Склад 2</option>
            <option>Склад 3</option>
        </select>
    </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>