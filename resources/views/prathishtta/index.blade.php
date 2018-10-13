@extends('layouts.app')

@section('content')
	<div class="container">
            <div class="nav-image">
                <img src="{{ asset('public/images/12.png') }}" alt="KST temple image" width="100%" height="300">
            </div>

            @include('partials.navbar')

		<div class="mt-3">
			<h1 class="text-orange text-center">ഉപദേവതകള്‍</h1>

			<div class="mt-5">
				<div class="mt-4">
					<div class="d-sm-flex">
					</div>
				</div>
			</div>
			<div class="mt-5">
				<div class="d-sm-flex">

				</div>

				<div class="mt-4">
					<div class="d-sm-flex">

					</div>
				</div>
			</div>
			<div class="mt-5">
				<div class="d-sm-flex">
				</div>
			</div>
		@include('partials.footer')
	</div>
@endsection
