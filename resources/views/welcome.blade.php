@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <div class="nav-image">
                <img src="{{ asset('public/images/12.png') }}" alt="KST temple image" width="100%" height="300">
            </div>

            @include('partials.navbar')
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <div>
                    <div>
                        <div class="bg-kst text-center text-white rounded-top py-1">Dashboard</div>
                    </div>
                    <div>
                        <div class="bg-dark rounded-bottom p-1">
                            <ul class="welcome-dashboard nav nav-tabs" id="myTab">
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#dailyrituals" role="tab" aria-controls="dailyrituals" aria-selected="true" class="nav-link">നിത്യപൂജാസമയം</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#poojadetails" role="tab" aria-controls="poojadetails" aria-selected="true" class="nav-link">പൂജാ വിവരങ്ങൾ</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#offerings" role="tab" aria-controls="offerings" aria-selected="true" class="nav-link">സംഭാവന</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="true" class="nav-link">ചിത്രശാല</a>
                                </li>
                                <li>
                                    <a href="#">ഈ ബുക്കിംഗ്</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-danger">
                    <div class="bg-papper-img text-center rounded">
                        <h5 class="mb-0">
                            <strong>അറിയിപ്പുകൾ</strong>
                            
                        </h5>

                        <div class="bg-papper-img border-top border-dark">
                            <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="UP" direction="scroll" scrollamount="2" class="h-200">

                            </marquee>
                        </div>
                    </div>
                </div>

                <div class="mt-3 nakshatra-img">
                    <div class="text-center rounded">
                        <h3 class="mb-0 text-white"><strong><u>ജന്മനക്ഷത്രപൂജ</u></strong></h3>
                        <div class="border-top border-dark mt-2">
                                <strong class="text-white">നിങ്ങളുടെ ഇനി വരുന്ന ഓരോ ജന്മദിനവും
                                കേശവപുരം കണ്ണൻെറ തിരുസന്നിധിയിൽ ആഘോഷിക്കാം.</strong>
                        </div>
                    </div>
                </div>

                <div class="mt-3 ">
                    <div class="text-center rounded">
                        <h3 class="mb-0 text-white"></h3>
                        <div class="border-top border-dark mt-2" style="overflow: auto;">
                            <iframe src="https://www.youtube.com/embed/qMUAKJ1X2aU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-md-0 mt-3">
                <div class="border rounded border-dark p-3 tab-content bg-papper-img" id="myTabContent">
                    <div class="tab-pane active" role="tabpanel">
                        <div class="text-center d-flex flex-column align-items-center">
                            <div class="w-75">
                                <img src="{{ asset('public/images/kannan.png') }}" alt="KST kannan" class="w-100">
                            </div>

                            <div class="w-75 mt-3">
                                <h4 class="text-danger">
                                    <b>ശ്രീകൃഷ്ണധ്യാനം</b>
                                </h4>
                                <h6 class="text-primary">
                                    കസ്തൂരി തിലകം ലലാട ഫലകേ
                                    <br><br>
                                    വക്ഷസ്ഥലേ കൗസ്തുഭം
                                    <br><br>
                                    നാസാഗ്രേ നവ  മൗക്തികം കരതലേ
                                    <br><br>
                                    വേണും കരേ കങ്കണം
                                    <br><br>
                                    സർവ്വാംഗേ ഹരിചന്ദനം ചകലയൻ
                                    <br><br>
                                    കണ്ഠേ ച മുക്താ വലീം
                                    <br><br>
                                    ഗോപസ്ത്രീ പരിവേഷ്ടിതോ വിജയതേ
                                    <br><br>
                                    ഗോപാലചൂഡാമണി
                                    <br><br><br>

                                    <p class="text-left">
                                        <span class="text-danger">സാരം :&nbsp;</span>
                                        <br> നെറ്റിയിൽ കസ്തൂരിതിലകം.
                                        മാറിൽ കൗസ്തുഭമണി, മൂക്കിൽ പവിഴം
                                        പതിച്ച നാസാമണി, കരതളിരുകളിൽ
                                        വേണു, കൈത്തണ്ടയിൽ  കങ്കണം
                                        ദേഹമാസകലം ചന്ദനം, കഴുത്തിൽ
                                        മുത്തുമാല, അങ്ങനെ ഗോപാലന്മാർക്കു
                                        ശിരോലങ്കാരമായ കൃഷ്ണൻ
                                        ഗോപാംഗനകളാൽ ചുറ്റപ്പെട്ട്  വിജയിച്ചരുളുന്നു.
                                    </p>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div id="dailyrituals" class="tab-pane" role="tabpanel">
                        <div class="d-flex flex-column align-items-center">
                            <div class="w-75 text-center text-primary">
                                <h2 class="text-danger">നിത്യപൂജാസമയം</h2>
                                <h6>
                                    <p><span class="text-danger">രാവിലെ</span></p>
                                    5.00 : തിരു നടതുറക്കല്‍ <br>
                                    5.10 : നിര്‍മ്മാല്യ ദര്‍ശനം<br>
                                    5.35 : അഭിഷേകം<br>
                                    5.45 : ഗണപതി ഹോമം <br>
                                    6.00 : ദീപാരാധന <br>
                                    6.30 : ഉഷപൂജ <br>
                                    6.40 : ദീപാരാധന<br>
                                    8.30 : നിവേദ്യം<br>
                                    9.00 : പ്രസന്ന പൂജ<br>
                                    10.00 : നിവേദ്യം<br>
                                    11.00 : ഉച്ചപൂജ<br>
                                    11.30 : തിരുനട അടയ്ക്കൽ<br>
                                    <br><br>
                                    <p><span class="text-danger">വൈകിട്ട്</span></p>
                                    5.00 : തിരു നടതുറക്കല്‍ <br>
                                    6.45 : ദീപാരാധന<br>
                                    7.30 : അത്താഴപൂജ <br>
                                    8.00 : ദീപാരാധന <br>
                                    8.05 : തിരുനട അടയ്ക്കൽ<br>
                                    <br>
                                    <div class="alert alert-info" role="alert">
                                        <p>ക്ഷേത്ര വിശേഷദിവസങ്ങളിൽ പൂജാസമയങ്ങളിൽ വിത്യാസങ്ങൾ
                                         ഉണ്ടായിരിക്കുന്നതാണ്.</p>
                                        <p>കൂടാതെ കുഞ്ഞൂണ്(ചോറൂണ്), തുലാഭാരം, വിദ്യാരംഭം തുടങ്ങിയ
                                        ചടങ്ങുകളും നടത്തിവരുന്നു.</p>
                                    </div>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div id="offerings" class="tab-pane" role="tabpanel">
                        <div class="d-flex flex-column align-items-center">
                            <div class="w-75 text-center text-primary">
                                <h2 class="text-danger">സംഭാവന</h2>

                                <h6>
                                    <br>
                                    കേശവപുരം ശ്രീകൃഷ്ണ സ്വാമിയുടെ അനുഗ്രഹാശിസ്സുകളാൽ
                                    ഏവർക്കും ദുഃഖ നിവാരണവും ജീവിതവിജയവും സാധ്യമാകട്ടെ.
                                    <br><br>
                                    ക്ഷേത്ര വികസന ഫണ്ടിലേക്ക് എല്ലാ ഭക്തജനങ്ങളുടെയും
                                    ഉദാരമായ സംഭാവനകൾ സ്വീകരിച്ചു കൊള്ളുന്നു.
                                    <br><br><br>
                                    <div class="alert alert-info" role="alert">
                                        <div>
                                            <span style="color:#900000">"കേശവപുരം ശ്രീകൃഷ്ണ സ്വാമി ക്ഷേത്രം"</span>
                                            എന്നപേരിൽ താഴെപ്പറയുന്ന വിലാസത്തിൽ
                                            ചെക്കുകളും ഡ്രാഫ്റ്റുകളും സ്വീകരിക്കപ്പെടുന്നു.<br><br>
                                            സെക്രട്ടറി,<br>
                                            കേശവപുരം ശ്രീകൃഷ്ണ സ്വാമി ക്ഷേത്രം,<br>
                                            മരുതംകുഴി കാഞ്ഞിരംപാറ പി.ഒ,<br>
                                            തിരുവനന്തപുരം 695030,<br>
                                            ഫോൺ നമ്പർ :0471 2362600 9600945600.
                                        </div>
                                    </div>
                                    </br>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div id="poojadetails" class="tab-pane" role="tabpanel">
                        <div class="d-flex flex-column align-items-center">
                            <div class="w-75 text-center text-primary">
                                <h2 class="text-danger"><u>പൂജാ വിവരങ്ങൾ</u></h2>
                                <h8>
                                    <div class="row pooja-img text-white">
                                        <div class="col-md-6">
                                            ഉദയാസ്തമന പൂജ :₹ 7501 <br>
                                            അലങ്കാരമുഴുക്കാപ്പ് :₹ 3501 <br>
                                            നിറമാല :₹ 3001 <br>
                                            സഹസ്രാവർത്തിശംഖാഭിഷേകം :₹ 2501 <br>
                                            ഭഗവതിസേവ :₹ 2001 <br>
                                            ചന്ദനമുഴുക്കാപ്പ് :₹ 2001 <br>
                                            നാഗരൂട്ട് :₹ 1501 <br>
                                            താലികെട്ട് :₹ 1501 <br>
                                            പ്രഭാതപൂജ, ഉഷ:പൂജ :₹ 501 <br>
                                            ജന്മനക്ഷത്രപൂജ :₹ 501 <br>
                                            ഉണ്ണിയപ്പം :₹ 501 <br>
                                            ഗണപതിഹോമം :₹ 301 <br>
                                            അരവണ :₹ 301 <br>
                                            ശർക്കരപ്പായസം :₹ 150 <br>
                                            പാൽപ്പായസം :₹ 150 <br>
                                            നൂറുംപാലും :₹ 101 <br>
                                            തേനഭിഷേകം :₹ 101 <br>
                                            പാലഭിഷേകം :₹ 60 <br>
                                            ഇളനീർ അഭിഷേകം(11 എണ്ണം) :₹ 501 <br>
                                            അവിൽ നിവേദ്യം :₹ 30 <br>
                                            മലർനിവേദ്യം :₹ 30 <br>
                                            പഴനിവേദ്യം  :₹ 30 <br>
                                            ത്രിമധുരം :₹ 30 <br>
                                            തൃക്കൈവെണ്ണ :₹ 20 <br>
                                            തട്ടനിവേദ്യം:₹ 20 <br>
                                            നെയ്യ് വിളക്ക് :₹ 20 <br>
                                        </div>
                                        <div class="col-md-6">
                                            അഷ്ടോത്തരാർച്ചന :₹ 20 <br>
                                            വിഷ്ണുസഹസ്രനാമാർച്ചന :₹ 20 <br>
                                            ഭാഗ്യസൂക്താർച്ചന :₹ 20 <br>
                                            ധന്വന്തരി അർച്ചന :₹20 <br>
                                            സന്താനഗോപാലാർച്ചന :₹ 20 <br>
                                            സുദർശന പുഷ്പാർച്ചന :₹ 20 <br>
                                            സ്വയംവരാർച്ചന :₹ 20 <br>
                                            പുരുഷസൂക്താർച്ചന :₹ 20 <br>
                                            ശ്രീസൂക്താർച്ചന  :₹ 20 <br>
                                            രാജഗോപാലാർച്ചന :₹ 20 <br>
                                            ദാമ്പത്യസൂക്താർച്ചന :₹ 20 <br>
                                            വിദ്യാരാജഗോപാലാർച്ചന :₹ 20 <br>
                                            ഐക്യമത്യസൂക്താർച്ചന :₹20 <br>
                                            ഹയഗ്രീവാർച്ചന :₹20 <br>
                                            ലക്ഷ്മിനാരായണാർച്ചന :₹20 <br>
                                            അശ്വാരൂഡാർച്ചന :₹20 <br>
                                            ആയില്യപൂജ :₹20 <br>
                                            കുഞ്ഞുണ് :₹51 <br>
                                            നാമകരണം :₹30 <br>
                                            തുലാഭാരം :₹101 <br>
                                            വിദ്യാരംഭം :₹51 <br>
                                            മാലപൂജ :₹20 <br>
                                            പള്ളിക്കെട്ട് :₹20 <br>
                                            പേനപൂജ :₹20 <br>
                                            താക്കോൽപൂജ:₹20 <br>
                                            നടയ്ക്ക് വയ്ക്കുന്നതിന് :₹10 <br>
                                        </div>
                                    </div>
                                </h8>
                            </div>
                        </div>
                    </div>
                    <div id="gallery" class="tab-pane" role="tabpanel">
                        <div class="d-flex flex-column align-items-center">
                            <div class="w-75 text-center text-primary">
                                <h2 class="text-danger">ചിത്രശാല</h2>
                            </div>

                            <div class="w-75 grid-2x2">
                                <div class="d-inline-block">
                                    <a href="{{ url('/gallery1') }}">
                                        <img class="w-100" src="{{ asset('public/images/gallls/gall4.jpg') }}">
                                    </a>
                                </div>
                                <div class="d-inline-block">
                                    <a href="{{ url('/gallery2') }}">
                                        <img class="w-100" src="{{ asset('public/images/gallls/gall2.png') }}">
                                    </a>
                                </div>
                                <div class="d-inline-block">
                                    <a href="{{ url('/gallery3') }}">
                                        <img class="w-100" src="{{ asset('public/images/gallls/gall3.jpg') }}">
                                    </a>
                                </div>
                                <div class="d-inline-block">
                                    <a href="{{ url('/gallery4') }}">
                                        <img class="w-100" src="{{ asset('public/images/gallls/gall6.jpg') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        @include('partials.footer')
    </div>
@endsection
