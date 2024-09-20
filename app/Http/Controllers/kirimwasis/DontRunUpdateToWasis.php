<?php
date_default_timezone_set('Asia/Jakarta');
$servername = "127.0.0.1";
$username = "root";
$password = "Sucofindo123";
$dbname = "perikanan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Master Data Wasis, Biar Checknya Lebih Cepet Daripada Harus Lookup Terus ke DB, Mending Array Ajah jadi Cepet
// Static Value buat IPAL, TANDON, GREENBELT, PENGHARGAAN, NIB
$adatidak = [
    "ADA" => 1,
    "TIDAK"=> 2
];

$perizinan = [
    "SUDAH BERIZIN" => 1,
    "TIDAK" => 2
];

$dukungan_pusat_id = [
    "ADA" => 1,
    "TIDAK ADA" => 2
];

$asuransi_id = [
    "SUDAH" => 1,
    "BELUM" => 2
];

$status_kusuka_id = [
    "TERDAFTAR" => 1,
    "TIDAK TERDAFTAR" => 2
];

$agama = [
    "ISLAM" => 40,
    "KATHOLIK" => 41,
    "KONG HU CHU" => 42,
    "KRISTEN" => 43,
    "HINDU" => 44,
    "BUDHA" => 45,
    "TIDAK DIISI" => 85,
    "LAINNYA" => 86,
];

$jenis_kelamin = [
    "LAKI-LAKI" => 28,
    "PEREMPUAN" => 29
];

$pendidikan_id = [
    "S3" => 1,
    "S2" => 2,
    "S1" => 3,
    "D4" => 5,
    "D3" => 6,
    "D2" => 7,
    "D1" => 8,
    "SMA" => 9,
    "SMP" => 10,
    "SD" => 11,
    "TIDAK SEKOLAH" => 12
];

$jenis_usaha_id = [
    "PEMBESARAN" => 1,
    "PEMBENIHAN" => 2,
    "IKAN HIAS" => 3
];

$status_kepemilikan = [
    "MILIK SENDIRI" => 1,
    "KERJA SAMA" => 2,
    "SEWA" => 3
];

$media_pemeliharaan = [
    "JARING APUNG LAUT" => 1,
    "LAUT LAINNYA" => 2,
    "TAMBAK INTENSIF" => 3,
    "TAMBAK SEDERHANA" => 4,
    "TAMBAK SEMI INTENSIF" => 5,
    "JARING APUNG TAWAR" => 6,
    "JARING TANCAP TAWAR" => 7,
    "KARAMBA" => 8,
    "KOLAM AIR DERAS" => 9,
    "KOLAM AIR TENANG" => 10,
    "MINAPADI (SAWAH)" => 11,
    "AQUARIUM" => 12,
    "TALI RENTANG" => 13,
    "RAKIT" => 14,
    "LEPAS DASAR" => 15
];

$teknologi_id = [
    "TRADISIONAL" => 1,
    "SEMI INTENSIF" => 2,
    "INTENSIF" => 3,
    "RAS" => 4,
    "BIOFLOK" => 5
];

$sumber_modal_id = [
    "SENDIRI" => 1,
    "KREDIT" => 2
];

$bantuan_id = [
    "KKP" => 1,
    "K\L LAIN" => 2,
    "CSR" => 3,
    "LAIN-LAIN" => 4,
    "TIDAK ADA" => 5
];

$dukungan_pemda_id = [
    "PENYULUHAN" => 1,
    "BIMTEK" => 2,
    "TIDAK ADA" => 3
];

$jenis_pakan = [
    "KOMERSIL APUNG" => 1,
    "KOMERSIL TENGGELAM" => 2,
    "MANDIRI APUNG" => 3,
    "MANDIRI TENGGELAM" => 4
];

$sertifikat_id = [
    "CBIB" => 1,
    "CPIB" => 2,
    "CPPIB" => 3,
    "TIDAK ADA" => 4
];

$sumber_kredit_id = [
    "BANK" => 1,
    "KOPERASI" => 2,
    "RENTENIR" => 3,
    "PINJAMAN ONLINE" => 4,
    "KERABAT" => 5
];

$skala_usaha_id = [
    "MIKRO" => 1,
    "KECIL" => 2,
    "MENENGAH" => 3
];

$jumlah_berhasil = 0;
$jumlah_gagal = 0;
$total_data = 0;
$data_berjalan = 0;

$tanggalnow = date("Y-m-d H:i:s");
echo "Sekarang Jam ".$tanggalnow."\n"."Memulai Kirim Data Ke Wasis...\n\n";

// Now do Them Actions maszeehhh

// Query-in Ambil Datanya
$query_ambil_data_survey_belom_dikirim = 'SELECT * FROM survey WHERE response_wasis IS NOT NULL AND tanggal_update_wasis IS NULL';

// Cek Bener Gak Query Nya
if ($hasil_cek_ambil_data_survey_belom_dikirim = mysqli_query($conn, $query_ambil_data_survey_belom_dikirim)) {
    // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
    // Kalo Dia == 0
    if ($hasil_cek_ambil_data_survey_belom_dikirim->num_rows === 0) {
        // Balikin Response ke Nohup "Data Sudah Dikirim Ke Wasis Semuanya!"
        echo "Per Tanggal ".date('Y-m-d H:i:s').", Data Sudah Dikirim Ke Wasis Semuanya!\n";
        echo "Sistem Dimatikan...\n";

        // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
        mysqli_free_result($hasil_cek_ambil_data_survey_belom_dikirim);
    }else{ // Kalo Datanya Lebih Dari 0
        echo "Per Tanggal ".date('Y-m-d H:i:s').", ".$hasil_cek_ambil_data_survey_belom_dikirim->num_rows." Data Akan di Update\n";
        echo "Memulai Mengupdate Data Satu-per-satu...\n\n";
        $total_data = $hasil_cek_ambil_data_survey_belom_dikirim->num_rows;

        // Iterate satu-satu deh hasilnya buat kita tembak ke API-nya Wasis
        foreach (mysqli_fetch_all($hasil_cek_ambil_data_survey_belom_dikirim,MYSQLI_ASSOC) as $key => $value) {
            // Welp, Welcome to API's HELL -Ari Kurniawan (arikaz05) @2024-07-10 22:19;

            // Query-in Ambil Datanya
            $query_get_id_komoditas =   'SELECT * FROM komoditas_wasis WHERE nama_kelompok = "'.strtoupper(trim($value["kelompok"]))
                                        .'" AND nama_biota = "'.strtoupper(trim($value["biota"]))
                                        .'" AND nama_komoditas = "'.strtoupper(trim($value["komoditas"])).'" LIMIT 1;';

            // Cek Bener Gak Query Nya
            if ($hasil_cek_get_id_komoditas = mysqli_query($conn, $query_get_id_komoditas)) {
                // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
                // Kalo Dia == 0
                if ($hasil_cek_get_id_komoditas->num_rows === 0) {
                    // Balikin Response ke Nohup "Gagal Pengecekannya Cuyyy!"
                    echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Salah Input Komoditas / Biota / Kelompok! (Data Diisi Oleh ".$value['created_by'].")\n";
                    echo "Data Disekip Update Ke Wasis...\n\n";
                    $jumlah_gagal++;

                    // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
                    mysqli_free_result($hasil_cek_get_id_komoditas);
                    continue;
                }else{
                    $data_hasil_cek_get_id_komoditas = mysqli_fetch_all($hasil_cek_get_id_komoditas,MYSQLI_ASSOC);
                    // Query-in Ambil Datanya
                    $query_get_id_wilayah_pekebun =   'SELECT * FROM daerah_wasis WHERE nama_kelurahan = "'.strtoupper(trim($value["kelurahan"]))
                                                .'" AND nama_kecamatan = "'.strtoupper(trim($value["kecamatan"]))
                                                .'" AND nama_kabupaten = "'.strtoupper(trim($value["kota_kabupaten"]))
                                                .'" AND nama_provinsi = "'.strtoupper(trim($value["provinsi"])).'" LIMIT 1;';

                    // Cek Bener Gak Query Nya
                    if ($hasil_cek_get_id_wilayah_pekebun = mysqli_query($conn, $query_get_id_wilayah_pekebun)) {
                        // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
                        // Kalo Dia == 0
                        if ($hasil_cek_get_id_wilayah_pekebun->num_rows === 0) {
                            // Balikin Response ke Nohup "Gagal Pengecekannya Cuyyy!"
                            echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Salah Input Kelurahan / Kecamatan / Kabupaten / Provinsi! (Data Diisi Oleh ".$value['created_by'].")\n";
                            echo "Data Disekip Update Ke Wasis...\n\n";
                            $jumlah_gagal++;

                            // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
                            mysqli_free_result($hasil_cek_get_id_wilayah_pekebun);
                            continue;
                        }else{
                            $data_hasil_cek_get_id_wilayah_pekebun = mysqli_fetch_all($hasil_cek_get_id_wilayah_pekebun,MYSQLI_ASSOC);
                            // Query-in Ambil Datanya
                            $query_get_petugas =   'SELECT * FROM petugas_wasis WHERE nama_petugas = "'.strtoupper(trim($value["nama_petugas"]))
                                                    .'" AND nama_upt = "'.strtoupper(trim($value["upt"])).'" LIMIT 1;';

                            // Cek Bener Gak Query Nya
                            if ($hasil_cek_get_petugas = mysqli_query($conn, $query_get_petugas)) {
                                // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
                                // Kalo Dia == 0
                                if ($hasil_cek_get_petugas->num_rows === 0) {
                                    // Balikin Response ke Nohup "Gagal Pengecekannya Cuyyy!"
                                    echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Salah Input Nama Petugas / UPT! (Data Diisi Oleh ".$value['created_by'].")\n";
                                    echo "Data Disekip Update Ke Wasis...\n\n";
                                    $jumlah_gagal++;

                                    // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
                                    mysqli_free_result($hasil_cek_get_petugas);
                                    continue;
                                }else{
                                    $data_hasil_cek_get_petugas = mysqli_fetch_all($hasil_cek_get_petugas,MYSQLI_ASSOC);
                                    // Query-in Ambil Datanya
                                    $query_get_kabupaten_sumber_pakan =     'SELECT * FROM daerah_wasis WHERE nama_kabupaten = "'.strtoupper(trim($value["kota_kabupaten_sumber_pakan"]))
                                                                            .'" LIMIT 1;';

                                    // Cek Bener Gak Query Nya
                                    if ($hasil_cek_get_kabupaten_sumber_pakan = mysqli_query($conn, $query_get_kabupaten_sumber_pakan)) {
                                        // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
                                        $berhasil_atau_engga_sumber_pakan = $hasil_cek_get_kabupaten_sumber_pakan->num_rows;
                                        if($value['komoditas'] == "Kotoni" && $value["kota_kabupaten_sumber_pakan"] == ''){
                                            $berhasil_atau_engga_sumber_pakan = 1;
                                        }
                                        if ($berhasil_atau_engga_sumber_pakan === 0) {
                                            // Balikin Response ke Nohup "Gagal Pengecekannya Cuyyy!"
                                            echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Salah Input Nama Kota / Kabupaten Sumber Pakan! (Data Diisi Oleh ".$value['created_by'].")\n";
                                            echo "Data Disekip Update Ke Wasis...\n\n";
                                            $jumlah_gagal++;

                                            // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
                                            mysqli_free_result($hasil_cek_get_kabupaten_sumber_pakan);
                                            continue;
                                        }else{
                                            if($value['komoditas'] == "Kotoni" && $value["kota_kabupaten_sumber_pakan"] == ''){
                                                $data_hasil_cek_get_kabupaten_sumber_pakan[0]['id_kabupaten'] = '';
                                            }else{
                                                $data_hasil_cek_get_kabupaten_sumber_pakan = mysqli_fetch_all($hasil_cek_get_kabupaten_sumber_pakan,MYSQLI_ASSOC);
                                            }
                                            // Query-in Ambil Datanya
                                            $query_get_kabupaten_distribusi =   'SELECT * FROM daerah_wasis WHERE nama_kabupaten = "'.strtoupper(trim($value["kota_kabupaten_distribusi"]))
                                                                                .'" LIMIT 1;';

                                            // Cek Bener Gak Query Nya
                                            if ($hasil_cek_get_kabupaten_distribusi = mysqli_query($conn, $query_get_kabupaten_distribusi)) {
                                                // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
                                                // Kalo Dia == 0
                                                if ($hasil_cek_get_kabupaten_distribusi->num_rows === 0) {
                                                    // Balikin Response ke Nohup "Gagal Pengecekannya Cuyyy!"
                                                    echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Salah Input Nama Kota / Kabupaten Distribusi! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                    echo "Data Disekip Update Ke Wasis...\n\n";
                                                    $jumlah_gagal++;

                                                    // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
                                                    mysqli_free_result($hasil_cek_get_kabupaten_distribusi);
                                                    continue;
                                                }else{
                                                    $data_hasil_cek_get_kabupaten_distribusi = mysqli_fetch_all($hasil_cek_get_kabupaten_distribusi,MYSQLI_ASSOC);
                                                    // Query-in Ambil Datanya
                                                    $query_get_kabupaten_sumber_benih =   'SELECT * FROM daerah_wasis WHERE nama_kabupaten = "'.strtoupper(trim($value["kota_kabupaten_sumber_benih"]))
                                                                                .'" LIMIT 1;';

                                                    // Cek Bener Gak Query Nya
                                                    if ($hasil_cek_get_kabupaten_sumber_benih = mysqli_query($conn, $query_get_kabupaten_sumber_benih)) {
                                                        // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
                                                        // Kalo Dia == 0
                                                        if ($hasil_cek_get_kabupaten_sumber_benih->num_rows === 0) {
                                                            // Balikin Response ke Nohup "Gagal Pengecekannya Cuyyy!"
                                                            echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Salah Input Nama Kota / Kabupaten Sumber Benih! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                            echo "Data Disekip Update Ke Wasis...\n\n";
                                                            $jumlah_gagal++;

                                                            // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
                                                            mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                            continue;
                                                        }else{
                                                            $data_hasil_cek_get_kabupaten_sumber_benih = mysqli_fetch_all($hasil_cek_get_kabupaten_sumber_benih,MYSQLI_ASSOC);
                                                            // Kalau Sampe Sini, Congrats! Datanya Paling Engga udah Aman Setengahnya!!!!! -Ari Kurniawan (arikaz05) @2024-07-11 02:53

                                                            // Prepare Data Sebelon Dikirim Ke Wasis
                                                            $code = '';
                                                            $kelompok_id = $data_hasil_cek_get_id_komoditas[0]['id_kelompok'];
                                                            $biota_id = $data_hasil_cek_get_id_komoditas[0]['id_biota'];
                                                            $ikan_id = $data_hasil_cek_get_id_komoditas[0]['id_komoditas'];
                                                            $nik=strtoupper(trim($value["nik"]));
                                                            $name=strtoupper(trim($value["nama"]));
                                                            $gender_id=$jenis_kelamin[strtoupper(trim($value["gender"]))];
                                                            if ($gender_id == null || $gender_id == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Jenis Kelamin Inputan [ ".strtoupper(trim($value["gender"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $birthdate=strtoupper(trim($value["tanggal_lahir"]));
                                                            $pendidikan=@$pendidikan_id[strtoupper(trim($value["tingkat_pendidikan"]))];
                                                            if ($pendidikan == null || $pendidikan == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Tingkat Pendidikan Inputan [ ".strtoupper(trim($value["tingkat_pendidikan"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $agama_id=$agama[strtoupper(trim($value["agama"]))];
                                                            if ($agama_id == null || $agama_id == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Agama Inputan [ ".strtoupper(trim($value["agama"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $provinsi_id=$data_hasil_cek_get_id_wilayah_pekebun[0]["id_provinsi"];
                                                            $kabupaten_id=$data_hasil_cek_get_id_wilayah_pekebun[0]["id_kabupaten"];
                                                            $kecamatan_id=$data_hasil_cek_get_id_wilayah_pekebun[0]["id_kecamatan"];
                                                            $kelurahan_id=$data_hasil_cek_get_id_wilayah_pekebun[0]["id"];
                                                            $lat=strtoupper(trim($value["latitude"]));
                                                            $lng=strtoupper(trim($value["longitude"]));
                                                            $status_milik=$status_kepemilikan[strtoupper(trim($value["status_kepemilikan"]))];
                                                            if ($status_milik == null || $status_milik == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Status Kepemilikan Inputan [ ".strtoupper(trim($value["status_kepemilikan"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $jenis_usaha=@$jenis_usaha_id[strtoupper(trim($value["jenis_usaha"]))];
                                                            if ($jenis_usaha == null || $jenis_usaha == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Jenis Usaha Inputan [ ".strtoupper(trim($value["jenis_usaha"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $luas_usaha=$value["luas_usaha"];
                                                            $media_pelihara=$media_pemeliharaan[strtoupper(trim($value["media_pemeliharaan"]))];
                                                            if ($media_pelihara == null || $media_pelihara == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Media Pemeliharaan Inputan [ ".strtoupper(trim($value["media_pemeliharaan"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $padat_pelihara=(int)$value["padat_tebar"];
                                                            $teknologi=$teknologi_id[strtoupper(trim($value["teknologi"]))];
                                                            if ($teknologi == null || $teknologi == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Jenis Teknologi Inputan [ ".strtoupper(trim($value["teknologi"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $produksi=$value["produktivitas"];
                                                            $harga=(int)$value["harga_jual"];
                                                            $tk_num=(int)$value["jumlah_tenaga_kerja"];
                                                            $omzet=(int)$value["modal"];
                                                            $sumber_modal=@$sumber_modal_id[strtoupper(trim($value["sumber_modal"]))];
                                                            if ($sumber_modal == null || $sumber_modal == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Sumber Modal Inputan [ ".strtoupper(trim($value["sumber_modal"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $ipal=@$adatidak[strtoupper(trim($value["ipal"]))];
                                                            if ($ipal == null || $ipal == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan IPAL Inputan [ ".strtoupper(trim($value["ipal"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $tandon=@$adatidak[strtoupper(trim($value["tandon"]))];
                                                            if ($tandon == null || $tandon == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan TANDON Inputan [ ".strtoupper(trim($value["tandon"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $greenbelt=@$adatidak[strtoupper(trim($value["green_belt"]))];
                                                            if ($greenbelt == null || $greenbelt == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan GREENBELT Inputan [ ".strtoupper(trim($value["green_belt"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $bantuan=@$bantuan_id[strtoupper(trim($value["bantuan"]))];
                                                            if ($bantuan == null || $bantuan == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Bantuan Inputan [ ".strtoupper(trim($value["bantuan"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $penghargaan=@$adatidak[strtoupper(trim($value["penghargaan"]))];
                                                            if ($penghargaan == null || $penghargaan == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Penghargaan Inputan [ ".strtoupper(trim($value["penghargaan"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $dukungan_pemda=$dukungan_pemda_id[strtoupper(trim($value["dukungan_pemda"]))];
                                                            if ($dukungan_pemda == null || $dukungan_pemda == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Dukungan Pemda Inputan [ ".strtoupper(trim($value["dukungan_pemda"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $dukungan_pusat=$dukungan_pusat_id[strtoupper(trim($value["dukungan_pusat"]))];
                                                            if ($dukungan_pusat == null || $dukungan_pusat == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Dukungan Pusat Inputan [ ".strtoupper(trim($value["dukungan_pusat"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $sertifikat=$sertifikat_id[strtoupper(trim($value["sertifikat"]))];
                                                            if ($sertifikat == null || $sertifikat == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Sertifikat Inputan [ ".strtoupper(trim($value["sertifikat"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $penyuluh_name=(strtoupper(trim($value["nama_penyuluh"])) == 'NULL') ? '' : strtoupper(trim($value["nama_penyuluh"]));
                                                            $petugas_id=@$data_hasil_cek_get_petugas[0]["id_petugas"];
                                                            $upt_id=@$data_hasil_cek_get_petugas[0]["id_upt"];
                                                            $address=strtoupper(trim($value["alamat"]));
                                                            $pakan_jenis=@$jenis_pakan[strtoupper(trim($value["jenis_pakan"]))];
                                                            $pakan_num=(int)$value["jumlah_pakan"];
                                                            $pakan_sumber='';
                                                            $pakan_harga=(int)$value["harga_pakan"];
                                                            $benur_sumber='';
                                                            $benur_num=(int)$value["jumlah_benih"];
                                                            $benur_harga=(int)$value["harga_benih"];
                                                            $jarak_tambak=(int)(trim($value["jarak_pantai"]) == 0) ? '' : $value["jarak_pantai"];
                                                            $sumber_air=strtoupper(trim($value["sumber_air"]));
                                                            $izin=@$perizinan[strtoupper(trim($value["status_izin"]))];
                                                            if ($izin == null || $izin == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Perizinan Inputan [ ".strtoupper(trim($value["status_izin"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $nib=@$adatidak[strtoupper(trim($value["status_nib"]))];
                                                            if ($nib == null || $nib == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan NIB Inputan [ ".strtoupper(trim($value["status_nib"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $sumber_kredit=@$sumber_kredit[strtoupper(trim($value["sumber_kredit"]))];
                                                            $skala_usaha=@$skala_usaha_id[strtoupper(trim($value["skala_usaha"]))];
                                                            if ($skala_usaha == null || $skala_usaha == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Skala Usaha Inputan [ ".strtoupper(trim($value["skala_usaha"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $asuransi=@$asuransi_id[strtoupper(trim($value["asuransi"]))];
                                                            if ($asuransi == null || $asuransi == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Keterangan Skala Asuransi Inputan [ ".strtoupper(trim($value["asuransi"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $status_kusuka=@$status_kusuka_id[strtoupper(trim($value["status_kusuka"]))];
                                                            if ($status_kusuka == null || $status_kusuka == '') {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ditemukan Status Kusuka Inputan [ ".strtoupper(trim($value["status_kusuka"]))." ]! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                $jumlah_gagal++;
                                                                unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                                mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                                continue;
                                                            }
                                                            $family_num=(int)$value["jumlah_keluarga"];
                                                            $biaya_media=(int)$value["biaya_pembuatan_media_pemeliharaan"];
                                                            $biaya_susut=(int)$value["biaya_penyusutan"];
                                                            $biaya_tk=(int)$value["biaya_tenaga_kerja"];
                                                            $income=(int)$value["pendapatan"];
                                                            $biaya_pakan=(int)$value["biaya_pakan"];
                                                            $biaya_benih=(int)$value["biaya_benih"];
                                                            $biaya_alat=(int)$value["biaya_pembelian_peralatan"];
                                                            $photo='';
                                                            $kab_id1 = $data_hasil_cek_get_kabupaten_distribusi[0]['id_kabupaten'];
                                                            $sukab_id1 = $data_hasil_cek_get_kabupaten_sumber_pakan[0]['id_kabupaten'];
                                                            $bekab_id1 = $data_hasil_cek_get_kabupaten_sumber_benih[0]['id_kabupaten'];
                                                            // Ambil Foto Jangan Lupa Gais
                                                            $query_get_foto =   'SELECT * FROM presensi WHERE nik_user_input = "'.$nik
                                                                                .'" ORDER BY created_at DESC LIMIT 1;';
                                                            if ($hasil_cek_get_foto = mysqli_query($conn, $query_get_foto)) {
                                                                // Kalo Bener, Coba Cek Data yang belom dikirim ada berapa
                                                                // Kalo Dia == 0
                                                                if ($hasil_cek_get_foto->num_rows === 0) {
                                                                    // Balikin Response ke Nohup "Gagal Pengecekannya Cuyyy!"
                                                                    echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Tidak Ada Foto Lapangan! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                    echo "Data Dikirim Ke Wasis Tanpa Foto...\n";
                                                                    $image = '';
                                                                    // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
                                                                    mysqli_free_result($hasil_cek_get_foto);
                                                                }else{
                                                                    $data_get_foto = mysqli_fetch_all($hasil_cek_get_foto,MYSQLI_ASSOC);
                                                                    $image = "https://pendataanpembudidayaikan.com/storage//uploads/absensi/".$data_get_foto[0]['foto_in'];
                                                                    unset($data_get_foto);
                                                                    mysqli_free_result($hasil_cek_get_foto);
                                                                }
                                                            }
                                                            // Done Prepare Data
                                                            $status_kirim_wasis = json_decode($value['response_wasis'])->status;

                                                            if ($status_kirim_wasis != 200) {
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Gagal Dikirim Ke Wasis Sebelumnya! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Data Disekip Update Ke Wasis...\n\n";
                                                                continue;
                                                            }

                                                            unset($status_kirim_wasis);

                                                            $id_wasis = (json_decode($value['response_wasis'])->data->id);

                                                            $data = 'code='.
                                                            '&kelompok_id='.rawurlencode($kelompok_id).
                                                            '&biota_id='.rawurlencode($biota_id).
                                                            '&ikan_id='.rawurlencode($ikan_id).
                                                            '&nik='.rawurlencode($nik).
                                                            '&name='.rawurlencode($name).
                                                            '&gender_id='.rawurlencode($gender_id).
                                                            '&birthdate='.rawurlencode($birthdate).
                                                            '&pendidikan='.rawurlencode($pendidikan).
                                                            '&agama_id='.rawurlencode($agama_id).
                                                            '&provinsi_id='.rawurlencode($provinsi_id).
                                                            '&kabupaten_id='.rawurlencode($kabupaten_id).
                                                            '&kecamatan_id='.rawurlencode($kecamatan_id).
                                                            '&kelurahan_id='.rawurlencode($kelurahan_id).
                                                            '&lat='.rawurlencode($lat).
                                                            '&lng='.rawurlencode($lng).
                                                            '&status_milik='.rawurlencode($status_milik).
                                                            '&jenis_usaha='.rawurlencode($jenis_usaha).
                                                            '&luas_usaha='.rawurlencode($luas_usaha).
                                                            '&media_pelihara='.rawurlencode($media_pelihara).
                                                            '&padat_pelihara='.rawurlencode($padat_pelihara).
                                                            '&teknologi='.rawurlencode($teknologi).
                                                            '&produksi='.rawurlencode($produksi).
                                                            '&harga='.rawurlencode($harga).
                                                            '&tk_num='.rawurlencode($tk_num).
                                                            '&omzet='.rawurlencode($omzet).
                                                            '&sumber_modal='.rawurlencode($sumber_modal).
                                                            '&ipal='.rawurlencode($ipal).
                                                            '&tandon='.rawurlencode($tandon).
                                                            '&greenbelt='.rawurlencode($greenbelt).
                                                            '&bantuan='.rawurlencode($bantuan).
                                                            '&penghargaan='.rawurlencode($penghargaan).
                                                            '&dukungan_pemda='.rawurlencode($dukungan_pemda).
                                                            '&dukungan_pusat='.rawurlencode($dukungan_pusat).
                                                            '&sertifikat='.rawurlencode($sertifikat).
                                                            '&penyuluh_name='.rawurlencode($penyuluh_name).
                                                            '&petugas_id='.rawurlencode($petugas_id).
                                                            '&upt_id='.rawurlencode($upt_id).
                                                            '&address='.rawurlencode($address).
                                                            '&pakan_jenis='.rawurlencode($pakan_jenis).
                                                            '&pakan_num='.rawurlencode($pakan_num).
                                                            '&pakan_sumber='.rawurlencode($pakan_sumber).
                                                            '&pakan_harga='.rawurlencode($pakan_harga).
                                                            '&benur_sumber='.rawurlencode($benur_sumber).
                                                            '&benur_num='.rawurlencode($benur_num).
                                                            '&benur_harga='.rawurlencode($benur_harga).
                                                            '&jarak_tambak='.rawurlencode($jarak_tambak).
                                                            '&sumber_air='.rawurlencode($sumber_air).
                                                            '&izin='.rawurlencode($izin).
                                                            '&nib='.rawurlencode($nib).
                                                            '&sumber_kredit='.rawurlencode($sumber_kredit).
                                                            '&skala_usaha='.rawurlencode($skala_usaha).
                                                            '&asuransi='.rawurlencode($asuransi).
                                                            '&status_kusuka='.rawurlencode($status_kusuka).
                                                            '&family_num='.rawurlencode($family_num).
                                                            '&biaya_media='.rawurlencode($biaya_media).
                                                            '&biaya_alat='.rawurlencode($biaya_alat).
                                                            '&biaya_susut='.rawurlencode($biaya_susut).
                                                            '&biaya_tk='.rawurlencode($biaya_tk).
                                                            '&income='.rawurlencode($income).
                                                            '&biaya_pakan='.rawurlencode($biaya_pakan).
                                                            '&biaya_benih='.rawurlencode($biaya_benih).
                                                            '&image='.rawurlencode($image).
                                                            '&photo='.rawurlencode($photo).
                                                            '&kab_id%5B%5D='.rawurlencode($kab_id1).
                                                            '&kab_id%5B%5D='.rawurlencode('').
                                                            '&kab_id%5B%5D='.rawurlencode('').
                                                            '&sukab_id%5B%5D='.rawurlencode($sukab_id1).
                                                            '&sukab_id%5B%5D='.rawurlencode('').
                                                            '&sukab_id%5B%5D='.rawurlencode('').
                                                            '&bekab_id%5B%5D='.rawurlencode($bekab_id1).
                                                            '&bekab_id%5B%5D='.rawurlencode('').
                                                            '&bekab_id%5B%5D='.rawurlencode('');

                                                            // GHASSKEUN KIRIM KE WASIS MASEHHHHHH
                                                            $curl = curl_init();

                                                            curl_setopt_array($curl, array(
                                                              CURLOPT_URL => 'http://sensus-kkp.argocipta.com/api/sensus/update/'.$id_wasis,
                                                              CURLOPT_RETURNTRANSFER => true,
                                                              CURLOPT_ENCODING => '',
                                                              CURLOPT_MAXREDIRS => 10,
                                                              CURLOPT_TIMEOUT => 0,
                                                              CURLOPT_FOLLOWLOCATION => true,
                                                              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                              CURLOPT_CUSTOMREQUEST => 'POST',
                                                              CURLOPT_POSTFIELDS => $data,
                                                              CURLOPT_HTTPHEADER => array(
                                                                'Content-Type: application/x-www-form-urlencoded',
                                                                'ApiKey: bc23e8feb0bef557f3c5f7a683fab5c0f3e360d287ab39c74d77f57e6bd3d9985be000f14769b13fd3e87cd44aa1844fa188e33eb195a9aa3fdeab'
                                                              ),
                                                            ));

                                                            $response = curl_exec($curl);

                                                            curl_close($curl);

                                                            unset($id_wasis);
                                                            $response_wasis = json_decode($response);

                                                            if($response_wasis->message == 'OK' && $response_wasis->status == '200'){
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Berhasil Dikirim Ke Wasis Dengan Status Sukses! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                $jumlah_berhasil++;
                                                            }else{
                                                                echo "Tanggal ".date('Y-m-d H:i:s').", NIK ".$value["nik"]." Berhasil Dikirim Ke Wasis Dengan Status Gagal!!! (Data Diisi Oleh ".$value['created_by'].")\n";
                                                                echo "Pesan Dari Wasis : ".$response_wasis->message."\n";
                                                                $jumlah_gagal++;
                                                            }

                                                            $query_update_data_wasis ='UPDATE survey '
                                                                                ."SET response_update_wasis = '".trim($response)
                                                                                ."', tanggal_update_wasis = '".date('Y-m-d H:i:s')
                                                                                ."'WHERE id = '".$value['id']."';";
                                                            if ($conn->query($query_update_data_wasis) === TRUE) {
                                                                echo "Pukul ".date('Y-m-d H:i:s').", Data ".$value['nik']." Berhasil di Update! \n";
                                                            } else {
                                                                echo "Error: " . $query_update_data_wasis . "\n" . $conn->error;
                                                            }

                                                            unset($data);


                                                            unset($data_hasil_cek_get_kabupaten_sumber_benih);
                                                            mysqli_free_result($hasil_cek_get_kabupaten_sumber_benih);
                                                        }
                                                    }
                                                    unset($data_hasil_cek_get_kabupaten_distribusi);
                                                    mysqli_free_result($hasil_cek_get_kabupaten_distribusi);
                                                }
                                            }
                                            unset($data_hasil_cek_get_kabupaten_sumber_pakan);
                                            mysqli_free_result($hasil_cek_get_kabupaten_sumber_pakan);
                                        }
                                    }
                                    unset($data_hasil_cek_get_petugas);
                                    mysqli_free_result($hasil_cek_get_petugas);
                                }
                            }
                            unset($data_hasil_cek_get_id_wilayah_pekebun);
                            mysqli_free_result($hasil_cek_get_id_wilayah_pekebun);
                        }
                    }
                    unset($data_hasil_cek_get_id_komoditas);
                    mysqli_free_result($hasil_cek_get_id_komoditas);
                }
            }
            // Dikasih Delay 1 Detik Biar Gak Rapid Fire
            $data_berjalan++;
            echo "Sisa Data = ".$total_data - $data_berjalan."\n";
            usleep(10000); // Delay 1 per 10 Detik
        }
        // Ilangin Datanya Biar Gak Memory Leak Maszehhhh
        mysqli_free_result($hasil_cek_ambil_data_survey_belom_dikirim);
    }
}
$tanggalend = date('Y-m-d H:i:s');

echo "Dari ".$total_data." Total Data, Jumlah Data Yang Mendapat Respon Sukses Sebanyak ".$jumlah_berhasil.", dan Gagal Sebanyak ".$jumlah_gagal.".\n";

// Itung Berapa Lama Waktu Berjalan
$tanggal_mulai = new DateTime($tanggalnow);
$tanggal_selesai = new DateTime($tanggalend);

$waktu_berjalan = $tanggal_selesai->diff($tanggal_mulai);

echo "Sinkronisasi Data Dimulai Dari ".$tanggalnow.", Sampai ".date('Y-m-d H:i:s')."(".$waktu_berjalan->h." Jam ".$waktu_berjalan->i." Menit ".$waktu_berjalan->s." Detik)\n";
$conn->close();
