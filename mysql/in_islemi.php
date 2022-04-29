<?php 
/*
// ın kelimesini kullandığımız zaman kısaltma yapmış oluruz. Örneğin:

SELECT * FROM calisanlar WHERE id= '5' OR id='7' OR id='15'; kodunu kısatmak için;

SELECT * FROM calisanlar WHERE id IN (5,7,15); 
    -> kullanılır ID'si 5 - 7 - 15 olanları getirir
SELECT * FROM calisanlar WHERE id NOT IN (5,7,15); 
    -> kullanılır ID'si 5 - 7 - 15 olanları getirmez
SELECT * FROM calisanlar WHERE meslek IN (SELECT meslek FROM meslek); 
    -> meslekler tablosunda bulunan meslekleri okur ve calisanlar tablosundan o mesleklere ait olan stunları listeler




