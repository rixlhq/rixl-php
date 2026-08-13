<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Enum;

class ChartFilter_operator extends Enum {
    public const EQ = "eq";
    public const NEQ = "neq";
    public const GT = "gt";
    public const GTE = "gte";
    public const LT = "lt";
    public const LTE = "lte";
    public const IN = "in";
    public const CONTAINS = "contains";
}
