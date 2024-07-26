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
        'inCome',
        'feed_type',
        'feed_total',
        'source_supply',
        'feedPrice',
        'feedCost',
        'sumberBenih',
        'totalBenih',
        'benihPrice',
        'benihCost',
        'totalTk',
        'modal',
        'sumberModal',
        'sumberKredit',
        'costMaintenanceMedia',
        'costPurchaseTools',
        'biayaPenyusutan',
        'biayaTengaKerja',
        'ipal',
        'tandon',
        'greenBelt',
        'jarakPantai',
        'sumberAir',
        'statusIzin',
        'statusNib',
        'skalaUsaha',
        'asuransi',
        'bantuan',
        'penghargaan',
        'dukunganPemda',
        'dukunganPusat',
        'namaPenyuluh',
        'sertifikat',
        'namaPetugas',
        'nikPetugas',
        'upt',
        'created_by',
        'updated_by'
    ];
}
