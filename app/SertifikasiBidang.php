<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SertifikasiBidang extends Model
{

    protected $table = 'sertifikasibidangs';
    protected $fillable = [
        'instruktur_id',
        'nama_sertifikasi',
        'tgl_pelaksanaan',
        'batas_sertifikasi',
        'nama_file'
    ];
    public function instruktur()
    {
        return $this->belongsTo(Instruktur::class);
    }
}
