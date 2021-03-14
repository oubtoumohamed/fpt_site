@extends("frontend.main")

@section('navbar')@endsection

@section('content')
<div class="row">
	<div class="container">
		<div class="col-ml-12">
			<br/>
			<center>
				<img src="{{ asset('404.jpg') }}">
				<h1>المعذرة  الصفحة غير موجودة.</h1>
				<a href="{{ route('front_home') }}" class="color2 btn-border button btn-xs">الرئيسية</a>
			</center>
			<br/>
			<br/>
		</div>
	</div>
</div>
@endsection

@section('footer')@endsection