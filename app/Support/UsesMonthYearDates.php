<?php

namespace App\Support;

use Filament\Forms;
use Filament\Tables;
use Illuminate\Support\Facades\DB;

trait UsesMonthYearDates
{
    /**
     * Configure date picker for month and year format.
     *
     * @param Forms\Components\DatePicker $datePicker
     * @return Forms\Components\DatePicker
     */
    protected function configureMonthYearDatePicker(Forms\Components\DatePicker $datePicker)
    {
        return $datePicker->format('Y-m');
    }

    /**
     * Configure table column for month and year format.
     *
     * @param Tables\Columns\TextColumn $textColumn
     * @param string $attribute
     * @return Tables\Columns\TextColumn
     */
    protected function configureMonthYearTextColumn(Tables\Columns\TextColumn $textColumn, $attribute)
    {
        return $textColumn->text(function ($value, $record) use ($attribute) {
            return $record->$attribute ? $record->$attribute->format('Y-m') : '';
        });
    }

    /**
     * Scope for filtering by month and year in table.
     *
     * @param Tables\Columns\TextColumn $textColumn
     * @param string $attribute
     * @param string|null $value
     * @return void
     */
    protected function applyMonthYearTableFilter(Tables\Columns\TextColumn $textColumn, $attribute, $value)
    {
        $textColumn->filter(function ($query, $search) use ($attribute, $value) {
            if ($value) {
                return $query->where(DB::raw('DATE_FORMAT('.$attribute.', "%Y-%m")'), $value);
            }
            return $query;
        });
    }
}
