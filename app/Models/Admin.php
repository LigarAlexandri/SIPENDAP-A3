<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [
        'id_admin',
    ];

    protected $fillable =[
        'nama'  
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

