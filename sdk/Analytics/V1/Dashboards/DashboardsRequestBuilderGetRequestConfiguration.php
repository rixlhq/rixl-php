<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DashboardsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DashboardsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DashboardsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DashboardsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DashboardsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DashboardsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DashboardsRequestBuilderGetQueryParameters.
     * @param int|null $page 
     * @param int|null $page_size 
     * @return DashboardsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $page_size = null): DashboardsRequestBuilderGetQueryParameters {
        return new DashboardsRequestBuilderGetQueryParameters($page, $page_size);
    }

}
