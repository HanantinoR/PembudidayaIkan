<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand d-flex align-items-center m-0"
            href="{{route('dashboard')}}" target="_blank">
            <span class="font-weight-bold text-lg">SUCOFINDO</span>
        </a>
    </div>


    <div class="collapse navbar-collapse px-4  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if(in_array(Auth::user()->role,["Surveyor","Admin"]))
                <li class="nav-item">
                    <a class="nav-link  {{ is_current_route('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div
                            class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <polygon points="75.96,30.96 75.96,13.34 67.26,13.34 67.26,22.26 45,0 0.99,44.02 7.13,50.15 45,12.28 82.88,50.15 89.01,44.02 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <polygon points="45,20 14.04,50.95 14.04,90 35.29,90 35.29,63.14 54.71,63.14 54.71,90 75.96,90 75.96,50.95 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                </g>
                                </svg>
                        </div>
                        <span class="nav-link-text ms-2">Home</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link  {{ is_current_route('tables') ? 'active' : '' }}" href="{{ route('tables') }}">
                        <div
                            class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                    <path d="M 90 23.452 v -3.892 c 0 -6.074 -4.942 -11.016 -11.017 -11.016 H 68.522 V 4.284 c 0 -1.657 -1.343 -3 -3 -3 s -3 1.343 -3 3 v 4.261 H 27.477 V 4.284 c 0 -1.657 -1.343 -3 -3 -3 s -3 1.343 -3 3 v 4.261 H 11.016 C 4.942 8.545 0 13.487 0 19.561 v 3.892 H 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                    <path d="M 0 29.452 V 75.7 c 0 6.074 4.942 11.016 11.016 11.016 h 67.967 C 85.058 86.716 90 81.775 90 75.7 V 29.452 H 0 z M 25.779 72.18 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 27.436 72.18 25.779 72.18 z M 25.779 58.816 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 27.436 58.816 25.779 58.816 z M 25.779 45.452 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 27.436 45.452 25.779 45.452 z M 48.688 72.18 h -7.375 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.375 c 1.657 0 3 1.343 3 3 S 50.345 72.18 48.688 72.18 z M 48.688 58.816 h -7.375 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.375 c 1.657 0 3 1.343 3 3 S 50.345 58.816 48.688 58.816 z M 48.688 45.452 h -7.375 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.375 c 1.657 0 3 1.343 3 3 S 50.345 45.452 48.688 45.452 z M 71.597 72.18 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 73.254 72.18 71.597 72.18 z M 71.597 58.816 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 73.254 58.816 71.597 58.816 z M 71.597 45.452 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 73.254 45.452 71.597 45.452 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-2">Calendar</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link {{ is_current_route('pembesaran') ? 'active' : '' }} " href="{{ route('pembesaran') }}">
                        <div
                            class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 88.198 18.287 l -5.355 -3.627 c -0.489 -0.331 -1.044 -0.491 -1.594 -0.491 s -1.093 0.157 -1.56 0.46 c -0.311 0.202 -0.588 0.468 -0.808 0.794 l -4.073 6.013 l 0 0 L 46.024 63.929 l -3.108 15.442 l 13.187 -8.615 L 88.96 22.25 C 89.844 20.945 89.503 19.171 88.198 18.287 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 59.415 73 c -0.298 0.439 -0.68 0.815 -1.124 1.105 L 45.104 82.72 c -0.666 0.435 -1.427 0.651 -2.188 0.651 c -0.783 0 -1.566 -0.229 -2.243 -0.688 c -1.334 -0.903 -1.996 -2.521 -1.678 -4.101 l 3.108 -15.441 c 0.105 -0.521 0.312 -1.015 0.609 -1.454 l 26.755 -39.499 v -8.109 v -4.29 V 4.018 C 69.468 1.799 67.669 0 65.449 0 H 4.567 C 2.348 0 0.548 1.799 0.548 4.018 v 81.963 C 0.548 88.201 2.348 90 4.567 90 h 60.882 c 2.219 0 4.018 -1.799 4.018 -4.019 v -6.578 V 58.855 v -0.696 L 59.415 73 z M 12.299 14.887 H 56.86 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 12.299 c -1.104 0 -2 -0.896 -2 -2 S 11.195 14.887 12.299 14.887 z M 12.299 28.183 H 56.86 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 12.299 c -1.104 0 -2 -0.896 -2 -2 S 11.195 28.183 12.299 28.183 z M 12.299 41.478 H 45.61 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 12.299 c -1.104 0 -2 -0.896 -2 -2 S 11.195 41.478 12.299 41.478 z M 35.824 80.904 c -0.854 0.7 -2.115 0.577 -2.814 -0.277 l -5.489 -6.688 c 0.271 3.036 0.379 6.088 0.324 9.128 c -0.015 0.82 -0.529 1.549 -1.297 1.837 c -0.229 0.085 -0.467 0.127 -0.702 0.127 c -0.555 0 -1.096 -0.23 -1.483 -0.657 l -6.579 -7.264 c -0.127 0.518 -0.28 1.027 -0.457 1.526 c -0.123 0.344 -0.409 1.146 -1.167 1.704 c -0.651 0.485 -1.367 0.578 -1.848 0.606 c -2.588 0.146 -5.197 -1.121 -6.67 -3.244 c -0.63 -0.907 -0.405 -2.153 0.502 -2.783 c 0.906 -0.63 2.153 -0.405 2.783 0.502 c 0.609 0.876 1.676 1.46 2.747 1.53 c 0.455 -1.415 0.649 -2.935 0.563 -4.416 c -0.049 -0.847 0.441 -1.633 1.223 -1.961 c 0.783 -0.326 1.686 -0.126 2.256 0.502 l 6.056 6.686 c -0.158 -3.405 -0.529 -6.805 -1.111 -10.156 c -0.155 -0.895 0.312 -1.782 1.138 -2.16 c 0.828 -0.38 1.803 -0.151 2.379 0.55 l 9.924 12.095 C 36.802 78.943 36.678 80.204 35.824 80.904 z M 35.383 58.773 H 12.299 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 23.083 c 1.104 0 2 0.896 2 2 S 36.487 58.773 35.383 58.773 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-2">Document</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link  {{ is_current_route('RTL') ? 'active' : '' }}" href="{{ route('RTL') }}">
                        <div
                            class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                    <path d="M 85.347 90 c 0 -22.283 -18.064 -40.347 -40.347 -40.347 S 4.653 67.717 4.653 90 H 85.347 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                                    <circle cx="45.003" cy="21.413" r="21.413" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "></circle>
                                </g>
                                </svg>
                        </div>
                        <span class="nav-link-text ms-2">Profile</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link  {{ is_current_route('presensi') ? 'active' : '' }}" href="{{ route('presensi') }}">
                        <div
                            class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 32.613 0 H 7.267 C 3.26 0 0 3.26 0 7.267 v 25.346 c 0 4.007 3.26 7.267 7.267 7.267 h 25.346 c 4.007 0 7.267 -3.26 7.267 -7.267 V 7.267 C 39.88 3.26 36.62 0 32.613 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 82.733 0 H 57.387 C 53.38 0 50.12 3.26 50.12 7.267 v 25.346 c 0 4.007 3.26 7.267 7.267 7.267 h 25.347 c 4.007 0 7.267 -3.26 7.267 -7.267 V 7.267 C 90 3.26 86.74 0 82.733 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 32.613 50.12 H 7.267 C 3.26 50.12 0 53.38 0 57.387 v 25.347 C 0 86.74 3.26 90 7.267 90 h 25.346 c 4.007 0 7.267 -3.26 7.267 -7.267 V 57.387 C 39.88 53.38 36.62 50.12 32.613 50.12 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 82.733 50.12 H 57.387 c -4.007 0 -7.267 3.26 -7.267 7.267 v 25.347 c 0 4.007 3.26 7.267 7.267 7.267 h 25.347 C 86.74 90 90 86.74 90 82.733 V 57.387 C 90 53.38 86.74 50.12 82.733 50.12 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-2">Presensi</span>
                    </a>
                </li>
                <hr>
            @endif
            @if(in_array(Auth::user()->role,["Admin"]))
                <li class="nav-item">
                    <a class="nav-link  {{ is_current_route('management') ? 'active' : '' }}" href="{{ route('management') }}">
                        <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 49.519 L 45 49.519 c -7.68 0 -13.964 -6.284 -13.964 -13.964 v -5.008 c 0 -7.68 6.284 -13.964 13.964 -13.964 h 0 c 7.68 0 13.964 6.284 13.964 13.964 v 5.008 C 58.964 43.236 52.68 49.519 45 49.519 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 52.863 51.438 c -2.362 1.223 -5.032 1.927 -7.863 1.927 s -5.501 -0.704 -7.863 -1.927 C 26.58 53.014 18.414 62.175 18.414 73.152 v 14.444 c 0 1.322 1.082 2.403 2.403 2.403 h 48.364 c 1.322 0 2.403 -1.082 2.403 -2.403 V 73.152 C 71.586 62.175 63.42 53.014 52.863 51.438 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 71.277 34.854 c -2.362 1.223 -5.032 1.927 -7.863 1.927 c -0.004 0 -0.007 0 -0.011 0 c -0.294 4.412 -2.134 8.401 -4.995 11.43 c 10.355 3.681 17.678 13.649 17.678 24.941 v 0.263 h 11.511 c 1.322 0 2.404 -1.082 2.404 -2.404 V 56.568 C 90 45.59 81.834 36.429 71.277 34.854 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 63.414 0 c -7.242 0 -13.237 5.589 -13.898 12.667 c 8 2.023 13.947 9.261 13.947 17.881 v 2.385 c 7.657 -0.027 13.914 -6.298 13.914 -13.961 v -5.008 C 77.378 6.284 71.094 0 63.414 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 13.915 73.152 c 0 -11.292 7.322 -21.261 17.677 -24.941 c -2.861 -3.029 -4.702 -7.019 -4.995 -11.43 c -0.004 0 -0.007 0 -0.011 0 c -2.831 0 -5.5 -0.704 -7.863 -1.927 C 8.166 36.429 0 45.59 0 56.568 v 14.444 c 0 1.322 1.082 2.404 2.404 2.404 h 11.511 V 73.152 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 26.536 32.932 v -2.385 c 0 -8.62 5.946 -15.858 13.947 -17.881 C 39.823 5.589 33.828 0 26.586 0 c -7.68 0 -13.964 6.284 -13.964 13.964 v 5.008 C 12.622 26.635 18.879 32.905 26.536 32.932 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-2">User</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    {{-- <div class="sidenav-footer mx-4 ">
        <a class="btn bg-gradient-primary inline-block px-5 py-3 mx-auto text-xs align-middle transition-all ease-in border-0 rounded-lg select-none" href="https://www.creative-tim.com/product/corporate-ui-dashboard-pro-laravel" target="_blank">
            UPGRADE TO PRO
        </a>
        <div class="card border-radius-md" id="sidenavCard">
            <div class="card-body  text-start  p-3 w-100">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-primary"
                        viewBox="0 0 24 24" fill="currentColor" id="sidenavCardIcon">
                        <path
                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z" />
                        <path
                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                    </svg>
                </div>
                <div class="docs-info">
                    <h6 class="font-weight-bold up mb-2">Need help?</h6>
                    <p class="text-sm font-weight-normal">Please check our docs.</p>
                    <a href="https://www.creative-tim.com/learning-lab/bootstrap/installation-guide/corporate-ui-dashboard"
                        target="_blank" class="font-weight-bold text-sm mb-0 icon-move-right mt-auto w-100 mb-0">
                        Documentation
                        <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
</aside>
