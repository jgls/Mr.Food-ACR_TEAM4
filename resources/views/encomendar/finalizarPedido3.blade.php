@extends('layout.app')

@section('conteudo')
<div class="columnR">

<b>My Request</b> (nº of items) <br/>
<hr>
product1 &emsp; 25$ <br/>
product2 &emsp; 25$ <br>    


<hr class="totalHR">
Total &emsp; 50$


</div>

<div class="columnSepar"> <hr width="1" size= "500"> </div>

<div class="columnRR">

<table>
<tr>

<td><img class="imgST" src="images/done.png"/> </td> <td class="tdDescription">&ensp; Place &emsp;  </td> 
<td><img class="imgST" src="images/done.png"/> </td> <td class="tdDescription">&ensp; Contact &emsp;   </td>
<td><img class="imgST" src="images/3.png"/></td> <td class="tdDescription">&ensp; <b>Payment</b> &emsp; </td>
<td><img class="imgST" src="images/4.png"/> </td> <td class="tdDescription">&ensp; Confirmation &emsp; </td>
</tr>
</table>

<br/>
<br/>
<form class="formStyle">


<h3><span>How do you want to pay ?</span></h3>
<br/>


<table>
<tr>
<td class="fields">
<img src="images/paypal.png">
</td>
<td class="fields">
<img src="images/mastercard.png">
</td>
<td class="fields">
<img src="images/americanExpress.png">
</td>
<td class="fields">
<img src="images/visa.png">
</td>
</tr>

<tr>
<td class="radiobtnOpt">
<input type="radio" name="paymentMethod" value="paypal" checked> 
</td>
<td class="radiobtnOpt">
<input type="radio" name="paymentMethod" value="mastercard"> 
</td>
<td class="radiobtnOpt">
<input type="radio" name="paymentMethod" value="americanExpress"> 
</td>
<td class="radiobtnOpt">
<input type="radio" name="paymentMethod" value="visa"> 
</td>


</tr>

</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<a href="finalizarContacto"><button type="button">Return</button></a>
<a href="finalizarConfirmacao"><button type="button">Continue</button></a>


</form>


</div>

<div class="columnSepar"> <hr width="1" size= "500"> </div>
@endsection