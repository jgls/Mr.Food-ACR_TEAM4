@extends('layout.app')

@section('conteudo')

<div>
	<table>
		<tr>
			<td>
	<img class="imgC" src="images/contact.png" width=700 height=500></td>
	<td style="padding-left: 50px;">
	<h3>GET IN TOUCH</h3> <br/>
	<span>Any dubits? want some sugestions? Do not hesitate to contact us. <br/>
	<b>Tel: 291 962 589</b> | <b>Email: infomrfood@gmail.com</b><br/></span>

	<form class="formfmt">
		<br/>
		<input type="text" name="name" placeholder="Name"size="21"> <br/>
		<input type="text" name="email" placeholder="Email" size="21"><br/>
		<textarea id="texto" name="mensage" placeholder="Mensage content" rows="5" required></textarea><br/>
		<input type="submit" value="send">
	</form>
	
	<p class="spshadow">Stay Up-To-Date with New Posts</p><br/>
	<input  type="text" name="subscribe" placeholder="Email Address">
	<input type="button" name="subs" value=Subscribe Now">
	</td>
</tr>
	</table>
</div>
@endsection