<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Widgets\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WidgetsItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WidgetsItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WidgetsItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WidgetsItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WidgetsItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WidgetsItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WidgetsItemRequestBuilderDeleteQueryParameters.
     * @param int|null $expected_revision 
     * @return WidgetsItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?int $expected_revision = null): WidgetsItemRequestBuilderDeleteQueryParameters {
        return new WidgetsItemRequestBuilderDeleteQueryParameters($expected_revision);
    }

}
