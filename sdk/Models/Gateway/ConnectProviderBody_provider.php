<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectProviderBody_provider extends Enum {
    public const GOOGLE = "google";
    public const APPLE = "apple";
    public const MICROSOFT = "microsoft";
    public const TG_AUTH_RESULT = "tgAuthResult";
}
