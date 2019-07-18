@extends('user.layouts.layout')

@section('title')
K'20 Workshops
@endsection

@section('head')

@endsection

@section('body')
<div class="container pt-5 pb-5">
	<h1 class="text-center" style="font-family: 'Courgette', cursive;"><span class="text-danger">K</span>'20 Workshops</h1>
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	<div id="accordion">
		@foreach ($workshops as $workshop)
		  <div class="card">
		    <div class="card-header" id="heading{{ $workshop->name }}">
			     <span class="mb-0">
					 <img class="rounded"src="{{ App\Helpers\Helpers::storage($workshop->image) }}" style="max-width: 80px;" alt="{{ $workshop->name }}">  
					<div class="text-center" data-toggle="collapse" data-target="#collapse{{ $workshop->name }}" aria-expanded="true" aria-controls="collapse{{ $workshop->name }}">
						<span class="clearfix" style="color: {{ $workshop->color or '#f00' }}; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #fff; font-size: 25px; font-weight: bolder;">  {{ $workshop->name }}</span>
			          	<span class="badge badge-primary float-right mt-3">{{ ucfirst($workshop->type) }}</span>
		        	</div>
			    </span>
		    </div>

		    <div id="collapse{{ $workshop->name }}" class="collapse 
				@if (!$loop->index)
					show
				@endif
				" aria-labelledby="heading{{ $workshop->name }}" data-parent="#accordion">
		      <div class="card-body">
				
				<div class="jumbotron">
					<h1 class="display-4">{{ $workshop->name }}</h1>
					<p class="lead">{!! $workshop->description !!}</p>
					<hr class="my-4">
					<a class="btn btn-primary btn-lg" href="https://www.kvectorfoundation.com/events/members/20" role="button">Register from here</a>
				  </div>
				
			  </div>
		    </div>
		  </div>
		@endforeach
	</div>
</div>
@endsection

@section('footer')

@endsection