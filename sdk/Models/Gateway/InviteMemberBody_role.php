<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Enum;

class InviteMemberBody_role extends Enum {
    public const ADMIN = "admin";
    public const MEMBER = "member";
}
