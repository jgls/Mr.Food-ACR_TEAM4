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



<div>

<table>
<tr>

<td><img class="imgST" src="images/1.png"/> </td> <td class="tdDescription">&ensp; <b>Place</b> &emsp;  </td> 
<td><img class="imgST" src="images/2.png"/> </td> <td class="tdDescription">&ensp; Contact &emsp;   </td>
<td><img class="imgST" src="images/3.png"/></td> <td class="tdDescription">&ensp; Payment &emsp; </td>
<td><img class="imgST" src="images/4.png"/> </td> <td class="tdDescription">&ensp; Confirmation &emsp; </td>
</tr>
</table>

<img class="imgST" src="images/myposition.png">
<br/>
<br/>
<br/>
<br/>
<br/>
<form class="formStyle">
<a href="/"> <button type="button"> Return </button></a>
<a href="finalizarContacto"><button type="button">Continue</button></a>
</form>


</div>



@endsection


