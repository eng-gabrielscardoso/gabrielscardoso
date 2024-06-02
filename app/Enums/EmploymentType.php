<?php

namespace App\Enums;

use App\Support\EnumToArray;

enum EmploymentType: string
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
}
