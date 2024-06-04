<?php

namespace App\Enums;

use App\Support\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum EmploymentType: string implements HasLabel
{
    use EnumToArray;

    case FULL_TIME = 'full_time';
    case PART_TIME = 'part_time';
    case SELF_EMPLOYED = 'self_employed';
    case FREELANCE = 'freelance';
    case CONTRACT = 'contract';
    case INDIRECT_CONTRACT = 'indirect_contract';
    case INTERNSHIP = 'internship';
    case APPRENTICESHIP = 'apprenticeship';
    case VOLUNTEER = 'volunteer';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::FULL_TIME => 'Full Time',
            self::PART_TIME => 'Part Time',
            self::SELF_EMPLOYED => 'Self Employed',
            self::FREELANCE => 'Freelance',
            self::CONTRACT => 'Contract',
            self::INDIRECT_CONTRACT => 'Indirect Contract',
            self::INTERNSHIP => 'Internship',
            self::APPRENTICESHIP => 'Apprenticeship',
            self::VOLUNTEER => 'Volunteer',
        };
    }
}
