<?php

require_once 'animal.php';
require_once 'thinkable.php';

class Human extends Animal {
    
    use Think;

    public $name = '';
    public $age = '';
    public $hobby = '';
    
    // インスタンスを初期化するための、特別な関数
    function __construct($name, $age, $hobby) {
        $this->name = $name;
        $this->age  = $age;
        $this->hobby  = $hobby;
    }

}