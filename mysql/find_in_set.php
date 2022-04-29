<?php

/*

$degisken = 2;
$degisken2 = 29;
SELECT * FROM table_name WHERE FIND_IN_SET ($degisken, stun_name)
     => belirtilen stunun içerisinde sadece belirtilen değişkeni arar 2 ise sadece 2 geçenleri arar 22 geçenleri bulmaz. Stunda anahtar kelimelerin virgül ile ayrılması gerekmektedir.

SELECT * FROM table_name WHERE FIND_IN_SET ($degisken, stun_name) AND FIND_IN_SET ($degisken2, stun_name);
    => hem degisken hem de degisken2 bu dizide geçmeli
