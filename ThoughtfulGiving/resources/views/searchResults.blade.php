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
		      <th data-field="id" style="font-size:30px; color:#479ac4;">These non-profits are accepting donations</th>
		    </tr>
		</thead>
		<tbody>
			@foreach ($company as $company)
		    <tr>
		        <td><a class="black-text tableSearch" href="/companyView/{{ $company->company }}" > {{ $company -> company }} </a><a class="btn waves-effect tgBlue white-text darken-text-2 right-align right" href="/companyView/{{ $company->company }}">View Page</a></td> 
		    </tr>
		  @endforeach

		</tbody>
	</table>
</div>

<div class="col l1 s12"></div>


@endsection
