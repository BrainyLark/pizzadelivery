@extends('layouts.app')

@section('content')
	<div class="row">
		@forelse($drinks as $drink)
			<div class="col-md-3 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>{{ $drink->name }}</b>
					</div>

					<div class="panel-body">
						<center><img src="{{ $drink->imgur }}" style="max-width: 200px; max-height: 130px;"></center>
						<br>
					</div>

					<div class="panel-footer clearfix" style="background-color: white">
						<span class="pull-left">Үнэ: {{ $drink->price }} </span>
						<a href="/additem/{{ $drink->id }}" class="pull-right">Захиалах</a>
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

@endsection