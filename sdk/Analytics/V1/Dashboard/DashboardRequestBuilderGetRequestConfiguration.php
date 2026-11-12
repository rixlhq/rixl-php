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
     * @param array<string>|null $filterBrowsers 
     * @param array<string>|null $filterCities 
     * @param array<string>|null $filterCountries 
     * @param array<string>|null $filterDevices 
     * @param array<string>|null $filterLanguages 
     * @param array<string>|null $filterOs 
     * @param array<string>|null $filterOs_versions 
     * @param array<string>|null $filterRegions 
     * @param string|null $interval 
     * @param string|null $time_end 
     * @param string|null $time_start 
     * @return DashboardRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $filterBrowsers = null, ?array $filterCities = null, ?array $filterCountries = null, ?array $filterDevices = null, ?array $filterLanguages = null, ?array $filterOs = null, ?array $filterOs_versions = null, ?array $filterRegions = null, ?string $interval = null, ?string $time_end = null, ?string $time_start = null): DashboardRequestBuilderGetQueryParameters {
        return new DashboardRequestBuilderGetQueryParameters($filterBrowsers, $filterCities, $filterCountries, $filterDevices, $filterLanguages, $filterOs, $filterOs_versions, $filterRegions, $interval, $time_end, $time_start);
    }

}
