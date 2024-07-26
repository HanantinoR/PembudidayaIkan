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
            $totalKeluarga =  ($sheet->getCell("I{$row}")->getValue() == "null") ? '0' : $sheet->getCell("I{$row}")->getValue();
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
            $sumberBenih =  $sheet->getCell("AN{$row}")->getValue();
            $jumlahBenih =  (int)round($sheet->getCell("AO{$row}")->getCalculatedValue(),0);
            $hargaBenih =  (int)round($sheet->getCell("AP{$row}")->getValue(),0);
            $biayaBenih =  (int)round($sheet->getCell("AQ{$row}")->getCalculatedValue(),0);
            $jumlahTK =  (int)$sheet->getCell("AR{$row}")->getValue();
            $modal =  (int)round($sheet->getCell("AS{$row}")->getCalculatedValue(),0);
            $sumberModal=  $sheet->getCell("AT{$row}")->getValue();
            $sumberKredit=  @$sheet->getCell("AU{$row}")->getValue();
            $biayaPembuatanMedia =  (int)round($sheet->getCell("AV{$row}")->getValue(),0);
            $biayaPembelianAlat =  (int)round($sheet->getCell("AW{$row}")->getValue(),0);
            $biayaPenyusutan =  (int)round($sheet->getCell("AX{$row}")->getCalculatedValue(),0);
            $biayaTengaKerja =  (int)round((is_numeric($sheet->getCell("AY{$row}")->getCalculatedValue()) == true) ? $sheet->getCell("AY{$row}")->getCalculatedValue() : 0,0);
            $ipal =  $sheet->getCell("AZ{$row}")->getValue();
            $tandon =  $sheet->getCell("BA{$row}")->getValue();
            $greenBelt =  $sheet->getCell("BB{$row}")->getValue();
            $jarakPantai =  ($sheet->getCell("BC{$row}")->getValue() == "-") ? null : (int) $sheet->getCell("BC{$row}")->getValue();
            $sumberAir =  $sheet->getCell("BD{$row}")->getValue();
            $statusIzin =  $sheet->getCell("BE{$row}")->getValue();
            $statusNib =  $sheet->getCell("BF{$row}")->getValue();
            $skalaUsaha =  $sheet->getCell("BG{$row}")->getValue();
            $asuransi =  $sheet->getCell("BH{$row}")->getValue();
            $bantuan =  $sheet->getCell("BI{$row}")->getValue();
            $penghargaan =  $sheet->getCell("BJ{$row}")->getValue();
            $dukunganPemda =  $sheet->getCell("BK{$row}")->getValue();
            $dukunganPusat =  $sheet->getCell("BL{$row}")->getValue();
            $namaPenyuluh =  $sheet->getCell("BM{$row}")->getValue();
            $sertifikat =  $sheet->getCell("BN{$row}")->getValue();
            $namaPetugas =  $sheet->getCell("BO{$row}")->getValue();
            $nikPetugas =  $sheet->getCell("BP{$row}")->getValue();
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
                'inCome' =>$pendapatan,
                'feedType' =>$jenisPakan,
                'fcrFeed' => $fcrPakan,
                'feedTotal' =>$jumlahPakan,
                'sourceSupply' =>$sumberSuplai,
                'feedPrice' => $hargaPakan,
                'feedCost' => $biayaPakan,
                'sumberBenih' => $sumberBenih,
                'totalBenih' => $jumlahBenih,
                'benihPrice' => $hargaBenih,
                'benihCost' => $biayaBenih,
                'totalTk' => $jumlahTK,
                'modal' => $modal,
                'sumberModal' => $sumberModal,
                'sumberKredit' => $sumberKredit,
                'costMaintenanceMedia' => $biayaPembuatanMedia,
                'costPurchaseTools' => $biayaPembelianAlat,
                'biayaPenyusutan' => $biayaPenyusutan,
                'biayaTengaKerja' => $biayaTengaKerja,
                'ipal' => $ipal,
                'tandon' => $tandon,
                'greenBelt' => $greenBelt,
                'jarakPantai' => $jarakPantai,
                'sumberAir' => $sumberAir,
                'statusIzin' => $statusIzin,
                'statusNib' => $statusNib,
                'skalaUsaha' => $skalaUsaha,
                'asuransi' => $asuransi,
                'bantuan' => $bantuan,
                'penghargaan' => $penghargaan,
                'dukunganPemda' => $dukunganPemda,
                'dukunganPusat' => $dukunganPusat,
                'namaPenyuluh' => $namaPenyuluh,
                'sertifikat' => $sertifikat,
                'namaPetugas' => $namaPetugas,
                'nikPetugas' => $nikPetugas,
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
            // 'lat' => 'required|',
            // 'longs' => 'required|',
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
            'inCome' => 'required|',
            'feed_type' => 'required|',
            'fcrFeed' => 'required|',
            'feed_total' => 'required|',
            'source_supply' => 'required|',
            'feedPrice' => 'required|',
            'feedCost' => 'required|',
            'sumberBenih' => 'required|',
            'totalBenih' => 'required|',
            'benihPrice' => 'required|',
            'benihCost' => 'required|',
            'totalTk' => 'required|',
            'modal' => 'required|',
            'sumberModal' => 'required|',
            'sumberKredit' => 'required|',
            'costMaintenanceMedia' => 'required|',
            'costPurchaseTools' => 'required|',
            'biayaPenyusutan' => 'required|',
            'biayaTengaKerja' => 'required|',
            'ipal' => 'required|',
            'tandon' => 'required|',
            'greenBelt' => 'required|',
            'jarakPantai' => 'required|',
            'sumberAir' => 'required|',
            'statusIzin' => 'required|',
            'statusNib' => 'required|',
            'skalaUsaha' => 'required|',
            'asuransi' => 'required|',
            'bantuan' => 'required|',
            'penghargaan' => 'required|',
            'dukunganPemda' => 'required|',
            'dukunganPusat' => 'required|',
            'namaPenyuluh' => 'required|',
            'sertifikat' => 'required|',
            'namaPetugas' => 'required|',
            'nikPetugas' => 'required|',
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
            'inCome' => 'Pendapatan field is required',
            'feed_type' => 'Jenis Pakan field is required',
            'fcrFeed' => 'FCR Pakan field is required',
            'feed_total' => 'Total Pakan field is required',
            'source_supply' => 'Sumber Suplai field is required',
            'feedPrice' => 'Harga Pakanfield is required',
            'feedCost' => 'Biaya Pakanfield is required',
            'sumberBenih' => 'Sumber Benih field is required',
            'totalBenih' => 'Jumlah Benih field is required',
            'benihPrice' => 'Harga Benihfield is required',
            'benihCost' => 'Biaya Benihfield is required',
            'totalTk' => 'Total TK field is required',
            'modal' => 'Modal field is required',
            'sumberModal' => 'Sumber Modalfield is required',
            'sumberKredit' => 'Sumber Kredit field is required',
            'costMaintenanceMedia' => 'Biaya Pembuatan Media Pemeliharaan field is required',
            'costPurchaseTools'  => ' Biaya pembelian peralatan field is required',
            'biayaPenyusutan' => 'Biaya Penyusutan field is required',
            'biayaTengaKerja' => 'Biaya tenaga kerja (siklus) field is required',
            'ipal' => 'IPAL field is required',
            'tandon' => 'Tandon field is required',
            'greenBelt' => 'Green Belt field is required',
            'jarakPantai' => 'Jarak Ke Bibir Pantai field is required',
            'sumberAir' => 'Sumber Air field is required',
            'statusIzin' => 'Status Izin field is required',
            'statusNib' => 'Status Nib field is required',
            'skalaUsaha' => 'Skala Usaha field is required',
            'asuransi' => 'Asuransi field is required',
            'bantuan' => 'Bantuan field is required',
            'penghargaan' => 'Penghargaan field is required',
            'dukunganPemda' => 'Dukungan Pemda field is required',
            'dukunganPusat' => 'Dukungan Pusat field is required',
            'namaPenyuluh' => 'Nama Penyuluh field is required',
            'sertifikat' => 'Sertifikat field is required',
            'namaPetugas' => 'Nama Petugas field is required',
            'nikPetugas' => ' NIK field is required',
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
                    'name' => $_POST['nama'][$i],
                    'nik' => $_POST['nik'][$i],
                    'bod' => date("Y-m-d", strtotime($_POST['bod'][$i])),
                    'age' =>    $_POST['age'][$i],
                    'religion'=> $_POST['religion'][$i],
                    'gender'  => $_POST['gender'][$i],
                    'education' => $_POST['education'][$i],
                    'total_family' => intval($_POST['totalFamily'][$i]),
                    'address' => $_POST['address'][$i],
                    'village' => $_POST['village'][$i],
                    'district'=> $_POST['district'][$i],
                    'city'=> $_POST['city'][$i],
                    'province'=> $_POST['province'][$i],
                    'lat' => $_POST['lat'][$i],
                    'longs'=> $_POST['long'][$i],
                    'groups'   => $_POST['group'][$i],
                    'biota'   => $_POST['biota'][$i],
                    'commodities' => $_POST['commodities'][$i],
                    'business_type'=> $_POST['businessType'][$i],
                    'kusuka_status'=> $_POST['kusukaStatus'][$i],
                    'owner_status' => $_POST['ownerStatus'][$i],
                    'Area'=> $_POST['Area'][$i],
                    'maintenance_media'  => $_POST['maintenanceMedia'][$i],
                    'padat_tebar'  => $_POST['padatTebar'][$i],
                    'tech' =>$_POST['tech'][$i],
                    'size' =>$_POST['size'][$i],
                    'production' => str_replace(".","",str_replace(",","",$_POST['production'][$i])),
                    'cycle'=>$_POST['cycle'][$i],
                    'productivity' =>$_POST['productivity'][$i],
                    'distribution' => $_POST['distribution'][$i],
                    'selling_price' => $_POST['sellingPrice'][$i],
                    'inCome' => str_replace(".","",str_replace(",","",$_POST['inCome'][$i])),
                    'feed_type' => $_POST['feedType'][$i],
                    'feed_total' => str_replace(".","",str_replace(",","",$_POST['feedTotal'][$i])),
                    'source_supply'=> $_POST['sourceSupply'][$i],
                    'feedPrice' => str_replace(".","",str_replace(",","",$_POST['feedPrice'][$i])),
                    'feedCost' => str_replace(".","",str_replace(",","",$_POST['feedCost'][$i])),
                    'sumberBenih' => $_POST['sumberBenih'][$i],
                    'totalBenih' => str_replace(".","",str_replace(",","",$_POST['totalBenih'][$i])),
                    'benihPrice' => str_replace(".","",str_replace(",","",$_POST['benihPrice'][$i])),
                    'benihCost' => str_replace(".","",str_replace(",","",$_POST['benihCost'][$i])),
                    'totalTk' => $_POST['totalTk'][$i],
                    'modal' => str_replace(".","",str_replace(",","",$_POST['modal'][$i])),
                    'sumberModal' => $_POST['sumberModal'][$i],
                    'sumberKredit' => $_POST['sumberKredit'][$i],
                    'costMaintenanceMedia' => str_replace(".","",str_replace(",","",$_POST['costMaintenanceMedia'][$i])),
                    'costPurchaseTools' => str_replace(".","",str_replace(",","",$_POST['costPurchaseTools'][$i])),
                    'biayaPenyusutan' => str_replace(".","",str_replace(",","",$_POST['biayaPenyusutan'][$i])),
                    'biayaTengaKerja' => str_replace(".","",str_replace(",","",$_POST['biayaTengaKerja'][$i])),
                    'ipal' => $_POST['ipal'][$i],
                    'tandon' => $_POST['tandon'][$i],
                    'greenBelt' => $_POST['greenBelt'][$i],
                    'jarakPantai' => (int)$_POST['jarakPantai'][$i],
                    'sumberAir' => $_POST['sumberAir'][$i],
                    'statusIzin' => $_POST['statusIzin'][$i],
                    'statusNib' => $_POST['statusNib'][$i],
                    'skalaUsaha' => $_POST['skalaUsaha'][$i],
                    'asuransi' => $_POST['asuransi'][$i],
                    'bantuan' => $_POST['bantuan'][$i],
                    'penghargaan' => $_POST['penghargaan'][$i],
                    'dukunganPemda' => $_POST['dukunganPemda'][$i],
                    'dukunganPusat' => $_POST['dukunganPusat'][$i],
                    'namaPenyuluh' => $_POST['namaPenyuluh'][$i],
                    'sertifikat' => $_POST['sertifikat'][$i],
                    'namaPetugas' => $_POST['namaPetugas'][$i],
                    'nikPetugas' => $_POST['nikPetugas'][$i],
                    'upt' => $_POST['upt'][$i],
                    'created_at'=>$waktu,
                    'created_by'=> Auth::user()->nama_lengkap,
                    'updated_at' =>$waktu,
                    'updated_by'=> Auth::user()->nama_lengkap
                ]);
            }
        }
        return redirect()->route('pembesaran')->with('message','Terdapat beberapa NIK yang sudah ada dalam Database!');
    }
}
