<?php


SELECT * FROM calisanlar WHERE maas >2000 AND maas < 3000
    => Çalışanlar tablosunda maaşı 2000 ile 3000 arasındaki elemanları listelemek için uzun yoldan kullanılan kod

SELECT * FROM calisanlar WHERE maas BETWEEN 2000 AND 3000
    => burada da aynı işlemi yapacaktır. 2000 ile 3000 arasında olan çalışanları listeler


SELECT * FROM calisanlar WHERE maas NOT BETWEEN 2000 AND 3000
    => NOT işlemi tam tersidir maaşı 2000 ile 3000 arasında olan çalışanlar haricini listeler
