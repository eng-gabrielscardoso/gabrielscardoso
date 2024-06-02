<?php

namespace App\Models;

use App\Enums\EmploymentType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'company',
        'employment_type',
        'location',
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
    protected function casts(): array
    {
        return [
            'employment_type' => EmploymentType::class,
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    /**
     * Get the start date in the configured format.
     *
     * @param  string  $value
     * @return string
     */
    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format(config('app.date_format', 'd/m/Y'));
    }

    /**
     * Get the end date in the configured format.
     *
     * @param  string  $value
     * @return string
     */
    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('app.date_format', 'd/m/Y')) : null;
    }
}
