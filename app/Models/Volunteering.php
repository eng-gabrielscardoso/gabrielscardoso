<?php

namespace App\Models;

use Database\Factories\VolunteeringFactory;
use App\Enums\CauseType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Volunteering extends Model
{
    /** @use HasFactory<VolunteeringFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'organisation',
        'role',
        'cause',
        'description',
        'start_date',
        'end_date',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'cause' => CauseType::class,
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
