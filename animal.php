<?php

class Animal {

    public $name = '';
    public $age = '';
    
    // インスタンスを初期化するための、特別な関数
    function __construct($name, $age) {
        $this->name = $name;
        $this->age  = $age;
    }

    
    function say() {
        print $this->name . 'です。' . $this->age . '歳です。' . PHP_EOL;
    }

}

// 以下の2行は動作確認のための記述です。確認できたらコメントアウトしておきましょう。
// $animal = new Animal("田中 太郎", 25);
// $animal->say();
