@section('name')
	@if (Auth::check())
	{{$user->nama}}
	@else
		<p>Silahkan Login</p>
	@endif

@endsection