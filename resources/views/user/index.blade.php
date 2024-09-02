<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <style>
            @media screen and (max-width :576px) {
                .text-end > a > span {
                    display: none;
                }
            }
        </style>
        <x-app.navbar :data=$data/>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-12">
                    {{-- <div class="alert alert-dark text-sm" role="alert">
                        <strong>Add, Edit, Delete features are not functional!</strong> This is a
                        <strong>PRO</strong> feature ! Click <a href="#" target="_blank" class="text-bold">here</a>
                        to see the <strong>PRO</strong> product!
                    </div> --}}
                    <div class="card">
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">User Management</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{route('management.add')}}" class="btn btn-dark btn-primary">
                                        <i class="fas fa-user-plus me-2"></i>
                                        <span>Tambah User</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert" id="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert" id="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-secondary text-center" id="tableManagement">
                                    <thead>
                                        <tr>
                                            <th class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                                NO</th>
                                            <th class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                                Nama</th>
                                            <th class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                                Username</th>
                                            <th class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                                Role</th>
                                            <th class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                                Daerah</th>
                                            <th class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                                Action</th>
                                            <th class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                                detail waktu</th>
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
        </div>

        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                      <h3 class="font-weight-bolder text-dark">Edit Data User</h3>
                      {{-- <p class="mb-0">Silahkan Upload foto User</p> --}}
                    </div>
                    <div class="card-body">
                        <form role="form text-left" id="">
                            @csrf
                            <label>Nama</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nama" name="nameUser" id="nameUser" readonly>
                            </div>
                            <label>Email</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email" name="emailUser" id="emailUser">
                            </div>
                            <label>Role</label>
                            <div class="input-group mb-3">
                                <select class="p-2" name="roleInput" id="roleTable" style="width:100%; padding:2px">
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="User">User</option>
                                    <option value="Surveyor">Surveyor</option>
                                </select>
                            </div>
                            <label>Daerah</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Daerah" name="daerahUser" id="daerahUser">
                            </div>
                            <label>Password</label>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" placeholder="password" name="passwordUser" id="passwordUser">
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0 btnSubmitEdit">
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
        <x-app.footer />
    </main>

</x-app-layout>

{{-- <script src="/assets/js/plugins/datatables.js"></script> --}}
<script>
     function deletedata(id) {
            Swal.fire({
                title: "Yakin Untuk Menghapus Data?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus datanya!"
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Dihapus!",
                        text: "Data Yang Dipilih Berhasil Di Hapus.",
                        icon: "success"
                        }).then((hehe) => {
                            $.ajax({
                            type : 'POST',
                            url : "{{ route('management.delete',['id'=>':id']) }}"
                            .replace(':id', id),
                            data: {
                                _token : "{{ csrf_token() }}",
                                id : id,
                            },
                            cache : false,
                            success : function(respond){
                                if (respond == 0){
                                    window.location.replace('{{ route("management") }}');
                                }else{
                                    alert(error);
                                }
                            }
                        });
                    });
                }
            });
        };
    $(document).ready(function(){
        $('#roleInput').select2({
            width: 'resolve',
            theme: "classic"
        });

        $('#tableManagement').DataTable({
            processing: true,
            serverSide: true,
            lengthMenu: [
                10, 25, 50,
                { label: 'All', value: -1 }
                ],
            ajax: {
                url: "{{ route('management.listdata') }}",
                type: 'POST',
                data: {
                    _token:"{{ csrf_token() }}"
                },
            },
            columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {
                            data: 'nama',
                            name: 'nama',
                            orderable: false,
                            searchable: true,
                            // render:function(data, type, row, meta){
                            //     return row.nik_user_input;
                            // }
                        },
                        {
                            data: 'email',
                            name: 'email',
                            orderable: false,
                            searchable: false,
                            // render:function(data,type,row,meta){
                            //     return row.foto;
                            // }

                        },
                        {
                            data: 'role',
                            name: 'role',
                            orderable: true,
                            searchable: true,
                            // render:function(data,type,row,meta){
                            //     return row.location_in;
                            // }
                        },
                        {
                            data: 'daerah',
                            name: 'daerah',
                            orderable: true,
                            searchable: true,
                            // render:function(data,type,row,meta){
                            //     return row.location_in;
                            // }
                        },
                        {
                            data: 'aksi',
                            name: 'aksi',
                            orderable: false,
                            searchable: false,

                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            orderable: true,
                            searchable: true,
                            visible:false
                            // render:function(data,type,row,meta){
                            //     return row.created_at;
                            // }
                        },
                    ],
                    columnDefs: [
                        { className: 'dt-center', targets: '_all' },
                    ],
        });

        $(document).on("click", ".detailUser",function () {
            var dataID =$(this).data('id');

            $.ajax({
                type : 'POST',
                url : "{{ route('management.datauser') }}",
                data: {
                    _token : "{{ csrf_token() }}",
                    id : dataID,
                },
                cache : false,
                success:function(res){
                    $('#nameUser').val(res.data.nama);
                    $('#emailUser').val(res.data.email);
                    $("#roleTable").val(res.data.role).change();
                    $('#daerahUser').val(res.data.daerah);
                    $('.btnSubmitEdit').attr('data-id',dataID);
                }
            })
        });

        $(document).on('click','.btnSubmitEdit',function(){
            var dataID =$(this).data('id');

            let user_name = $('#nameUser').val();
            let user_email = $('#emailUser').val();
            let user_role = $('#roleTable').val();
            let user_daerah = $('#daerahUser').val();
            let user_password = $('#passwordUser').val()

            let form = new FormData();
            form.append('name', user_name);
            form.append('nik',user_email);
            form.append('role',user_role);
            form.append('daerah',user_daerah);
            form.append('password',user_password);
            form.append('_method','PUT');

            Swal.fire({
                title: "Apakah Anda Yakin ?!",
                icon: "warning",
                showDenyButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val()
                        },
                        method:'POST',
                        url : "{{ route('management.update',['id'=>':id']) }}"
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
                    });
                } else if (result.isDenied) {
                    Swal.fire("Data tidak disimpan", "", "info");
                }
            });

        });



    });
</script>
