@extends('layout')
@section('main')
	<div class="p-2">
		Listado de Agencias 
		<div class="flex gap-2">
			@foreach($agencias as $agencia)
			<a href="{{route('agencias.edit', $agencias)}}" class="bg-white">	
				@include('components.card', ['agencia' => $agencia])
			</a>
			@endforeach
		</div>
	</div>
@endsection
