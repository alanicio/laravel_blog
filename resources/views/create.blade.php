@extends('general')
@section('content')
	<form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
	{{ csrf_field() }}
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="titulo">titulo</label>
	      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo del post" required="">
	    </div>  
	  </div>
	  <div class="form-group">
		    <label for="texto">Texto</label>
			<textarea class="form-control" id="texto" name="texto" required=""></textarea>
	</div>	  
	  <div class="form-group">
	    <label for="archivo">Subir archivo</label>
	    <input type="file" class="form-control-file" id="archivo" name="archivo">
	  </div>
	  <button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection