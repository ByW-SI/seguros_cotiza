@extends('layouts.app')
@section('content')
<form action="prueba">
	<input type="submit" name="" value="Enviar">
</form>

<div class="tab-pane fade" id="paso3" role="tabpanel" aria-labelledby="paso3-tab">
	<formulario :cotizacion="cotizacion" :img="img" :cliente="cliente" :alert="alert"></formulario>
</div>

@endsection