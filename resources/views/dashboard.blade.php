<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <style>
            @media screen and (max-width :576px) {
                .btn-inner--text {
                    display: none;
                }
            }
        </style>
        <x-app.navbar :data=$data/>
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <h3 class="font-weight-bold mb-0">Hello, {{(Auth::user()->nama)}}</h3>
                            <p class="mb-0">Semangat Kerjanya Yukkkk!</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                <div class="full-background"
                    style="background-image: url('../assets/img/header-blue-purple.jpg')"></div>
                <div class="card-body text-start p-4 w-100">
                    <div class="row">
                        <div class="col-sm-3 col-6 pb-2">
                            <a href="{{route('presensi')}}" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                            <defs>
                                            </defs>
                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                <path d="M 32.613 0 H 7.267 C 3.26 0 0 3.26 0 7.267 v 25.346 c 0 4.007 3.26 7.267 7.267 7.267 h 25.346 c 4.007 0 7.267 -3.26 7.267 -7.267 V 7.267 C 39.88 3.26 36.62 0 32.613 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 82.733 0 H 57.387 C 53.38 0 50.12 3.26 50.12 7.267 v 25.346 c 0 4.007 3.26 7.267 7.267 7.267 h 25.347 c 4.007 0 7.267 -3.26 7.267 -7.267 V 7.267 C 90 3.26 86.74 0 82.733 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 32.613 50.12 H 7.267 C 3.26 50.12 0 53.38 0 57.387 v 25.347 C 0 86.74 3.26 90 7.267 90 h 25.346 c 4.007 0 7.267 -3.26 7.267 -7.267 V 57.387 C 39.88 53.38 36.62 50.12 32.613 50.12 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 82.733 50.12 H 57.387 c -4.007 0 -7.267 3.26 -7.267 7.267 v 25.347 c 0 4.007 3.26 7.267 7.267 7.267 h 25.347 C 86.74 90 90 86.74 90 82.733 V 57.387 C 90 53.38 86.74 50.12 82.733 50.12 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            </g>
                                        </svg>
                                </span>
                                <span class="btn-inner--text">Ambil Foto Lapangan</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6 pb-2 ">
                            <a href="{{route('pembesaran')}}" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 88.198 18.287 l -5.355 -3.627 c -0.489 -0.331 -1.044 -0.491 -1.594 -0.491 s -1.093 0.157 -1.56 0.46 c -0.311 0.202 -0.588 0.468 -0.808 0.794 l -4.073 6.013 l 0 0 L 46.024 63.929 l -3.108 15.442 l 13.187 -8.615 L 88.96 22.25 C 89.844 20.945 89.503 19.171 88.198 18.287 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 59.415 73 c -0.298 0.439 -0.68 0.815 -1.124 1.105 L 45.104 82.72 c -0.666 0.435 -1.427 0.651 -2.188 0.651 c -0.783 0 -1.566 -0.229 -2.243 -0.688 c -1.334 -0.903 -1.996 -2.521 -1.678 -4.101 l 3.108 -15.441 c 0.105 -0.521 0.312 -1.015 0.609 -1.454 l 26.755 -39.499 v -8.109 v -4.29 V 4.018 C 69.468 1.799 67.669 0 65.449 0 H 4.567 C 2.348 0 0.548 1.799 0.548 4.018 v 81.963 C 0.548 88.201 2.348 90 4.567 90 h 60.882 c 2.219 0 4.018 -1.799 4.018 -4.019 v -6.578 V 58.855 v -0.696 L 59.415 73 z M 12.299 14.887 H 56.86 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 12.299 c -1.104 0 -2 -0.896 -2 -2 S 11.195 14.887 12.299 14.887 z M 12.299 28.183 H 56.86 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 12.299 c -1.104 0 -2 -0.896 -2 -2 S 11.195 28.183 12.299 28.183 z M 12.299 41.478 H 45.61 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 H 12.299 c -1.104 0 -2 -0.896 -2 -2 S 11.195 41.478 12.299 41.478 z M 35.824 80.904 c -0.854 0.7 -2.115 0.577 -2.814 -0.277 l -5.489 -6.688 c 0.271 3.036 0.379 6.088 0.324 9.128 c -0.015 0.82 -0.529 1.549 -1.297 1.837 c -0.229 0.085 -0.467 0.127 -0.702 0.127 c -0.555 0 -1.096 -0.23 -1.483 -0.657 l -6.579 -7.264 c -0.127 0.518 -0.28 1.027 -0.457 1.526 c -0.123 0.344 -0.409 1.146 -1.167 1.704 c -0.651 0.485 -1.367 0.578 -1.848 0.606 c -2.588 0.146 -5.197 -1.121 -6.67 -3.244 c -0.63 -0.907 -0.405 -2.153 0.502 -2.783 c 0.906 -0.63 2.153 -0.405 2.783 0.502 c 0.609 0.876 1.676 1.46 2.747 1.53 c 0.455 -1.415 0.649 -2.935 0.563 -4.416 c -0.049 -0.847 0.441 -1.633 1.223 -1.961 c 0.783 -0.326 1.686 -0.126 2.256 0.502 l 6.056 6.686 c -0.158 -3.405 -0.529 -6.805 -1.111 -10.156 c -0.155 -0.895 0.312 -1.782 1.138 -2.16 c 0.828 -0.38 1.803 -0.151 2.379 0.55 l 9.924 12.095 C 36.802 78.943 36.678 80.204 35.824 80.904 z M 35.383 58.773 H 12.299 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 23.083 c 1.104 0 2 0.896 2 2 S 36.487 58.773 35.383 58.773 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        </g>
                                    </svg>

                                </span>
                                <span class="btn-inner--text">Input Data By Excel</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6 pb-1">
                            <a href="{{route('historyinput')}}" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 54.572 90 H 9.758 C 4.377 90 0 85.623 0 80.242 V 9.758 C 0 4.377 4.377 0 9.758 0 h 70.484 C 85.623 0 90 4.377 90 9.758 v 46.829 c 0 1.657 -1.343 3 -3 3 s -3 -1.343 -3 -3 V 9.758 C 84 7.686 82.314 6 80.242 6 H 9.758 C 7.686 6 6 7.686 6 9.758 v 70.484 C 6 82.314 7.686 84 9.758 84 h 44.814 c 1.657 0 3 1.343 3 3 S 56.229 90 54.572 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 71.459 25.091 H 18.541 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 52.918 c 1.657 0 3 1.343 3 3 S 73.116 25.091 71.459 25.091 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 71.459 40.364 H 18.541 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 52.918 c 1.657 0 3 1.343 3 3 S 73.116 40.364 71.459 40.364 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 33.277 55.637 H 18.541 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 14.736 c 1.657 0 3 1.343 3 3 S 34.934 55.637 33.277 55.637 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 42.823 70.909 H 18.541 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 24.282 c 1.657 0 3 1.343 3 3 S 44.479 70.909 42.823 70.909 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 87.748 72.927 L 68.666 53.845 c -1.408 -1.408 -3.158 -2.46 -5.063 -3.042 l -10.006 -3.057 c -1.662 -0.513 -3.457 -0.062 -4.685 1.167 c -1.229 1.229 -1.676 3.023 -1.168 4.684 l 3.058 10.007 c 0.582 1.904 1.634 3.654 3.042 5.063 l 19.082 19.082 C 74.427 89.25 76.4 90 78.372 90 c 1.973 0 3.945 -0.75 5.446 -2.252 l 3.93 -3.93 C 90.751 80.815 90.751 75.93 87.748 72.927 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="btn-inner--text"> History Input Data</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6 pb-1">
                            <a href="{{route('historysendwasis')}}" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 90 23.452 v -3.892 c 0 -6.074 -4.942 -11.016 -11.017 -11.016 H 68.522 V 4.284 c 0 -1.657 -1.343 -3 -3 -3 s -3 1.343 -3 3 v 4.261 H 27.477 V 4.284 c 0 -1.657 -1.343 -3 -3 -3 s -3 1.343 -3 3 v 4.261 H 11.016 C 4.942 8.545 0 13.487 0 19.561 v 3.892 H 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 0 29.452 V 75.7 c 0 6.074 4.942 11.016 11.016 11.016 h 67.967 C 85.058 86.716 90 81.775 90 75.7 V 29.452 H 0 z M 25.779 72.18 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 27.436 72.18 25.779 72.18 z M 25.779 58.816 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 27.436 58.816 25.779 58.816 z M 25.779 45.452 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 27.436 45.452 25.779 45.452 z M 48.688 72.18 h -7.375 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.375 c 1.657 0 3 1.343 3 3 S 50.345 72.18 48.688 72.18 z M 48.688 58.816 h -7.375 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.375 c 1.657 0 3 1.343 3 3 S 50.345 58.816 48.688 58.816 z M 48.688 45.452 h -7.375 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.375 c 1.657 0 3 1.343 3 3 S 50.345 45.452 48.688 45.452 z M 71.597 72.18 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 73.254 72.18 71.597 72.18 z M 71.597 58.816 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 73.254 58.816 71.597 58.816 z M 71.597 45.452 h -7.376 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 7.376 c 1.657 0 3 1.343 3 3 S 73.254 45.452 71.597 45.452 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="btn-inner--text">History Kirim Wasis</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="card shadow-xs border">
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-3">
                                <table class="table datatable align-items-center justify-content-center mb-0" id="tableDashboard">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-primary text-xs font-weight-bold opacity-10">
                                                No.</th>
                                            <th class="text-info text-xs font-weight-bold opacity-10 ps-2">
                                                Aksi</th>
                                            <th class="text-success text-xs font-weight-bold opacity-10 ps-2">
                                                NIK</th>
                                            <th class="text-dark text-xs font-weight-bold opacity-10 ps-2">
                                                Nama</th>
                                            <th class="text-warning text-secondary text-xs font-weight-bold opacity-10">
                                                Foto Lokasi</th>
                                            <th class="text-center text-secondary text-xs font-weight-bold opacity-10">
                                                Koordinat Lokasi</th>
                                            <th class="text-center text-secondary text-xs font-weight-bold opacity-10">
                                                Diambil Oleh</th>
                                            <th class="text-center text-secondary text-xs font-weight-bold opacity-10">
                                                Tanggal Foto Diambil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>

        <script>
            $(document).ready(function(){
                $('#tableDashboard').DataTable({
                    processing: true,
                    serverSide: true,
                    lengthMenu: [
                        10, 25, 50,
                        { label: 'All', value: -1 }
                        ],
                    ajax: {
                        url: "{{ route('dashboard.listdata') }}",
                        type: 'POST',
                        data: {
                            _token:"{{ csrf_token() }}"
                        },
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {
                            data: 'aksi',
                            name: 'aksi',
                            orderable: false,
                            searchable: false,
                            render:function(data,type,row,meta){
                                return data;
                            }
                        },
                        {
                            data: 'nik_user_input',
                            name: 'nik_user_input',
                            orderable: false,
                            searchable: true,
                            render:function(data, type, row, meta){
                                return row.nik_user_input;
                            }
                        },
                        {
                            data: 'nama_user_input',
                            name: 'nama_user_input',
                            orderable: true,
                            searchable: true,
                            render:function(data,type,row,meta){
                                return row.nama_user_input;
                            }
                        },
                        {
                            data: 'foto',
                            name: 'foto',
                            orderable: false,
                            searchable: false,
                            render:function(data,type,row,meta){
                                return row.foto;
                            }

                        },
                        {
                            data: 'location_in',
                            name: 'location_in',
                            orderable: true,
                            searchable: true,
                            render:function(data,type,row,meta){
                                return row.location_in;
                            }
                        },
                        {
                            data: 'created_by',
                            name: 'created_by',
                            orderable: true,
                            searchable: true,
                            render:function(data,type,row,meta){
                                return row.created_by;
                            }
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            orderable: true,
                            searchable: true,
                            render:function(data,type,row,meta){
                                return row.created_at;
                            }
                        },
                    ],
                    columnDefs: [
                        { className: 'dt-center', targets: '_all' },
                    ],

                })
            });

            function deleteDataDashboard(id)
            {
                swal.fire({
                    title: "Yakin Untuk Menghapus Data?",
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, hapus datanya!"
                }).then((result)=>{
                    if(result.isConfirmed){
                        swal.fire({
                            title: "Dihapus!",
                            text: "Data Yang Dipilih Berhasil Di Hapus.",
                            icon: "success"
                        }).then((hehe)=>{
                           $.ajax({
                                type : 'POST',
                                url : '{{ route("dashboard.deletedata") }}',
                                data: {
                                    _token : "{{ csrf_token() }}",
                                    id : id,
                                },
                                cache : false,
                                success : function(respond){
                                    if (respond == 0){
                                        window.location.replace('{{ route("dashboard")}}');
                                    }else{
                                        alert(error);
                                    }
                                }
                           })
                        })
                    }
                })
            };
        </script>
    </main>

</x-app-layout>
