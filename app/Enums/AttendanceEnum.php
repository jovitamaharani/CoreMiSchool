<?php

namespace App\Enums;

enum AttendanceEnum: string
{
    case PRESENT = 'present';
    case SICK = 'sick';
    case ALPHA = 'alpha';
    case PERMIT = 'permit';
}