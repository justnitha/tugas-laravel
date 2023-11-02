@extends('master.masterLayout')

@section('title','Ajust Putra')

@section('main')
<main class="content">
    <div class="container-fluid p-0">

    	<div class="mb-3">
    		<h1 class="h3 d-inline align-middle">Cards</h1>
    	</div>
    	<div class="row">
    		<div class="col-12 col-md-6">
    			<div class="card">
    				<img class="card-img-top" src="../../static/img/photos/gundam.webp" alt="Unsplash">
    				<div class="card-header">
    					<h5 class="card-title mb-0">Card with image and links</h5>
    				</div>
    				<div class="card-body">
    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    					<a href="#" class="card-link">Card link</a>
    					<a href="#" class="card-link">Another link</a>
    				</div>
    			</div>
    		</div>

    		<div class="col-12 col-md-6">
    			<div class="card">
    				<img class="card-img-top" src="../../static/img/photos/mural.webp" alt="Unsplash">
    				<div class="card-header">
    					<h5 class="card-title mb-0">Card with image and button</h5>
    				</div>
    				<div class="card-body">
    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    					<a href="#" class="btn btn-primary">Go somewhere</a>
    				</div>
    			</div>
    		</div>
    		<div class="col-12 col-md-6">
    			<div class="card">
    				<img class="card-img-top" src="../../static/img/photos/lukisan2.webp" alt="Unsplash">
    				<div class="card-header">
    					<h5 class="card-title mb-0">Card with image and button</h5>
    				</div>
    				<div class="card-body">
    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    					<a href="#" class="btn btn-primary">Go somewhere</a>
    				</div>
    			</div>
    		</div>
    		<div class="col-12 col-md-6">
    			<div class="card">
    				<div class="card-header">
    					<h5 class="card-title mb-0">Card with links</h5>
    				</div>
    				<div class="card-body">
    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    					<a href="#" class="card-link">Card link</a>
    					<a href="#" class="card-link">Another link</a>
    				</div>
    			</div>
                <div class="card">
    				<div class="card-header">
    					<h5 class="card-title mb-0">Card with button</h5>
    				</div>
    				<div class="card-body">
    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    					<a href="#" class="btn btn-primary">Go somewhere</a>
    				</div>
    			</div>
    		</div>

    		<div class="col-12 col-md-6">
    			
    		</div>
    	</div>

    </div>
</main>
@endsection