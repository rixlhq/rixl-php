<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Item\Widgets;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WidgetsRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WidgetsRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?WidgetsRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WidgetsRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WidgetsRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WidgetsRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WidgetsRequestBuilderPostQueryParameters.
     * @param int|null $expected_revision 
     * @return WidgetsRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?int $expected_revision = null): WidgetsRequestBuilderPostQueryParameters {
        return new WidgetsRequestBuilderPostQueryParameters($expected_revision);
    }

}
