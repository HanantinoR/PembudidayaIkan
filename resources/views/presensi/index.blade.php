<x-app-layout>
    <main class="main-content max-height-vh-100 h-100">
        <x-app.navbar :data=$data/>
        <style>
            .webcam-capture
            {
                width: 100% !important;
                height:62vh !important;
            }
            .webcam-capture > video
            {
                width: 100% !important;
                height:100% !important;
            }

            @media screen and (max-width : 576px)
            {
                .webcam-capture
                {
                    width: 100% !important;
                    height:40vh !important;
                }

                .webcam-capture > video
                {
                    max-width: 100% !important;
                    max-height: 40vh !important;
                }
            }
        </style>
        <hr class="my-0">
        <div class="container my-3 py-3 mb-5">
            <div class="row">
                <div class="col">
                    <div class="card shadow-md">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Foto Presensi</h6>
                                    <p class="text-sm mb-sm-0 mb-2">Foto Survey Pendaatan Pembudidaya Ikan</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label>Nama</label>
                                    <div class="mb-3">
                                        <input type="text" id="namaPresensi" name="namaPresensi" class="p-3 mb-2 form-control"
                                            placeholder="Enter your nama" value="" aria-label="Nama"
                                            aria-describedby="nama-addon" oninput="alphanumericAddress(this.value, this.id)">
                                        <span id="error_nama" class="text-danger text-sm" style="display: none"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Nik</label>
                                    <div class="mb-3">
                                        <input type="text" id="nikPresensi" name="nikPresensi" class="p-3 mb-2 form-control"
                                            placeholder="Enter your nik" value="" aria-label="Nik"
                                            aria-describedby="nik-addon" oninput="onlyNumbers(this.value, this.id)">
                                        <span id="error_nik" class="text-danger text-sm" style="display: none"></span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row mx-auto mb-2 mb-sm-0" style="height: 100%;width:100%">
                                        {{-- <div style="position: relative" class="margin">
                                            <video onplay="onPlay(this)" id="inputVideo" autoplay muted></video>
                                            <canvas id="overlay">
                                        </div> --}}
                                        <div id="results" style="display:none"></div>
                                        <input type="hidden" id="resultUri" nama="resultUri">
                                        <div class="webcam-capture"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mx-auto" style="height: 62vh;width:100%">
                                        <input type="hidden" id="lokasiUri" nama="lokasiUri">
                                        <div id="map" style="height: auto; width:100%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0 btnTakePhoto" id="btnTakePhoto">
                                        <span class="btn-inner--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                <defs>
                                                </defs>
                                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                    <path d="M 62.015 90 c -1.373 0 -2.667 -0.708 -3.401 -1.897 L 43.694 63.959 c -0.525 -0.85 -0.713 -1.865 -0.527 -2.847 l 3.336 -17.615 l -17.615 3.335 c -0.981 0.185 -1.998 -0.002 -2.847 -0.527 L 1.897 31.387 c -1.344 -0.831 -2.073 -2.374 -1.861 -3.939 s 1.325 -2.859 2.841 -3.303 l 82 -23.984 c 1.401 -0.409 2.918 -0.023 3.951 1.011 c 1.034 1.034 1.421 2.549 1.011 3.952 l -23.984 82 c -0.443 1.516 -1.737 2.629 -3.303 2.841 C 62.372 89.988 62.192 90 62.015 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 6.146 87.854 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 28.104 -28.104 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 8.975 86.683 C 8.193 87.464 7.17 87.854 6.146 87.854 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 26.44 89.699 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 10.577 -10.577 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 29.269 88.527 C 28.488 89.309 27.464 89.699 26.44 89.699 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 4.301 67.56 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 10.577 -10.577 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 7.129 66.388 C 6.348 67.169 5.325 67.56 4.301 67.56 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Ambil Foto</span>
                                    </button>
                                    <button type="button" class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0 btnPresensi" id="btnPresensi">
                                        <span class="btn-inner--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                <defs>
                                                </defs>
                                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                    <path d="M 62.015 90 c -1.373 0 -2.667 -0.708 -3.401 -1.897 L 43.694 63.959 c -0.525 -0.85 -0.713 -1.865 -0.527 -2.847 l 3.336 -17.615 l -17.615 3.335 c -0.981 0.185 -1.998 -0.002 -2.847 -0.527 L 1.897 31.387 c -1.344 -0.831 -2.073 -2.374 -1.861 -3.939 s 1.325 -2.859 2.841 -3.303 l 82 -23.984 c 1.401 -0.409 2.918 -0.023 3.951 1.011 c 1.034 1.034 1.421 2.549 1.011 3.952 l -23.984 82 c -0.443 1.516 -1.737 2.629 -3.303 2.841 C 62.372 89.988 62.192 90 62.015 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 6.146 87.854 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 28.104 -28.104 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 8.975 86.683 C 8.193 87.464 7.17 87.854 6.146 87.854 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 26.44 89.699 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 10.577 -10.577 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 29.269 88.527 C 28.488 89.309 27.464 89.699 26.44 89.699 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 4.301 67.56 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 10.577 -10.577 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 7.129 66.388 C 6.348 67.169 5.325 67.56 4.301 67.56 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Kirim Absensi</span>
                                    </button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-round bg-gradient-danger btn-lg w-100 mt-4 mb-0 btnTakePhoto" id="btnTakePhoto">
                                        <span class="btn-inner--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                <defs>
                                                </defs>
                                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                    <path d="M 62.015 90 c -1.373 0 -2.667 -0.708 -3.401 -1.897 L 43.694 63.959 c -0.525 -0.85 -0.713 -1.865 -0.527 -2.847 l 3.336 -17.615 l -17.615 3.335 c -0.981 0.185 -1.998 -0.002 -2.847 -0.527 L 1.897 31.387 c -1.344 -0.831 -2.073 -2.374 -1.861 -3.939 s 1.325 -2.859 2.841 -3.303 l 82 -23.984 c 1.401 -0.409 2.918 -0.023 3.951 1.011 c 1.034 1.034 1.421 2.549 1.011 3.952 l -23.984 82 c -0.443 1.516 -1.737 2.629 -3.303 2.841 C 62.372 89.988 62.192 90 62.015 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 6.146 87.854 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 28.104 -28.104 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 8.975 86.683 C 8.193 87.464 7.17 87.854 6.146 87.854 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 26.44 89.699 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 10.577 -10.577 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 29.269 88.527 C 28.488 89.309 27.464 89.699 26.44 89.699 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path d="M 4.301 67.56 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 10.577 -10.577 c 1.563 -1.563 4.095 -1.563 5.657 0 c 1.562 1.562 1.562 4.095 0 5.656 L 7.129 66.388 C 6.348 67.169 5.325 67.56 4.301 67.56 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Kembali</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-app.footer />
        <script>
            $(document).ready(function(){
                $("#btnPresensi").hide();
                function zoomOutMobile() {
                    var viewport = document.querySelector('meta[name="viewport"]');

                    // if (viewport) {
                    //     viewport.content = "initial-scale=0.1";
                    //     viewport.content = "width=1200";
                    // }
                }
                zoomOutMobile();

                Webcam.set({
                    image_format:'jpeg',
                    jpeg_quality: 100,
                });

                Webcam.attach('.webcam-capture');

                var map = L.map('map').fitWorld();
                L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                        maxZoom: 19,
                        attribution: '© OpenStreetMap'
                }).addTo(map);

                if(navigator.geolocation){
                    options = {
                        enableHighAccuracy: true,
                        timeout: 5000,
                        maximumAge: 0,
                    };

                    var geolocation= navigator.geolocation.watchPosition(succesCallback, errorCallback, options);
                }

                function succesCallback(position){
                    console.log(position);
                    let lat = position.coords.latitude;
                    let long = position.coords.longitude;
                    let lokasi = lat +" , "+ long;
                    map.setView([lat,long],18);
                    var marker = L.marker([lat, long]).addTo(map);
                    var circle = L.circle([lat, long], {
                        color: 'red',
                        fillColor: '#f03',
                        fillOpacity: 0.5,
                        radius: 20
                    }).addTo(map);

                    document.getElementById('lokasiUri').value=lokasi;
               }
                function errorCallback(){

                }

                window.setTimeout(function(){
                    navigator.geolocation.clearWatch(geolocation)
                },5000);


                $('#btnTakePhoto').on('click',function(e){
                    $('.webcam-capture').hide();
                    Webcam.snap(function(uri){
                        document.getElementById('results').innerHTML =
                                            '<img src="'+uri+'" style="width:100%; height:100%"/>';
                        document.getElementById('resultUri').value= uri;
                    })
                    $('#results').show();
                    $('#btnTakePhoto').hide();
                    $("#btnPresensi").show();

                });

                $('#btnPresensi').on('click',function(){
                    let namaUser = $('#namaPresensi').val();
                    let nikUser = $('#nikPresensi').val();
                    let image64 = $('#resultUri').val();
                    let lokasiUser = $('#lokasiUri').val();

                    $.ajax({
                        method:'post',
                        url:"{{route('presensi.save')}}",
                        cache:false,
                        data: {
                            _token : "{{ csrf_token() }}",
                            nama : namaUser,
                            nik : nikUser,
                            image : image64,
                            lokasi : lokasiUser
                        },
                        success: function(res) {
                            swal.fire({
                                title: "Success!",
                                text: "Data Berhasil disimpan!",
                                icon: "Success",
                                confirmButtonColor: "#3085d6",
                            }).then((result)=>{
                                if(result.isConfirmed){
                                    window.location.replace('{{ url("/dashboard") }}');
                                }
                            });
                        },
                        error:function(xhr, status,erros){
                            let response = JSON.parse(xhr.responseText);
                            if(response.errors){
                                $.each(response.errors, function(key, value){
                                    console.log(key);
                                    console.log(value[0]);
                                    $('#error_'+key).show().html(value[0]);
                                })
                            }
                            swal.fire({
                                title: "Data Kosong!",
                                text: "Harap Kolom NIK Diisi!",
                                icon: "warning",
                            });
                            $('#resultUri').val('');
                            $('#results>img').prop('src','').hide();
                            $('.webcam-capture').show();
                            $('#btnTakePhoto').show();
                            $("#btnPresensi").hide();
                        }
                    });

                });

                // https://www.jsdelivr.com/package/npm/face-api.js#id-face-api.js-for-the-browser


            });

            function onlyNumbers(angka, id) {
                // Replace regex '/[^0-9]/g'
                angka = angka.replace(/[^0-9]/g, '');

                // Set to HTML
                var inputResult = document.getElementById(id);
                inputResult.value = angka;
            }

            function alphanumericAddress(text, id) {
                // Replace regex '/[^ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789,.@ ]/g'
                text = text.replace(/[^ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\,\.\ ]/g, '');

                // Set to HTML
                var inputResult = document.getElementById(id);
                inputResult.value = text;
            }
            // const options = new faceapi.MtcnnOptions(mtcnnParams);
            // const input = document.getElementById('inputVideo');
            // const fullFaceDescriptions = await faceapi.detectAllFaces(input, options).withFaceLandmarks().withFaceDescriptors();
        </script>
    </main>
</x-app-layout>
