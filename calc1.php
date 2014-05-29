 <?php


// Define to make this all one document
$page = $_GET['page'];

// Defining the "calc" class
class calc {
     var $number1;
     var $number2;

          function add($number1,$number2)
          {
                   $result =$number1 + $number2;
                   $resResp = "The sum of $number1 and $number2 is $result<br><br>";
                   $resResp .= "$number1 + $number2 = $result";
                   return $resResp;
                    
           }

          function subtract($number1,$number2)
          {
                   $result =$number1 - $number2;
                   $resResp = "The difference of $number1 and $number2 is $result<br><br>";
                   $resResp .= "$number1 &#045 $number2 = $result";
                   return $resResp;
                    
           }

          function divide($number1,$number2)
          {
                   $result =$number1 / $number2;
                   $resResp = "$number1 divided by $number2 is $result<br><br>";
                   $resResp .= "$number1 ÷ $number2 = $result";
                   return $resResp;
                   
           }

          function multiply($number1,$number2)
          {
                   $result =$number1 * $number2;
                   $resResp = "The product of $number1 and $number2 is $result<br><br>";
                   $resResp .= "$number1 x $number2 = $result";
                   return $resResp;
                    
           }
}
$calc = new calc();
?>


<?php
$calcResponse = "";
if($page == "calc"){
$number1 = $_POST['value1'];
$number2 = $_POST['value2'];
$oper = $_POST['oper'];
     if(!$number1){
          $calcResponse .= "You must enter number 1!<br />";
          
     }elseif(!$number2){
          
          $calcResponse .= "You must enter number 2!<br />";
          
     }elseif(!$oper){
     	$calcResponse .= "You must select an operation to do with the numbers!<br />";
          
          
     }elseif(!eregi("[0-9]", $number1)){
          $calcResponse .= "Number 1 MUST be numbers!";
          
     }elseif(!eregi("[0-9]", $number2)){
          $calcResponse .= "Number 2 MUST be numbers!";
         
     }
     
     
     if($oper == "add"){
      $calcResponse = $calc->add($number1,$number2);
     }
     if($oper == "subtract"){
      $calcResponse = $calc->subtract($number1,$number2);
     }
     if($oper == "divide"){
          $calcResponse = $calc->divide($number1,$number2);
     }
     if($oper == "multiply"){
         $calcResponse = $calc->multiply($number1,$number2);
     }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>Calculator 1</TITLE>
<style>
/*
colours :-
dark grey = #333333
light grey = #6D6E6D
dark green = #769464
light green = #E4EBA6
pale green = #E8F4DF 
*/
body{background-color: #fffaaa; color: #290000}
.resBx{
background-color: #fff;
border: 1px solid grey;
}
#coreMain {}
#coreMainInner {width:960px; min-height:500px; margin:0 auto;}

#mainContent {float:left; width: 760px;}

#pageWrapper {border: 1px solid black;  width: 980px; margin: 0 auto; }

</style>
</head>

<body>



<!--////////////////////////////////////////////////////////////////////////////-->
<!--Begin Core Main-->           
<div id ="coreMain">
    <!--Begin Core Main Inner-->           
        <div id ="coreMainInner">
                   <h1>Calculator 2</h1>
                    <a href="http://works.hom/k_calc/">Back</a>
                    <!--Begin Main Content-->
                    <div id="mainContent"> 
                    <form name="calc" action="?page=calc" method="POST">
					Number 1: <input type=text name=value1><br>
					Number 2: <input type=text name=value2><br>
					Operation: <input type=radio name=oper value="add">Addition <input type=radio name=oper value="subtract">Subtraction <input type=radio name=oper value="divide">Division <input type=radio name=oper value="multiply">Multiplication</input><br>
					<input type=submit value="Calculate">
					</form>
					<br />
					<div class="resBx"> <?php echo $calcResponse;?></div>
                    <!--End Main Content-->
                    </div>
                    
                    
                    <div style='clear:both;'></div>
      <!--End Core Main Inner--> 
        </div>              
<!--End Core Main-->
</div>
<!--////////////////////////////////////////////////////////////////////////////-->





</body>
</html>
