<?php
/*

Birden fazla tablo ile sorgu yapmak için join kullanılır

SELECT * FROM konular INNER JOIN uyeler ON table1_name.stun_name = table2_name.stun_name
    => table_name tablosundaki stun_name stunu ile table2_name tablosundaki stun_name stununda eşleşen içerikleri listeler

SELECT * FROM konular LEFT JOIN uyeler ON table1_name.stun_name = table2_name.stun_name
    => stun_name 'in solunda kalan tüm içerikleri çekmemizi sağlar

SELECT * FROM konular RIGHT JOIN uyeler ON table1_name.stun_name = table2_name.stun_name
    => stun_name 'in sağında kalan tüm içerikleri çekmemizi sağlar

SELECT * FROM konular INNER JOIN uyeler ON table1_name.stun_name = table2_name.stun_name INNER JOIN kategoriler_table ON kategoriler.id = konular.id
    => 2'li karşılaştırma örneği

