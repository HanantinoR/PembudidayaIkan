<x-app-layout>

    <main class="main-content max-height-vh-100 h-100">
        <x-app.navbar :data=$data/>
        {{-- <div class="pt-5 pb-6 bg-cover" style="background-image: url('../assets/img/header-blue-purple.jpg')"></div> --}}
        <hr class="my-0">
        <div class="container my-3 py-3">
            <div class="row mb-3">
                <div class="col">
                    <div class="card shadow-xs border">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Pembesaran Survey</h6>
                                    <p class="text-sm mb-sm-0 mb-2">Upload Dokument Hasil Survey</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <button type="button" class="btn btn-primary  d-flex align-items-center mb-0 uploadSurveyBtn" id="uploadSurvey">
                                        <span class="btn-inner--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                <defs>
                                                </defs>
                                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                    <path d="M 71.361 35.557 C 69.67 23.59 59.257 14.281 46.916 14.281 h -3.832 c -12.341 0 -22.753 9.309 -24.444 21.276 C 8.234 36.311 0 45.018 0 55.611 c 0 11.087 9.02 20.107 20.107 20.107 h 15.428 c 1.657 0 3 -1.343 3 -3 s -1.343 -3 -3 -3 H 20.107 C 12.329 69.719 6 63.391 6 55.611 s 6.329 -14.107 14.107 -14.107 h 1.297 c 1.631 0 2.963 -1.303 3 -2.934 c 0.221 -10.084 8.601 -18.289 18.68 -18.289 h 3.832 c 10.078 0 18.459 8.205 18.681 18.289 c 0.035 1.631 1.368 2.934 2.999 2.934 h 1.297 C 77.672 41.504 84 47.832 84 55.611 s -6.328 14.107 -14.107 14.107 H 55.419 C 51.328 69.719 48 66.391 48 62.3 V 47.425 l 3.268 3.268 c 0.586 0.586 1.354 0.879 2.121 0.879 s 1.535 -0.293 2.121 -0.879 c 1.172 -1.171 1.172 -3.07 0 -4.242 l -8.386 -8.386 c -0.543 -0.545 -1.294 -0.882 -2.124 -0.882 c -0.827 0 -1.576 0.335 -2.118 0.876 c -0.001 0.001 -0.002 0.002 -0.003 0.003 L 34.49 46.45 c -1.171 1.172 -1.171 3.071 0 4.242 c 1.171 1.172 3.071 1.172 4.243 0 L 42 47.425 V 62.3 c 0 7.399 6.02 13.419 13.419 13.419 h 14.474 C 80.979 75.719 90 66.698 90 55.611 C 90 45.018 81.765 36.312 71.361 35.557 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                                </svg>
                                        </span>
                                        <span class="btn-inner--text ">Upload Excel</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="file" class="form-control" id="excelSurvey" name="excelSurvey" style="height:auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow-xs border">
                        @if (session('message'))
                            <div class="alert alert-warning">{{ session('message') }}</div>
                        @endif
                        @session('success')
                            <div class="alert alert-success" role="alert">
                                {{ $value }}
                            </div>
                        @endsession
                        @if ($errors->any())
                            <div class="notif alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div class="">
                                    <h6 class="font-weight-semibold text-lg mb-0">Tabel Survey Dari Excel</h6>
                                </div>
                                <div class="ms-auto d-flex">
                                    <div class="" id="submitBtn"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="row">
                                <div class="col">
                                    <form action="{{route('pembesaran.savesurvey')}}" method="POST" enctype="multipart/form-data" name="submitHasilSurvey" id="submitHasilSurvey">
                                        @csrf
                                        <div class="table-responsive">
                                            <table class="table align-items-center justify-content-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                            <div class="resizable-column" style="min-width:70px;" >No.</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 ps-2 px-1">
                                                            <div class="resizable-column" style="min-width:200px;">Nama</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 ps-2 px-1">
                                                            <div class="resizable-column" style="min-width:200px;">NIK</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                            <div class="resizable-column" style="min-width:200px;">Tanggal Lahir</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                            <div class="resizable-column" style="min-width:70px;">Usia</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                            <div class="resizable-column" style="min-width:100px;">Agama</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                            <div class="resizable-column" style="min-width:100px;">Gender</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                            <div class="resizable-column" style="min-width:100px;">Pendidikan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-10 px-1">
                                                            <div class="resizable-column" style="min-width:100px; max-width: 150px; white-space:break-spaces;">Jumlah Anggota Keluarga</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Alamat</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Kelurahan / Desa </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Kecamatan </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Kabupaten / Kota </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Provinsi </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:150px;">Latitude </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:150px;">Longitude </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Kelompok </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Biota </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Komoditas </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Jenis Usaha </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Status Kusuka </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Staus Kepemilikan </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:70px;">Luas Area (m2) </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Media Pemeliharaan </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:100px; max-width: 150px; white-space:break-spaces;">PADAT TEBAR (untuk usaha pembesaran) (ekor/m2) </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">TEKNOLOGI </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:70px;">Ukuran </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:70px;">ProdukSI </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:70px;">Siklus </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:150px;">Produktivitas </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Distribusi </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Harga Jual </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Pendapatan </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Jenis Pakan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:100px;">Jumlah Pakan </div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Sumber Supply</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Harga Pakan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Biaya Pakan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Sumber Benih</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Jumlah Benih</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Harga Benih</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Biaya Benih</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Jumlah TK</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Modal</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Sumber Modal</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Sumber Kredit</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Biaya Pembuatan Media Pemeliharaan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Biaya Pemberlian Peralatan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Biaya Pentusutan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Biaya Tenaga Kerja</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Ipal</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Tandon</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Green Belt</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Jarak Ke Bibir Pantai</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Sumber Air</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Status Izin</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Status NIB</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Skala Usaha</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Asuransi</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Bantuan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Penghargaan</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Dukungan Pemda</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Dukungan Pusat</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Nama Penyuluh</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Sertifikat</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">Nama Petugas</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">NIK</div></th>
                                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bold opacity-7 px-1" >
                                                            <div class="resizable-column" style="min-width:200px;">UPT</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="bodyTableSurvey"></tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <div class="" id=""></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
        <script>
             $(document).ready(function(){
                $("#uploadSurvey").on('click', function(event){
                    uploadFile();
                });

                var timeout = 5000;
                setTimeout(function(){
                    $('.notif').remove();
                }, timeout);
            });

            async function uploadFile(){

                let formData = new FormData();
                let token = $("[name=_token]").val();
                formData.append("file", excelSurvey.files[0]);
                formData.append("_token",token);

                if($('#excelSurvey')[0].files.length == 0){
                    Swal.fire({
                        icon: 'warning',
                        title: "Peringatan",
                        html: "File Excel Anda Kosong",
                        allowOutsideClick: true,
                    });
                } else {
                    $('#uploadSurvey').prop('disabled', true);

                    Swal.fire({
                        icon: 'info',
                        title: "Mohon tunggu",
                        html: "File Excel Anda sedang diupload...",
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    $.ajax({
                        async:true,
                        data: formData,
                        type : "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        url : "{{route('pembesaran.addsurvey')}}",
                        success:function(res)
                        {
                            Swal.close();
                            $('#uploadSurvey').prop('disabled', false);
                            $('#bodyTableSurvey').empty();
                            for(let index = 0; index<res.length; index++)
                            {
                                $("#bodyTableSurvey").append(
                                    '<tr>'+
                                        '<td>'+
                                            (index +1) +
                                        '. </td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="nama[]" name="nama[]">' +
                                            res[index]['name'] + '</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="nik[]" name="nik[]">' +
                                            res[index]['nik'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="bod[]" name="bod[]">' +
                                            res[index]['BoD'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="age[]" name="age[]">' +
                                            res[index]['age'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="religion[]" name="religion[]">' +
                                            res[index]['religion'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="gender[]" name="gender[]">' +
                                            res[index]['gender'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="education[]" name="education[]">' +
                                            res[index]['education'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="totalFamily[]" name="totalFamily[]">' +
                                            res[index]['totalFamily'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="address[]" name="address[]">' +
                                            res[index]['address'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="village[]" name="village[]">' +
                                            res[index]['village'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="district[]" name="district[]">' +
                                            res[index]['district'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="city[]" name="city[]">' +
                                            res[index]['city'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="province[]" name="province[]">' +
                                            res[index]['province'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea class="form form-control" id="lat[]" name="lat[]">' +
                                            res[index]['lat'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea class="form form-control" id="long[]" name="long[]">' +
                                            res[index]['long'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="group[]" name="group[]">' +
                                            res[index]['group'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="biota[]" name="biota[]">' +
                                            res[index]['biota'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="commodities[]" name="commodities[]">' +
                                            res[index]['commodities'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="businessType[]" name="businessType[]">' +
                                            res[index]['businessType'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="kusukaStatus[]" name="kusukaStatus[]">' +
                                            res[index]['kusukaStatus'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="ownerStatus[]" name="ownerStatus[]">' +
                                            res[index]['ownerStatus'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="Area[]" name="Area[]">' +
                                            res[index]['Area'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="maintenanceMedia[]" name="maintenanceMedia[]">' +
                                            res[index]['maintenanceMedia'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="padatTebar[]" name="padatTebar[]">' +
                                            res[index]['padatTebar'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="tech[]" name="tech[]">' +
                                            res[index]['tech'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="size[]" name="size[]">' +
                                            res[index]['size'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="production[]" name="production[]">' +
                                            res[index]['production'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="cycle[]" name="cycle[]">' +
                                            res[index]['cycle'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="productivity[]" name="productivity[]">' +
                                            res[index]['productivity'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="distribution[]" name="distribution[]">' +
                                            res[index]['distribution'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="sellingPrice[]" name="sellingPrice[]">' +
                                            res[index]['sellingPrice'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="income[]" name="income[]">' +
                                            res[index]['income'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="feedType[]" name="feedType[]">' +
                                            res[index]['feedType'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="feedTotal[]" name="feedTotal[]">' +
                                            res[index]['feedTotal'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="source_supply[]" name="source_supply[]">' +
                                            res[index]['source_supply'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="feed_price[]" name="feed_price[]">' +
                                            res[index]['feed_price'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="feed_cost[]" name="feed_cost[]">' +
                                            res[index]['feed_cost'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="sumber_benih[]" name="sumber_benih[]">' +
                                            res[index]['sumber_benih'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="total_benih[]" name="total_benih[]">' +
                                            res[index]['total_benih'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="benih_price[]" name="benih_price[]">' +
                                            res[index]['benih_price'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="benih_cost[]" name="benih_cost[]">' +
                                            res[index]['benih_cost'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="total_tk[]" name="total_tk[]">' +
                                            res[index]['total_tk'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="modal[]" name="modal[]">' +
                                            res[index]['modal'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="sumber_modal[]" name="sumber_modal[]">' +
                                            res[index]['sumber_modal'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="sumber_kredit[]" name="sumber_kredit[]">' +
                                            res[index]['sumber_kredit'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="cost_maintenance_media[]" name="cost_maintenance_media[]">' +
                                            res[index]['cost_maintenance_media'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="cost_purchase_tools[]" name="cost_purchase_tools[]">' +
                                            res[index]['cost_purchase_tools'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="biaya_penyusutan[]" name="biaya_penyusutan[]">' +
                                            res[index]['biaya_penyusutan'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="biaya_tenga_kerja[]" name="biaya_tenga_kerja[]">' +
                                            res[index]['biaya_tenga_kerja'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="ipal[]" name="ipal[]">' +
                                            res[index]['ipal'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="tandon[]" name="tandon[]">' +
                                            res[index]['tandon'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="green_belt[]" name="green_belt[]">' +
                                            res[index]['green_belt'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="jarak_pantai[]" name="jarak_pantai[]">' +
                                            res[index]['jarak_pantai'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="sumber_air[]" name="sumber_air[]">' +
                                            res[index]['sumber_air'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="status_izin[]" name="status_izin[]">' +
                                            res[index]['status_izin'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="status_nib[]" name="status_nib[]">' +
                                            res[index]['status_nib'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="skala_usaha[]" name="skala_usaha[]">' +
                                            res[index]['skala_usaha'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="asuransi[]" name="asuransi[]">' +
                                            res[index]['asuransi'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="bantuan[]" name="bantuan[]">' +
                                            res[index]['bantuan'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="penghargaan[]" name="penghargaan[]">' +
                                            res[index]['penghargaan'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="dukungan_pemda[]" name="dukungan_pemda[]">' +
                                            res[index]['dukungan_pemda'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="dukungan_pusat[]" name="dukungan_pusat[]">' +
                                            res[index]['dukungan_pusat'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="nama_penyuluh[]" name="nama_penyuluh[]">' +
                                            res[index]['nama_penyuluh'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="sertifikat[]" name="sertifikat[]">' +
                                            res[index]['sertifikat'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="nama_petugas[]" name="nama_petugas[]">' +
                                            res[index]['nama_petugas'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="nik_petugas[]" name="nik_petugas[]">' +
                                            res[index]['nik_petugas'] +'</textarea>' +
                                        '</td>'+
                                        '<td>'+
                                            '<textarea required class="form form-control" id="upt[]" name="upt[]">' +
                                            res[index]['upt'] +'</textarea>' +
                                        '</td>'+
                                    +'</tr>'
                                )

                            }
                            if (res.length == 0) {
                                $("#submitBtn").empty();
                            } else {
                                $("#submitBtn").append(
                                    `<button class="btn btn-primary  d-flex align-items-center mb-0 " type="submit" form="submitHasilSurvey">
                                        <span class="btn-inner--icon me-2">
                                            <i class="fas fa-paper-plane me-2"></i>
                                        </span>
                                        <span class="btn-inner--text ">Simpan</span>
                                    </button>`
                                    );
                            }
                        }
                    });
                }


            }
        </script>
    </main>

</x-app-layout>
