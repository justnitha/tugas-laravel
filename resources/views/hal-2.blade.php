@extends('master.masterLayout')

@section('title','Uzumaki Naruto')

@section('profil')
<img src="../../static/img/avatars/naruto.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
<h5 class="card-title mb-0">Uzumaki Naruto</h5>
<div class="text-muted mb-2">Seventh Hokage</div>
@endsection

@section('username', 'Uzumakinaruto666')

@section('foto-user')
<img src="./../static/img/avatars/naruto.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
@endsection

@section('foto')
<div class="row g-0 mt-1">
	<div class="col-6 col-md-4 col-lg-4 col-xl-3">
		<img src="../../static/img/photos/gundam.webp" class="img-fluid pe-2" alt="Unsplash">
	</div>
	<div class="col-6 col-md-4 col-lg-4 col-xl-3">
		<img src="../../static/img/photos/mural.webp" class="img-fluid pe-2" alt="Unsplash">
	</div>
</div>
@endsection

@section('provinsi', 'Jawa Barat')
@section('kabupaten', 'Depok')