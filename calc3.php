<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calulator 3</title>
<style>
/*
colours :-
dark grey = #333333
light grey = #6D6E6D
dark green = #769464
light green = #E4EBA6
pale green = #E8F4DF 
*/

body{background-color: #fffccc; color: #580000}
#coreMain {}
#coreMainInner {width:960px; min-height:500px; margin:0 auto;}

#mainContent {float:left; width: 760px;}


</style>
<script type="text/javascript">
function pushButton(buttonValue) {
     if (buttonValue == 'C') {
          document.getElementById('screen').value = '';
     }
     else {
          document.getElementById('screen').value += buttonValue;
     }
}
function calculate(equation) {
     var answer = eval(equation);
     document.getElementById('screen').value = answer;
}
function Select(){
document.calc.calc.focus();
}
</script>
</head>

<body>



<!--////////////////////////////////////////////////////////////////////////////-->
<!--Begin Core Main-->           
<div id ="coreMain">
    <!--Begin Core Main Inner-->           
        <div id ="coreMainInner">
                     
                    
                    <!--Begin Main Content-->
                    <div id="mainContent">  
                        <h1>Calculator 1</h1>
							<a href="http://works.hom/k_calc/">Back</a>
                        <form name="calc">
						    <table class="calc" cellpadding="0">
						    <tr>
						    <td colspan="4"><input class="calc" id="screen" name="calc" type="text" accesskey="s"></td>
						    </tr>
						    <tr>
						    <td><input class="calc" type="button" value=1 onclick="pushButton(this.value);" accesskey="1"></td>
						    <td><input class="calc" type="button" value=2 onclick="pushButton(this.value);" accesskey="2"></td>
						
						    <td><input class="calc" type="button" value=3 onclick="pushButton(this.value);" accesskey="3"></td>
						    <td><input class="calc" type="button" value='/' onclick="pushButton(this.value);" accesskey="d"></td>
						    </tr>
						    <tr>
						    <td><input class="calc" type="button" value=4 onclick="pushButton(this.value);" accesskey="4"></td>
						    <td><input class="calc" type="button" value=5 onclick="pushButton(this.value);" accesskey="5"></td>
						    <td><input class="calc" type="button" value=6 onclick="pushButton(this.value);" accesskey="6"></td>
						    <td><input class="calc" type="button" value='*' onclick="pushButton(this.value);" accesskey="*"></td>
						    </tr>
						
						    <tr>
						    <td><input class="calc" type="button" value=7 onclick="pushButton(this.value);" accesskey="7"></td>
						    <td><input class="calc" type="button" value=8 onclick="pushButton(this.value);" accesskey="8"></td>
						    <td><input class="calc" type="button" value=9 onclick="pushButton(this.value);" accesskey="9"></td>
						    <td><input class="calc" type="button" value='-' onclick="pushButton(this.value);" accesskey="-"></td>
						    
						    </tr>
						    <tr>
						    <td><input class="calc" type="button" value=0 onclick="pushButton(this.value);" accesskey="0"></td>
						    <td><input class="calc" type="button" value='.' onclick="pushButton(this.value);" accesskey=","></td>
						
						    <td><input class="calc" type="button" value="PI" onclick="pushButton(3.141592653589793);" accesskey="p" id="info-pi-o"></td>
						    <td><input class="calc" type="button" value='+' onclick="pushButton(this.value);" accesskey="+"></td>
						    </tr>
						    <tr>
						    <td colspan="2"><input class="calc" type="button" value='=' onclick="calculate(document.getElementById('screen').value);" accesskey="l" id="info-lig-o"></td>
						    <td colspan="2"><input class="calc" type="button" value='C' onclick="pushButton(this.value);" accesskey="c" id="info-clear-o"></td>
						    </tr>
						    </table>
						    </form>
                    <!--End Main Content-->
                    </div>
                    
                    
      <!--End Core Main Inner--> 
        </div>              
<!--End Core Main-->
</div>
<!--////////////////////////////////////////////////////////////////////////////-->





</body>
</html>

