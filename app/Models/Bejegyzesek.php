<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bejegyzesek extends Model
{
    protected $table = 'bejegyzesek';
    protected $primaryKey = 'id';
    protected $fillable = [

        'tevekenyseg_id',
       'osztaly_id',
        'allapot',
   

    ];
    use HasFactory;

    public function tevekenyseg(){
        return $this->hasOne(Tevekenyseg::class, 'tevekenyseg_id', 'tevekenyseg_id');
    }
}
