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
<td><img class="imgST" src="images/done.png"/></td> <td class="tdDescription">&ensp; Payment &emsp; </td>
<td><img class="imgST" src="images/4.png"/> </td> <td class="tdDescription">&ensp; <b>Confirmation</b> &emsp; </td>
</tr>
</table>

<br/>
<br/>
<form class="formStyle">


<img src="images/imagemExemploFinalPedido.png">
<br/>


<a href="finalizarPagamento"><button type="button">Return</button></a>
<a href="/"><button type="button">Continue</button></a>


</form>


</div>

<div class="columnSepar"> <hr width="1" size= "500"> </div>

@endsection