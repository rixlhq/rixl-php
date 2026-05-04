<?php

namespace Rixl\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FileStatus extends Enum {
    public const UPLOADING = "uploading";
    public const UPLOADED = "uploaded";
    public const PROCESSING = "processing";
    public const PREPARING = "preparing";
    public const READY = "ready";
    public const ERROR = "error";
}
