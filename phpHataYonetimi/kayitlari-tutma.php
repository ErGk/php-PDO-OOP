<?php function ozelHataAyiklayici($no, $msg, $file, $line){ ?>
    <div class="errorReporting">
        <div class="no">
            Hata No'su : <?php echo $no; ?>
        </div>
        <div class="file">
           Dosya :  <?php echo $file; ?>
        </div>
        <div class="line">
            Satır : <?php echo $line; ?>
        </div>
        <div class="msg">
            Hata Mesajı : <?php echo $msg; ?>
        </div>
    </div>
<?php

// VERİTABANI İŞLEMLERİ



}
    set_error_handler("ozelHataAyiklayici");
    echo $cas;
?>

<style>
    .errorReporting{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 3em;
        padding: 1.5em 0;
        font-size:15px;
    }
    .errorReporting > div{
        padding: 15px;
    }
    .msg{
        background:#CDD;
    }
    .no{
        background: #9b0000;
        color: #FFF;
        font-weight: 900;
        letter-spacing: 2px;
    }
    .file{
        background: #97a9a9;
    color: #FFF;
    }
    .line{
        background: #151742;
        color: #FFF;
    }
</style>