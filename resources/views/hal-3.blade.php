@extends('master.masterLayout')

@section('title','Zoya Toya')

@section('profil')
<img src="../../static/img/avatars/singging.webp" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="298" />
<h5 class="card-title mb-0">Zoya Lauriel</h5>
<div class="text-muted mb-2">Singging</div>
@endsection

@section('username', 'ZoyaToya')

@section('foto-user')
<img src="./../static/img/avatars/singging.webp" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
@endsection

@section('foto')
<div class="row g-0 mt-1">
	<div class="col-6 col-md-4 col-lg-4 col-xl-3">
		<img src="../../static/img/photos/lukisan2.webp" class="img-fluid pe-2" alt="Unsplash">
	</div>
	<div class="col-6 col-md-4 col-lg-4 col-xl-3">
		<img src="../../static/img/photos/lukisan3.webp" class="img-fluid pe-2" alt="Unsplash">
	</div>
</div>
@endsection

@section('provinsi', 'New York City')
@section('kabupaten', 'Racoon Vity')