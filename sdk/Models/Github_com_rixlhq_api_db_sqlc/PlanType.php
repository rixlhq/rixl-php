<?php

namespace Rixl\Sdk\Models\Github_com_rixlhq_api_db_sqlc;

use Microsoft\Kiota\Abstractions\Enum;

class PlanType extends Enum {
    public const FREE = "free";
    public const PRO = "pro";
    public const CUSTOM = "custom";
    public const PAY_AS_YOU_GO = "pay_as_you_go";
}
