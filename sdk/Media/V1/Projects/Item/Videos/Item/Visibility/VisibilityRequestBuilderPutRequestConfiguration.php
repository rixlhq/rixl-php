<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Visibility;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VisibilityRequestBuilderPutRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new VisibilityRequestBuilderPutRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
