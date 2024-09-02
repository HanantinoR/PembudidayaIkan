<nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb">
            @php
                $routeParent = [
                    'HISTORY INPUT' => route('historyinput'),
                    'HISTORY WASIS' => route('historysendwasis'),
                    'DASHBOARD' => route('dashboard'),
                    'USER MANAGEMENT' => route('management'),
                    'Pembesaran' => route('pembesaran'),
                    'Presensi Kehadiran' =>route('presensi')
                ];
                $titleParent = $data['titleParent'] ?? 'DASHBOARD';
                $route = $routeParent[$titleParent];
            @endphp
            <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm">
                    <a class="opacity-5 text-dark" href="{{$route}}">
                        {{$titleParent}}
                    </a>
                </li>
                @if($data['titlePage'] == 'DASHBOARD' || strtoupper($data['titlePage']) == strtoUpper($data['titleParent']))
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page"></li>
                @else
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$data['titlePage']}}</li>
                @endif
            </ol>
            <h6 class="font-weight-bold mb-0">{{$data['titlePage']}}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <div class="mb-0 font-weight-bold breadcrumb-text text-white">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="login" onclick="event.preventDefault();
                this.closest('form').submit();">
                        <button class="btn btn-sm  btn-white  mb-0 me-1" type="submit">Log out</button>
                    </a>
                </form>
            </div>

        </div>
    </div>
</nav>
<!-- End Navbar -->
