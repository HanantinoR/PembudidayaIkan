<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar :data=$data/>
        <div class="container-fluid py-4 px-5 mb-5">
            <div class="row">
                <div class="col">
                    <div class="card shadow-xs border">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">CHECK DATA SEBELUM KIRIM WASIS</h6>
                                    <p class="text-sm mb-sm-0 mb-2">Upload Foto Survey Pendaatan Pembudidaya Ikan</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" >
                            <form action="" id="form_wasis">
                                @csrf
                                <div class="msg" id="msg_error"></div>
                                <div class="div">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Nama</label>
                                            <div class="mb-3">
                                                <input type="text" id="nama" name="nama" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your nama" value="{{$checkWasis->name}}" aria-label="Nama"
                                                    aria-describedby="nama-addon" readonly>
                                                @if($checkWasis->name == null || $checkWasis->name == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Nama Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Nama Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('nama')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>NIK</label>
                                            <div class="mb-3">
                                                <input type="text" id="nik" name="nik" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your NIK" value="{{$checkWasis->nik}}" aria-label="NIK"
                                                    aria-describedby="nik-addon" readonly>
                                                @if($checkWasis->nik == null || $checkWasis->nik == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">

                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data NIK Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data NIK Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('nik')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Tanggal Lahir</label>
                                            <div class="mb-3">
                                                <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Tanggal Lahir" value="{{$checkWasis->bod}}" aria-label="Tanggal Lahir"
                                                    aria-describedby="tanggal_lahir-addon" readonly>
                                                @if($checkWasis->bod == null || $checkWasis->bod == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Tanggal Lahir Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Tanggal Lahir Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('bod')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Usia</label>
                                            <div class="mb-3">
                                                <input type="text" id="usia" name="usia" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Age" value="{{$checkWasis->age}}" aria-label="Usia"
                                                    aria-describedby="age-addon" readonly>
                                                @if($checkWasis->age == null || $checkWasis->age == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Usia Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Usia Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('usia')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Agama</label>
                                            <div class="mb-3">
                                                <input type="text" id="agama" name="agama" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Agama" value="{{$checkWasis->religion}}" aria-label="Agama"
                                                    aria-describedby="agama-addon" readonly>
                                                @if($checkWasis->religion == null || $checkWasis->religion == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Agama Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['agama'][strtoupper($checkWasis->religion)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Agama Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('agama')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Gender</label>
                                            <div class="mb-3">
                                                <input type="text" id="gender" name="gender" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your gender" value="{{$checkWasis->gender}}" aria-label="Gender"
                                                    aria-describedby="gender-addon" readonly>
                                                @if($checkWasis->gender == null || $checkWasis->gender == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Gender Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['jenis_kelamin'][strtoupper($checkWasis->gender)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Gender Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('gender')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Pendidikan</label>
                                            <div class="mb-3">
                                                <input type="text" id="pendidikan" name="pendidikan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Pendidikan" value="{{$checkWasis->education}}" aria-label="Pendidikan"
                                                    aria-describedby="pendidikan-addon" readonly>
                                                @if($checkWasis->education == null || $checkWasis->education == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Pendidikan Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['pendidikan'][strtoupper($checkWasis->education)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Pendidikan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('pendidikan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah Anggota Keluarga</label>
                                            <div class="mb-3">
                                                <input type="text" id="anggota_keluarga" name="anggota_keluarga" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah Anggota Keluarga" value="{{$checkWasis->total_family}}" aria-label="Anggota Keluarga"
                                                    aria-describedby="anggota_keluarga-addon" readonly>
                                                @if($checkWasis->total_family == null || $checkWasis->total_family == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Anggota Keluarga Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Anggota Keluarga Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('anggota_keluarga')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Alamat</label>
                                            <div class="mb-3">
                                                <input type="text" id="alamat" name="alamat" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Alamat" value="{{$checkWasis->address}}" aria-label="Alamat"
                                                    aria-describedby="alamat-addon" readonly>
                                                @if($checkWasis->address == null || $checkWasis->address == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Alamat Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Alamat Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('alamat')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kelurahan / Desa</label>
                                            <div class="mb-3">
                                                <input type="text" id="desa" name="desa" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kelurahan / Desa" value="{{$checkWasis->village}}" aria-label="Desa"
                                                    aria-describedby="desa-addon" readonly>
                                                @if($checkWasis->village == null || $checkWasis->village == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kelurahan/Desa Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($lokasi == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->village}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kelurahan/Desa Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('desa')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kecamatan</label>
                                            <div class="mb-3">
                                                <input type="text" id="kecamatan" name="kecamatan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kecamatan" value="{{$checkWasis->district}}" aria-label="Kecamatan"
                                                    aria-describedby="kecamatan-addon" readonly>
                                                @if($checkWasis->district == null || $checkWasis->district == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kecamatan Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($lokasi == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->district}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kecamatan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('kecamatan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kabupaten / Kota</label>
                                            <div class="mb-3">
                                                <input type="text" id="kabupaten" name="kabupaten" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kabupaten / Kota" value="{{$checkWasis->city}}" aria-label="Kabupaten"
                                                    aria-describedby="kabupaten-addon" readonly>
                                                @if($checkWasis->city == null || $checkWasis->city == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kabupaten/Kota Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($lokasi == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->city}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kabupaten/Kota Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('kabupaten')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Provinsi</label>
                                            <div class="mb-3">
                                                <input type="text" id="provinsi" name="provinsi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Provinsi" value="{{$checkWasis->province}}" aria-label="Provinsi"
                                                    aria-describedby="provinsi-addon" readonly>
                                                @if($checkWasis->province == null || $checkWasis->province == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Provinsi Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($lokasi == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->province}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Provinsi Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('provinsi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Latitude</label>
                                            <div class="mb-3">
                                                <input type="text" id="latitude" name="latitude" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Latitude" value="{{$checkWasis->lat}}" aria-label="Latitude"
                                                    aria-describedby="latitude-addon" readonly>
                                                @if($checkWasis->lat == null || $checkWasis->lat == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Latitude Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Latitude Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('latitude')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Longitude</label>
                                            <div class="mb-3">
                                                <input type="text" id="longitude" name="longitude" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Longitude" value="{{$checkWasis->longs}}" aria-label="Longitude"
                                                    aria-describedby="longitude-addon" readonly>
                                                @if($checkWasis->longs == null || $checkWasis->longs == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data longitude Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data longitude Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('longitude')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kelompok</label>
                                            <div class="mb-3">
                                                <input type="text" id="kelompok" name="kelompok" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kelompok" value="{{$checkWasis->groups}}" aria-label="Kelompok"
                                                    aria-describedby="kelompok-addon" readonly>
                                                @if($checkWasis->groups == null || $checkWasis->groups == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kelompok Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($komoditas == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->groups}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Kelompok Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('kelompok')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biota</label>
                                            <div class="mb-3">
                                                <input type="text" id="biota" name="biota" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biota" value="{{$checkWasis->biota}}" aria-label="Biota"
                                                    aria-describedby="biota-addon" readonly>
                                                @if($checkWasis->biota == null || $checkWasis->biota == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biota Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($komoditas == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->biota}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biota Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('biota')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Komoditas</label>
                                            <div class="mb-3">
                                                <input type="text" id="komoditas" name="komoditas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Komoditas" value="{{$checkWasis->commodities}}" aria-label="Komoditas"
                                                    aria-describedby="komoditas-addon" readonly>
                                                @if($checkWasis->commodities == null || $checkWasis->commodities == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Komoditas Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($komoditas == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->commodities}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Komoditas Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('komoditas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jenis Usaha</label>
                                            <div class="mb-3">
                                                <input type="text" id="jenis_usaha" name="jenis_usaha" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jenis Usaha" value="{{$checkWasis->business_type}}" aria-label="Jenis Usaha"
                                                    aria-describedby="jenis_usaha-addon" readonly>
                                                @if($checkWasis->business_type == null || $checkWasis->business_type == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jenis Usaha Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['jenis_usaha'][strtoupper($checkWasis->business_type)]) == False)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->business_type}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jenis Usaha Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('jenis_usaha')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status Kusuka</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_kusuka" name="status_kusuka" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status Kusuka" value="{{$checkWasis->kusuka_status}}" aria-label="Status Kusuka"
                                                    aria-describedby="status_kusuka-addon" readonly>
                                                @if($checkWasis->kusuka_status == null || $checkWasis->kusuka_status == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status Kusuka Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['status_kusuka'][strtoupper($checkWasis->kusuka_status)]) == False)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->kusuka_status}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status Kusuka Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('status_kusuka')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status Kepemilikan</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_kepemilikan" name="status_kepemilikan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status Kepemilikan" value="{{$checkWasis->owner_status}}" aria-label="Status Kepemilikan"
                                                    aria-describedby="status_kepemilikan-addon" readonly>
                                                @if($checkWasis->owner_status == null || $checkWasis->owner_status == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status Kepemilikan Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['status_kepemilikan'][strtoupper($checkWasis->owner_status)]) == False)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->owner_status}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status Kepemilikan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('status_kepemilikan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Luas Area (m2)</label>
                                            <div class="mb-3">
                                                <input type="text" id="luas_area" name="luas_area" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Luas Area" value="{{$checkWasis->area}}" aria-label="Luas Area"
                                                    aria-describedby="luas_area-addon" readonly>
                                                @if($checkWasis->area == null || $checkWasis->area == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Area Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Area Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('luas_area')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Media Pemeliharaan</label>
                                            <div class="mb-3">
                                                <input type="text" id="media_pemeliharaan" name="media_pemeliharaan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Media Pemeliharaan" value="{{$checkWasis->maintenance_media}}" aria-label="Media Pemeliharaan"
                                                    aria-describedby="media_pemeliharaan-addon" readonly>
                                                @if($checkWasis->maintenance_media == null || $checkWasis->maintenance_media == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Media Pemeliharaan Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['media_pemeliharaan'][strtoupper($checkWasis->maintenance_media)]) == False)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->maintenance_media}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Media Pemeliharaan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('media_pemeliharaan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Padat Tebar</label>
                                            <div class="mb-3">
                                                <input type="text" id="padat_tebar" name="padat_tebar" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Padat Tebar" value="{{$checkWasis->padat_tebar}}" aria-label="Padat Tebar"
                                                    aria-describedby="padat_tebar-addon" readonly>
                                                    @if($checkWasis->padat_tebar == null || $checkWasis->padat_tebar == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Padat Tebar Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Padat Tebar Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('padat_tebar')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Teknologi</label>
                                            <div class="mb-3">
                                                <input type="text" id="teknologi" name="teknologi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Teknologi" value="{{$checkWasis->tech}}" aria-label="Teknologi"
                                                    aria-describedby="teknologi-addon" readonly>
                                                @if($checkWasis->tech == null || $checkWasis->tech == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Teknologi Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['teknologi'][strtoupper($checkWasis->tech)]) == False)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->tech}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Teknologi Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('teknologi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Ukuran</label>
                                            <div class="mb-3">
                                                <input type="text" id="ukuran" name="ukuran" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Ukuran" value="{{$checkWasis->size}}" aria-label="Ukuran"
                                                    aria-describedby="ukuran-addon" readonly>
                                                @if($checkWasis->size == null || $checkWasis->size == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Ukuran Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Ukuran Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('ukuran')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Produksi</label>
                                            <div class="mb-3">
                                                <input type="text" id="produksi" name="produksi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Produksi" value="{{$checkWasis->production}}" aria-label="Produksi"
                                                    aria-describedby="produksi-addon" readonly>
                                                @if($checkWasis->production == null || $checkWasis->production == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Data Produksi Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Produksi Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('produksi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Siklus</label>
                                            <div class="mb-3">
                                                <input type="text" id="siklus" name="siklus" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Siklus" value="{{$checkWasis->cycle}}" aria-label="Siklus"
                                                    aria-describedby="siklus-addon" readonly>
                                                @if($checkWasis->cycle == null || $checkWasis->cycle == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Siklus  Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Siklus Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('siklus')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Productivitas</label>
                                            <div class="mb-3">
                                                <input type="text" id="productivitas" name="productivitas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Productivitas" value="{{$checkWasis->productivity}}" aria-label="Productivitas"
                                                    aria-describedby="productivitas-addon" readonly>
                                                @if($checkWasis->productivity == null || $checkWasis->productivity == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Produktivitas Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Produktivitas Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('productivitas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Distribusi</label>
                                            <div class="mb-3">
                                                <input type="text" id="distribusi" name="distribusi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Distribusi" value="{{$checkWasis->distribution}}" aria-label="Distribusi"
                                                    aria-describedby="distribusi-addon" readonly>
                                                @if($checkWasis->distribution == null || $checkWasis->distribution == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Distribusi Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($distribusi == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->distribution}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Distribusi Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('distribusi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Harga Jual</label>
                                            <div class="mb-3">
                                                <input type="text" id="harga_jual" name="harga_jual" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Harga Jual" value="{{$checkWasis->selling_price}}" aria-label="Harga Jual"
                                                    aria-describedby="harga_jual-addon" readonly>
                                                @if($checkWasis->selling_price == null || $checkWasis->selling_price == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Harga Jual Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Harga Jual Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('harga_jual')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Pendapatan</label>
                                            <div class="mb-3">
                                                <input type="text" id="pendapatan" name="pendapatan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your pendapatan" value="{{$checkWasis->income}}" aria-label="Pendapatan"
                                                    aria-describedby="pendapatan-addon" readonly>
                                                @if($checkWasis->income == null || $checkWasis->income == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Pendapatan Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Pendapatan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('pendapatan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jenis Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="jenis_pakan" name="jenis_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jenis Pakan" value="{{$checkWasis->feed_type}}" aria-label="Jenis Pakan"
                                                    aria-describedby="jenis_pakan-addon" readonly>
                                                @if($checkWasis->feed_type == null || $checkWasis->feed_type == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jenis Pakan Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['jenis_pakan'][strtoupper($checkWasis->feed_type)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->feed_type}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jenis Pakan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('jenis_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="jumlah_pakan" name="jumlah_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah Pakan" value="{{$checkWasis->feed_total}}" aria-label="Jumlah Pakan"
                                                    aria-describedby="jumlah_pakan-addon" readonly>
                                                @if($checkWasis->feed_total == null || $checkWasis->feed_total == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jenis Pakan Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jenis Pakan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('jumlah_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Supply</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_supply" name="sumber_supply" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Supply" value="{{$checkWasis->source_supply}}" aria-label="Sumber Supply"
                                                    aria-describedby="sumber_supply-addon" readonly>
                                                @if($checkWasis->source_supply == null || $checkWasis->source_supply == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Supply Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($supply == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->source_supply}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Supply Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('sumber_supply')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Harga Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="harga_pakan" name="harga_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Harga Pakan" value="{{$checkWasis->feed_price}}" aria-label="Harga Pakan"
                                                    aria-describedby="harga_pakan-addon" readonly>
                                                @if($checkWasis->feed_price == null || $checkWasis->feed_price == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Harga Pakan Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Harga Pakan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('harga_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_pakan" name="biaya_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Pakan" value="{{$checkWasis->feed_cost}}" aria-label="Biaya_pakan"
                                                    aria-describedby="biaya_pakan-addon" readonly>
                                                @if($checkWasis->feed_cost == null || $checkWasis->feed_cost == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Pakan Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Pakan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('biaya_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_benih" name="sumber_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Benih" value="{{$checkWasis->sumberBenih}}" aria-label="Sumber Benih"
                                                    aria-describedby="sumber_benih-addon" readonly>
                                                @if($checkWasis->sumberBenih == null || $checkWasis->sumberBenih == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Benih Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($sumber_benih == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->sumberBenih}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Benih Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('sumber_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="jumlah_benih" name="jumlah_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah Benih" value="{{$checkWasis->totalBenih }}" aria-label="Jumlah Benih"
                                                    aria-describedby="jumlah_benih-addon" readonly>
                                                @if($checkWasis->totalBenih == null || $checkWasis->totalBenih == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jumlah Benih Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jumlah Benih Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('jumlah_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Harga Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="harga_benih" name="harga_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Harga Benih" value="{{$checkWasis->benihPrice}}" aria-label="Harga Benih"
                                                    aria-describedby="harga_benih-addon" readonly>
                                                @if($checkWasis->benihPrice == null || $checkWasis->benihPrice == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Harga Benih Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Harga Benih Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('harga_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_benih" name="biaya_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Benih" value="{{$checkWasis->benihCost}}" aria-label="Biaya Benih"
                                                    aria-describedby="biaya_benih-addon" readonly>
                                                @if($checkWasis->benihCost == null || $checkWasis->benihCost == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Benih Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Harga Benih Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('biaya_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah TK</label>
                                            <div class="mb-3">
                                                <input type="text" id="jumlah_tk" name="jumlah_tk" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah TK" value="{{$checkWasis->total_tk}}" aria-label="Jumlah TK"
                                                    aria-describedby="jumlah_tk-addon" readonly>
                                                @if($checkWasis->total_tk == null || $checkWasis->total_tk == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jumlah TK Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jumlah TK Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('jumlah_tk')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Modal</label>
                                            <div class="mb-3">
                                                <input type="text" id="modal" name="modal" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your modal" value="{{$checkWasis->modal}}" aria-label="Modal"
                                                    aria-describedby="modal-addon" readonly>
                                                @if($checkWasis->modal == null || $checkWasis->modal == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Modal Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Modal Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('modal')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Modal</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_modal" name="sumber_modal" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Modal" value="{{$checkWasis->sumberModal}}" aria-label="Sumber Modal"
                                                    aria-describedby="sumber_modal-addon" readonly>
                                                @if($checkWasis->sumberModal == null || $checkWasis->sumberModal == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Modal Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['sumber_modal'][strtoupper($checkWasis->sumberModal)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->sumberModal}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Modal Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('sumber_modal')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Kredit</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_kredit" name="sumber_kredit" class="p-3 mb-2 form-control mb-2"
                                                    placeholder="Enter your Sumber Kredit" value="{{$checkWasis->sumberKredit}}" aria-label="Sumber Kredit"
                                                    aria-describedby="sumber_kredit-addon" readonly>
                                                @if($checkWasis->sumberKredit == null || $checkWasis->sumberKredit == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Kredit Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['sumber_kredit'][strtoupper($checkWasis->sumberKredit)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->sumberModal}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Kredit Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('sumber_kredit')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Pembuatan Media Pemeliharaan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_pembuatan_media_pemeliharaan" name="biaya_pembuatan_media_pemeliharaan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Pembuatan Media Pemeliharaan" value="{{$checkWasis->cost_maintenance_media}}" aria-label="Biaya Pembuatan Media Pemeliharaan"
                                                    aria-describedby="biaya_pembuatan_media_pemeliharaan-addon" readonly>
                                                @if($checkWasis->cost_maintenance_media == null || $checkWasis->cost_maintenance_media == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Pembuatan Media Pemeliharaan Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Pembuatan Media Pemeliharaan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('biaya_pembuatan_media_pemeliharaan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Pembelian Peralatan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_pembelian_peralatan" name="biaya_pembelian_peralatan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Pembelian Peralatan" value="{{$checkWasis->cost_purchase_tools}}}" aria-label="Biaya Pembelian Peralatan"
                                                    aria-describedby="biaya_pembelian_peralatan-addon" readonly>
                                                @if($checkWasis->cost_purchase_tools == null || $checkWasis->cost_purchase_tools == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Pembelian Peralatan Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Pembelian Peralatan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('biaya_pembelian_peralatan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Penyusutan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_penyusutan" name="biaya_penyusutan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Penyusutan" value="{{$checkWasis->biaya_penyusutan}}" aria-label="Biaya Penyusutan"
                                                    aria-describedby="biaya_penyusutan-addon" readonly>
                                                @if($checkWasis->biaya_penyusutan == null || $checkWasis->biaya_penyusutan == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Penyusutan Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Penyusutan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('biaya_penyusutan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Tenaga Kerja</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_tenaga_kerja" name="biaya_tenaga_kerja" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Tenaga Kerja" value="{{$checkWasis->biaya_tenga_kerja}}" aria-label="Biaya Tenaga Kerja"
                                                    aria-describedby="biaya_tenaga_kerja-addon" readonly>
                                                @if($checkWasis->biaya_tenga_kerja == null || $checkWasis->biaya_tenga_kerja == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Tenaga Kerja Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Biaya Tenaga Kerja Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('biaya_tenaga_kerja')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Ipal</label>
                                            <div class="mb-3">
                                                <input type="text" id="ipal" name="ipal" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your ipal" value="{{$checkWasis->ipal}}" aria-label="Ipal"
                                                    aria-describedby="ipal-addon" readonly>
                                                @if($checkWasis->ipal == null || $checkWasis->ipal == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Ipal Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['ada_tidak'][strtoupper($checkWasis->ipal)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->ipal}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Ipal Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('ipal')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Tandon</label>
                                            <div class="mb-3">
                                                <input type="text" id="tandon" name="tandon" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Tandon" value="{{$checkWasis->tandon}}" aria-label="Tandon"
                                                    aria-describedby="tandon-addon" readonly>
                                                @if($checkWasis->tandon == null || $checkWasis->tandon == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data tandon Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['ada_tidak'][strtoupper($checkWasis->tandon)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->tandon}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Tandon Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('tandon')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Green Belt</label>
                                            <div class="mb-3">
                                                <input type="text" id="green_belt" name="green_belt" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Green Belt" value="{{$checkWasis->green_belt}}" aria-label="Green Belt"
                                                    aria-describedby="green_belt-addon" readonly>
                                                @if($checkWasis->green_belt == null || $checkWasis->green_belt == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Green Belt Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['ada_tidak'][strtoupper($checkWasis->green_belt)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->green_belt}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Green Belt Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('green_belt')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jarak ke Bibir Pantai</label>
                                            <div class="mb-3">
                                                <input type="text" id="jarak_ke_bibir_pantai" name="jarak_ke_bibir_pantai" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jarak ke Bibir Pantai" value="{{$checkWasis->jarak_pantai}}" aria-label="Jarak ke Bibir Pantai"
                                                    aria-describedby="jarak_ke_bibir_pantai-addon" readonly>
                                                @if($checkWasis->jarak_pantai == null || $checkWasis->jarak_pantai == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jarak ke Bibir Pantai Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Jarak ke Bibir Pantai Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('jarak_ke_bibir_pantai')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Air</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_air" name="sumber_air" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Air" value="{{$checkWasis->sumber_air}}" aria-label="Sumber Air"
                                                    aria-describedby="sumber_air-addon" readonly>
                                                @if($checkWasis->sumber_air == null || $checkWasis->sumber_air == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Air Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sumber Air Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('sumber_air')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status Izin</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_izin" name="status_izin" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status Izin" value="{{$checkWasis->status_izin}}" aria-label="Status Izin"
                                                    aria-describedby="status_izin-addon" readonly>
                                                @if($checkWasis->status_izin == null || $checkWasis->status_izin == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status Izin Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['perizinan'][strtoupper($checkWasis->status_izin)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->status_izin}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status Izin Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('status_izin')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status NIB</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_nib" name="status_nib" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status NIB" value="{{$checkWasis->status_nib}}" aria-label="Status NIB"
                                                    aria-describedby="status_nib-addon" readonly>
                                                @if($checkWasis->status_nib == null || $checkWasis->status_nib == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status NIB Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['ada_tidak'][strtoupper($checkWasis->status_nib)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->status_nib}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Status NIB Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('status_nib')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Skala Usaha</label>
                                            <div class="mb-3">
                                                <input type="text" id="skala_usaha" name="skala_usaha" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Skala Usaha" value="{{$checkWasis->skala_usaha}}" aria-label="Skala Usaha"
                                                    aria-describedby="skala_usaha-addon" readonly>
                                                @if($checkWasis->skala_usaha == null || $checkWasis->skala_usaha == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Skala Usaha Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['skala_usaha'][strtoupper($checkWasis->skala_usaha)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->skala_usaha}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Skala Usaha Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('skala_usaha')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Asuransi</label>
                                            <div class="mb-3">
                                                <input type="text" id="asuransi" name="asuransi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Asuransi" value="{{$checkWasis->asuransi}}" aria-label="Asuransi"
                                                    aria-describedby="asuransi-addon" readonly>
                                                @if($checkWasis->asuransi == null || $checkWasis->asuransi == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Asuransi Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['asuransi'][strtoupper($checkWasis->asuransi)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->asuransi}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Asuransi Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('asuransi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Bantuan</label>
                                            <div class="mb-3">
                                                <input type="text" id="bantuan" name="bantuan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Bantuan" value="{{$checkWasis->bantuan}}" aria-label="Bantuan"
                                                    aria-describedby="bantuan-addon" readonly>
                                                @if($checkWasis->bantuan == null || $checkWasis->bantuan == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Bantuan Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['bantuan'][strtoupper($checkWasis->bantuan)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->bantuan}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Bantuan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('bantuan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Penghargaan</label>
                                            <div class="mb-3">
                                                <input type="text" id="penghargaan" name="penghargaan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Penghargaan" value="{{$checkWasis->penghargaan}}" aria-label="Penghargaan"
                                                    aria-describedby="penghargaan-addon" readonly>
                                                @if($checkWasis->penghargaan == null || $checkWasis->penghargaan == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Penghargaan Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['ada_tidak'][strtoupper($checkWasis->penghargaan)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->penghargaan}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Penghargaan Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('penghargaan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Dukungan Pemda</label>
                                            <div class="mb-3">
                                                <input type="text" id="dukungan_pemda" name="dukungan_pemda" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Dukungan Pemda" value="{{$checkWasis->dukungan_pemda}}" aria-label="Dukungan Pemda"
                                                    aria-describedby="dukungan_pemda-addon" readonly>
                                                @if($checkWasis->dukungan_pemda == null || $checkWasis->dukungan_pemda == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Dukungan Pemda Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['dukungan_pemda'][strtoupper($checkWasis->dukungan_pemda)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->dukungan_pemda}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Dukungan Pemda Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('dukungan_pemda')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Dukungan Pusat</label>
                                            <div class="mb-3">
                                                <input type="text" id="dukungan_pusat" name="dukungan_pusat" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Dukungan Pusat" value="{{$checkWasis->dukungan_pusat}}" aria-label="Dukungan Pusat"
                                                    aria-describedby="dukungan_pusat-addon" readonly>
                                                @if($checkWasis->dukungan_pusat == null || $checkWasis->dukungan_pusat == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Dukungan Pusat Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['dukungan_pusat'][strtoupper($checkWasis->dukungan_pusat)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->dukungan_pusat}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Dukungan Pusat Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('dukungan_pusat')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Nama Penyuluh</label>
                                            <div class="mb-3">
                                                <input type="text" id="nama_penyuluh" name="nama_penyuluh" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Nama Penyuluh" value="{{$checkWasis->nama_penyuluh}}" aria-label="Nama Penyuluh"
                                                    aria-describedby="nama_penyuluh-addon" readonly>
                                                @if($checkWasis->nama_penyuluh == null || $checkWasis->nama_penyuluh == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Nama Penyuluh Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Nama Penyuluh Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('nama_penyuluh')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sertifikat</label>
                                            <div class="mb-3">
                                                <input type="text" id="sertifikat" name="sertifikat" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sertifikat" value="{{$checkWasis->sertifikat}}" aria-label="Sertifikat"
                                                    aria-describedby="sertifikat-addon" readonly>
                                                @if($checkWasis->sertifikat == null || $checkWasis->sertifikat == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sertifikat Tidak Lengkap</strong>
                                                    </div>
                                                @elseif(isset($staticValue['sertifikat'][strtoupper($checkWasis->sertifikat)]) == false)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->sertifikat}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Sertifikat Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('sertifikat')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Nama Petugas</label>
                                            <div class="mb-3">
                                                <input type="text" id="nama_petugas" name="nama_petugas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Nama Petugas" value="{{$checkWasis->nama_petugas}}" aria-label="Nama Petugas"
                                                    aria-describedby="nama_petugas-addon" readonly>
                                                @if($checkWasis->nama_petugas == null || $checkWasis->nama_petugas == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Nama Petugas Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($petugas == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->nama_petugas}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data Nama Petugas Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('nama_petugas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6 col-sm-6 col-12">
                                            <label>NIK Petugas</label>
                                            <div class="mb-3">
                                                <input type="text" id="nik_petugas" name="nik_petugas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your NIK Petugas" value="{{$checkWasis->nik_petugas}}" aria-label="NIK Petugas"
                                                    aria-describedby="nik_petugas-addon" readonly>
                                                @if($checkWasis->nik_petugas == null || $checkWasis->nik_petugas == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data NIK Petugas Tidak Lengkap</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data NIK Petugas Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('nik_petugas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>UPT</label>
                                            <div class="mb-3">
                                                <input type="text" id="upt" name="upt" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your UPT" value="{{$checkWasis->upt}}" aria-label="UPT"
                                                    aria-describedby="upt-addon" readonly>
                                                @if($checkWasis->upt == null || $checkWasis->upt == "null")
                                                    <div class="alert alert-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 24.959 68.04 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 40.081 -40.081 c 1.172 -1.172 3.07 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 L 27.081 67.161 C 26.495 67.747 25.727 68.04 24.959 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 65.04 68.04 c -0.768 0 -1.535 -0.293 -2.121 -0.879 L 22.838 27.081 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.171 -1.172 3.071 -1.172 4.242 0 l 40.081 40.081 c 1.172 1.171 1.172 3.071 0 4.242 C 66.575 67.747 65.808 68.04 65.04 68.04 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data UPT Tidak Lengkap</strong>
                                                    </div>
                                                @elseif($petugas == 0)
                                                    <div class="alert alert-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class=" me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 45 57.469 L 45 57.469 c -1.821 0 -3.319 -1.434 -3.399 -3.252 L 38.465 23.95 c -0.285 -3.802 2.722 -7.044 6.535 -7.044 h 0 c 3.813 0 6.82 3.242 6.535 7.044 l -3.137 30.267 C 48.319 56.036 46.821 57.469 45 57.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <circle cx="45" cy="67.67" r="5.42" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 136, 0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                            </svg>
                                                        <strong> Data {{$checkWasis->upt}} Tidak Ditemukan di Database Wasis</strong>
                                                    </div>
                                                @else
                                                    <div class="alert alert-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                                <path d="M 89.328 2.625 L 89.328 2.625 c -1.701 -2.859 -5.728 -3.151 -7.824 -0.568 L 46.532 45.173 c -0.856 1.055 -2.483 0.997 -3.262 -0.115 l -8.382 -11.97 c -2.852 -4.073 -8.789 -4.335 -11.989 -0.531 l 0 0 c -2.207 2.624 -2.374 6.403 -0.408 9.211 l 17.157 24.502 c 2.088 2.982 6.507 2.977 8.588 -0.011 l 4.925 -7.07 L 89.135 7.813 C 90.214 6.272 90.289 4.242 89.328 2.625 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(136,209,9); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 6.072 0 11.967 1.19 17.518 3.538 c 2.034 0.861 2.986 3.208 2.125 5.242 c -0.859 2.035 -3.207 2.987 -5.242 2.126 C 54.842 8.978 49.996 8 45 8 C 24.598 8 8 24.598 8 45 c 0 20.402 16.598 37 37 37 c 20.402 0 37 -16.598 37 -37 c 0 -3.248 -0.42 -6.469 -1.249 -9.573 c -0.57 -2.134 0.698 -4.327 2.832 -4.897 c 2.133 -0.571 4.326 0.698 4.896 2.833 C 89.488 37.14 90 41.055 90 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,117,117); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                            </g>
                                                        </svg>
                                                        <strong> Data UPT Lengkap</strong>
                                                    </div>
                                                @endif
                                                @error('upt')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="submitField">
                                                <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0 btnSubmitWasis" id="submitWasis">
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
                                                    <span class="btn-inner--text">Kirim Data ke Wasis</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-round bg-gradient-warning btn-lg w-100 mt-4 mb-0 btnSubmitWasis" id="cancleBtn">
                                                kembali
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        </div>
                    </div>
                </div>
            </div>
            {{-- {{dd($checkWasis)}} --}}
            <x-app.footer />
        </div>
        <script>
            $(document).ready(function(){

                if($('.alert-danger').length>0){
                    $('#msg_error').append(`
                        <div class="alert alert-danger mb-5 p2 text-center">
                            <strong>
                                !!Ada Data Yang Tidak Valid / Belum Diisi, Data Tidak Bisa Dikirim Ke Wasis! Lakukan Hapus Data Dan Upload Excel Kembali Untuk Data Ini!!
                            </strong>
                        </div>
                    `);

                    $('#submitWasis').html(`
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 45 0 c -3.974 0 -7.207 3.233 -7.207 7.207 v 55.992 c 0 3.974 3.233 7.207 7.207 7.207 c 3.974 0 7.207 -3.233 7.207 -7.207 V 7.207 C 52.207 3.233 48.974 0 45 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <circle cx="44.997" cy="82.797" r="7.207" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            </g>
                        </svg>
                        Terdapat Data Yang Salah! Tidak Dapat Kirim Ke Wasis!
                    `);
                    $('#submitWasis').attr('disabled',true);
                    $('#submitWasis').removeClass('bg-gradient-info').addClass('bg-gradient-danger');
                }

                $('#submitWasis').click(function(){
                    let data_id = {{$checkWasis->id}};
                    let form = new FormData($('#form_wasis')[0]);
                    console.log(data_id);

                    Swal.fire({
                        title: "Apakah Anda Yakin ?!",
                        icon: "warning",
                        showDenyButton: true,
                        confirmButtonText: "Kirim",
                        denyButtonText: "Kembali"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                                },
                                method:'POST',
                                url : "{{route('history.sendwasis',['id'=>':id'])}}".replace(':id',data_id),
                                data: form,
                                contentType:false,
                                processData:false,
                                cache : false,
                                beforeSend:function(){
                                    swal.fire({
                                        title: "Mohon Menunggu",
                                        text: "Proses Sedang Berjalan...",
                                        allowOutsideClick: false,
                                        allowEscapeKey: false,
                                        allowEnterKey: false,
                                        showConfirmButton: false,
                                        showCancelButton: false,
                                        onOpen: () => {
                                            Swal.showLoading();
                                        }
                                    });
                                },
                                success:function(res){
                                    $response = JSON.parse(res);
                                    console.log(JSON.parse(res)['status']);

                                    if($response['status'] == 200 )
                                    {
                                        swal.fire({
                                            title: "Good job!~",
                                            text: "Data anda sudah berhasil di tambahkan!",
                                            icon: "success",
                                        }).then((result) => {
                                            if(result.isConfirmed) {
                                                location.href='/historyinput';
                                            }
                                        });
                                    } else {
                                        Swal.hideLoading();
                                        swal.fire({
                                            title: "Error!~",
                                            text: $response['message'],
                                            icon: "error",
                                        })
                                    }

                                },
                                error:function(err)
                                {
                                    console.log(err);
                                }
                            });
                        }
                    });
                })

                $('#cancleBtn').click(function(){
                    window.location.href = '/historyinput'
                });
            });
        </script>
    </main>

</x-app-layout>
