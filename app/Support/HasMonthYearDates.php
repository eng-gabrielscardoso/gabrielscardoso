<?php

namespace App\Support;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

trait HasMonthYearDates
{
    /**
     * Mutator for setting the date attribute.
     *
     * @param  string  $attribute
     * @param  string|null  $value
     * @return void
     */
    protected function setDateAttribute($attribute, $value)
    {
        $this->attributes[$attribute] = $value ? \Carbon\Carbon::createFromFormat('Y-m', $value)->startOfMonth() : null;
    }

    /**
     * Accessor for getting the date attribute.
     *
     * @param  string|null  $attribute
     * @return string|null
     */
    protected function getDateAttribute($attribute)
    {
        return $attribute ? \Carbon\Carbon::parse($attribute)->format('Y-m') : null;
    }

    /**
     * Scope for filtering by month and year.
     *
     * @param  string  $attribute
     * @param  string|null  $value
     * @return Builder
     */
    public function scopeWhereMonthYear(Builder $query, $attribute, $value)
    {
        if ($value) {
            return $query->where(DB::raw('DATE_FORMAT('.$attribute.', "%Y-%m")'), $value);
        }

        return $query;
    }
}
