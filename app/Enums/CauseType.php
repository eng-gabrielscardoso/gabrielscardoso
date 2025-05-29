<?php

namespace App\Enums;

use App\Support\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum CauseType: string implements HasLabel
{
    use EnumToArray;

    case ANIMAL_WELFARE = 'animal_welfare';
    case ARTS_AND_CULTURE = 'arts_and_culture';
    case CHILDREN = 'children';
    case CIVIL_RIGHTS = 'civil_rights';
    case ECONOMIC_EMPOWERMENT = 'economic_empowerment';
    case EDUCATION = 'education';
    case ENVIRONMENT = 'environment';
    case HEALTH = 'health';
    case HUMAN_RIGHTS = 'human_rights';
    case DISASTER_RELIEF = 'disaster_relief';
    case POLITICS = 'politics';
    case POVERTY_ALLEVIATION = 'poverty_alleviation';
    case SCIENCE_TECH = 'science_tech';
    case SOCIAL_SERVICES = 'social_services';
    case VETERAN_SUPPORT = 'veteran_support';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ANIMAL_WELFARE => 'Animal Welfare',
            self::ARTS_AND_CULTURE => 'Arts and Culture',
            self::CHILDREN => 'Children',
            self::CIVIL_RIGHTS => 'Civil Rights and Social Action',
            self::ECONOMIC_EMPOWERMENT => 'Economic Empowerment',
            self::EDUCATION => 'Education',
            self::ENVIRONMENT => 'Environment',
            self::HEALTH => 'Health',
            self::HUMAN_RIGHTS => 'Human Rights',
            self::DISASTER_RELIEF => 'Disaster and Humanitarian Relief',
            self::POLITICS => 'Politics',
            self::POVERTY_ALLEVIATION => 'Poverty Alleviation',
            self::SCIENCE_TECH => 'Science and Technology',
            self::SOCIAL_SERVICES => 'Social Services',
            self::VETERAN_SUPPORT => 'Veteran Support',
        };
    }
}
