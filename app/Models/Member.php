<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'tblmember';
    

    public function children()
    {
        return $this->hasMany(Member::class, 'ParentID', 'MemberID');
    }

    public function parent()
    {
        return $this->belongsTo(Member::class, 'ParentID');
    }

    // Link purchases to a member
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'MemberID');
    }
}
