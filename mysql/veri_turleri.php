<?php 
/*
Veri Türleri

STRING TÜRLER
-----------------------
CHAR : 0 ile 255 arasında veri tutmaya yarıyor. Örn: TC kimlik no tutmak için Mysql'de CHAR seçilebilir. String
VARCHAR : 65 bin karakter saklar. String
TINYTEXT : 255 karakter String
TEXT :64 KB'lık metinsel ifadeleri tutar. String
MEDIUMTEXT : 16 MB'lık verileri tutar. String
LONGTEXT : 4 GB'lık verileri tutar. String

INT TÜRLER
-----------------------
TINYINT: -128 ile 127 değerleri arasında sayı almaktadır
SMALLINT -32000 ile 32767 arasında değer alır
MEDNIUMINT :  -8.388.608 İLE 8.388.607 arasında değer alır
INT: -2.147.483.648 ile 2.147.483.647 arasında değer alır
BIGINT -9.223.372.036.854.775.808 ile -9.223.372.036.854.775.807 arasında değer alır
FLOAT : Virgüllü rakamlar için kullanılmaktadır. En Fazla 23 değerinde olabilir
DOUBLE : Virgüllü rakamlar için kullanılmaktadır. En Fazla 53 değerinde olabilir
DECIMAL : Virgüllü rakamlar için kullanılmaktadır. En Fazla 65 değerinde olabilir


TARİH ZAMAN TÜRLERİ
-----------------------
DATE() : SADECE TARİH GİRİŞİ İÇİN KULLANILIR YYYY-AA-GG olarak giriş yapılır
DATETIME(): TARİH VE SAAT DEPOLAMAK İÇİN KULLANILMAKTADIR YYYY-AA-GG SS:DD:SS ŞEKLİNDE DEPOLAR
TIMESTAMP(): TARİH VE SAATİ OTOMATİK OLARAK KENDİ BELİRLER YAZILIM ARACILIĞI İLE BİR GÖNDERİM YAPILAMAZ. DEPOLAMA BİÇİMİ YYYY-AA-GG SS:DD:SS
TIME(): SADECE SAAT OLARAK SAKLAMA YAPABİLİYOR SS:DD:SS ŞEKLİNDE DEPOLAR
YEAR(): SADECE YIL SAKLAR



