<?php
/*
    Sabit değişkenler const ile tanımlanır ve aynı class içerisinde ise self ile çalışır farklı bir class üzerinden miras alıyorsa, parent ile çağırılarak gösterilir.
*/

class File{
    const DIRECTORY = __DIR__; // __DIR__ Dosya yolunu verir.

    public function getDirectory(){
        return self::DIRECTORY;
    }

}

class Folder extends File{

    public function folder(){
        return parent::DIRECTORY;
    }

}

echo "Bu Self ile çekildi. " . File::getDirectory() . '<br>';

$folder = new Folder;

echo "Bu Parent ile çekildi. " . $folder -> folder();