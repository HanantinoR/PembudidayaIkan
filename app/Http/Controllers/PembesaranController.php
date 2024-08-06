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
                'sumberBenih' => $sumberBenih,
                'totalBenih' => $jumlahBenih,
                'benihPrice' => $hargaBenih,
                'benihCost' => $biayaBenih,
                'total_tk' => $jumlahTK,
                'modal' => $modal,
                'sumberModal' => $sumberModal,
                'sumberKredit' => $sumberKredit,
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
            'income' => 'required|',
            'feed_type' => 'required|',
            'fcrFeed' => 'required|',
            'feed_total' => 'required|',
            'source_supply' => 'required|',
            'feed_price' => 'required|',
            'feed_cost' => 'required|',
            'sumberBenih' => 'required|',
            'totalBenih' => 'required|',
            'benihPrice' => 'required|',
            'benihCost' => 'required|',
            'total_tk' => 'required|',
            'modal' => 'required|',
            'sumberModal' => 'required|',
            'sumberKredit' => 'required|',
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
            'sumberBenih' => 'Sumber Benih field is required',
            'totalBenih' => 'Jumlah Benih field is required',
            'benihPrice' => 'Harga Benihfield is required',
            'benihCost' => 'Biaya Benihfield is required',
            'total_tk' => 'Total TK field is required',
            'modal' => 'Modal field is required',
            'sumberModal' => 'Sumber Modalfield is required',
            'sumberKredit' => 'Sumber Kredit field is required',
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
                    'income' => str_replace(".","",str_replace(",","",$_POST['income'][$i])),
                    'feed_type' => $_POST['feedType'][$i],
                    'feed_total' => str_replace(".","",str_replace(",","",$_POST['feedTotal'][$i])),
                    'source_supply'=> $_POST['source_supply'][$i],
                    'feed_price' => str_replace(".","",str_replace(",","",$_POST['feed_price'][$i])),
                    'feed_cost' => str_replace(".","",str_replace(",","",$_POST['feed_cost'][$i])),
                    'sumberBenih' => $_POST['sumberBenih'][$i],
                    'totalBenih' => str_replace(".","",str_replace(",","",$_POST['totalBenih'][$i])),
                    'benihPrice' => str_replace(".","",str_replace(",","",$_POST['benihPrice'][$i])),
                    'benihCost' => str_replace(".","",str_replace(",","",$_POST['benihCost'][$i])),
                    'total_tk' => $_POST['total_tk'][$i],
                    'modal' => str_replace(".","",str_replace(",","",$_POST['modal'][$i])),
                    'sumberModal' => $_POST['sumberModal'][$i],
                    'sumberKredit' => $_POST['sumberKredit'][$i],
                    'cost_maintenance_media' => str_replace(".","",str_replace(",","",$_POST['cost_maintenance_media'][$i])),
                    'cost_purchase_tools' => str_replace(".","",str_replace(",","",$_POST['cost_purchase_tools'][$i])),
                    'biaya_penyusutan' => str_replace(".","",str_replace(",","",$_POST['biaya_penyusutan'][$i])),
                    'biaya_tenga_kerja' => str_replace(".","",str_replace(",","",$_POST['biaya_tenga_kerja'][$i])),
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
                    'created_by'=> Auth::user()->nama_lengkap,
                    'updated_at' =>$waktu,
                    'updated_by'=> Auth::user()->nama_lengkap
                ]);
            }
        }
        return redirect()->route('pembesaran')->with('message','Terdapat beberapa NIK yang sudah ada dalam Database!');
    }
}
