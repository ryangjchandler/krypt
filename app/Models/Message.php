<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'message' => 'encrypted'
    ];

    public static function booted()
    {
        static::creating(function (Message $message) {
            $message->uuid = (string) Str::orderedUuid();

            if (! $message->expires_at) {
                $message->expires_at = now()->addHour();
            }
        });
    }
}
