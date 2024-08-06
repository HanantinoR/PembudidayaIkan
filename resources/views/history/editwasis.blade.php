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
                        <div class="card-body ">
                            <form action="" id="editWasis">
                                @csrf
                                <div class="div">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Nama</label>
                                            <div class="mb-3">
                                                <input type="text" id="nama" name="nama" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your nama" value="{{$dataWasis->name}}" aria-label="Nama"
                                                    aria-describedby="nama-addon">
                                                @error('nama')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>NIK</label>
                                            <div class="mb-3">
                                                <input type="text" id="nik" name="nik" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your NIK" value="{{$dataWasis->nik}}" aria-label="NIK"
                                                    aria-describedby="nik-addon">
                                                @error('nik')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Tanggal Lahir</label>
                                            <div class="mb-3">
                                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Tanggal Lahir" value="{{$dataWasis->bod}}" aria-label="Tanggal Lahir"
                                                    aria-describedby="tanggal_lahir-addon">
                                                @error('bod')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Usia</label>
                                            <div class="mb-3">
                                                <input type="text" id="usia" name="usia" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Age" value="{{$dataWasis->age}}" aria-label="Usia"
                                                    aria-describedby="age-addon">
                                                @error('usia')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Agama</label>
                                            <div class="mb-3">
                                                <input type="text" id="agama" name="agama" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Agama" value="{{$dataWasis->religion}}" aria-label="Agama"
                                                    aria-describedby="agama-addon">
                                                @error('agama')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Gender</label>
                                            <div class="mb-3">
                                                <input type="text" id="gender" name="gender" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your gender" value="{{$dataWasis->gender}}" aria-label="Gender"
                                                    aria-describedby="gender-addon">
                                                @error('gender')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Pendidikan</label>
                                            <div class="mb-3">
                                                <input type="text" id="pendidikan" name="pendidikan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Pendidikan" value="{{$dataWasis->education}}" aria-label="Pendidikan"
                                                    aria-describedby="pendidikan-addon">
                                                @error('pendidikan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah Anggota Keluarga</label>
                                            <div class="mb-3">
                                                <input type="text" id="anggota_keluarga" name="anggota_keluarga" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah Anggota Keluarga" value="{{$dataWasis->total_family}}" aria-label="Anggota Keluarga"
                                                    aria-describedby="anggota_keluarga-addon">
                                                @error('anggota_keluarga')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Alamat</label>
                                            <div class="mb-3">
                                                <input type="text" id="alamat" name="alamat" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Alamat" value="{{$dataWasis->address}}" aria-label="Alamat"
                                                    aria-describedby="alamat-addon">
                                                @error('alamat')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kelurahan / Desa</label>
                                            <div class="mb-3">
                                                <input type="text" id="desa" name="desa" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kelurahan / Desa" value="{{$dataWasis->village}}" aria-label="Desa"
                                                    aria-describedby="desa-addon">
                                                @error('desa')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kecamatan</label>
                                            <div class="mb-3">
                                                <input type="text" id="kecamatan" name="kecamatan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kecamatan" value="{{$dataWasis->district}}" aria-label="Kecamatan"
                                                    aria-describedby="kecamatan-addon">
                                                @error('kecamatan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kabupaten / Kota</label>
                                            <div class="mb-3">
                                                <input type="text" id="kabupaten" name="kabupaten" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kabupaten / Kota" value="{{$dataWasis->city}}" aria-label="Kabupaten"
                                                    aria-describedby="kabupaten-addon">
                                                @error('kabupaten')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Provinsi</label>
                                            <div class="mb-3">
                                                <input type="text" id="provinsi" name="provinsi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Provinsi" value="{{$dataWasis->province}}" aria-label="Provinsi"
                                                    aria-describedby="provinsi-addon">
                                                @error('provinsi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Latitude</label>
                                            <div class="mb-3">
                                                <input type="text" id="latitude" name="latitude" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Latitude" value="{{$dataWasis->lat}}" aria-label="Latitude"
                                                    aria-describedby="latitude-addon">
                                                @error('latitude')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Longitude</label>
                                            <div class="mb-3">
                                                <input type="text" id="longitude" name="longitude" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Longitude" value="{{$dataWasis->longs}}" aria-label="Longitude"
                                                    aria-describedby="longitude-addon">
                                                @error('longitude')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Kelompok</label>
                                            <div class="mb-3">
                                                <input type="text" id="kelompok" name="kelompok" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Kelompok" value="{{$dataWasis->groups}}" aria-label="Kelompok"
                                                    aria-describedby="kelompok-addon">
                                                @error('kelompok')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biota</label>
                                            <div class="mb-3">
                                                <input type="text" id="biota" name="biota" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biota" value="{{$dataWasis->biota}}" aria-label="Biota"
                                                    aria-describedby="biota-addon">
                                                @error('biota')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Komoditas</label>
                                            <div class="mb-3">
                                                <input type="text" id="komoditas" name="komoditas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Komoditas" value="{{$dataWasis->commodities}}" aria-label="Komoditas"
                                                    aria-describedby="komoditas-addon">
                                                @error('komoditas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jenis Usaha</label>
                                            <div class="mb-3">
                                                <input type="text" id="jenis_usaha" name="jenis_usaha" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jenis Usaha" value="{{$dataWasis->business_type}}" aria-label="Jenis Usaha"
                                                    aria-describedby="jenis_usaha-addon">
                                                @error('jenis_usaha')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status Kusuka</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_kusuka" name="status_kusuka" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status Kusuka" value="{{$dataWasis->kusuka_status}}" aria-label="Status Kusuka"
                                                    aria-describedby="status_kusuka-addon">
                                                @error('status_kusuka')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status Kepemilikan</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_kepemilikan" name="status_kepemilikan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status Kepemilikan" value="{{$dataWasis->owner_status}}" aria-label="Status Kepemilikan"
                                                    aria-describedby="status_kepemilikan-addon">
                                                @error('status_kepemilikan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Luas Area (m2)</label>
                                            <div class="mb-3">
                                                <input type="text" id="luas_area" name="luas_area" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Luas Area" value="{{$dataWasis->area}}" aria-label="Luas Area"
                                                    aria-describedby="luas_area-addon">
                                                @error('luas_area')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Media Pemeliharaan</label>
                                            <div class="mb-3">
                                                <input type="text" id="media_pemeliharaan" name="media_pemeliharaan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Media Pemeliharaan" value="{{$dataWasis->maintenance_media}}" aria-label="Media Pemeliharaan"
                                                    aria-describedby="media_pemeliharaan-addon">
                                                @error('media_pemeliharaan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Padat Tebar</label>
                                            <div class="mb-3">
                                                <input type="text" id="padat_tebar" name="padat_tebar" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Padat Tebar" value="{{$dataWasis->padat_tebar}}" aria-label="Padat Tebar"
                                                    aria-describedby="padat_tebar-addon">

                                                @error('padat_tebar')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Teknologi</label>
                                            <div class="mb-3">
                                                <input type="text" id="teknologi" name="teknologi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Teknologi" value="{{$dataWasis->tech}}" aria-label="Teknologi"
                                                    aria-describedby="teknologi-addon">
                                                @error('teknologi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Ukuran</label>
                                            <div class="mb-3">
                                                <input type="text" id="ukuran" name="ukuran" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Ukuran" value="{{$dataWasis->size}}" aria-label="Ukuran"
                                                    aria-describedby="ukuran-addon">
                                                @error('ukuran')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Produksi</label>
                                            <div class="mb-3">
                                                <input type="text" id="produksi" name="produksi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Produksi" value="{{$dataWasis->production}}" aria-label="Produksi"
                                                    aria-describedby="produksi-addon">
                                                @error('produksi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Siklus</label>
                                            <div class="mb-3">
                                                <input type="text" id="siklus" name="siklus" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Siklus" value="{{$dataWasis->cycle}}" aria-label="Siklus"
                                                    aria-describedby="siklus-addon">
                                                @error('siklus')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Productivitas</label>
                                            <div class="mb-3">
                                                <input type="text" id="productivitas" name="productivitas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Productivitas" value="{{$dataWasis->productivity}}" aria-label="Productivitas"
                                                    aria-describedby="productivitas-addon">
                                                @error('productivitas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Distribusi</label>
                                            <div class="mb-3">
                                                <input type="text" id="distribusi" name="distribusi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Distribusi" value="{{$dataWasis->distribution}}" aria-label="Distribusi"
                                                    aria-describedby="distribusi-addon">
                                                @error('distribusi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Harga Jual</label>
                                            <div class="mb-3">
                                                <input type="text" id="harga_jual" name="harga_jual" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Harga Jual" value="{{$dataWasis->selling_price}}" aria-label="Harga Jual"
                                                    aria-describedby="harga_jual-addon">
                                                @error('harga_jual')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Pendapatan</label>
                                            <div class="mb-3">
                                                <input type="text" id="pendapatan" name="pendapatan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your pendapatan" value="{{$dataWasis->income}}" aria-label="Pendapatan"
                                                    aria-describedby="pendapatan-addon">
                                                @error('pendapatan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jenis Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="jenis_pakan" name="jenis_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jenis Pakan" value="{{$dataWasis->feed_type}}" aria-label="Jenis Pakan"
                                                    aria-describedby="jenis_pakan-addon">
                                                @error('jenis_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="jumlah_pakan" name="jumlah_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah Pakan" value="{{$dataWasis->feed_total}}" aria-label="Jumlah Pakan"
                                                    aria-describedby="jumlah_pakan-addon">
                                                @error('jumlah_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Supply</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_supply" name="sumber_supply" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Supply" value="{{$dataWasis->source_supply}}" aria-label="Sumber Supply"
                                                    aria-describedby="sumber_supply-addon">
                                                @error('sumber_supply')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Harga Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="harga_pakan" name="harga_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Harga Pakan" value="{{$dataWasis->feed_price}}" aria-label="Harga Pakan"
                                                    aria-describedby="harga_pakan-addon">
                                                @error('harga_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Pakan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_pakan" name="biaya_pakan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Pakan" value="{{$dataWasis->feed_cost}}" aria-label="Biaya_pakan"
                                                    aria-describedby="biaya_pakan-addon">
                                                @error('biaya_pakan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_benih" name="sumber_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Benih" value="{{$dataWasis->sumber_benih}}" aria-label="Sumber Benih"
                                                    aria-describedby="sumber_benih-addon">
                                                @error('sumber_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="jumlah_benih" name="jumlah_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah Benih" value="{{$dataWasis->total_benih }}" aria-label="Jumlah Benih"
                                                    aria-describedby="jumlah_benih-addon">
                                                @error('jumlah_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Harga Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="harga_benih" name="harga_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Harga Benih" value="{{$dataWasis->benih_price}}" aria-label="Harga Benih"
                                                    aria-describedby="harga_benih-addon">
                                                @error('harga_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Benih</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_benih" name="biaya_benih" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Benih" value="{{$dataWasis->benih_cost}}" aria-label="Biaya Benih"
                                                    aria-describedby="biaya_benih-addon">
                                                @error('biaya_benih')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jumlah TK</label>
                                            <div class="mb-3">
                                                <input type="text" id="jumlah_tk" name="jumlah_tk" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jumlah TK" value="{{$dataWasis->total_tk}}" aria-label="Jumlah TK"
                                                    aria-describedby="jumlah_tk-addon">
                                                @error('jumlah_tk')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Modal</label>
                                            <div class="mb-3">
                                                <input type="text" id="modal" name="modal" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your modal" value="{{$dataWasis->modal}}" aria-label="Modal"
                                                    aria-describedby="modal-addon">
                                                @error('modal')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Modal</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_modal" name="sumber_modal" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Modal" value="{{$dataWasis->sumber_modal}}" aria-label="Sumber Modal"
                                                    aria-describedby="sumber_modal-addon">
                                                @error('sumber_modal')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Kredit</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_kredit" name="sumber_kredit" class="p-3 mb-2 form-control mb-2"
                                                    placeholder="Enter your Sumber Kredit" value="{{$dataWasis->sumber_kredit}}" aria-label="Sumber Kredit"
                                                    aria-describedby="sumber_kredit-addon">
                                                @error('sumber_kredit')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Pembuatan Media Pemeliharaan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_pembuatan_media_pemeliharaan" name="biaya_pembuatan_media_pemeliharaan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Pembuatan Media Pemeliharaan" value="{{$dataWasis->cost_maintenance_media}}" aria-label="Biaya Pembuatan Media Pemeliharaan"
                                                    aria-describedby="biaya_pembuatan_media_pemeliharaan-addon">
                                                @error('biaya_pembuatan_media_pemeliharaan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Pembelian Peralatan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_pembelian_peralatan" name="biaya_pembelian_peralatan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Pembelian Peralatan" value="{{$dataWasis->cost_purchase_tools}}" aria-label="Biaya Pembelian Peralatan"
                                                    aria-describedby="biaya_pembelian_peralatan-addon">
                                                @error('biaya_pembelian_peralatan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Penyusutan</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_penyusutan" name="biaya_penyusutan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Penyusutan" value="{{$dataWasis->biaya_penyusutan}}" aria-label="Biaya Penyusutan"
                                                    aria-describedby="biaya_penyusutan-addon">
                                                @error('biaya_penyusutan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Biaya Tenaga Kerja</label>
                                            <div class="mb-3">
                                                <input type="text" id="biaya_tenaga_kerja" name="biaya_tenaga_kerja" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Biaya Tenaga Kerja" value="{{$dataWasis->biaya_tenga_kerja}}" aria-label="Biaya Tenaga Kerja"
                                                    aria-describedby="biaya_tenaga_kerja-addon">
                                                @error('biaya_tenaga_kerja')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Ipal</label>
                                            <div class="mb-3">
                                                <input type="text" id="ipal" name="ipal" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your ipal" value="{{$dataWasis->ipal}}" aria-label="Ipal"
                                                    aria-describedby="ipal-addon">
                                                @error('ipal')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Tandon</label>
                                            <div class="mb-3">
                                                <input type="text" id="tandon" name="tandon" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Tandon" value="{{$dataWasis->tandon}}" aria-label="Tandon"
                                                    aria-describedby="tandon-addon">
                                                @error('tandon')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Green Belt</label>
                                            <div class="mb-3">
                                                <input type="text" id="green_belt" name="green_belt" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Green Belt" value="{{$dataWasis->green_belt}}" aria-label="Green Belt"
                                                    aria-describedby="green_belt-addon">
                                                @error('green_belt')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Jarak ke Bibir Pantai</label>
                                            <div class="mb-3">
                                                <input type="text" id="jarak_ke_bibir_pantai" name="jarak_ke_bibir_pantai" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Jarak ke Bibir Pantai" value="{{$dataWasis->jarak_pantai}}" aria-label="Jarak ke Bibir Pantai"
                                                    aria-describedby="jarak_ke_bibir_pantai-addon">
                                                @error('jarak_ke_bibir_pantai')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sumber Air</label>
                                            <div class="mb-3">
                                                <input type="text" id="sumber_air" name="sumber_air" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sumber Air" value="{{$dataWasis->sumber_air}}" aria-label="Sumber Air"
                                                    aria-describedby="sumber_air-addon">
                                                @error('sumber_air')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status Izin</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_izin" name="status_izin" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status Izin" value="{{$dataWasis->status_izin}}" aria-label="Status Izin"
                                                    aria-describedby="status_izin-addon">
                                                @error('status_izin')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status NIB</label>
                                            <div class="mb-3">
                                                <input type="text" id="status_nib" name="status_nib" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Status NIB" value="{{$dataWasis->status_nib}}" aria-label="Status NIB"
                                                    aria-describedby="status_nib-addon">
                                                @error('status_nib')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Skala Usaha</label>
                                            <div class="mb-3">
                                                <input type="text" id="skala_usaha" name="skala_usaha" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Skala Usaha" value="{{$dataWasis->skala_usaha}}" aria-label="Skala Usaha"
                                                    aria-describedby="skala_usaha-addon">
                                                @error('skala_usaha')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Asuransi</label>
                                            <div class="mb-3">
                                                <input type="text" id="asuransi" name="asuransi" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Asuransi" value="{{$dataWasis->asuransi}}" aria-label="Asuransi"
                                                    aria-describedby="asuransi-addon">
                                                @error('asuransi')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Bantuan</label>
                                            <div class="mb-3">
                                                <input type="text" id="bantuan" name="bantuan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Bantuan" value="{{$dataWasis->bantuan}}" aria-label="Bantuan"
                                                    aria-describedby="bantuan-addon">
                                                @error('bantuan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Penghargaan</label>
                                            <div class="mb-3">
                                                <input type="text" id="penghargaan" name="penghargaan" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Penghargaan" value="{{$dataWasis->penghargaan}}" aria-label="Penghargaan"
                                                    aria-describedby="penghargaan-addon">
                                                @error('penghargaan')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Dukungan Pemda</label>
                                            <div class="mb-3">
                                                <input type="text" id="dukungan_pemda" name="dukungan_pemda" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Dukungan Pemda" value="{{$dataWasis->dukungan_pemda}}" aria-label="Dukungan Pemda"
                                                    aria-describedby="dukungan_pemda-addon">
                                                @error('dukungan_pemda')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Dukungan Pusat</label>
                                            <div class="mb-3">
                                                <input type="text" id="dukungan_pusat" name="dukungan_pusat" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Dukungan Pusat" value="{{$dataWasis->dukungan_pusat}}" aria-label="Dukungan Pusat"
                                                    aria-describedby="dukungan_pusat-addon">
                                                @error('dukungan_pusat')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Nama Penyuluh</label>
                                            <div class="mb-3">
                                                <input type="text" id="nama_penyuluh" name="nama_penyuluh" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Nama Penyuluh" value="{{$dataWasis->nama_penyuluh}}" aria-label="Nama Penyuluh"
                                                    aria-describedby="nama_penyuluh-addon">
                                                @error('nama_penyuluh')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Sertifikat</label>
                                            <div class="mb-3">
                                                <input type="text" id="sertifikat" name="sertifikat" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Sertifikat" value="{{$dataWasis->sertifikat}}" aria-label="Sertifikat"
                                                    aria-describedby="sertifikat-addon">
                                                @error('sertifikat')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Nama Petugas</label>
                                            <div class="mb-3">
                                                <input type="text" id="nama_petugas" name="nama_petugas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your Nama Petugas" value="{{$dataWasis->nama_petugas}}" aria-label="Nama Petugas"
                                                    aria-describedby="nama_petugas-addon">
                                                @error('nama_petugas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>NIK Petugas</label>
                                            <div class="mb-3">
                                                <input type="text" id="nik_petugas" name="nik_petugas" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your NIK Petugas" value="{{$dataWasis->nik_petugas}}" aria-label="NIK Petugas"
                                                    aria-describedby="nik_petugas-addon">
                                                @error('nik_petugas')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>UPT</label>
                                            <div class="mb-3">
                                                <input type="text" id="upt" name="upt" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your UPT" value="{{$dataWasis->upt}}" aria-label="UPT"
                                                    aria-describedby="upt-addon">
                                                @error('upt')
                                                    <span class="text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        @if($responseWasis)
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Status Wasis</label>
                                            <div class="mb-3">
                                                <input type="text" class="p-3 mb-2 form-control"
                                                    placeholder="Enter your " value="Data Sudah Terkirim" aria-label=""
                                                    aria-describedby="-addon">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <label>Tanggal Kirim Wasis</label>
                                            <div class="mb-3">
                                                <input type="text"  class="p-3 mb-2 form-control"
                                                    placeholder="Enter your " value="{{$dataWasis->tanggal_kirim_wasis}}" aria-label=""
                                                    aria-describedby="-addon">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <div class="submitField checkWasis">
                                                <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0 btnSubmitEdit" id="submitEdit">
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
                                                    <span class="btn-inner--text">Save Data</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="submitField detailWasis">
                                                <a class="btn btn-round bg-gradient-warning btn-lg w-100 mt-4 mb-0 " id="backBtn">
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
                                                </a>
                                            </div>
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
            <x-app.footer />
        </div>
        <script>
            $(document).ready(function(){

                if('{{$state}}' == 'wasis')
                {
                    $(":input").prop('readonly',true);
                    $(".checkWasis").hide();

                    $('#backBtn').click(function(){
                        window.location.href = '/historysent'
                    });
                } else {
                    $('#backBtn').click(function(){
                        window.location.href = '/historyinput'
                    });
                }

                $('#submitEdit').click(function(){
                    let id = {{$dataWasis->id}};
                    console.log(id);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val()
                        },
                        method:'POST',
                        url : "{{ route('editwasis.save',['id'=>':id']) }}".replace(':id',id),
                        data: $('#editWasis').serialize(),
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
                            swal.fire({
                                title: "Good job!~",
                                text: "Data anda sudah berhasil dirubah!",
                                icon: "success",
                            }).then((result) => {
                                if(result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        }
                    });
                });

            });
        </script>
    </main>

</x-app-layout>
