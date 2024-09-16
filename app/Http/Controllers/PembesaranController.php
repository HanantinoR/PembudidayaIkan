<?php

namespace App\Http\Controllers;

use App\Models\SurveyModel;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class PembesaranController extends Controller
{
    public function index()
    {
        $data = [
            'titleParent' => 'Pembesaran',
            'titlePage' => 'Pembesaran'
        ];
        return view('pembesaran.index',compact('data'));
    }

    public function tambahSurvey(Request $request)
    {
        $fileExcel = $request->file;
        $fileNameExcel = date("YmdHis")."_".$fileExcel->getClientOriginalName();
        $path = storage_path().'/app/'.$fileExcel->store('tmp');
        // dd($path);
        $fileExcel->move(public_path('uploads'),$fileNameExcel);

        // $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        $inputFileType = 'Xlsx';
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
        $spreadSheet = $reader->load($path);
        $sheet = $spreadSheet->getActiveSheet();
        $worksheetInfo = $reader->listWorksheetInfo($path);

        $array_data = array();

        $i = "";
        for ($i=9; $i < 100000; $i++)
        {
            if($sheet->getCell("A$i")->getFormattedValue() == null ) {
                break;
            }
        }

        $baris_akhir = $i;

        for($row = 9; $row < $baris_akhir; $row++)
        {
            $no = $sheet->getCell("A{$row}")->getFormattedValue();
            $nama = $sheet->getCell("B{$row}")->getValue();
            $nik =  $sheet->getCell("C{$row}")->getValue();
            $tglLahir =  $sheet->getCell("D{$row}")->getFormattedValue();
            $usia =  (int)$sheet->getCell("E{$row}")->getFormattedValue();
            $agama =  $sheet->getCell("F{$row}")->getValue();
            $gender =  $sheet->getCell("G{$row}")->getFormattedValue();
            $pendidikan =  $sheet->getCell("H{$row}")->getValue();
            $totalKeluarga =  ($sheet->getCell("I{$row}")->getValue() === "null") ? NULL : $sheet->getCell("I{$row}")->getValue();
            $alamat =  $sheet->getCell("J{$row}")->getValue();
            $kelurahan =  $sheet->getCell("K{$row}")->getValue();
            $kecamatan =  $sheet->getCell("L{$row}")->getValue();
            $kota =  $sheet->getCell("M{$row}")->getValue();
            $provinsi =  $sheet->getCell("N{$row}")->getValue();
            $latitude =  $sheet->getCell("O{$row}")->getFormattedValue();
            $longitude =  $sheet->getCell("P{$row}")->getFormattedValue();
            $kelompok =  $sheet->getCell("Q{$row}")->getValue();
            $biota =  $sheet->getCell("R{$row}")->getValue();
            $komoditas =  $sheet->getCell("S{$row}")->getValue();
            $jenisUsaha =  $sheet->getCell("T{$row}")->getValue();
            $statusKusuka =  $sheet->getCell("U{$row}")->getValue();
            $statuskepemilikan =  $sheet->getCell("V{$row}")->getValue();
            $luasArea = (int)round($sheet->getCell("W{$row}")->getValue(),0);
            $mediaPemeliharaan =  $sheet->getCell("X{$row}")->getValue();
            $padatTebar = (int)round($sheet->getCell("Y{$row}")->getCalculatedValue(),0);
            $teknologi =  $sheet->getCell("Z{$row}")->getValue();
            $ukuran =  $sheet->getCell("AA{$row}")->getCalculatedValue();
            $produksi =  (int)round($sheet->getCell("AB{$row}")->getCalculatedValue(),0);
            $siklus =  (int)round($sheet->getCell("AC{$row}")->getCalculatedValue(),0);
            $produktivitas =  round($sheet->getCell("AD{$row}")->getCalculatedValue(),3);
            $distribusi =  $sheet->getCell("AE{$row}")->getValue();
            $hargaJual =  (int)round($sheet->getCell("AF{$row}")->getCalculatedValue(),0);
            $pendapatan =  (int)round($sheet->getCell("AG{$row}")->getCalculatedValue(),0);
            $jenisPakan =  $sheet->getCell("AH{$row}")->getValue();
            $fcrPakan =  $sheet->getCell("AI{$row}")->getCalculatedValue();
            $jumlahPakan =  (int)round($sheet->getCell("AJ{$row}")->getCalculatedValue(),0);
            $sumberSuplai =  $sheet->getCell("AK{$row}")->getValue();
            $hargaPakan =  (int)round($sheet->getCell("AL{$row}")->getValue(),0);
            $biayaPakan =  (int)round($sheet->getCell("AM{$row}")->getCalculatedValue(),0);
            $sumber_benih =  $sheet->getCell("AN{$row}")->getValue();
            $jumlahBenih =  (int)round($sheet->getCell("AO{$row}")->getCalculatedValue(),0);
            $hargaBenih =  (int)round($sheet->getCell("AP{$row}")->getValue(),0);
            $biayaBenih =  (int)round($sheet->getCell("AQ{$row}")->getCalculatedValue(),0);
            $jumlahTK =  (int)$sheet->getCell("AR{$row}")->getValue();
            $modal =  (int)round($sheet->getCell("AS{$row}")->getCalculatedValue(),0);
            $sumber_modal =  $sheet->getCell("AT{$row}")->getValue();
            $sumber_kredit =  @$sheet->getCell("AU{$row}")->getValue();
            $biayaPembuatanMedia =  (int)round($sheet->getCell("AV{$row}")->getValue(),0);
            $biayaPembelianAlat =  (int)round($sheet->getCell("AW{$row}")->getValue(),0);
            $biaya_penyusutan =  (int)round($sheet->getCell("AX{$row}")->getCalculatedValue(),0);
            $biaya_tenga_kerja =  (int)round((is_numeric($sheet->getCell("AY{$row}")->getCalculatedValue()) == true) ? $sheet->getCell("AY{$row}")->getCalculatedValue() : 0,0);
            $ipal =  $sheet->getCell("AZ{$row}")->getValue();
            $tandon =  $sheet->getCell("BA{$row}")->getValue();
            $green_belt =  $sheet->getCell("BB{$row}")->getValue();
            $jarak_pantai =  ($sheet->getCell("BC{$row}")->getValue() == "-") ? null : (int) $sheet->getCell("BC{$row}")->getValue();
            $sumber_air =  $sheet->getCell("BD{$row}")->getValue();
            $status_izin =  $sheet->getCell("BE{$row}")->getValue();
            $status_nib =  $sheet->getCell("BF{$row}")->getValue();
            $skala_usaha =  $sheet->getCell("BG{$row}")->getValue();
            $asuransi =  $sheet->getCell("BH{$row}")->getValue();
            $bantuan =  $sheet->getCell("BI{$row}")->getValue();
            $penghargaan =  $sheet->getCell("BJ{$row}")->getValue();
            $dukungan_pemda =  $sheet->getCell("BK{$row}")->getValue();
            $dukungan_pusat =  $sheet->getCell("BL{$row}")->getValue();
            $nama_penyuluh =  $sheet->getCell("BM{$row}")->getValue();
            $sertifikat =  $sheet->getCell("BN{$row}")->getValue();
            $nama_petugas =  $sheet->getCell("BO{$row}")->getValue();
            $nik_petugas =  $sheet->getCell("BP{$row}")->getValue();
            $upt =  $sheet->getCell("BQ{$row}")->getValue();


            $array_data[] = ([
                'no' => $no,
                'name' => $nama,
                'nik' => $nik,
                'BoD' => $tglLahir,
                'age' =>$usia,
                'religion' =>$agama,
                'gender' =>$gender,
                'education' =>$pendidikan,
                'totalFamily' =>$totalKeluarga,
                'address' =>$alamat,
                'village' =>$kelurahan,
                'district' =>$kecamatan,
                'city' =>$kota,
                'province' =>$provinsi,
                'lat' =>$latitude,
                'long' =>$longitude,
                'group' =>$kelompok,
                'biota' =>$biota,
                'commodities' =>$komoditas,
                'businessType' =>$jenisUsaha,
                'kusukaStatus' =>$statusKusuka,
                'ownerStatus' =>$statuskepemilikan,
                'Area' =>$luasArea,
                'maintenanceMedia' =>$mediaPemeliharaan,
                'padatTebar' =>$padatTebar,
                'tech' =>$teknologi,
                'size' =>$ukuran,
                'production' =>$produksi,
                'cycle' =>$siklus,
                'productivity' =>$produktivitas,
                'distribution' =>$distribusi,
                'sellingPrice' =>$hargaJual,
                'income' =>$pendapatan,
                'feedType' =>$jenisPakan,
                'fcrFeed' => $fcrPakan,
                'feedTotal' =>$jumlahPakan,
                'source_supply' =>$sumberSuplai,
                'feed_price' => $hargaPakan,
                'feed_cost' => $biayaPakan,
                'sumber_benih' => $sumber_benih,
                'total_benih' => $jumlahBenih,
                'benih_price' => $hargaBenih,
                'benih_cost' => $biayaBenih,
                'total_tk' => $jumlahTK,
                'modal' => $modal,
                'sumber_modal' => $sumber_modal,
                'sumber_kredit' => $sumber_kredit,
                'cost_maintenance_media' => $biayaPembuatanMedia,
                'cost_purchase_tools' => $biayaPembelianAlat,
                'biaya_penyusutan' => $biaya_penyusutan,
                'biaya_tenga_kerja' => $biaya_tenga_kerja,
                'ipal' => $ipal,
                'tandon' => $tandon,
                'green_belt' => $green_belt,
                'jarak_pantai' => $jarak_pantai,
                'sumber_air' => $sumber_air,
                'status_izin' => $status_izin,
                'status_nib' => $status_nib,
                'skala_usaha' => $skala_usaha,
                'asuransi' => $asuransi,
                'bantuan' => $bantuan,
                'penghargaan' => $penghargaan,
                'dukungan_pemda' => $dukungan_pemda,
                'dukungan_pusat' => $dukungan_pusat,
                'nama_penyuluh' => $nama_penyuluh,
                'sertifikat' => $sertifikat,
                'nama_petugas' => $nama_petugas,
                'nik_petugas' => $nik_petugas,
                'upt' => $upt
            ]);
        }

        return response()->json($array_data);
    }

    public function saveHasilSurvey(Request $request)
    {

        $validate = Validator::make($request->all(),
            [
            'name' => 'required|',
            'nik' => 'required|',
            'bod' =>'required|',
            'age' => 'required|',
            'religion' => 'required|',
            'gender' => 'required|',
            'education' => 'required|',
            'total_family' => 'required|',
            'address' => 'required|',
            'village' => 'required|',
            'district' => 'required|',
            'city' => 'required|',
            'province' => 'required|',
            'lat' => 'required|',
            'longs' => 'required|',
            'groups' => 'required|',
            'biota' => 'required|',
            'commodities' => 'required|',
            'business_type' => 'required|',
            'kusuka_status' => 'required|',
            'owner_status' => 'required|',
            'Area' => 'required|',
            'maintenance_media' => 'required|',
            'padat_tebar' => 'required|',
            'tech' => 'required|',
            'size' => 'required|',
            'production' => 'required|',
            'cycle' => 'required|',
            'productivity' => 'required|',
            'distribution' => 'required|',
            'selling_price' => 'required|',
            'income' => 'required|',
            'feed_type' => 'required|',
            'fcrFeed' => 'required|',
            'feed_total' => 'required|',
            'source_supply' => 'required|',
            'feed_price' => 'required|',
            'feed_cost' => 'required|',
            'sumber_benih' => 'required|',
            'total_benih' => 'required|',
            'benih_price' => 'required|',
            'benih_cost' => 'required|',
            'total_tk' => 'required|',
            'modal' => 'required|',
            'sumber_modal' => 'required|',
            'sumber_kredit' => 'required|',
            'cost_maintenance_media' => 'required|',
            'cost_purchase_tools' => 'required|',
            'biaya_penyusutan' => 'required|',
            'biaya_tenga_kerja' => 'required|',
            'ipal' => 'required|',
            'tandon' => 'required|',
            'green_belt' => 'required|',
            'jarak_pantai' => 'required|',
            'sumber_air' => 'required|',
            'status_izin' => 'required|',
            'status_nib' => 'required|',
            'skala_usaha' => 'required|',
            'asuransi' => 'required|',
            'bantuan' => 'required|',
            'penghargaan' => 'required|',
            'dukungan_pemda' => 'required|',
            'dukungan_pusat' => 'required|',
            'nama_penyuluh' => 'required|',
            'sertifikat' => 'required|',
            'nama_petugas' => 'required|',
            'nik_petugas' => 'required|',
            'upt' => 'required|',
        ],[
            'name' => 'Nama field is required',
            'nik' => 'NIK field is Required',
            'bod' => 'Tanggal Lahir field is Required',
            'age' => 'Usia field is required',
            'religion' => 'Agama field is required',
            'gender' => 'Jenis Kelamin field is required',
            'education' => 'Pendidikan field is required',
            'total_family' => 'Total Anggota Keluarga field is required',
            'address' => 'Alamaat field is required',
            'village' => 'Kelurahan/Desa field is required',
            'district' => 'Kecamatan field is required',
            'city' => 'Kabupaten / Kota field is required',
            'province' => 'Provinsi field is required',
            'lat' => 'Latitude field is required',
            'longs' => 'Longitude field is required',
            'groups' => 'Kelompok field is required',
            'biota' => 'Biota field is required',
            'commodities' => 'Komoditas field is required',
            'business_type' => 'Type Bisnis field is required',
            'kusuka_status' => 'Status Kusuka field is required',
            'owner_status' => 'Status Owner field is required',
            'Area' => 'Area field is required',
            'maintenance_media' => 'Media Pemeliharaan field is required',
            'padat_tebar' => 'Padat Tebar field is required',
            'tech' => 'Teknologi field is required',
            'size' => 'Ukuran field is required',
            'production' => 'Produksi field is required',
            'cycle' => 'Siklus field is required',
            'productivity' => 'Produktivitas field is required',
            'distribution' => 'Distribusi field is required',
            'selling_price' => 'Harga Jual field is required',
            'income' => 'Pendapatan field is required',
            'feed_type' => 'Jenis Pakan field is required',
            'fcrFeed' => 'FCR Pakan field is required',
            'feed_total' => 'Total Pakan field is required',
            'source_supply' => 'Sumber Suplai field is required',
            'feed_price' => 'Harga Pakanfield is required',
            'feed_cost' => 'Biaya Pakanfield is required',
            'sumber_benih' => 'Sumber Benih field is required',
            'total_benih' => 'Jumlah Benih field is required',
            'benih_price' => 'Harga Benihfield is required',
            'benih_cost' => 'Biaya Benihfield is required',
            'total_tk' => 'Total TK field is required',
            'modal' => 'Modal field is required',
            'sumber_modal' => 'Sumber Modalfield is required',
            'sumber_kredit' => 'Sumber Kredit field is required',
            'cost_maintenance_media' => 'Biaya Pembuatan Media Pemeliharaan field is required',
            'cost_purchase_tools'  => ' Biaya pembelian peralatan field is required',
            'biaya_penyusutan' => 'Biaya Penyusutan field is required',
            'biaya_tenga_kerja' => 'Biaya tenaga kerja (siklus) field is required',
            'ipal' => 'IPAL field is required',
            'tandon' => 'Tandon field is required',
            'green_belt' => 'Green Belt field is required',
            'jarak_pantai' => 'Jarak Ke Bibir Pantai field is required',
            'sumber_air' => 'Sumber Air field is required',
            'status_izin' => 'Status Izin field is required',
            'status_nib' => 'Status Nib field is required',
            'skala_usaha' => 'Skala Usaha field is required',
            'asuransi' => 'Asuransi field is required',
            'bantuan' => 'Bantuan field is required',
            'penghargaan' => 'Penghargaan field is required',
            'dukungan_pemda' => 'Dukungan Pemda field is required',
            'dukungan_pusat' => 'Dukungan Pusat field is required',
            'nama_penyuluh' => 'Nama Penyuluh field is required',
            'sertifikat' => 'Sertifikat field is required',
            'nama_petugas' => 'Nama Petugas field is required',
            'nik_petugas' => ' NIK field is required',
            'upt' => ' UPT field is required'
        ]);

        $waktu = date('Y-m-d h:i:s');
        for($i=0; $i<count($_POST['nama']);$i++)
        {
            if($_POST['lat'][$i] == null){
                @$latlong = DB::table('presensi')->where('nik_user_input','=',$_POST['nik'])->orderBy('created_at','DESC')->value('location_in');
                @$latlong = explode(",",$latlong);
                @$_POST['lat'][$i] = trim($latlong[0]);
                @$_POST['long'][$i] = trim($latlong[1]);
            }

            $unsanitized = $request->nik[$i];
            $sanitizeNIK = preg_replace('/([^0-9])/','',$unsanitized);

            $checkNIK = SurveyModel::where('nik',$sanitizeNIK)->count();


            if($checkNIK >= 1)
            {
                $flagNIK = 1;
            } else {

                SurveyModel::create([
                    'nama' => $_POST['nama'][$i],
                    'nik' => $sanitizeNIK,
                    'tanggal_lahir' => date("Y-m-d", strtotime($_POST['bod'][$i])),
                    'umur' =>    $_POST['age'][$i],
                    'agama'=> $_POST['religion'][$i],
                    'gender'  => $_POST['gender'][$i],
                    'tingkat_pendidikan' => $_POST['education'][$i],
                    'jumlah_keluarga' => intval($_POST['totalFamily'][$i]),
                    'alamat' => $_POST['address'][$i],
                    'kelurahan' => $_POST['village'][$i],
                    'kecamatan'=> $_POST['district'][$i],
                    'kota_kabupaten'=> $_POST['city'][$i],
                    'provinsi'=> $_POST['province'][$i],
                    'latitude' => $_POST['lat'][$i],
                    'longitude'=> $_POST['long'][$i],
                    'kelompok'   => $_POST['group'][$i],
                    'biota'   => $_POST['biota'][$i],
                    'komoditas' => $_POST['commodities'][$i],
                    'jenis_usaha'=> $_POST['businessType'][$i],
                    'status_kusuka'=> $_POST['kusukaStatus'][$i],
                    'status_kepemilikan' => $_POST['ownerStatus'][$i],
                    'luas_usaha'=> $_POST['Area'][$i],
                    'media_pemeliharaan'  => $_POST['maintenanceMedia'][$i],
                    'padat_tebar'  => $_POST['padatTebar'][$i],
                    'teknologi' =>$_POST['tech'][$i],
                    'ukuran' =>$_POST['size'][$i],
                    'produksi' => str_replace(".","",str_replace(",","",$_POST['production'][$i])),
                    'siklus'=>$_POST['cycle'][$i],
                    'produktivitas' =>$_POST['productivity'][$i],
                    'kota_kabupaten_distribusi' => $_POST['distribution'][$i],
                    'harga_jual' => $_POST['sellingPrice'][$i],
                    'pendapatan' => str_replace(".","",str_replace(",","",$_POST['income'][$i])),
                    'jenis_pakan' => $_POST['feedType'][$i],
                    'jumlah_pakan' => str_replace(".","",str_replace(",","",$_POST['feedTotal'][$i])),
                    'kota_kabupaten_sumber_pakan'=> $_POST['source_supply'][$i],
                    'harga_pakan' => str_replace(".","",str_replace(",","",$_POST['feed_price'][$i])),
                    'biaya_pakan' => str_replace(".","",str_replace(",","",$_POST['feed_cost'][$i])),
                    'kota_kabupaten_sumber_benih' => $_POST['sumber_benih'][$i],
                    'jumlah_benih' => str_replace(".","",str_replace(",","",$_POST['total_benih'][$i])),
                    'harga_benih' => str_replace(".","",str_replace(",","",$_POST['benih_price'][$i])),
                    'biaya_benih' => str_replace(".","",str_replace(",","",$_POST['benih_cost'][$i])),
                    'jumlah_tenaga_kerja' => $_POST['total_tk'][$i],
                    'modal' => str_replace(".","",str_replace(",","",$_POST['modal'][$i])),
                    'sumber_modal' => $_POST['sumber_modal'][$i],
                    'sumber_kredit' => $_POST['sumber_kredit'][$i],
                    'biaya_pembuatan_media_pemeliharaan' => str_replace(".","",str_replace(",","",$_POST['cost_maintenance_media'][$i])),
                    'biaya_pembelian_peralatan' => str_replace(".","",str_replace(",","",$_POST['cost_purchase_tools'][$i])),
                    'biaya_penyusutan' => str_replace(".","",str_replace(",","",$_POST['biaya_penyusutan'][$i])),
                    'biaya_tenaga_kerja' => str_replace(".","",str_replace(",","",$_POST['biaya_tenga_kerja'][$i])),
                    'ipal' => $_POST['ipal'][$i],
                    'tandon' => $_POST['tandon'][$i],
                    'green_belt' => $_POST['green_belt'][$i],
                    'jarak_pantai' => (int)$_POST['jarak_pantai'][$i],
                    'sumber_air' => $_POST['sumber_air'][$i],
                    'status_izin' => $_POST['status_izin'][$i],
                    'status_nib' => $_POST['status_nib'][$i],
                    'skala_usaha' => $_POST['skala_usaha'][$i],
                    'asuransi' => $_POST['asuransi'][$i],
                    'bantuan' => $_POST['bantuan'][$i],
                    'penghargaan' => $_POST['penghargaan'][$i],
                    'dukungan_pemda' => $_POST['dukungan_pemda'][$i],
                    'dukungan_pusat' => $_POST['dukungan_pusat'][$i],
                    'nama_penyuluh' => $_POST['nama_penyuluh'][$i],
                    'sertifikat' => $_POST['sertifikat'][$i],
                    'nama_petugas' => $_POST['nama_petugas'][$i],
                    'nik_petugas' => $_POST['nik_petugas'][$i],
                    'upt' => $_POST['upt'][$i],
                    'created_at'=>$waktu,
                    'created_by'=> Auth::user()->nama,
                    'updated_at' =>$waktu,
                    'updated_by'=> Auth::user()->nama
                ]);
            }
        }
        return redirect()->route('pembesaran')->with('message','Terdapat beberapa NIK yang sudah ada dalam Database!');
    }

    public function downloadFile()
    {
        $tanggalnow = date("Y-m-d H:i:s");
        echo "Sekarang Jam ".$tanggalnow."\n"."Memulai Download Per 100 Foto...";
        echo("<br>");
        $nomor = 0;
        $array_data = array();
        $array_data["asd"] = "https://drive.google.com/drive/folders/1ZH6SJMMQGuawBeegeE31SR2TwQ8Fcn5M";
        $array_data["3525114608570002"] = "https://drive.google.com/file/d/1mpcuGpteq02-U4ys_Qp_b7dUfBltepBy/view?usp=sharing";

        foreach ($array_data as $key => $value) {
            $nomor++;
            $data_pembudidaya = DB::table('survey')->where('nik','=',$key)->select('id','nama','nik','longitude','latitude','created_by')->first();
            @$nama = $data_pembudidaya->nama;

            @$folder_atau_file = explode("/",parse_url($value)['path'])[2];

            if (@$folder_atau_file === "folders") {
                echo("$nomor. Download Atas NIK $key, $nama Gagal, Download Foto Disekip \n\n");
                echo("<br>");
                continue;
            }else{
                $tikor = $data_pembudidaya->latitude.', '.$data_pembudidaya->longitude;
                $id = explode("/",parse_url($value)['path'])[3];

                $ch = curl_init();
                $url = "https://drive.usercontent.google.com/download?id=$id&export=download&authuser=0";

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

                $response = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                if ($httpCode  == 200)  {

                    $waktu = date("YmdHis");
                    $nik = $data_pembudidaya->nik;
                    $lokasi = $tikor;
                    $path = "uploads/absensi/";
                    $file = $waktu."_".$nik."_".$nama.".png";
                    $fileName =$path.$file;


                    // Direct download: Save the file directly
                    $result = Storage::disk('public')->put($fileName,$response);
                    if ($result === false) {
                        echo("$nomor. Download Atas NIK $key, $nama Gagal, Download Foto Disekip \n\n");
                        echo("<br>");
                        continue;
                    } else {
                        echo("$nomor. Download Foto Atas NIK $key, $nama Berhasil \n\n");
                        echo("<br>");
                        $presensi = DB::table('presensi')->insert([
                            'nama_user_input' => trim($nama),
                            'nik_user_input' => trim($nik),
                            'foto_in' => $file,
                            'location_in' => $lokasi,
                            'created_at' => date('Y-m-d H:i:s'),
                            'created_by' => $data_pembudidaya->created_by
                        ]);
                    }
                    curl_close($ch);
                    continue;
                    // exit;
                }else{
                    echo("$nomor. Download Atas NIK $key, $nama Gagal, Download Foto Disekip \n\n");
                    echo("<br>");
                    curl_close($ch);
                    continue;
                }
            }
        }
        $tanggalend = date('Y-m-d H:i:s');

        // Itung Berapa Lama Waktu Berjalan
        $tanggal_mulai = new DateTime($tanggalnow);
        $tanggal_selesai = new DateTime($tanggalend);

        $waktu_berjalan = $tanggal_selesai->diff($tanggal_mulai);

        echo "Sinkronisasi Data Dimulai Dari ".$tanggalnow.", Sampai ".date('Y-m-d H:i:s')."(".$waktu_berjalan->h." Jam ".$waktu_berjalan->i." Menit ".$waktu_berjalan->s." Detik)\n";

    }
}
