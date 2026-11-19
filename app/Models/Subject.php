<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Relasi ke model Teacher (Setiap Subject dimiliki oleh satu Teacher)
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
