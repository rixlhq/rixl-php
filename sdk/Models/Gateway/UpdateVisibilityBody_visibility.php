<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Enum;

class UpdateVisibilityBody_visibility extends Enum {
    public const PUBLIC = "public";
    public const UNLISTED = "unlisted";
    public const PRIVATE = "private";
}
