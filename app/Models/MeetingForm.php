<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'telegram',
        'email',
        'phone',
        'role'
    ] ;
}
