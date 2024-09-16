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

class DownloadDataGoogleDrive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-data-google-drive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download Foto dari Google Drive';

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

        echo "Sekarang Jam " . $tanggalnow . "\n" . "Memulai Download Per 100 Foto...\n";
        $nomor = 0;
        $array_data = array();
        $array_data['1807022512890004'] = 'https://drive.google.com/file/d/1PD0S6uXdTSStbgalnxg37O0selM78t2u/view?usp=sharing';

        foreach ($array_data as $key => $value) {
            $total_data += 1;
            $nomor++;
            $data_pembudidaya = DB::table('survey')->where('nik', '=', $key)->select('id', 'nama', 'nik', 'longitude', 'latitude', 'created_by')->first();
            @$nama = $data_pembudidaya->nama;

            @$folder_atau_file = explode("/", parse_url($value)['path'])[2];

            if (@$folder_atau_file === "folders") {
                echo ("$nomor. Download Atas NIK $key, $nama Gagal, Download Foto Disekip \n");
                $jumlah_gagal += 1;
                continue;
            } else {
                if ($data_pembudidaya->latitude == null || $data_pembudidaya->latitude === "null") {
                    $tikor = null;
                }else{
                    $tikor = $data_pembudidaya->latitude . ', ' . $data_pembudidaya->longitude;
                }

                $id = explode("/", parse_url($value)['path'])[3];

                $ch = curl_init();
                $url = "https://drive.usercontent.google.com/download?id=$id&export=download&authuser=0";

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

                $response = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                if ($httpCode == 200) {

                    $waktu = date("YmdHis");
                    $nik = $data_pembudidaya->nik;
                    $lokasi = $tikor;
                    $path = "uploads/absensi/";
                    $file = $waktu . "_" . $nik . "_" . $nama . ".png";
                    $fileName = $path . $file;

                    // Direct download: Save the file directly
                    $result = Storage::disk('public')->put($fileName, $response);
                    if ($result === false) {
                        echo ("$nomor. Download Atas NIK $key, $nama Gagal, Download Foto Disekip \n");
                        $jumlah_gagal += 1;
                        continue;
                    } else {
                        echo ("$nomor. Download Foto Atas NIK $key, $nama Berhasil \n");

                        $presensi = DB::table('presensi')->insert([
                            'nama_user_input' => trim($nama),
                            'nik_user_input' => trim($nik),
                            'foto_in' => $file,
                            'location_in' => $lokasi,
                            'created_at' => date('Y-m-d H:i:s'),
                            'created_by' => $data_pembudidaya->created_by,
                        ]);
                    }
                    curl_close($ch);
                    $jumlah_berhasil += 1;
                    continue;
                    // exit;
                } else {
                    echo ("$nomor. Download Atas NIK $key, $nama Gagal, Download Foto Disekip \n");
                    $jumlah_gagal += 1;
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

        echo "Dari $total_data Foto, Berhasil Mengupdate $jumlah_berhasil Foto, dan Gagal Sebanyak $jumlah_gagal Foto. \n";
        echo "Download Foto Dimulai Dari " . $tanggalnow . ", Sampai " . date('Y-m-d H:i:s') . "(" . $waktu_berjalan->h . " Jam " . $waktu_berjalan->i . " Menit " . $waktu_berjalan->s . " Detik)\n";

    }
}
