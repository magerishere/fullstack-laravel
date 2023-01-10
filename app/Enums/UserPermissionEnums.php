<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserPermissionEnums extends Enum
{
    const PERMISSION_CREATE = 'permission_create';
    const PERMISSION_READ = 'permission_read';
    const PERMISSION_UPDATE = 'permission_update';
    const PERMISSION_DELETE = 'permission_delete';
    const PERMISSION_RESTORE = 'permission_restore';

    const ROLE_CREATE = 'role_create';
    const ROLE_READ = 'role_read';
    const ROLE_UPDATE = 'role_update';
    const ROLE_DELETE = 'role_delete';
    const ROLE_RESTORE = 'role_restore';

    const USER_CREATE = 'user_create';
    const USER_READ = 'user_read';
    const USER_ACTIVATOR = 'user_activator';
    const USER_UPDATE = 'user_update';
    const USER_DELETE = 'user_delete';
    const USER_RESTORE = 'user_restore';

    const BLOG_CATEGORY_CREATE = 'blog_category_create';
    const BLOG_CATEGORY_READ = 'blog_category_read';
    const BLOG_CATEGORY_UPDATE = 'blog_category_update';
    const BLOG_CATEGORY_ACTIVATOR = 'blog_category_activator';
    const BLOG_CATEGORY_DELETE = 'blog_category_delete';
    const BLOG_CATEGORY_RESTORE = 'blog_category_restore';

    const BLOG_CREATE = 'blog_create';
    const BLOG_READ = 'blog_read';
    const BLOG_UPDATE = 'blog_update';
    const BLOG_ACTIVATOR = 'blog_activator';
    const BLOG_DELETE = 'blog_delete';
    const BLOG_RESTORE = 'blog_restore';

}
