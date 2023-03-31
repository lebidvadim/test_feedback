<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeedbackMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'message',
        'city_id'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(Cities::class);
    }

}
