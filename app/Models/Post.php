<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $perPage=5;
    //protected $with=['user'];
    function user(){
        return $this->belongsTo(User::class);

    }
}
