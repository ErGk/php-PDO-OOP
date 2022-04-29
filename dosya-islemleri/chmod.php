<?php
    chmod('dosya', 0777);
/*

    1. numara her zaman 0 ile başlar
    2. numara dosya sahibinin izinleri
    3. numara kullanıcı gruplarının izinleri
    4. numara geri kalan herkesin

    1 = İşlem izni
    2 = Yazma İzni
    4 = Okuma İzni

    Yukarıdaki sayılar toplanarak çıkan sayı yazılır Örn: 0755, 0733
*/
