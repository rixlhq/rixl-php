<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Enum;

class ContentViewEvent_view_type extends Enum {
    public const START = "start";
    public const WATCH = "watch";
    public const END = "end";
}
