<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar :data=$titlePage/>
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <h3 class="font-weight-bold mb-0">Hello, {{($nama->name)}}</h3>
                            <p class="mb-0">Apps you might like!</p>
                        </div>

                        {{-- <button type="button"
                            class="btn btn-sm btn-white btn-icon d-flex align-items-center mb-0 ms-md-auto mb-sm-0 mb-2 me-2">
                            <span class="btn-inner--icon">
                                <span class="p-1 bg-success rounded-circle d-flex ms-auto me-2">
                                    <span class="visually-hidden">New</span>
                                </span>
                            </span>
                            <span class="btn-inner--text">Messages</span>
                        </button>
                        <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0">
                            <span class="btn-inner--icon">
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </span>
                            <span class="btn-inner--text">Sync</span>
                        </button> --}}
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
                            <a href="" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 85.347 90 c 0 -22.283 -18.064 -40.347 -40.347 -40.347 S 4.653 67.717 4.653 90 H 85.347 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <circle cx="45.003" cy="21.413" r="21.413" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                        </g>
                                        </svg>
                                </span>
                                <span class="btn-inner--text">Profile</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6 pb-2 ">
                            <a href="" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
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
                                <span class="btn-inner--text">Tanggal</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6 pb-1">
                            <a href="{{route('historyInputData')}}" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
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
                                <span class="btn-inner--text"> History Data</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6 pb-1">
                            <a href="{{route('historySentWasis')}}" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 85.347 90 c 0 -22.283 -18.064 -40.347 -40.347 -40.347 S 4.653 67.717 4.653 90 H 85.347 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <circle cx="45.003" cy="21.413" r="21.413" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                        </g>
                                        </svg>
                                </span>
                                <span class="btn-inner--text">History Wasis</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12 col-md-8 col-sm-6">
                    <div class="card shadow-xs border">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Recent transactions</h6>
                                    <p class="text-sm mb-sm-0 mb-2">These are details about the last transactions</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <input type="text" class="form-control" name="searchBar" id="searchBar" placeholder="search...">
                                </div>
                            </div>
                        </div>
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
                        url: "{{ route('dataDashboard') }}",
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

                })
            });

            function delete_data(id)
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
                                url : '{{ url("/dashboard/deletedata") }}',
                                data: {
                                    _token : "{{ csrf_token() }}",
                                    id : id,
                                },
                                cache : false,
                                success : function(respond){
                                    if (respond == 0){
                                        window.location.replace('{{ url("/dashboard") }}');
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
