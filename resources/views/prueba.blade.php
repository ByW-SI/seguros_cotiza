@extends('layouts.app')
@section('content')
<form action="prueba">
	<input type="submit" name="" value="Enviar">
</form>

<div class="tab-pane fade" id="paso2" role="tabpanel" aria-labelledby="paso2-tab">
	<polizas v-bind:cliente="cliente" :img="img" :alert="alert" :getcotizacion="getcotizacion" :cotizacion="cotizacion" @emitirgs="cotizacion=$event" @emitirqua="cotizacion=$event" @emitirana="cotizacion=$event" @emitirgnp="cotizacion=$event">
</div>

@endsection