<?php

class ShowOneOrAllOrders
{
    function checkAuth()
    {
        return execute("select id from main_db.users 
            where main_db.users.token
            = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c'
            and  now() <= users.token_expire_date");
    }

    function getAllOrders()
    {
        if (checkAuth()) {
            execute("select id, order_date, payment_type
            from main_db.orders 
            where user_id = chechAuth()");
        }
    }

    function getOneOrder()
    {
        if (checkAuth()) {
            execute("select goods_id, quantity
            from main_db.order_items as oi
                     join main_db.orders as o
            where oi.order_id and o.id 
            and o.user_id = checkAuth()");
        }
    }
}