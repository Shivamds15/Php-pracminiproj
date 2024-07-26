<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FormData extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'email',
        'gender',
        'subscribe',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($form_data) {
            if (empty($form_data->id)) {
                $form_data->id = (string) Str::uuid();
            }
        });
    }

}
