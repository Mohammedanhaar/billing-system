<!DOCTYPE html>
<html>
<head>
<title> Cafe Billing System </title>
<style type = "text/css">
.style1
{
	border-width:0;
	border: solid gray 5px;
	width 90% ;
	border-radius: 5px;
	margin: 5px auto;
	background: white;
}

.style2
{
	border-width:0;
	border: solid gray 10px;
	width 90% ;
	border-radius: 5px;
	margin: 5px auto;
	background: white;
	color: #ddd333;
}
.btn
{
	width: 202 px;
	height: 30px;
	paddling: 5px ;
	font-size: 20px;
	background: gray;
	color: white;	
}
.cbtn
{
	width: 50px ;
	border-radius: 8px;
	height: 40px;
	font-size: 25;
}
</style>
</head>
<body bgcolor = "5CB2FE">
<center>
<b><font color= "black" style="font-size: 80"> Billing System</font></b>
</center>
<hr size = 5 color="black">
<div>
<table class="style1">
<tr>
<td>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table class="style1"> 
<tr>
<td> Firstname </td>
<td><input type="text" name="firstname" placeholder="Firstname" style="width: 200px"</td></tr>
<tr>
<td> Lastname </td>
<td><input type="text" name="lastname" placeholder="Lastname" style="width: 200px"</td>
</tr>

<tr>
<td> Contact No: </td>
<td><input type="text" name="contact no:" placeholder="Contact No:" style="width: 200px"</td>
</tr>

<tr>
<td style="width: 250px">&nbsp; </td><td align="left" style="width: 400px">
<input type="reset" name="reset" value="Reset" class='btn'></td>
</tr>
</table></td></tr>


<td>
<table class="style1" width="700px">
        <tr><td>&nbsp;</td>
		<td><b><u>Make an order</u></b></td>
		</tr>
        
		<tr><td>Chicken Biryani_(150):</td>
        <td>
		<input type="text" name="Cbiryani" style="width: 200px" onclick ="<?php echo $_post["cbiryani"] * 150;?>">
		</td></tr>

        <tr><td>Mutton Biryani_(180):</td>
        <td>
		<input type="text" name="mbiryani" style="width: 200px" onclick ="<?php echo $_post["mbiryani"] * 180; ?>">
		</td></tr>
		<tr><td>Chicken kabab_(100):</td>
        <td>
		<input type="text" name="ckabab" style="width: 200px" onclick ="<?php echo $_post["ckabab"] * 100; ?>">
		</td></tr>
        <tr><td>Grill Chicken_(200):</td>
        <td>
		<input type="text" name="gchicken" style="width: 200px" onclick ="<?php echo $_post["gchicken"] * 200; ?>">
		</td></tr>
        <tr><td>&nbsp;</td>
        <td style="width: 480px"><b><u>Total Cost</u></b></td></tr>

        <tr>
        <td>Tip:</td>
        <td><input type="text" name="tip" style="width: 200px"
		onclick = "<?php echo (($_post["cbiryani"] * 150)
        + ($_post["mbiryani"] * 180)
		+ ($_post["ckabab"] * 100)
		+ ($_post["gchicken"] * 200)) * 0.1;?>">
		</td></tr>
		
		<tr><td>Subtotal :</td>
		<td> <input type="text" name="subtotal" style="width: 200px"
		onclick="<?php echo (($_post["cbiryani"] * 150)
        + ($_post["mbiryani"] * 180)
		+ ($_post["ckabab"] * 100)
		+ ($_post["gchicken"] * 200));?>">
		</td></tr>

		<tr><td>Total :</td>
		<td> <input type="text" name="total" style="width: 200px"
		onclick="<?php echo (($_post["cbiryani"] * 150)
        + ($_post["mbiryani"] * 180)
		+ ($_post["ckabab"] * 100)
		+ ($_post["gchicken"] * 200))
		
		
		+((($_post["cbiryani"] * 150)
        + ($_post["mbiryani"] * 180)
		+ ($_post["ckabab"] * 100)
		+ ($_post["gchicken"] * 200)) * 0.1);?>">
		
		</td></tr>		
		<tr><td>&nbsp;</td><td align="left" style="width: 400px">
		  <input type="submit" onclick ="submit" name='add' class='btn'></td></tr>
</table>
</td>
<hr size=5 color= "gray">

<td>
<form name ="Calculator" class="style2">
<input name ="display" placeholder ="0" style="width:212px; height:40px; text-align:right; font-size:30;
border-radius:8px; margin:3px"/>
<br>
<input type = "button" value="7" onclick ="document.calculator.display.value +='7'" class='cbtn'/>
<input type = "button" value="8" onclick ="document.calculator.display.value +='8'" class='cbtn'/>
<input type = "button" value="9" onclick ="document.calculator.display.value +='9'" class='cbtn'/>
<input type = "button" value="+" onclick ="btnplus()" class='cbtn'/>
<br>
<input type = "button" value="4" onclick ="document.calculator.display.value +='4'" class='cbtn'/>
<input type = "button" value="5" onclick ="document.calculator.display.value +='5'" class='cbtn'/>
<input type = "button" value="6" onclick ="document.calculator.display.value +='6'" class='cbtn'/>
<input type = "button" value="-" onclick ="btnsub()" class='cbtn'/>
<br>
<input type = "button" value="1" onclick ="document.calculator.display.value +='1'" class='cbtn'/>
<input type = "button" value="2" onclick ="document.calculator.display.value +='2'" class='cbtn'/>
<input type = "button" value="3" onclick ="document.calculator.display.value +='3'" class='cbtn'/>
<input type = "button" value="*" onclick ="btnmult()" class='cbtn'/>
<br>
<input type = "button" value="0" onclick ="document.calculator.display.value +='0'" class='cbtn'/>
<input type = "button" value="%" onclick ="btnmod()" class='cbtn'/>
<input type = "button" value="." onclick ="btndot()" class='cbtn'/>
<input type = "button" value="/" onclick ="btndiv()" class='cbtn'/>
<br>
<input type = "button" value="=" onclick ="document.calculator.display.value = eval(document.calculator.display.value)" style="width :101px; height:40px; font-size:30; border-radius:8px; margin:3px"/>
<input type = "button" value="C" onclick="btnclear()" style="width:101px; height:40px; font-size:30; border-radius:8px "/>
</form></td>
</div>
<hr size=5 color ="gray">
<SCRIPT>

function btnplus()
{   	document.calculator.display.value +="+";
document.calculator.display.style.textAlign="right";}
function btnsub()
{   	document.calculator.display.value +="-";
document.calculator.display.style.textAlign="right";}
function btnmult()
{   	document.calculator.display.value +="*";
document.calculator.display.style.textAlign="right";}
function btnmod()
{   	document.calculator.display.value +="%";
document.calculator.display.style.textAlign="right";}
function btndot()
{   	document.calculator.display.value +=".";
document.calculator.display.style.textAlign="right";}
function btndiv()
{   	document.calculator.display.value +="/";
document.calculator.display.style.textAlign="right";}
function btnclear()
{   	document.calculator.display.value +="c";
document.calculator.display.style.textAlign="right";}

</script>
</form>
</table>
</body>
</html> 