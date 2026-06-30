<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Enum;

class MembershipStateBody_state extends Enum {
    public const ACCEPTED = "accepted";
    public const DECLINED = "declined";
}
