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
        $titlePage  = 'History Input Data';
        return view('history.data',compact('titlePage'));
    }

    public function indexSentWasis()
    {
        $titlePage  = 'History Sent Wasis';
        return view('history.wasis',compact('titlePage'));
    }

    public function getDataSurveyUser()
    {
        if (Auth::user()->role == "Admin") {
            $query = DB::table('survey')->orderBy('created_at','DESC')->get();
        }else{
            $query = DB::table('survey')->where('created_by','=',Auth::user()->nama_lengkap)->orderBy('created_at','DESC')->get();
        }
        return Datatables::of($query)
        ->addColumn('aksi', function($datatb){
            if (Auth::user()->role == "Admin") {
                return
                    '<button type="button" class="btn btn-danger" onclick="deletedata('.$datatb->id.')">Hapus Data!</button>';
            }else{
                return
                '';
            }
        })
        ->addColumn('foto', function($datatb){
            if (DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->value('foto_in') == null) {
                return
                '<a href="/history/upload/'.$datatb->id.'" class="btn btn-sm btn-info" style="margin-top:5px;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve" class="me-2">
                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 79.438 81.537 H 10.563 C 4.738 81.537 0 76.768 0 70.904 v -39.61 c 0 -5.863 4.738 -10.632 10.563 -10.632 h 4.66 c 0.692 0 1.373 -0.121 2.023 -0.358 c 1.382 -0.505 2.525 -1.505 3.219 -2.814 l 1.407 -2.653 c 2.085 -3.931 6.129 -6.374 10.555 -6.374 h 25.146 c 4.426 0 8.471 2.442 10.555 6.374 l 1.407 2.653 c 1.038 1.957 3.047 3.172 5.242 3.172 h 4.66 c 5.824 0 10.563 4.77 10.563 10.632 v 39.61 c 0 3.563 -1.76 6.871 -4.706 8.85 C 83.558 80.921 81.533 81.537 79.438 81.537 z M 10.563 24.662 C 6.944 24.662 4 27.637 4 31.294 v 39.61 c 0 3.657 2.944 6.633 6.563 6.633 h 68.875 c 1.298 0 2.552 -0.382 3.626 -1.104 C 84.902 75.199 86 73.132 86 70.904 v -39.61 c 0 -3.657 -2.944 -6.632 -6.563 -6.632 h -4.66 c -3.68 0 -7.043 -2.03 -8.775 -5.298 l -1.407 -2.653 c -1.39 -2.62 -4.08 -4.248 -7.021 -4.248 H 32.427 c -2.941 0 -5.632 1.627 -7.021 4.248 l -1.407 2.653 c -1.157 2.183 -3.067 3.851 -5.378 4.696 c -1.092 0.399 -2.235 0.602 -3.397 0.602 H 10.563 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 45 70.97 c -11.772 0 -21.349 -9.648 -21.349 -21.508 c 0 -5.742 2.219 -11.14 6.247 -15.202 c 2.062 -2.078 4.473 -3.683 7.167 -4.77 c 2.526 -1.019 5.195 -1.536 7.936 -1.536 c 11.772 0 21.35 9.648 21.35 21.507 c 0 2.757 -0.512 5.443 -1.521 7.985 c -1.076 2.713 -2.667 5.141 -4.727 7.217 C 56.069 68.73 50.706 70.97 45 70.97 z M 45 31.955 c -2.225 0 -4.391 0.419 -6.439 1.245 c -2.187 0.882 -4.146 2.187 -5.823 3.877 c -3.28 3.307 -5.087 7.706 -5.087 12.385 c 0 9.654 7.783 17.508 17.349 17.508 c 4.631 0 8.986 -1.819 12.262 -5.122 c 1.678 -1.691 2.973 -3.668 3.849 -5.877 c 0.822 -2.069 1.239 -4.26 1.239 -6.509 C 62.35 39.808 54.566 31.955 45 31.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <ellipse cx="75.184" cy="33.831" rx="3.234" ry="3.261" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                    </g>
                    </svg>
                    Upload Foto!
                </a>';
            }else{
                return
                '<img src="'.url(Storage::url("/uploads/absensi/".DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->value('foto_in'))).'" alt="" class="imaged w64 ">';
            }
        })
        ->addColumn('wasis', function($datatb){
            if (DB::table('presensi')->where('nik_user_input','=',$datatb->nik)->value('foto_in') == null) {
                return
                '<a href="/history/cekbeforekirim/'.$datatb->id.'" class="btn btn-sm btn-info" style="margin-top:5px;" data-bs-toggle="modal" data-bs-target="#modal-form">
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
            'Staus Kepemilikan',
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
            'Diedit Oleh'
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
            'Diinput Tanggal' => '@'
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
        $sheet->setColWidths([7,20,30,15,10,15,15,15,15,40,20,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,20,30,
                20,30,20,30,20,30,20,30,20,10,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]);

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
                date('Y-m-d H:i:s',strtotime(@$arraySurvey[$i]['created_at']))
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
}
