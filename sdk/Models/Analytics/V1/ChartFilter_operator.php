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
    public const NOT_IN = "not_in";
    public const CONTAINS = "contains";
    public const NOT_CONTAINS = "not_contains";
    public const STARTS_WITH = "starts_with";
    public const ENDS_WITH = "ends_with";
    public const BETWEEN = "between";
    public const IS_EMPTY = "is_empty";
    public const IS_NOT_EMPTY = "is_not_empty";
}
