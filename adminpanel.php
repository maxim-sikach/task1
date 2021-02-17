<?php
include 'header.php';
include 'take-informations.php'; 
$r->$read();
include 'function.php'; 
echo'<div class="container"><div class="row"><div class="col-8">';
class Adminform extends Template
{
      public function make()
        {
            echo '<div class="container">
                  <form method="POST" action=""><br />';
            for ($i=0; $i<$this->count; $i++) 
            {
            echo '<h4><input class="form-control input" name="'.$this->name[$i].'" type="text"  placeholder="'.$this->title[$i].'"/><!-- Тип авто (добавить)--></h4><br> ';
            }
           echo '<input type="submit" name="button1" class="btn btn-success" value="Добавить"/>
	             <input type="submit" name="button2" class="btn btn-danger" value="Удалить все опции!!!"/><br /><br />
                 </form>
                 </div>';
           }
}
$adminform = new Adminform();
$adminform->make();
echo'</div>';
echo '<div class="col-4">
<form method="POST" action=""><br />
<h4><input class="form-control input" name="client" type="text"  placeholder="Введите имя клиента"/><!-- Тип авто (добавить)--></h4>
<input type="submit" name="put" class="btn btn-success" value="вызвать"/>';
class form extends Template{
public function make(){
if(isset($_POST['put'])) {
$clientname = $_POST['client']; 
$numm = file_get_contents('Orders/'.$clientname.'.xml');   
global $arrr;
global $totall;
$arrr = array();
$arrr = explode(",", $numm);
$total1 = count($arrr);
            for ($i=0; $i<$this->count; $i++) {echo '<h4>'.$this->title[$i].' - '.$arrr[$i+1].'</h4><br>';}   echo'</form>'; ?>
<br><h2><a class="btn btn-success"  href="/adminpanel.php?on">Подтвердить</a></h2>
<?php
if (isset ($_GET["on"])){
mail($arrr[0], "Ваш заказ Готов!!!", "Тип Авто - $arrr[1]\nОбьем_двигателя - $arrr[2]\nТип_кузова - $arrr[3]\nТрансмиссия - $arrr[4]\nКоробка - $arrr[5]\nСкорости - $arrr[6]\nИтерьер - $arrr[7]\nЦвет-$arrr[8]\nДопопции - $arrr[9]");}

}
    echo'</div></div>'; 
}}
$adminform = new form();
$adminform->make();


?>
