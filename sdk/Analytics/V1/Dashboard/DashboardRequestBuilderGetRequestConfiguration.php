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
     * @param array<string>|null $filterBrowsers The filter.browsers query parameter.
     * @param array<string>|null $filterCities The filter.cities query parameter.
     * @param array<string>|null $filterCountries The filter.countries query parameter.
     * @param array<string>|null $filterDevices The filter.devices query parameter.
     * @param array<string>|null $filterLanguages The filter.languages query parameter.
     * @param array<string>|null $filterOs The filter.os query parameter.
     * @param array<string>|null $filterOs_versions The filter.os_versions query parameter.
     * @param array<string>|null $filterRegions The filter.regions query parameter.
     * @param string|null $interval The interval query parameter.
     * @param string|null $time_end The time_end query parameter.
     * @param string|null $time_start The time_start query parameter.
     * @return DashboardRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $filterBrowsers = null, ?array $filterCities = null, ?array $filterCountries = null, ?array $filterDevices = null, ?array $filterLanguages = null, ?array $filterOs = null, ?array $filterOs_versions = null, ?array $filterRegions = null, ?string $interval = null, ?string $time_end = null, ?string $time_start = null): DashboardRequestBuilderGetQueryParameters {
        return new DashboardRequestBuilderGetQueryParameters($filterBrowsers, $filterCities, $filterCountries, $filterDevices, $filterLanguages, $filterOs, $filterOs_versions, $filterRegions, $interval, $time_end, $time_start);
    }

}
