<?php

namespace App\Models;

use App\Http\Controllers\ClubController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;
    public function club()
    {
        return $this->belongsTo(club::class);
    }
}
