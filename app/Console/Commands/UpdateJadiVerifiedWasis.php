<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SurveyModel;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use DateTime;

class UpdateJadiVerifiedWasis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-jadi-verified-wasis';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Script Buat Update Status Wasis Jadi Verified';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $jumlah_berhasil = 0;
        $jumlah_gagal = 0;
        $total_data = 0;
        $data_berjalan = 0;
        $tanggalnow = date("Y-m-d H:i:s");

        $foto_yang_udah_ada = DB::table('presensi')
                              ->select('nik_user_input','created_at')
                              ->groupBy('nik_user_input','created_at')
                              ->orderBy('created_at','DESC')
                              ->get();

        $total_data = count($foto_yang_udah_ada);
        echo "Sekarang Jam " . $tanggalnow . "\n" . "Memulai Update Data Wasis Jadi Verified...\n";

        echo "Per Tanggal ".date('Y-m-d H:i:s').", ".$total_data." Data Akan di Update Menjadi Verified\n";
        echo "Memulai Mengupdate Data Satu-per-satu...\n\n";


        foreach ($foto_yang_udah_ada as $key => $value) {

            $ambil_id = DB::table('survey')
                        ->where('nik','=',$value->nik_user_input)
                        ->whereNotNull('response_update_wasis')
                        ->value('response_update_wasis');

            if ($ambil_id === null || count($ambil_id) === 0) {
                echo "NIK " . $value->nik_user_input . " Tidak Ditemukan, Data Disekip Update Status Jadi Verif \n";
                $jumlah_gagal++;
                continue;
            }

            $id_wasis = (json_decode($ambil_id)->data->id);

            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'http://sensus-kkp.argocipta.com/api/sensus/set_verif/'.$id_wasis,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => 'status=allow',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'ApiKey: bc23e8feb0bef557f3c5f7a683fab5c0f3e360d287ab39c74d77f57e6bd3d9985be000f14769b13fd3e87cd44aa1844fa188e33eb195a9aa3fdeab'
              ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $jumlah_berhasil++;
            echo "NIK " . $value->nik_user_input . "Berhasil di Update Menjadi Verified \n";
        }

        $tanggalend = date('Y-m-d H:i:s');

        // Itung Berapa Lama Waktu Berjalan
        $tanggal_mulai = new DateTime($tanggalnow);
        $tanggal_selesai = new DateTime($tanggalend);

        $waktu_berjalan = $tanggal_selesai->diff($tanggal_mulai);

        echo "Dari $total_data Data, Berhasil Mengupdate $jumlah_berhasil Data jadi Verified, dan Gagal Sebanyak $jumlah_gagal Data. \n";
        echo "Update Data Menjadi Verified Dimulai Dari " . $tanggalnow . ", Sampai " . date('Y-m-d H:i:s') . "(" . $waktu_berjalan->h . " Jam " . $waktu_berjalan->i . " Menit " . $waktu_berjalan->s . " Detik)\n";

    }
}
