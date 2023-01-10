<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;


final class UserRoleEnums extends Enum
{
    const SUPER_ADMIN = 'super_admin';
    const ADMIN = 'admin';
    const AUTHOR = 'author';
    const CUSTOMER = 'customer';
    const MEMBER = 'member';

}
