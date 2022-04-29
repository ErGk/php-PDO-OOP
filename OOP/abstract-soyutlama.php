<?php

abstract class Plugins{
    abstract public function setTitle($title);
    abstract public function setContent($content);

    public function show(){
        echo $this -> title;
    }

}

class lastComment extends Plugins{
    public function setTitle($title){
        $this -> title = $title;
    }

    public function setContent($content){
        $this -> content = $content;
    }
}

class socialMedia extends Plugins{
    public function setTitle($title){
        $this -> title = $title;
    }

    public function setContent($content){
        $this -> content = $content;
    }
}


$lastComment = new lastComment;
$socialMedia = new socialMedia;

$lastComment -> setTitle('Set setTitle');
$lastComment -> setContent('Set setContent');

$socialMedia -> setTitle('Social Media Set Title');
$socialMedia -> setContent('Social Media Set Content');


$lastComment -> show();
$socialMedia -> show();
