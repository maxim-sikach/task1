<?php
abstract class Template
{    /*array("op1", "op2","op3","op4","op5","op6","op7","op8","op9"),*/
    /*array("Тип_авто", "Обьем_двигателя", "Тип_кузова", "Трансмиссия", "Коробка", "Скорости", "Интерьєр", "Цвет", "Доп_опция"),*/
   public $name= array("op1", "op2","op3","op4","op5","op6","op7","op8","op9");
   public $title= array("Тип_авто", "Обьем_двигателя", "Тип_кузова", "Трансмиссия", "Коробка", "Скорости", "Интерьєр", "Цвет", "Доп_опция");
   public $count = 9;
   public function make(){}
}
abstract class Orders
{
public function make($user, $client){ 
file_put_contents($client, $user.',', FILE_APPEND | LOCK_EX);
}}
abstract class Mailing{
public function mailput($client, $email){ 
file_put_contents($client, $email.',', FILE_APPEND | LOCK_EX);
}
}


?>