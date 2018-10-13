<nav class="navbar navbar-expand-lg navbar-light bg-kst p-0 rounded-bottom">
    <button class="navbar-toggler border-light my-2 mx-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100">
            <li class="nav-item text-center py-2 px-3 f-1 {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item text-center py-2 px-3 f-1 {{ Request::is('temple') ? 'active' : '' }}">
                <a href="{{ url('/temple') }}" class="nav-link text-white">ക്ഷേത്രം</a>
            </li>
            <li class="nav-item text-center py-2 px-3 f-1 {{ Request::is('prathishtta') ? 'active' : '' }}">
                <a href="{{ url('/prathishtta') }}" class="nav-link text-white">ഉപദേവതകള്‍</a>
            </li>
            <li class="nav-item text-center py-2 px-3 f-1 {{ Request::is('festivals') ? 'active' : '' }}">
                <a href="{{ url('/festivals') }}" class="nav-link text-white">ഉത്സവങ്ങൾ</a>
            </li>
            <li class="nav-item text-center py-2 px-3 f-1 {{ Request::is('activities') ? 'active' : '' }}">
                <a href="{{ url('/activities') }}" class="nav-link text-white">പ്രവർത്തനങ്ങൾ</a>
            </li>
            <li class="nav-item text-center py-2 px-3 f-1 {{ Request::is('contactus') ? 'active' : '' }}">
                <a href="{{ url('/contactus') }}" class="nav-link text-white">ബന്ധപ്പെടുക</a>
            </li>
        </ul>
    </div>
</nav>
