<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Enum;

class ContentViewEvent_page extends Enum {
    public const PROFILE = "profile";
    public const FEED = "feed";
    public const STANDALONE = "standalone";
}
