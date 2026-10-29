<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item;

use Microsoft\Kiota\Abstractions\Enum;

class WithEndpoint_PatchRequestBody_event_types extends Enum {
    public const IMAGE_READY = "image.ready";
    public const IMAGE_FAILED = "image.failed";
}
