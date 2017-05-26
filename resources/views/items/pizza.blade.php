@extends('layouts.app')

@section('content')
	<div class="row">
		@forelse($pizzas as $pizza)
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						@<span>{{ $pizza->name }}</span>
					</div>

					<div class="panel-body">
					<span><img src="{{ $pizza->imgur }}" style="max-width: 150px; max-height: 150px;">{{ $pizza->description }}</span>
						<br>
					</div>

					<div class="panel-footer clearfix" style="background-color: white">
						<span class="pull-left">Үнэ: {{ $pizza->price }} </span>
						<a href="/additem/{{ $pizza->id }}" class="pull-right">Захиалах</a>
					</div>
				</div>
			</div>
		@empty
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<center>Уучлаарай, одоогоор энэ хуудсанд үзүүлэх мэдээлэл байхгүй байна.</center>
				</div>
			</div>
		</div>
		@endforelse
	</div>

	<div class="col-md-6 col-md-offset-4">
		{{ $pizzas->links() }}
	</div>
@endsection