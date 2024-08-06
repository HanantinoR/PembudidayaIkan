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
        'name',
        'nik',
        'bod',
        'age',
        'religion',
        'gender',
        'education',
        'total_family',
        'address',
        'village',
        'district',
        'city',
        'province',
        'lat',
        'longs',
        'groups',
        'biota',
        'commodities',
        'business_type',
        'kusuka_status',
        'owner_status',
        'Area',
        'maintenance_media',
        'padat_tebar',
        'tech',
        'size',
        'production',
        'cycle',
        'productivity',
        'distribution',
        'selling_price',
        'income',
        'feed_type',
        'feed_total',
        'source_supply',
        'feed_price',
        'feed_cost',
        'sumber_benih',
        'total_benih',
        'benih_price',
        'benih_cost',
        'total_tk',
        'modal',
        'sumber_modal',
        'sumber_kredit',
        'cost_maintenance_media',
        'cost_purchase_tools',
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
        'created_by',
        'updated_by'
    ];
}
