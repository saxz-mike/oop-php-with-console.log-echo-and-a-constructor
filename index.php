<?php
/////////////////////////////////////////////
//creation of classes                      //
// console.log in javascript using echo    //
// using a constructor                     //               
//Author:  Michael W                       //
/////////////////////////////////////////////


//creates a class
class Account {
public $name;
Public $date;
Public $principle;
public $Irate;
public $time;
public $message;


//class constructor
public function __construct($name,$principle,$Irate,$time){
 $this->name=$name;
 $this->principle=$principle;
 $this->Irate=$Irate;
 $this->time=$time;
 $message="all time should be entered in months";
 echo "<script>alert('$message')</script>";
 echo "<script>console.log('$name created')</script>";


}

//calculate interest class
public function calcinterest(){
    $message2="created";
    $Iloan=$this->principle * $this->Irate * $this->time/12;
    echo "<script>console.log('loan interest is $Iloan')</script>";
   return $Iloan;
}



}
//new class instance
$user1 = new Account('mike',2000,0.1,36);

$smg="the accumulated interest in ";
$ans=$user1->calcinterest();
$sub=$user1->principle + $ans;

echo '<hr>';
//echo output of the operations performed on the new class instance.
echo "<script>console.log('amount loaned= $user1->principle')</script>";
echo 'Account Name:' . $user1->name . '<br/>';
echo 'loan Receivable:' . $user1->principle . ' ksh' . '<br>';
echo  $smg.$user1->time/12 .'yrs is' . ' '. $ans . '<br/>';
echo 'Total ammount Payable:' . $sub;

echo '<hr>';
//Another class instance

$user1 = new Account('james',3000,0.1,36);

$smg="the accumulated interest in ";
$ans=$user1->calcinterest();
$sub=$user1->principle + $ans;



//echo output of the operations performed on the new class instance.
echo "<script>console.log('amount loaned= $user1->principle')</script>";
echo 'Account Name:' . $user1->name . '<br/>';
echo 'loan Receivable:' . $user1->principle . ' ksh' . '<br>';
echo  $smg.$user1->time/12 .'yrs is' . ' '. $ans . '<br/>';
echo 'Total ammount Payable:' . $sub;

echo '<hr>';
?>

