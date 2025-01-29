<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    //
    // protected $fillable = ['prefix', 'phone_number', 'user_id'];
    protected $guarded = []; // Para que no se proteja ningún campo

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
