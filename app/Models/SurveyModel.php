<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyModel extends Model
{
    use HasFactory;
    protected $table = "survey";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama',
        'nik',
        'tanggal_lahir',
        'umur',
        'agama',
        'gender',
        'tingkat_pendidikan',
        'jumlah_keluarga',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota_kabupaten',
        'provinsi',
        'latitude',
        'longitude',
        'kelompok',
        'biota',
        'komoditas',
        'jenis_usaha',
        'status_kusuka',
        'status_kepemilikan',
        'luas_usaha',
        'media_pemeliharaan',
        'padat_tebar',
        'teknologi',
        'ukuran',
        'produksi',
        'siklus',
        'produktivitas',
        'kota_kabupaten_distribusi',
        'harga_jual',
        'pendapatan',
        'jenis_pakan',
        'jumlah_pakan',
        'kota_kabupaten_sumber_pakan',
        'harga_pakan',
        'biaya_pakan',
        'kota_kabupaten_sumber_benih',
        'jumlah_benih',
        'harga_benih',
        'biaya_benih',
        'jumlah_tenaga_kerja',
        'modal',
        'sumber_modal',
        'sumber_kredit',
        'biaya_pembuatan_media_pemeliharaan',
        'biaya_pembelian_peralatan',
        'biaya_penyusutan',
        'biaya_tenga_kerja',
        'ipal',
        'tandon',
        'green_belt',
        'jarak_pantai',
        'sumber_air',
        'status_izin',
        'status_nib',
        'skala_usaha',
        'asuransi',
        'bantuan',
        'penghargaan',
        'dukungan_pemda',
        'dukungan_pusat',
        'nama_penyuluh',
        'sertifikat',
        'nama_petugas',
        'nik_petugas',
        'upt',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'response_wasis',
        'tanggal_kirim_wasis'
    ];
}
