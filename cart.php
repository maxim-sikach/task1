<?php 
session_start('login');
if(isset($_POST['button3'])) {
$username = $_POST['check1-1']; /*Имя*/
$email = $_POST['check1-2']; /*Почта*/
   $f1 = $_POST['check1']; /*Тип авто*/
   $f2 = $_POST['check2']; /*Обьем-двигателя*/
   $f3 = $_POST['check3']; /*Тип кузова*/
   $f4 = $_POST['check4']; /*Трансмиссия*/
   $f5 = $_POST['check5']; /*Коробка передач*/
   $f6 = $_POST['check6']; /*Количество скоростей*/
   $f7 = $_POST['check7']; /*Интерьєр (опция)*/
   $f8 = $_POST['check8']; /*Цвет*/
   $f9 = $_POST['check9']; /*Дополнительно*/

Echo 'Имя: '.$username.'<br>'.'Email: '.$email.'<br>'.'Тип авто '.$f1.'<br>'.'Обьем-двигателя '.$f2.'<br>'.'Тип кузова '.$f3.'<br>'.'Трансмиссия '.$f4.'<br>'.'Коробка передач '.$f5.'<br>'.'Количество скоростей '.$f6.'<br>'.'Интерьєр (опция) '.$f7.'<br>'.'Цвет '.$f8.'<br>'.'Дополнительно '.$f9.'<br>';

unset ($_SESSION['login']);
    session_destroy();
}
include 'function.php'; 
$client = 'Orders/'.$username.'.xml';
class Ceh0 extends Mailing{} $ceh0 = new Ceh0(); $ceh0->mailput($client, $email);
class Ceh1 extends Orders{} $ceh1 = new Ceh1(); $ceh1->make($f1, $client);
class Ceh2 extends Orders{} $ceh2 = new Ceh2(); $ceh1->make($f2, $client);
class Ceh3 extends Orders{} $ceh3 = new Ceh3(); $ceh1->make($f3, $client);
class Ceh4 extends Orders{} $ceh4 = new Ceh4(); $ceh1->make($f4, $client);
class Ceh5 extends Orders{} $ceh5 = new Ceh5(); $ceh1->make($f5, $client);
class Ceh6 extends Orders{} $ceh6 = new Ceh6(); $ceh1->make($f6, $client);
class Ceh7 extends Orders{} $ceh7 = new Ceh7(); $ceh1->make($f7, $client);
class Ceh8 extends Orders{} $ceh8 = new Ceh8(); $ceh1->make($f8, $client);
class Ceh9 extends Orders{} $ceh9 = new Ceh9(); $ceh1->make($f9, $client);

?>