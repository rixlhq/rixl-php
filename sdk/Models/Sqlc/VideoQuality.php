<?php

namespace Rixl\Sdk\Models\Sqlc;

use Microsoft\Kiota\Abstractions\Enum;

class VideoQuality extends Enum {
    public const BASIC = "basic";
    public const SHORTS = "shorts";
    public const PRO = "pro";
}
