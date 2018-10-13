@extends('layouts.app')

@section('content')
	<div class="container">
		<div>
            <div class="nav-image">
                <img src="{{ asset('public/images/12.png') }}" alt="KST temple image" width="100%" height="300">
            </div>

            @include('partials.navbar')
			<div class="mt-3">
				<h1 style="text-align:center" class="text-orange">പ്രവർത്തനങ്ങൾ</h1>

				<div class="mt-5">
						<div class="d-sm-flex">
							<div class="col-sm-9 pl-0 pr-5">
								<h4 class="text-warning">ഗീതാ ക്ലാസ്</h4>
								<p><i>എല്ലം ഞായറാഴ്ചതോറും കേശവപുര സന്നിധിയിൽ പ്രായഭേദമന്യേ
									എല്ലാ വിദ്യാർത്ഥികൾക്കും ശ്രീ അഞ്ചൽ ബാബു അവർകളുടെ
									നേതൃത്വത്തിൽ ഗീതാ ക്ലാസുകളെടുത്തുവരുന്നു.</i></p>
							</div>

							<div class="col-sm-2 pr-0">
								<img style="border-radius:150px" src="{{ asset('public/images/activities/geeta.jpg') }}" alt="Krsihna" class="w-100">
							</div>
						</div>

					<div class="mt-4">
						<div class="d-sm-flex">
							<div class="col-sm-2 pl-0">
								<img style="border-radius:150px" src="{{ asset('public/images/activities/kkp.jpg') }}" alt="Krsihna" class="w-100">
							</div>

							<div class="col-sm-9 pr-0 pl-5">
								<h4 class="text-warning">കേശവപുരം കലാസാംസ്കാരിക പീടം</h4>
									<p><i>കേശവപുരം കലാസാംസ്കാരിക പീടത്തിൽ പ്രായഭേദമന്യേ
										എല്ലാ വിദ്യാർത്ഥികൾക്കും പഞ്ചവാദ്യം, തബല, വയലിൻ,
										കീബോർഡ്, ഗിത്താർ തുടങ്ങിയ വാദ്യോപകരണ ക്ലാസ്സുകളും
										കൂടാതെ ശാസ്ത്രീയസംഗീതം, നൃത്തം, ചിത്രരചന, സ്പോക്കൺ ഇംഗ്ലീഷ്,
										അഷ്ടപതി തുടങ്ങിയവയുടെ ക്ലാസ്സുകളും നടന്നുവരുന്നു.</i></p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-5">
						<div class="d-sm-flex">
							<div class="col-sm-9 pl-0 pr-5">
								<h4 class="text-warning">വേദാ ക്ലാസ്</h4>
								<p><i>എല്ലം ശനിയാഴ്ചതോറും കേശവപുര സന്നിധിയിൽ പ്രായഭേദമന്യേ എല്ലാ വിദ്യാർത്ഥികൾക്കും
									  കേശവപുരം കലാസാംസ്കാരിക പീടം അധ്യാപകർ വേദാ ക്ലാസുകളെടുത്തുവരുന്നു.</i></p>
							</div>

							<div class="col-sm-2 pr-0">
								<img style="border-radius:150px" src="{{ asset('public/images/activities/veda.jpg') }}" alt="Krsihna" class="w-100">
							</div>
						</div>

					<div class="mt-4">
						<div class="d-sm-flex">
							<div class="col-sm-2 pl-0">
								<img style="border-radius:150px" src="{{ asset('public/images/activities/narayaneeyam.jpg') }}" alt="Krsihna" class="w-100">
							</div>

							<div class="col-sm-9 pr-0 pl-5">
								<h4 class="text-warning">നാരായണീയം പാരായണം</h4>
								<p><i>എല്ലാ മാസവും വ്യാഴാഴ്ചകളിൽ കേശവപുരം സന്നിധിയിൽ നാരായണീയം
									 പാരായണം നടന്നുവരുന്നു.</i></p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-5">
						<div class="d-sm-flex">
							<div class="col-sm-9 pl-0 pr-5">
								<h4 class="text-warning">ഭാഗവത പാരായണം</h4>
								<p><i>എല്ലാ മാസവും വ്യാഴാഴ്ചകളിൽ കേശവപുരം സന്നിധിയിൽ ഭാഗവത
									 പാരായണം നടന്നുവരുന്നു.</i></p>
							</div>

							<div class="col-sm-2 pr-0">
								<img style="border-radius:150px" src="{{ asset('public/images/activities/bhagavatham.jpg') }}" alt="Krsihna" class="w-100">
							</div>
						</div>
				</div>
			</div>
        </div>

		@include('partials.footer')
	</div>
@endsection
