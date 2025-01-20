<?php

namespace App\Enums;

enum SalaryPeriodEnum: string
{
    case HOURLY = "hourly";
    case DAILY = "daily";
    case WEEKLY = "weekly";
    case MONTHLY = "monthly";
    case YEARLY = "yearly";
}
