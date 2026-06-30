<?php

namespace Rixl\Sdk\Analytics\V1\Dashboard;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DashboardRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DashboardRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DashboardRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DashboardRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DashboardRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DashboardRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DashboardRequestBuilderGetQueryParameters.
     * @param string|null $end_time End time (RFC3339)
     * @param string|null $interval Bucket interval (1m, 1h, 1d)
     * @param string|null $start_time Start time (RFC3339)
     * @return DashboardRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $end_time = null, ?string $interval = null, ?string $start_time = null): DashboardRequestBuilderGetQueryParameters {
        return new DashboardRequestBuilderGetQueryParameters($end_time, $interval, $start_time);
    }

}
