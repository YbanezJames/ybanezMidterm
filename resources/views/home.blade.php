<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

<div class="container">
	<div class="h-75 row-3">
		<div class="h-80 col">
	<h1 class="text-center"> Home Page </h2>
		<h5 class="text-center"> HomeController Data </h5>
<hr color="white">
<br>
	<table>
	  <tr>
	    <th>Name</th>
	    <td>{{$details['Name']}} </td>
	  </tr>
	  <tr>
	    <th>Midterm Exam score</th>
	    <td>{{$details['Midterm']}}</td>
	  </tr>
	  
	</table>
<br>
<hr color="white">
<br>
<a href="{{url('/post')}}"> <button class="btn btn-primary"> Ok! </button> </a>
</div>

