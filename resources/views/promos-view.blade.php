@extends('layouts.app')
@section('title', __('Promos'))
@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="container">
			<h1 class="display-6 mb-5 section-title"><span class="section-title-line">Promociones</span></h1>
			<div class="col">
			    @livewire('components.card-promo')		
		    </div>			
		</div>
	</div>
</div>

@endsection