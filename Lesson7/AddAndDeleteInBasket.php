<?php

define('LOGIN','igor2021');
define('PASSWORD','qwerty1234');


function getAuthUserId() {
    return execute("select main_db.users.id
        from main_db.users
        where login = {LOGIN}
        and password = {PASSWORD}");

};

function addToBasket(int $goodId, int $quantity)
{

    if (getAuthUserId() === null){
        return;
    }

    $checkGoodsInBasketTable = execute("select goods_id 
        from main_db.basket
        where goods_id = {$goodId} and id = {checkAuth()};");

    if ($checkGoodsInBasketTable) {
        execute("update main_db.basket
        set quantity = {$quantity}, goods_id = {$goodId}");
    } else {
        execute("insert into main_db.basket(
        id, quantity, goods_id)
        values (checkAuth(), {$quantity}, {$goodId});");
    }

}


function deleteFromBasket(int $goodId){

    getAuthUserId();
    $checkGoodsInBasketTable = execute("select goods_id 
        from main_db.basket
        where goods_id = {$goodId} and id = {checkAuth()};");

    if ($checkGoodsInBasketTable) {
        execute("delete from main_db.basket 
        where goods_id = {$goodId} and id = {checkAuth()}");
    } else {
        echo "Товар в корзине отсутствует";
    }

}

function printMessage(){
    if (getAuthUserId() === null){
        echo "Вы не авторизованы";
    }
}

printMessage();
addToBasket(4, 254);

deleteFromBasket(254);