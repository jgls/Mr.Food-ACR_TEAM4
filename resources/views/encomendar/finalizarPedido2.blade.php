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
<td><img class="imgST" src="images/2.png"/> </td> <td class="tdDescription">&ensp; <b>Contact</b> &emsp;   </td>
<td><img class="imgST" src="images/3.png"/></td> <td class="tdDescription">&ensp; Payment &emsp; </td>
<td><img class="imgST" src="images/4.png"/> </td> <td class="tdDescription">&ensp; Confirmation &emsp; </td>
</tr>
</table>


<form class="formStyle">

<br/>
<h3><span>Add some contact details</span></h3>
<br/>

<table>
<tr>
<td  class="fields">

<input class="textBox" type="text" name="1nome" placeholder="First Name">

</td>
<td  class="fields">

<input class="textBox" type="text" name="lname" placeholder="Last Name">

</td>
</tr>

<tr class="fields">
<td  class="fields">


<input class="textBox" type="text" name="tnumber" placeholder="Tel Number">

</td>

<td  class="fields">

<input class="textBox" type="text" name="email" placeholder="Email">

</td>

</table>
<br/>
<br/><br/>


<a href="finalizarLocal"><button type="button">Return</button></a>
<a href="finalizarPagamento"><button type="button">Continue</button></a>


</form>


</div>

<div class="columnSepar"> <hr width="1" size= "500"> </div>

@endsection
