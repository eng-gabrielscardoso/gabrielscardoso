<?php

namespace App\Support;

use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Support\Facades\DB;

trait UsesMonthYearDates
{
    /**
     * Configure date picker for month and year format.
     *
     * @return DatePicker
     */
    protected function configureMonthYearDatePicker(DatePicker $datePicker)
    {
        return $datePicker->format('Y-m');
    }

    /**
     * Configure table column for month and year format.
     *
     * @param  string  $attribute
     * @return TextColumn
     */
    protected function configureMonthYearTextColumn(TextColumn $textColumn, $attribute)
    {
        return $textColumn->text(function ($value, $record) use ($attribute) {
            return $record->$attribute ? $record->$attribute->format('Y-m') : '';
        });
    }

    /**
     * Scope for filtering by month and year in table.
     *
     * @param  string  $attribute
     * @param  string|null  $value
     * @return void
     */
    protected function applyMonthYearTableFilter(TextColumn $textColumn, $attribute, $value)
    {
        $textColumn->filter(function ($query, $search) use ($attribute, $value) {
            if ($value) {
                return $query->where(DB::raw('DATE_FORMAT('.$attribute.', "%Y-%m")'), $value);
            }

            return $query;
        });
    }
}
