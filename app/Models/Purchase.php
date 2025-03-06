<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'tblpurchase';

    public function member()
    {
        return $this->belongsTo(Member::class, 'MemberID');
    }
}
