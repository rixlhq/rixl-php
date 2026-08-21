<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Enum;

class GetScopeTreeRequest_resource_type extends Enum {
    public const VIDEO = "video";
    public const IMAGE = "image";
    public const POST = "post";
    public const FEED = "feed";
}
