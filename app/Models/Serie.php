<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'series', 'ranks'
    ];

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
}