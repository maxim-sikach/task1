<?php
   
class R {
    public static function read(){
        
$num1 = file_get_contents('files/Тип_авто.xml');   
global $arr1;
global $total1;
$arr1 = array();
$arr1 = explode(",", $num1);
$total1 = count($arr1);

$num2 = file_get_contents('files/Обьем_двигателя.xml');   
global $arr2;
global $total2;
$arr2 = array();
$arr2 = explode(",", $num2);
$total2 = count($arr2);

$num3 = file_get_contents('files/Тип_кузова.xml');   
global $arr3;
global $total3;
$arr3 = array();
$arr3 = explode(",", $num3);
$total3 = count($arr3);

$num4 = file_get_contents('files/Трансмиссия.xml');   
global $arr4;
global $total4;
$arr4 = array();
$arr4 = explode(",", $num4);
$total4 = count($arr4);

$num5 = file_get_contents('files/Коробка.xml');   
global $arr5;
global $total5;
$arr5 = array();
$arr5 = explode(",", $num5);
$total5 = count($arr5);

$num6 = file_get_contents('files/Скорости.xml');   
global $arr6;
global $total6;
$arr6 = array();
$arr6 = explode(",", $num6);
$total6 = count($arr6);

$num7 = file_get_contents('files/Интерьєр.xml');   
global $arr7;
global $total7;
$arr7 = array();
$arr7 = explode(",", $num7);
$total7 = count($arr7);

$num8 = file_get_contents('files/Цвет.xml');   
global $arr8;
global $total8;
$arr8 = array();
$arr8 = explode(",", $num8);
$total8 = count($arr8);

$num9 = file_get_contents('files/Доп_опция.xml');   
global $arr9;
global $total9;
$arr9 = array();
$arr9 = explode(",", $num9);
$total9 = count($arr9);

if(isset($_POST['button1'])) {

   $op1 = $_POST['op1']; if($op1 != NULL){file_put_contents('files/Тип_авто.xml', $op1.',', FILE_APPEND | LOCK_EX);}
   $op2 = $_POST['op2']; if($op2 != NULL){file_put_contents('files/Обьем_двигателя.xml', $op2.',', FILE_APPEND | LOCK_EX);}
   $op3 = $_POST['op3']; if($op3 != NULL){file_put_contents('files/Тип_кузова.xml', $op3.',', FILE_APPEND | LOCK_EX);}
   $op4 = $_POST['op4']; if($op4 != NULL){file_put_contents('files/Трансмиссия.xml', $op4.',', FILE_APPEND | LOCK_EX);}
   $op5 = $_POST['op5']; if($op5 != NULL){file_put_contents('files/Коробка.xml', $op5.',', FILE_APPEND | LOCK_EX);}
   $op6 = $_POST['op6']; if($op6 != NULL){file_put_contents('files/Скорости.xml', $op6.',', FILE_APPEND | LOCK_EX);}
   $op7 = $_POST['op7']; if($op7 != NULL){file_put_contents('files/Интерьєр.xml', $op7.',', FILE_APPEND | LOCK_EX);}
   $op8 = $_POST['op8']; if($op8 != NULL){file_put_contents('files/Цвет.xml', $op8.',', FILE_APPEND | LOCK_EX);}
   $op9 = $_POST['op9']; if($op9 != NULL){file_put_contents('files/Доп_опция.xml', $op9.',', FILE_APPEND | LOCK_EX);}

unset ($_SESSION['login']);
    session_destroy();
}
if(isset($_POST['button2'])) 
{
    
    $f = fopen('files/тип-авто.xml', 'w'); fclose($f);
    $f = fopen('files/кузов.xml', 'w'); fclose($f);
    $f = fopen('files/трансмиссия.xml', 'w'); fclose($f);
    $f = fopen('files/коробки.xml', 'w'); fclose($f);
    $f = fopen('files/кол-во-скоростей.xml', 'w'); fclose($f);
    $f = fopen('files/интерьєр.xml', 'w'); fclose($f);
    $f = fopen('files/цвет.xml', 'w'); fclose($f);
    $f = fopen('files/доп-опции.xml', 'w'); fclose($f);
    $f = fopen('files/обьем-двигателя.xml', 'w'); fclose($f);

  unset ($_SESSION['login']);
    session_destroy();  
}
}
}
$r = new R;
$read = 'read';
?>