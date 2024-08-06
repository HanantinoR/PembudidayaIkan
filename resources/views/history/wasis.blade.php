<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar :data=$data/>
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col">
                    <div class="card shadow-xs border">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">TABLE HISTORY WASIS DATA</h6>
                                    <p class="text-sm mb-sm-0 mb-2">These are details about the last transactions</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <a href="{{route('historyinput.download')}}" class="btn btn-success  d-flex align-items-center mb-0 downloadbtn">
                                        <span class="btn-inner--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">

                                                <defs>
                                                </defs>
                                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                    <path d="M 69.726 74.715 H 58.352 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 11.374 C 78.699 70.715 86 63.414 86 54.44 c 0 -7.205 -4.839 -13.631 -11.767 -15.627 c -0.855 -0.247 -1.444 -1.028 -1.446 -1.918 C 72.761 22.779 61.256 11.294 47.14 11.294 c -11.569 0 -21.744 7.813 -24.744 19.001 c -0.207 0.771 -0.853 1.346 -1.644 1.461 C 11.202 33.147 4 41.471 4 51.12 c 0 10.805 8.791 19.595 19.595 19.595 h 7.772 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 h -7.772 C 10.585 74.715 0 64.13 0 51.12 c 0 -11.185 8.035 -20.892 18.894 -23.098 C 22.76 15.754 34.195 7.294 47.14 7.294 c 15.829 0 28.819 12.494 29.609 28.138 C 84.62 38.345 90 45.96 90 54.44 C 90 65.62 80.905 74.715 69.726 74.715 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 45 82.706 c -0.643 0 -1.23 -0.366 -1.513 -0.944 L 31.133 56.556 c -0.256 -0.522 -0.225 -1.14 0.083 -1.634 c 0.308 -0.493 0.848 -0.793 1.43 -0.793 h 6.249 V 33.341 c 0 -0.931 0.755 -1.685 1.685 -1.685 h 8.836 c 0.931 0 1.685 0.755 1.685 1.685 v 20.788 h 6.25 c 0.582 0 1.123 0.3 1.43 0.793 c 0.308 0.494 0.339 1.112 0.083 1.634 L 46.513 81.762 C 46.23 82.34 45.643 82.706 45 82.706 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text ">Download Excel</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-3">
                                <table class="table datatable align-items-center justify-content-center mb-0" id="tableHistoryWasis" name="tableHistoryWasis">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                <div class="resizable-column" style="min-width:70px;" >No.</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                <div class="resizable-column" style="min-width:200px;">Aksi</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 ps-2 px-1">
                                                <div class="resizable-column" style="min-width:auto;">Tanggal Kirim Wasis</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 ps-2 px-1">
                                                <div class="resizable-column" style="min-width:auto;">Status Dari Wasis</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 ps-2 px-1">
                                                <div class="resizable-column" style="min-width:auto;">Nama</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                <div class="resizable-column" style="min-width:auto;">Foto Survey</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 ps-2 px-1">
                                                <div class="resizable-column" style="min-width:auto;">NIK</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                <div class="resizable-column" style="min-width:200px;">Kabupaten / Kota </div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                <div class="resizable-column" style="min-width:200px;">Provinsi </div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                <div class="resizable-column" style="min-width:200px;">Nama Petugas</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                <div class="resizable-column" style="min-width:200px;">UPT</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                <div class="resizable-column" style="min-width:70px;" >Dibuat Oleh.</div></th>
                                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                <div class="resizable-column" style="min-width:70px;" >DiSunting Oleh</div></th>
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

        <!--Modal upload Foto -->
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                      <h3 class="font-weight-bolder text-dark">Upload Foto</h3>
                      <p class="mb-0">Silahkan Upload foto User</p>
                    </div>
                    <div class="card-body">
                      <form role="form text-left" id="formUploadFoto">
                        @csrf
                        <label>Nama</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Nama" name="nameUser" id="nameUser" readonly>
                        </div>
                        <label>NIK</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="NIK" name="nikUser" id="nikUser" readonly>
                        </div>
                        <label>Titik Koordinat</label>
                        <div class="input-group mb-3" style="display: block;">
                          <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="LAT" name="LatKoordinator" id="LatKoordinator" readonly>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="LONG" name="LongKoordinator" id="LongKoordinator" readonly>
                            </div>
                          </div>
                        </div>
                        <label>Upload Foto</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" placeholder="File Foto" name="fileFoto" id="fileFoto" >
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0 btnSubmitFoto">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve">

                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 81.675 67.955 c -0.537 0.629 -1.483 0.704 -2.115 0.164 l -3.479 -2.977 v 8.674 c 0 0.828 -0.672 1.5 -1.5 1.5 s -1.5 -0.672 -1.5 -1.5 v -8.674 l -3.479 2.976 c -0.632 0.541 -1.577 0.466 -2.115 -0.164 c -0.539 -0.63 -0.465 -1.577 0.164 -2.115 l 5.954 -5.095 c 0.009 -0.008 0.021 -0.01 0.03 -0.018 c 0.027 -0.022 0.053 -0.045 0.081 -0.065 c 0.052 -0.037 0.108 -0.067 0.165 -0.097 c 0.034 -0.018 0.066 -0.039 0.101 -0.055 c 0.021 -0.009 0.044 -0.016 0.066 -0.024 c 0.022 -0.009 0.045 -0.013 0.067 -0.021 c 0.029 -0.01 0.058 -0.02 0.088 -0.027 c 0.023 -0.006 0.046 -0.017 0.069 -0.021 c 0.099 -0.021 0.202 -0.032 0.307 -0.032 c 0 0 0.001 0 0.001 0 c 0 0 0 0 0 0 s 0 0 0 0 s 0 0 0 0 s 0 0 0 0 c 0 0 0.001 0 0.001 0 c 0.105 0 0.208 0.012 0.307 0.032 c 0.024 0.005 0.046 0.015 0.069 0.021 c 0.03 0.008 0.059 0.018 0.088 0.027 c 0.023 0.007 0.045 0.012 0.067 0.021 c 0.022 0.008 0.045 0.015 0.066 0.024 c 0.035 0.015 0.067 0.037 0.1 0.055 c 0.057 0.03 0.113 0.06 0.165 0.097 c 0.028 0.02 0.054 0.043 0.081 0.065 c 0.009 0.008 0.021 0.01 0.03 0.017 l 5.955 5.095 C 82.14 66.378 82.214 67.325 81.675 67.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 63.089 1.483 H 15.755 c -1.551 0 -2.808 1.257 -2.808 2.808 v 81.418 c 0 1.551 1.257 2.808 2.808 2.808 h 58.49 c 1.551 0 2.808 -1.257 2.808 -2.808 V 14.927 L 63.089 1.483 z M 65.896 14.927 c -1.551 0 -2.808 -1.257 -2.808 -2.808 V 1.483 l 13.964 13.444 H 65.896 z M 21.924 18.325 h 22.668 M 21.924 28.215 h 47.294 M 21.924 38.105 h 47.294 M 21.924 47.995 h 47.294 M 21.924 57.885 h 22.668" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 21.924 56.401 c -0.82 0 -1.484 0.664 -1.484 1.484 s 0.664 1.484 1.484 1.484 h 22.668 c 0.819 0 1.484 -0.664 1.484 -1.484 s -0.664 -1.484 -1.484 -1.484 H 21.924 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 21.924 29.698 h 47.294 c 0.819 0 1.484 -0.664 1.484 -1.484 s -0.664 -1.484 -1.484 -1.484 H 21.924 c -0.82 0 -1.484 0.664 -1.484 1.484 S 21.105 29.698 21.924 29.698 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 70.702 47.995 c 0 -0.819 -0.664 -1.484 -1.484 -1.484 H 21.924 c -0.82 0 -1.484 0.664 -1.484 1.484 s 0.664 1.484 1.484 1.484 h 47.294 C 70.038 49.478 70.702 48.814 70.702 47.995 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 21.924 19.808 h 22.668 c 0.819 0 1.484 -0.664 1.484 -1.484 c 0 -0.82 -0.664 -1.484 -1.484 -1.484 H 21.924 c -0.82 0 -1.484 0.664 -1.484 1.484 C 20.441 19.144 21.105 19.808 21.924 19.808 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 75.569 83.678 v 2.031 c 0 0.729 -0.594 1.323 -1.324 1.323 h -58.49 c -0.73 0 -1.324 -0.594 -1.324 -1.323 V 4.291 c 0 -0.73 0.594 -1.324 1.324 -1.324 h 45.851 v 9.153 c 0 2.366 1.925 4.291 4.29 4.291 h 9.673 V 52.02 c 1.021 0.094 2.011 0.289 2.967 0.566 V 14.94 c 0.001 -0.084 -0.006 -0.166 -0.018 -0.248 c 0 0 -0.001 0 -0.001 -0.001 c 0 -0.001 0 -0.001 0 -0.003 v 0 c 0 -0.001 -0.001 -0.002 -0.001 -0.003 c -0.007 -0.042 -0.015 -0.082 -0.026 -0.123 v 0 c -0.001 -0.001 0.002 -0.003 -0.001 -0.003 c 0 -0.002 0 -0.003 -0.001 -0.004 v 0 c -0.066 -0.253 -0.199 -0.489 -0.392 -0.68 l -0.001 0 c 0 0 -0.001 -0.001 -0.001 -0.001 c -0.007 -0.001 -0.002 -0.001 -0.003 -0.002 c 0.003 -0.005 -0.002 -0.002 -0.002 -0.002 c -0.002 -0.001 0.001 -0.001 -0.003 -0.002 c 0.001 -0.001 -0.002 -0.001 -0.002 -0.002 c -0.001 -0.001 -0.002 -0.001 -0.003 -0.002 L 64.118 0.415 c -0.001 -0.001 -0.002 -0.002 -0.003 -0.003 c -0.001 -0.001 -0.002 -0.002 -0.003 -0.003 c -0.201 -0.19 -0.444 -0.317 -0.703 -0.374 c -0.038 -0.008 -0.075 -0.015 -0.113 -0.02 c -0.001 0 -0.001 0 -0.001 0 c -0.002 -0.001 -0.003 0 -0.005 -0.001 c -0.002 0 -0.004 -0.001 -0.004 0 c -0.001 0 -0.003 0 -0.005 0 c -0.002 0 -0.003 -0.001 -0.005 0 c 0 0 -0.001 0 -0.005 -0.001 C 63.207 0.003 63.131 0.003 63.079 0 H 15.755 c -2.366 0 -4.291 1.925 -4.291 4.291 V 85.71 c 0 2.365 1.925 4.29 4.291 4.29 h 58.49 c 2.366 0 4.291 -1.925 4.291 -4.29 v -2.598 C 77.58 83.39 76.59 83.584 75.569 83.678 z M 64.573 4.971 l 8.8 8.473 h -7.477 c -0.729 0 -1.323 -0.594 -1.323 -1.324 V 4.971 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 21.924 39.588 h 47.294 c 0.819 0 1.484 -0.664 1.484 -1.484 c 0 -0.819 -0.664 -1.484 -1.484 -1.484 H 21.924 c -0.82 0 -1.484 0.664 -1.484 1.484 C 20.441 38.924 21.105 39.588 21.924 39.588 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 74.096 54.945 C 81.211 54.945 87 60.734 87 67.849 c 0 7.115 -5.789 12.904 -12.904 12.904 c -7.115 0 -12.904 -5.789 -12.904 -12.904 C 61.193 60.734 66.981 54.945 74.096 54.945 M 74.096 51.945 c -8.783 0 -15.904 7.12 -15.904 15.904 s 7.12 15.904 15.904 15.904 C 82.88 83.753 90 76.632 90 67.849 S 82.88 51.945 74.096 51.945 L 74.096 51.945 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="btn-inner--text">Submit Foto</span>
                            </button>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
            $(document).ready(function(){
                $('#tableHistoryWasis').DataTable({
                    processing:true,
                    serverSide:true,
                    pagination: true,
                    responsive: true,
                    'iDisplayLength': 10,
                    ajax: {
                        url: "{{route('historywasis.listdata')}}",
                        type: 'POST',
                        data: {
                            _token:"{{ csrf_token() }}"
                        },
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'aksi', name: 'aksi', orderable: false, searchable: true},
                        {data: 'tanggal_kirim_wasis', name: 'tanggal_kirim_wasis', orderable: false, searchable: true},
                        {data: 'status_wasis', name: 'status_wasis', orderable: false, searchable: false},
                        {data: 'name', name: 'name', orderable: true, searchable: true},
                        {data: 'foto', name: 'foto', orderable: false, searchable: false},
                        {data: 'nik', name: 'nik', orderable: false, searchable: true},
                        {data: 'city', name: 'city', orderable: false, searchable: true},
                        {data: 'province', name: 'province', orderable: false, searchable: true},
                        {data: 'nama_petugas', name: 'nama_petugas', orderable: false, searchable: true},
                        {data: 'upt', name: 'upt', orderable: false, searchable: true},
                        {data: 'created_by', name: 'created_by', orderable: false, searchable: true,visible:true},
                        {data: 'updated_by', name: 'updated_by', orderable: false, searchable: true, visible:true}
                    ]
                });

                $(document).on("click", ".uploadFoto",function () {
                    var dataID =$(this).data('id');

                    $.ajax({
                        type : 'POST',
                        url : "{{ route('history.datafoto') }}",
                        data: {
                            _token : "{{ csrf_token() }}",
                            id : dataID,
                        },
                        cache : false,
                        success:function(res){
                            $('#nameUser').val(res.data.name);
                            $('#nikUser').val(res.data.nik);
                            $('#LatKoordinator').val(res.data.lat);
                            $('#LongKoordinator').val(res.data.longs);
                        }
                    })
                });

                $(document).on('click','.btnSubmitFoto',function(){
                    let user_name = $('#nameUser').val();
                    let user_nik = $('#nikUser').val();
                    let latitude = $('#LatKoordinator').val();
                    let longitude = $('#LatKoordinator').val();
                    let file_foto = $('#fileFoto')[0].files[0];

                    let form = new FormData();
                    form.append('name', user_name);
                    form.append('nik',user_nik);
                    form.append('latitude',latitude);
                    form.append('longitude',longitude);
                    form.append('foto',file_foto);
                    form.append('_method','PUT');

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val()
                        },
                        method:'POST',
                        url : "{{ route('history.uploadfoto',['id'=>':id']) }}"
                            .replace(':id', $(this).data('id')),
                        data: form,
                        contentType:false,
                        processData:false,
                        cache : false,
                        success:function(res){
                           swal.fire({
                            title: "Good job!~",
                            text: "Data anda sudah berhasil di upload!",
                            icon: "success",
                           }).then((result) => {
                            if(result.isConfirmed) {
                                    location.reload();
                                }
                           })
                        }
                    })
                })
            });
        </script>
    </main>

</x-app-layout>
