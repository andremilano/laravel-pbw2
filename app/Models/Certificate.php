<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $primaryKey = 'certificate_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'subject_id',
        'issued_at'
    ];
}
