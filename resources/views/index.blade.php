@extends('general')
@section('content')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">titulo</th>
	      <th scope="col">texto</th>
	      <th scope="col">archivo</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($posts as $post)
		    <tr>
		      <th scope="row">{{$post->id}}</th>
		      <td>{{$post->titulo}}</td>
		      <td>{{$post->texto}}</td>
		      <td>
		      	@isset($post->archivo)
		      		<a href="{{url('/storage/archivos/'.$post->archivo)}}" target="_blank">Ver archivo</a>
		      	@endisset

		      </td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection