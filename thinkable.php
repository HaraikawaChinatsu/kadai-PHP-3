<!--クラスではなく トレイト として作ってください。-->
<!--think メソッドを定義してください。このメソッドが実行されたら、Human クラスに定義された”趣味”の情報が入っているプロパティ（後述）を参照して「私は□□について考えています。」と画面へ表示するようにしましょう。-->

<?php

trait Think {
    public function think($human) {
        print $human->name() . "は" . $this->name() . "について考えています。" . PHP_EOL;

    }
}