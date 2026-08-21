<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Enum;

class GetScopeTreeRequest_level extends Enum {
    public const PROJECTS = "projects";
    public const RESOURCE_TYPES = "resource_types";
    public const RESOURCES = "resources";
}
