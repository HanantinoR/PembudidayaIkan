<?php

namespace App\Http\Controllers;

use URL;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use \avadim\FastExcelWriter\Area;
use \avadim\FastExcelWriter\Sheet;
use \avadim\FastExcelWriter\Style;
use \avadim\FastExcelWriter\Excel;
use \avadim\FastExcelWriter\Writer;
use \avadim\FastExcelWriter\WriterBuffer;

class HistoryController extends Controller
{
    public function indexInputData()
    {
        $data = [
            'titleParent' => 'DASHBOARD',
            'titlePage' => 'HISTORY INPUT'
        ];
        return view('history.data',compact('data'));
    }

    public function indexSentWasis()
    {
        $data = [
            'titleParent' => 'DASHBOARD',
            'titlePage' => 'HISTORY WASIS'
        ];
        return view('history.wasis',compact('data'));
    }

    //HISTORY INPUT DATA
    public function getDataSurveyUser()
    {
        if (Auth::user()->role == "Admin") {
            $query = DB::table('survey')->orderBy('created_at','DESC')->limit(10)->get();
        }else{
            $query = DB::table('survey')->where('created_by','=',Auth::user()->nama_lengkap)->orderBy('created_at','DESC')->get();
        }
        return Datatables::of($query)
        ->addColumn('aksi', function($datatb){
            if (Auth::user()->role == "Admin") {
                return
                    '<button type="button" class="btn btn-danger" onclick="deletedata('.$datatb->id.')">
                        <span class="btn-inner--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="me-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </span>
                        <span class="btn-inner--text"></span>
                    </button>
                    <a href="'.route("history.editwasis",["state"=>"input","id" =>$datatb->id]).'" type="button" class="btn btn-warning" >
                        <span class="btn-inner--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="me-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </span>
                    </a>';

            }else{
                return
                '';
            }
        })
        ->addColumn('foto', function($datatb){
            if (DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->value('foto_in') == null) {
                return
                '<a class="btn btn-sm btn-info uploadFoto" style="margin-top:5px;" data-id='.$datatb->id.' data-bs-toggle="modal" data-bs-target="#modal-form">
                    <span class="btn-inner--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 79.438 81.537 H 10.563 C 4.738 81.537 0 76.768 0 70.904 v -39.61 c 0 -5.863 4.738 -10.632 10.563 -10.632 h 4.66 c 0.692 0 1.373 -0.121 2.023 -0.358 c 1.382 -0.505 2.525 -1.505 3.219 -2.814 l 1.407 -2.653 c 2.085 -3.931 6.129 -6.374 10.555 -6.374 h 25.146 c 4.426 0 8.471 2.442 10.555 6.374 l 1.407 2.653 c 1.038 1.957 3.047 3.172 5.242 3.172 h 4.66 c 5.824 0 10.563 4.77 10.563 10.632 v 39.61 c 0 3.563 -1.76 6.871 -4.706 8.85 C 83.558 80.921 81.533 81.537 79.438 81.537 z M 10.563 24.662 C 6.944 24.662 4 27.637 4 31.294 v 39.61 c 0 3.657 2.944 6.633 6.563 6.633 h 68.875 c 1.298 0 2.552 -0.382 3.626 -1.104 C 84.902 75.199 86 73.132 86 70.904 v -39.61 c 0 -3.657 -2.944 -6.632 -6.563 -6.632 h -4.66 c -3.68 0 -7.043 -2.03 -8.775 -5.298 l -1.407 -2.653 c -1.39 -2.62 -4.08 -4.248 -7.021 -4.248 H 32.427 c -2.941 0 -5.632 1.627 -7.021 4.248 l -1.407 2.653 c -1.157 2.183 -3.067 3.851 -5.378 4.696 c -1.092 0.399 -2.235 0.602 -3.397 0.602 H 10.563 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 45 70.97 c -11.772 0 -21.349 -9.648 -21.349 -21.508 c 0 -5.742 2.219 -11.14 6.247 -15.202 c 2.062 -2.078 4.473 -3.683 7.167 -4.77 c 2.526 -1.019 5.195 -1.536 7.936 -1.536 c 11.772 0 21.35 9.648 21.35 21.507 c 0 2.757 -0.512 5.443 -1.521 7.985 c -1.076 2.713 -2.667 5.141 -4.727 7.217 C 56.069 68.73 50.706 70.97 45 70.97 z M 45 31.955 c -2.225 0 -4.391 0.419 -6.439 1.245 c -2.187 0.882 -4.146 2.187 -5.823 3.877 c -3.28 3.307 -5.087 7.706 -5.087 12.385 c 0 9.654 7.783 17.508 17.349 17.508 c 4.631 0 8.986 -1.819 12.262 -5.122 c 1.678 -1.691 2.973 -3.668 3.849 -5.877 c 0.822 -2.069 1.239 -4.26 1.239 -6.509 C 62.35 39.808 54.566 31.955 45 31.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <ellipse cx="75.184" cy="33.831" rx="3.234" ry="3.261" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                        </g>
                        </svg>
                    </span>
                    <span class="btn-inner--text">Upload Foto</span>
                </a>';
            }else{
                return
                '<img src="'.Storage::url("uploads/absensi/".DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->value('foto_in')).'" alt="" class="imaged w64" style="max-width:100px;">';
            }
        })
        ->addColumn('wasis', function($datatb){
            if (DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->value('foto_in') == null) {
                return
                '<a href="'.route("history.checkwasis",["id"=>$datatb->id]).'" class="btn btn-sm btn-info" style="margin-top:5px;" >
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <polygon points="0,14.69 0,39.65 51,45 0,50.35 0,75.31 90,45 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                    </g>
                    </svg>
                    Kirim Wasis!
                </a>';
            }else{
                return
                '<button type="button" class="btn btn-success"><ion-icon name="checkmark-done-outline"></ion-icon> Data Aman!</button>';
            }
        })
        ->rawColumns(['foto','aksi','wasis'])
        ->addIndexColumn()
        ->make(true);
    }
    public function getAllData()
    {
        if(Auth::user()->role == "Admin"){
            $dataSurvey = DB::table('survey')->orderBy('created_at','ASC')->get();
        }else{
            $dataSurvey = DB::table('survey')->where('created_by','=',Auth::user()->nama_lengkap)->orderBy('created_at','ASC')->get();
        }
        $arraySurvey =  json_decode(json_encode($dataSurvey), true);
        $jumlahArray = count($arraySurvey);

        $head = [
            'No',
            'Nama',
            'NIK',
            'Tanggal Lahir',
            'Usia',
            'Agama',
            'Gender',
            'Pendidikan',
            'Jumlah Anggota Keluarga',
            'Alamat',
            'Kelurahan / Desa ',
            'Kecamatan',
            'Kabupaten / Kota ',
            'Provinsi',
            'Latitude',
            'Longitude',
            'Kelompok',
            'Biota',
            'Komoditas',
            'Jenis Usaha',
            'Status Kusuka ',
            'Status Kepemilikan',
            'Luas Area (m2,',
            'Media Pemeliharaan ',
            'PADAT TEBAR (untuk usaha pembesaran)',
            'TEKNOLOGI',
            'Ukuran',
            'Produksi',
            'Siklus',
            'Produktivitas',
            'Distribusi',
            'Harga Jual',
            'Pendapatan',
            'Jenis Pakan',
            'Jumlah Pakan',
            'Sumber Supply',
            'Harga Pakan',
            'Biaya Pakan',
            'Sumber Benih',
            'Jumlah Benih',
            'Harga Benih',
            'Biaya Benih',
            'Jumlah TK',
            'Modal',
            'Sumber Modal',
            'Sumber Kredit',
            'Biaya Pembuatan Media Pemeliharaan',
            'Biaya Pemberlian Peralatan',
            'Biaya Penyusutan',
            'Biaya Tenaga Kerja',
            'Ipal',
            'Tandon',
            'Green Belt',
            'Jarak Ke Bibir Pantai',
            'Sumber Air',
            'Status Izin',
            'Status NIB',
            'Skala Usaha',
            'Asuransi',
            'Bantuan',
            'Penghargaan',
            'Dukungan Pemda',
            'Dukungan Pusat',
            'Nama Penyuluh',
            'Sertifikat',
            'Nama Petugas',
            'NIK Petugas',
            'UPT',
            'Dibuat Oleh',
            'Diinput Tanggal',
            'Status Wasis',
            'Tanggal kirim Wasis'
        ];

        $header = [
            'No' => '@',
            'Nama' => '@',
            'NIK'=> '@',
            'Tanggal Lahir'=> 'YYYY-MM-DD',
            'Usia'=> '@',
            'Agama'=> '@',
            'Gender'=> '@',
            'Pendidikan'=> '@',
            'Jumlah Anggota Keluarga'=> '@',
            'Alamat'=> '@',
            'Kelurahan / Desa '=> '@',
            'Kecamatan'=> '@',
            'Kabupaten / Kota '=> '@',
            'Provinsi'=> '@',
            'Latitude'=> '@',
            'Longitude'=> '@',
            'Kelompok'=> '@',
            'Biota'=> '@',
            'Komoditas'=> '@',
            'Jenis Usaha'=> '@',
            'Status Kusuka '=> '@',
            'Staus Kepemilikan'=> '@',
            'Luas Area (m2)' => '@',
            'Media Pemeliharaan '=> '@',
            'PADAT TEBAR (untuk usaha pembesaran'=> '@',
            'TEKNOLOGI'=> '@',
            'Ukuran'=> '@',
            'Produksi'=> '@',
            'Siklus'=> '@',
            'Produktivitas'=> '@',
            'Distribusi'=> '@',
            'Harga Jual'=> '#,##0.00',
            'Pendapatan'=> '#,##0.00',
            'Jenis Pakan'=> '@',
            'Jumlah Pakan'=> '@',
            'Sumber Supply'=> '@',
            'Harga Pakan'=> '#,##0.00',
            'Biaya Pakan'=> '#,##0.00',
            'Sumber Benih'=> '@',
            'Jumlah Benih'=> '@',
            'Harga Benih'=> '#,##0.00',
            'Biaya Benih'=> '#,##0.00',
            'Jumlah TK'=> '@',
            'Modal'=> '#,##0.00',
            'Sumber Modal'=> '@',
            'Sumber Kredit'=> '@',
            'Biaya Pembuatan Media Pemeliharaan'=> '#,##0.00',
            'Biaya Pemberlian Peralatan'=> '#,##0.00',
            'Biaya Penyusutan'=> '#,##0.00',
            'Biaya Tenaga Kerja'=> '#,##0.00',
            'Ipal'=> '@',
            'Tandon'=> '@',
            'Green Belt'=> '@',
            'Jarak Ke Bibir Pantai'=> '@',
            'Sumber Air'=> '@',
            'Status Izin'=> '@',
            'Status NIB'=> '@',
            'Skala Usaha'=> '@',
            'Asuransi'=> '@',
            'Bantuan'=> '@',
            'Penghargaan'=> '@',
            'Dukungan Pemda'=> '@',
            'Dukungan Pusat'=> '@',
            'Nama Penyuluh'=> '@',
            'Sertifikat'=> '@',
            'Nama Petugas'=> '@',
            'NIK Petugas'=> '@',
            'UPT'=> '@',
            'Diinput Oleh'=> '@',
            'Diinput Tanggal' => '@',
            'Status Wasis' => '@',
            'Tanggal Kirim Wasis' => '@'
        ];

        $headStyle = [
            'font' => [
                'style' => 'bold',
                // 'color' => 'FFFFFF',
            ],
            'text-align' => 'center',
            'vertical-align' => 'center',
            'border' => 'thin',
            'height' => 24,
            // 'fill' => '007bff',
        ];

        $excel = Excel::create(['Test']);

        $sheet = $excel->getSheet();
        $sheet->writeHeader($header, $headStyle);
        $sheet->setColWidths([7,20,30,15,10,15,15,15,15,40,20,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,
                20,30,20,30,20,30,20,30,20,10,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]);

        $totalArrayData = array();
        $no = 1;

        for($i=0;$i < $jumlahArray; $i++){
            $arrayData = [
                @$no,
                @$arraySurvey[$i]['name'],
                @$arraySurvey[$i]['nik'],
                @$arraySurvey[$i]['bod'],
                @$arraySurvey[$i]['age'],
                @$arraySurvey[$i]['religion'],
                @$arraySurvey[$i]['gender'],
                @$arraySurvey[$i]['education'],
                @$arraySurvey[$i]['total_family'],
                @$arraySurvey[$i]['address'],
                @$arraySurvey[$i]['village'],
                @$arraySurvey[$i]['district'],
                @$arraySurvey[$i]['city'],
                @$arraySurvey[$i]['province'],
                @$arraySurvey[$i]['lat'],
                @$arraySurvey[$i]['longs'],
                @$arraySurvey[$i]['groups'],
                @$arraySurvey[$i]['biota'],
                @$arraySurvey[$i]['commodities'],
                @$arraySurvey[$i]['business_type'],
                @$arraySurvey[$i]['kusuka_status'],
                @$arraySurvey[$i]['owner_status'],
                @$arraySurvey[$i]['area'],
                @$arraySurvey[$i]['maintenance_media'],
                @$arraySurvey[$i]['padat_tebar'],
                @$arraySurvey[$i]['tech'],
                @$arraySurvey[$i]['size'],
                @$arraySurvey[$i]['production'],
                @$arraySurvey[$i]['cycle'],
                @$arraySurvey[$i]['productivity'],
                @$arraySurvey[$i]['distribution'],
                @$arraySurvey[$i]['selling_price'],
                @$arraySurvey[$i]['inCome'],
                @$arraySurvey[$i]['feed_type'],
                @$arraySurvey[$i]['feed_total'],
                @$arraySurvey[$i]['source_supply'],
                @$arraySurvey[$i]['feedPrice'],
                @$arraySurvey[$i]['feedCost'],
                @$arraySurvey[$i]['sumberBenih'],
                @$arraySurvey[$i]['totalBenih'],
                @$arraySurvey[$i]['benihPrice'],
                @$arraySurvey[$i]['benihCost'],
                @$arraySurvey[$i]['totalTk'],
                @$arraySurvey[$i]['modal'],
                @$arraySurvey[$i]['sumberModal'],
                @$arraySurvey[$i]['sumberKredit'],
                @$arraySurvey[$i]['costMaintenanceMedia'],
                @$arraySurvey[$i]['costPurchaseTools'],
                @$arraySurvey[$i]['biayaPenyusutan'],
                @$arraySurvey[$i]['biayaTengaKerja'],
                @$arraySurvey[$i]['ipal'],
                @$arraySurvey[$i]['tandon'],
                @$arraySurvey[$i]['greenBelt'],
                @$arraySurvey[$i]['jarakPantai'],
                @$arraySurvey[$i]['sumberAir'],
                @$arraySurvey[$i]['statusIzin'],
                @$arraySurvey[$i]['statusNib'],
                @$arraySurvey[$i]['skalaUsaha'],
                @$arraySurvey[$i]['asuransi'],
                @$arraySurvey[$i]['bantuan'],
                @$arraySurvey[$i]['penghargaan'],
                @$arraySurvey[$i]['dukunganPemda'],
                @$arraySurvey[$i]['dukunganPusat'],
                @$arraySurvey[$i]['namaPenyuluh'],
                @$arraySurvey[$i]['sertifikat'],
                @$arraySurvey[$i]['namaPetugas'],
                @$arraySurvey[$i]['nikPetugas'],
                @$arraySurvey[$i]['upt'],
                @$arraySurvey[$i]['created_by'],
                date('Y-m-d H:i:s',strtotime(@$arraySurvey[$i]['created_at'])),
                @$arraySurvey[$i]['response_wasis'],
                @$arraySurvey[$i]['tanggal_kirim_wasis'],
            ];
            array_push($totalArrayData, $arrayData);
            $no++;
            // dd($totalArrayData);
        }

        foreach ($totalArrayData as $data) {
            $sheet->writeRow($data);
        }

        $filename = 'Excel History Input '.Auth::user()->nama_lengkap.' Tanggal '.date('Y-m-d').' Jam '.date('H_i_s').'.xlsx';

        $excel->save($filename);
        return Response::download($filename)->deleteFileAfterSend(true);
    }

    function getDataFotoUser(Request $request)
    {
        $id = $request->id;
        $dataFoto = DB::table('survey')->where('id','=',$id)->first();

        return response()->json([
            'data'=> $dataFoto
        ],200);
    }

    public function putUploadFoto(Request $request)
    {
        // dd($request->name, $request)
        $fileFoto = $request->file("foto");
        $fileNameFoto = date("YmdHis")."_".$request->nik."_".$request->name.'_'.$fileFoto->getClientOriginalName();
        $fileFoto->move(base_path('/storage/app/public/uploads/absensi/'),$fileNameFoto);
        DB::table('presensi')->insert([
            'nama_user_input' => $request->name,
            'nik_user_input' => $request->nik,
            'foto_in' => $fileNameFoto,
            'location_in' => $request->latitude.', '.$request->longitude,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => Auth::user()->name
        ]);

        return response()->json([
            'message' => 'Data Sudah Diupload',
        ],200);
    }

    function deleteData(){
        $id = $_POST['id'];
        DB::table('survey')->where('id','=',$id)->delete();
        return 0;
    }

    public function getIndexCheckWasis(Request $request,$id )
    {

        $data = [
            'titleParent' => 'HISTORY INPUT',
            'titlePage' => 'Check Wasis'
        ];

        //get data wasis by ID
        $checkWasis = DB::table('survey')->where('id',$id)->first();

        //check kelengkapan Data
        $staticValue = [];
            $staticValue['agama'] = [
                "ISLAM" => 40,
                "KATHOLIK" => 41,
                "KONG HU CHU" => 42,
                "KRISTEN" => 43,
                "HINDU" => 44,
                "BUDHA" => 45,
                "TIDAK DIISI" => 85,
                "LAINNYA" => 86
            ];
            $staticValue['jenis_kelamin'] = [
                "LAKI-LAKI" =>28,
                "PEREMPUAN" => 29
            ];
            $staticValue['pendidikan'] = [
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
            $staticValue['jenis_usaha'] = [
                "PEMBESARAN" => 1,
                "PEMBENIHAN" => 2,
                "IKAN HIAS" => 3
            ];
            $staticValue['status_kusuka'] = [
                "TERDAFTAR" => 1,
                "TIDAK TERDAFTAR" => 2
            ];
            $staticValue['status_kepemilikan'] = [
                "MILIK SENDIRI" => 1,
                "KERJA SAMA" => 2,
                "SEWA" => 3
            ];
            $staticValue['media_pemeliharaan'] = [
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
            $staticValue['teknologi'] = [
                "TRADISIONAL" => 1,
                "SEMI INTENSIF" => 2,
                "INTENSIF" => 3,
                "RAS" => 4,
                "BIOFLOK" => 5
            ];
            $staticValue['jenis_pakan'] = [
                "KOMERSIL APUNG" => 1,
                "KOMERSIL TENGGELAM" => 2,
                "MANDIRI APUNG" => 3,
                "MANDIRI TENGGELAM" => 4
            ];
            $staticValue['sumber_modal'] = [
                "SENDIRI" => 1,
                "KREDIT" => 2
            ];
            $staticValue['sumber_kredit'] = [
                "BANK" => 1,
                "KOPERASI" => 2,
                "RENTENIR" => 3,
                "PINJAMAN ONLINE" => 4,
                "KERABAT" => 5
            ];
            $staticValue['ada_tidak'] = [
                "ADA" => 1,
                "TIDAK" => 2
            ];
            $staticValue['perizinan'] = [
                "SUDAH BERIZIN" => 1,
                "TIDAK" => 2
            ];
            $staticValue['skala_usaha'] = [
                "MIKRO" => 1,
                "KECIL" => 2,
                "MENENGAH" => 3
            ];
            $staticValue['asuransi'] = [
                "SUDAH" => 1,
                "BELUM" => 2
            ];
            $staticValue['bantuan'] = [
                "KKP" => 1,
                "K\L LAIN" => 2,
                "CSR" => 3,
                "LAIN-LAIN" => 4,
                "TIDAK ADA" => 5
            ];
            $staticValue['dukungan_pemda'] = [
                "PENYULUHAN" => 1,
                "BIMTEK" => 2,
                "TIDAK ADA" => 3
            ];
            $staticValue['dukungan_pusat'] = [
                "ADA" => 1,
                "TIDAK ADA" => 2
            ];
            $staticValue['sertifikat'] = [
                "CBIB" => 1,
                "CPIB" => 2,
                "CPPIB" => 3,
                "TIDAK ADA" => 4
            ];
        //lokasi
        $checkLokasi = DB::table('daerah_wasis')
                        ->where('nama_kelurahan','=',strtoupper(trim($checkWasis->village)))
                        ->where('nama_kecamatan','=',strtoupper(trim($checkWasis->district)))
                        ->where('nama_kabupaten','=',strtoupper(trim($checkWasis->city)))
                        ->where('nama_provinsi','=',strtoupper(trim($checkWasis->province)))
                        ->first();

        if(isset($checkLokasi) == true)
        {
            $lokasi = 1;
        }else{
            $lokasi = 0;
        }

        //komoditas
        $checkKomoditas = DB::table('komoditas_wasis')
                        ->where('nama_kelompok','=',strtoupper(trim($checkWasis->groups)))
                        ->where('nama_biota','=',strtoupper(trim($checkWasis->biota)))
                        ->where('nama_komoditas','=',strtoupper(trim($checkWasis->commodities)))
                        ->first();

        if(isset($checkKomoditas) == true)
        {
            $komoditas = 1;
        }else{
            $komoditas = 0;
        }

        //distribusi
        $daerah_distribusi = explode(",",$checkWasis->distribution);

        foreach ($daerah_distribusi as $key => $value) {
            $daerah_distribusi[$key] = strtoupper(trim($value));
        }

        $checkDistribusi = DB::table('daerah_wasis')
                            ->whereIn('nama_kabupaten',$daerah_distribusi)
                            ->select('id_kabupaten','nama_kabupaten')
                            ->groupBy('id_kabupaten','nama_kabupaten')
                            ->get();

        if(count($checkDistribusi) == count($daerah_distribusi))
        {
            $distribusi = 1;
        }else{
            $distribusi = 0;
        }

        //sumber supply
        $daerah_supply = explode(",",$checkWasis->source_supply);

        foreach ($daerah_supply as $key => $value) {
            $daerah_supply[$key] = strtoupper(trim($value));
        }

        $checkSupply = DB::table('daerah_wasis')
                        ->whereIn('nama_kabupaten',$daerah_supply)
                        ->select('id_kabupaten','nama_kabupaten')
                        ->groupBy('id_kabupaten','nama_kabupaten')
                        ->get();

        if(count($checkSupply) == count($daerah_supply))
        {
            $supply = 1;
        }else{
            $supply = 0;
        }

        //sumber benih
        $daerah_benih = explode(",",$checkWasis->sumberBenih);

        foreach ($daerah_benih as $key => $value) {
            $daerah_benih[$key] = strtoupper(trim($value));
        }

        $checkBenih = DB::table('daerah_wasis')
                        ->whereIn('nama_kabupaten',$daerah_benih)
                        ->select('id_kabupaten','nama_kabupaten')
                        ->groupBy('id_kabupaten','nama_kabupaten')
                        ->get();

        if(count($checkBenih) == count($daerah_benih)){
            $sumber_benih = 1;
        }else{
            $sumber_benih = 0;
        }

        //petugas
        $checkPetugas = DB::table('petugas_wasis')
                    ->where('nama_petugas','=',strtoupper(trim($checkWasis->namaPetugas)))
                    ->where('nama_upt','=',strtoupper(trim($checkWasis->upt)))
                    ->first();

        if(isset($checkPetugas) == True)
        {
            $petugas = 1;
        } else {
            $petugas = 0;
        }

        return view('history.checkwasis',compact('data','checkWasis', 'staticValue','lokasi','komoditas','distribusi','supply','sumber_benih','petugas'));
    }
    //-- kirim wasis
    function sendWasis(Request $request,$id)
    {

        $staticValue['agama'] = [
            "ISLAM" => 40,
            "KATHOLIK" => 41,
            "KONG HU CHU" => 42,
            "KRISTEN" => 43,
            "HINDU" => 44,
            "BUDHA" => 45,
            "TIDAK DIISI" => 85,
            "LAINNYA" => 86
        ];
        $staticValue['jenis_kelamin'] = [
            "LAKI-LAKI" => 28,
            "PEREMPUAN" => 29
        ];
        $staticValue['pendidikan'] = [
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
        $staticValue['jenis_usaha'] = [
            "PEMBESARAN" => 1,
            "PEMBENIHAN" => 2,
            "IKAN HIAS" => 3
        ];
        $staticValue['status_kusuka'] = [
            "TERDAFTAR" => 1,
            "TIDAK TERDAFTAR" => 2
        ];
        $staticValue['status_kepemilikan'] = [
            "MILIK SENDIRI" => 1,
            "KERJA SAMA" => 2,
            "SEWA" => 3
        ];
        $staticValue['media_pemeliharaan'] = [
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
        $staticValue['teknologi'] = [
            "TRADISIONAL" => 1,
            "SEMI INTENSIF" => 2,
            "INTENSIF" => 3,
            "RAS" => 4,
            "BIOFLOK" => 5
        ];
        $staticValue['jenis_pakan'] = [
            "KOMERSIL APUNG" => 1,
            "KOMERSIL TENGGELAM" => 2,
            "MANDIRI APUNG" => 3,
            "MANDIRI TENGGELAM" => 4
        ];
        $staticValue['sumber_modal'] = [
            "SENDIRI" => 1,
            "KREDIT" => 2
        ];
        $staticValue['sumber_kredit'] = [
            "BANK" => 1,
            "KOPERASI" => 2,
            "RENTENIR" => 3,
            "PINJAMAN ONLINE" => 4,
            "KERABAT" => 5
        ];
        $staticValue['ada_tidak'] = [
            "ADA" => 1,
            "TIDAK" => 2
        ];
        $staticValue['perizinan'] = [
            "SUDAH BERIZIN" => 1,
            "TIDAK" => 2
        ];
        $staticValue['skala_usaha'] = [
            "MIKRO" => 1,
            "KECIL" => 2,
            "MENENGAH" => 3
        ];
        $staticValue['asuransi'] = [
            "SUDAH" => 1,
            "BELUM" => 2
        ];
        $staticValue['bantuan'] = [
            "KKP" => 1,
            "K\L LAIN" => 2,
            "CSR" => 3,
            "LAIN-LAIN" => 4,
            "TIDAK ADA" => 5
        ];
        $staticValue['dukungan_pemda'] = [
            "PENYULUHAN" => 1,
            "BIMTEK" => 2,
            "TIDAK ADA" => 3
        ];
        $staticValue['dukungan_pusat'] = [
            "ADA" => 1,
            "TIDAK ADA" => 2
        ];
        $staticValue['sertifikat'] = [
            "CBIB" => 1,
            "CPIB" => 2,
            "CPPIB" => 3,
            "TIDAK ADA" => 4
        ];

        $data_survey = DB::table('survey')->where('id','=',$id)->first();

        $get_id_komoditas = DB::table('komoditas_wasis')
                            ->where('nama_kelompok','=',strtoupper(trim($data_survey->groups)))
                            ->where('nama_biota','=',strtoupper(trim($data_survey->biota)))
                            ->where('nama_komoditas','=',strtoupper(trim($data_survey->commodities)))
                            ->first();

        $get_id_wilayah_pekebun = DB::table('daerah_wasis')
                                ->where('nama_kelurahan','=',strtoupper(trim($data_survey->village)))
                                ->where('nama_kecamatan','=',strtoupper(trim($data_survey->district)))
                                ->where('nama_kabupaten','=',strtoupper(trim($data_survey->city)))
                                ->where('nama_provinsi','=',strtoupper(trim($data_survey->province)))
                                ->first();

        $get_petugas = DB::table('petugas_wasis')
                        ->where('nama_petugas','=',strtoupper(trim($data_survey->namaPetugas)))
                        ->where('nama_upt','=',strtoupper(trim($data_survey->upt)))
                        ->first();

        $nama_daerah_sumber_pakan = explode(",",$data_survey->source_supply);

        foreach ($nama_daerah_sumber_pakan as $key => $value) {
            $nama_daerah_sumber_pakan[$key] = strtoupper(trim($value));
        }

        $get_kabupaten_sumber_pakan = DB::table('daerah_wasis')
                                        ->whereIn('nama_kabupaten',$nama_daerah_sumber_pakan)
                                        ->select('id_kabupaten','nama_kabupaten')
                                        ->groupBy('id_kabupaten','nama_kabupaten')
                                        ->get();

        for ($i=0; $i < 3; $i++) {
            ${"sukab_id".$i+1} = (isset($get_kabupaten_sumber_pakan[$i]->id_kabupaten) == true) ? $get_kabupaten_sumber_pakan[$i]->id_kabupaten : '';
        }

        $nama_daerah_distribusi = explode(",",$data_survey->distribution);

        foreach ($nama_daerah_distribusi as $key => $value) {
            $nama_daerah_distribusi[$key] = strtoupper(trim($value));
        }

        $get_kabupaten_distribusi = DB::table('daerah_wasis')
                                        ->whereIn('nama_kabupaten',$nama_daerah_distribusi)
                                        ->select('id_kabupaten','nama_kabupaten')
                                        ->groupBy('id_kabupaten','nama_kabupaten')
                                        ->get();

        for ($i=0; $i < 3; $i++) {
            ${"kab_id".$i+1} = (isset($get_kabupaten_distribusi[$i]->id_kabupaten) == true) ? $get_kabupaten_distribusi[$i]->id_kabupaten : '';
        }

        $nama_daerah_sumber_benih = explode(",",$data_survey->sumberBenih);

        foreach ($nama_daerah_sumber_benih as $key => $value) {
            $nama_daerah_sumber_benih[$key] = strtoupper(trim($value));
        }

        $get_kabupaten_sumber_benih = DB::table('daerah_wasis')
                                        ->whereIn('nama_kabupaten',$nama_daerah_sumber_benih)
                                        ->select('id_kabupaten','nama_kabupaten')
                                        ->groupBy('id_kabupaten','nama_kabupaten')
                                        ->get();

        for ($i=0; $i < 3; $i++) {
            ${"bekab_id".$i+1} = (isset($get_kabupaten_sumber_benih[$i]->id_kabupaten) == true) ? $get_kabupaten_sumber_benih[$i]->id_kabupaten : '';
        }

        $code = '';
        $kelompok_id = $get_id_komoditas->id_kelompok;
        $biota_id = $get_id_komoditas->id_kelompok;
        $ikan_id = $get_id_komoditas->id_komoditas;
        $nik= strtoupper(trim($data_survey->nik));
        $name= strtoupper(trim($data_survey->name));
        $gender_id=$staticValue['jenis_kelamin'][strtoupper(trim($data_survey->gender))];
        $birthdate=strtoupper(trim($data_survey->bod));
        $pendidikan=@$staticValue['pendidikan'][strtoupper(trim($data_survey->education))];
        $agama_id=$staticValue['agama'][strtoupper(trim($data_survey->religion))];
        $provinsi_id=$get_id_wilayah_pekebun->id_provinsi;
        $kabupaten_id=$get_id_wilayah_pekebun->id_kabupaten;
        $kecamatan_id=$get_id_wilayah_pekebun->id_kecamatan;
        $kelurahan_id=$get_id_wilayah_pekebun->id;
        $lat=strtoupper(trim($data_survey->lat));
        $lng=strtoupper(trim($data_survey->longs));
        $status_milik=$staticValue['status_kepemilikan'][strtoupper(trim($data_survey->owner_status))];
        $jenis_usaha=@$staticValue['jenis_usaha'][strtoupper(trim($data_survey->business_type))];
        $luas_usaha=$data_survey->area;
        $media_pelihara=$staticValue['media_pemeliharaan'][strtoupper(trim($data_survey->maintenance_media))];
        $padat_pelihara=$data_survey->padat_tebar;
        $teknologi=$staticValue['teknologi'][strtoupper(trim($data_survey->tech))];
        $produksi=$data_survey->production;
        $harga=$data_survey->selling_price;
        $tk_num=$data_survey->totalTk;
        $omzet=$data_survey->modal;
        $sumber_modal=@$staticValue['sumber_modal'][strtoupper(trim($data_survey->sumberModal))];
        $ipal=$staticValue['ada_tidak'][strtoupper(trim($data_survey->ipal))];
        $tandon=@$staticValue['ada_tidak'][strtoupper(trim($data_survey->tandon))];
        $greenbelt=@$staticValue['ada_tidak'][strtoupper(trim($data_survey->greenBelt))];
        $bantuan=@$staticValue['bantuan'][strtoupper(trim($data_survey->bantuan))];
        $penghargaan=@$staticValue['ada_tidak'][strtoupper(trim($data_survey->penghargaan))];
        $dukungan_pemda=$staticValue['dukungan_pemda'][strtoupper(trim($data_survey->dukunganPemda))];
        $dukungan_pusat=$staticValue['dukungan_pusat'][strtoupper(trim($data_survey->dukunganPusat))];
        $sertifikat=$staticValue['sertifikat'][strtoupper(trim($data_survey->sertifikat))];
        $penyuluh_name=(strtoupper(trim($data_survey->namaPenyuluh)) == 'NULL') ? '' : strtoupper(trim($data_survey->namaPenyuluh));
        $petugas_id=@$get_petugas->id_petugas;
        $upt_id=@$get_petugas->id_upt;
        $address=strtoupper(trim($data_survey->address));
        $pakan_jenis=$staticValue['jenis_pakan'][strtoupper(trim($data_survey->feed_type))];
        $pakan_num=$data_survey->feed_total;
        $pakan_sumber='';
        $pakan_harga=$data_survey->feedPrice;
        $benur_sumber='';
        $benur_num=$data_survey->totalBenih;
        $benur_harga=$data_survey->benihPrice;
        $jarak_tambak=(trim($data_survey->jarakPantai) == 0) ? '' : $data_survey->jarakPantai;
        $sumber_air=strtoupper(trim($data_survey->sumberAir));
        $izin=@$staticValue['perizinan'][strtoupper(trim($data_survey->statusIzin))];
        $nib=@$staticValue['ada_tidak'][strtoupper(trim($data_survey->statusNib))];
        $sumber_kredit=@$staticValue['sumber_kredit'][strtoupper(trim($data_survey->sumberKredit))];
        $skala_usaha=@$staticValue['skala_usaha'][strtoupper(trim($data_survey->skalaUsaha))];
        $asuransi=@$staticValue['asuransi'][strtoupper(trim($data_survey->asuransi))];
        $status_kusuka=@$staticValue['status_kusuka'][strtoupper(trim($data_survey->kusuka_status))];
        $family_num=$data_survey->total_family;
        $biaya_media=$data_survey->costMaintenanceMedia;
        $biaya_susut=$data_survey->biayaPenyusutan;
        $biaya_tk=$data_survey->biayaTengaKerja;
        $income=$data_survey->inCome;
        $biaya_pakan=$data_survey->feedCost;
        $biaya_benih=$data_survey->benihCost;
        $image=(DB::table('presensi')->where('nik_user_input','=',$nik)->orderBy('created_at','DESC')->value('foto_in') == null) ? '' : url(Storage::url("/uploads/absensi/".DB::table('presensi')->where('nik_user_input','=',$nik)->orderBy('created_at','DESC')->value('foto_in')));
        $photo='';

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
                '&biaya_susut='.rawurlencode($biaya_susut).
                '&biaya_tk='.rawurlencode($biaya_tk).
                '&income='.rawurlencode($income).
                '&biaya_pakan='.rawurlencode($biaya_pakan).
                '&biaya_benih='.rawurlencode($biaya_benih).
                '&image='.rawurlencode($image).
                '&photo='.rawurlencode($photo).
                '&kab_id%5B%5D='.rawurlencode($kab_id1).
                '&kab_id%5B%5D='.rawurlencode($kab_id2).
                '&kab_id%5B%5D='.rawurlencode($kab_id3).
                '&sukab_id%5B%5D='.rawurlencode($sukab_id1).
                '&sukab_id%5B%5D='.rawurlencode($sukab_id2).
                '&sukab_id%5B%5D='.rawurlencode($sukab_id3).
                '&bekab_id%5B%5D='.rawurlencode($bekab_id1).
                '&bekab_id%5B%5D='.rawurlencode($bekab_id2).
                '&bekab_id%5B%5D='.rawurlencode($bekab_id3);

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://sensus-kkp.argocipta.com/api/sensus/save',
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

        DB::table('survey')
            ->where('id','=',$id)
            ->update([
                'response_wasis' => $response,
                'tanggal_kirim_wasis' => date('Y-m-d h:i:s')
            ]);

        return $response;
    }
    //HISTORY SENT WASIS
    public function getDataWasis()
    {
        if (Auth::user()->role == "Admin") {
            $query = DB::table('survey')->whereNotNull('response_wasis')->orderBy('tanggal_kirim_wasis','DESC')->limit(10)->get();
        }else{
            $query = DB::table('survey')->whereNotNull('response_wasis')->where('created_by','=',Auth::user()->nama_lengkap)->orderBy('tanggal_kirim_wasis','DESC')->get();
        }
        $query;
        return Datatables::of($query)
        ->addColumn('status_wasis', function($datatb){
            $status = json_decode($datatb->response_wasis);
            if($status->status == 200){
                return
                '<button type="button" class="btn btn-success"><ion-icon name="checkmark-done-outline"></ion-icon> Berhasil!</button>';
            }else{
                return
                '<button type="button" class="btn btn-danger"><ion-icon name="close-circle-outline"></ion-icon> Gagal!</button>';
            }
        })
        ->addColumn('foto', function($datatb){
            if (DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->orderBy('created_at','DESC')->value('foto_in') == null) {
                return
                    '<a class="btn btn-sm btn-info uploadFoto" style="margin-top:5px;" data-id='.$datatb->id.' data-bs-toggle="modal" data-bs-target="#modal-form">
                        <span class="btn-inner--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 79.438 81.537 H 10.563 C 4.738 81.537 0 76.768 0 70.904 v -39.61 c 0 -5.863 4.738 -10.632 10.563 -10.632 h 4.66 c 0.692 0 1.373 -0.121 2.023 -0.358 c 1.382 -0.505 2.525 -1.505 3.219 -2.814 l 1.407 -2.653 c 2.085 -3.931 6.129 -6.374 10.555 -6.374 h 25.146 c 4.426 0 8.471 2.442 10.555 6.374 l 1.407 2.653 c 1.038 1.957 3.047 3.172 5.242 3.172 h 4.66 c 5.824 0 10.563 4.77 10.563 10.632 v 39.61 c 0 3.563 -1.76 6.871 -4.706 8.85 C 83.558 80.921 81.533 81.537 79.438 81.537 z M 10.563 24.662 C 6.944 24.662 4 27.637 4 31.294 v 39.61 c 0 3.657 2.944 6.633 6.563 6.633 h 68.875 c 1.298 0 2.552 -0.382 3.626 -1.104 C 84.902 75.199 86 73.132 86 70.904 v -39.61 c 0 -3.657 -2.944 -6.632 -6.563 -6.632 h -4.66 c -3.68 0 -7.043 -2.03 -8.775 -5.298 l -1.407 -2.653 c -1.39 -2.62 -4.08 -4.248 -7.021 -4.248 H 32.427 c -2.941 0 -5.632 1.627 -7.021 4.248 l -1.407 2.653 c -1.157 2.183 -3.067 3.851 -5.378 4.696 c -1.092 0.399 -2.235 0.602 -3.397 0.602 H 10.563 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45 70.97 c -11.772 0 -21.349 -9.648 -21.349 -21.508 c 0 -5.742 2.219 -11.14 6.247 -15.202 c 2.062 -2.078 4.473 -3.683 7.167 -4.77 c 2.526 -1.019 5.195 -1.536 7.936 -1.536 c 11.772 0 21.35 9.648 21.35 21.507 c 0 2.757 -0.512 5.443 -1.521 7.985 c -1.076 2.713 -2.667 5.141 -4.727 7.217 C 56.069 68.73 50.706 70.97 45 70.97 z M 45 31.955 c -2.225 0 -4.391 0.419 -6.439 1.245 c -2.187 0.882 -4.146 2.187 -5.823 3.877 c -3.28 3.307 -5.087 7.706 -5.087 12.385 c 0 9.654 7.783 17.508 17.349 17.508 c 4.631 0 8.986 -1.819 12.262 -5.122 c 1.678 -1.691 2.973 -3.668 3.849 -5.877 c 0.822 -2.069 1.239 -4.26 1.239 -6.509 C 62.35 39.808 54.566 31.955 45 31.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <ellipse cx="75.184" cy="33.831" rx="3.234" ry="3.261" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            </g>
                            </svg>
                        </span>
                        <span class="btn-inner--text">Upload Foto</span>
                    </a>';
                // '<a href="/history/upload/'.$datatb->id.'" class="btn btn-sm btn-primary" style="margin-top:5px;">
                //     <ion-icon name="camera-outline"></ion-icon> Upload Foto!
                // </a>';
            }else{
                return
                '<img src="'.url(Storage::url("/uploads/absensi/".DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->orderBy('created_at','DESC')->value('foto_in'))).'" alt="" class="imaged w64 ">';
            }
        })
        ->addColumn('aksi',function($datatb){
            return '<a href="'.route("history.editwasis",["state"=>"wasis","id" =>$datatb->id]).'" class="btn btn-warning bg-gradient-warning ">
                        <span class="btn-inner--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16" class="me-2">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>
                        </span>
                        <span class="btn-inner--text">Edit Data</span>
                    </a>';
        })
        ->rawColumns(['foto','status_wasis','aksi'])
        ->addIndexColumn()
        ->make(true);
    }

    public function getIndexEditWasis(Request $request,$state ,$id)
    {
        $data = [
            'titleParent' => 'HISTORY '.strtoupper($state),
            'titlePage' => 'Edit Data Wasis'
        ];
        $state;
        $dataWasis = DB::table('survey')->where('id',$id)->first();
        $responseWasis = json_decode($dataWasis->response_wasis);


        return view('history.editwasis',compact('data','dataWasis','state','responseWasis'));
    }
}
