<?php


// interface ile abstract farkları
/*
    interface
        - soyut metotlar ve sabitler içerir
        - sadece public metod tanımlanabilir
        - aynı sınıfta birden fazla interface kullanılabilir
    abstract
        - soyut metotlar, sabitler, normal metot ve özellikleri içerir
        - public, protected, private tanımlanabilir
        - aynı sınıf sadece bir abstract sınıftan türeyebilir
*/

interface CRUD{
    public function create($tableName, $id);
    public function read($tableName, $id);
    public function update($tableName, $data, $id);
    public function delete($tableName, $id);
}

class dataBase implements CRUD{
    public function create($tableName, $id){

    }
    public function read($tableName, $id){

    }
    public function update($tableName, $data, $id){

    }
    public function delete($tableName, $id){

    }
}