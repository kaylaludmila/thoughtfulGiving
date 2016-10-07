@extends('layout')

@section('content')
<br>
<div class="col l9 s12">
<!-- search results content  -->
<div class="col l1 s12"></div>

<div class="col l10 s12 white valign-wrapper">
	<table class="striped">
	  <thead>
		    <tr>
		      <th data-field="id" style="font-size:30px; color:#479ac4;">These charities are accepting "X"</th>
		    </tr>
		</thead>
		<tbody>
		    <tr>
		        <td><a class="black-text" href="/music">Music Matters</a><a class="btn waves-effect tgBlue white-text darken-text-2 right-align right" href="/music">Donate Now</a></td> 
		    </tr>
		    <tr>
		        <td><a class="black-text" href="/dog">Finding Fido</a><a class="btn waves-effect tgBlue white-text darken-text-2 right-align right" href="/dog">Donate Now</a></td>
		    </tr>
		    <tr>
		        <td><a class="black-text" href="/music">Hopeful Beginnings</a><a class="btn waves-effect tgBlue white-text darken-text-2 right-align right" href="/orphan">Donate Now</a></td>
		    </tr>
		</tbody>
	</table>
</div>

<div class="col l1 s12"></div>

<!-- <ul>
	@foreach ($items as $item)
		<li>{{ $item -> item }}</li>
	@endforeach
</ul>
 -->


@endsection
