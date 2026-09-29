<?php

namespace Rixl\Sdk\Analytics\V1\Dashboard;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetDashboardStats
*/
class DashboardRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("filter%2Ebrowsers")
     * @var array<string>|null $filterBrowsers The filter.browsers query parameter.
    */
    public ?array $filterBrowsers = null;
    
    /**
     * @QueryParameter("filter%2Ecities")
     * @var array<string>|null $filterCities The filter.cities query parameter.
    */
    public ?array $filterCities = null;
    
    /**
     * @QueryParameter("filter%2Ecountries")
     * @var array<string>|null $filterCountries The filter.countries query parameter.
    */
    public ?array $filterCountries = null;
    
    /**
     * @QueryParameter("filter%2Edevices")
     * @var array<string>|null $filterDevices The filter.devices query parameter.
    */
    public ?array $filterDevices = null;
    
    /**
     * @QueryParameter("filter%2Elanguages")
     * @var array<string>|null $filterLanguages The filter.languages query parameter.
    */
    public ?array $filterLanguages = null;
    
    /**
     * @QueryParameter("filter%2Eos")
     * @var array<string>|null $filterOs The filter.os query parameter.
    */
    public ?array $filterOs = null;
    
    /**
     * @QueryParameter("filter%2Eos_versions")
     * @var array<string>|null $filterOsVersions The filter.os_versions query parameter.
    */
    public ?array $filterOsVersions = null;
    
    /**
     * @QueryParameter("filter%2Eregions")
     * @var array<string>|null $filterRegions The filter.regions query parameter.
    */
    public ?array $filterRegions = null;
    
    /**
     * @var string|null $interval The interval query parameter.
    */
    public ?string $interval = null;
    
    /**
     * @QueryParameter("time_end")
     * @var string|null $timeEnd The time_end query parameter.
    */
    public ?string $timeEnd = null;
    
    /**
     * @QueryParameter("time_start")
     * @var string|null $timeStart The time_start query parameter.
    */
    public ?string $timeStart = null;
    
    /**
     * Instantiates a new DashboardRequestBuilderGetQueryParameters and sets the default values.
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
    */
    public function __construct(?array $filterBrowsers = null, ?array $filterCities = null, ?array $filterCountries = null, ?array $filterDevices = null, ?array $filterLanguages = null, ?array $filterOs = null, ?array $filterOs_versions = null, ?array $filterRegions = null, ?string $interval = null, ?string $time_end = null, ?string $time_start = null) {
        $this->filterBrowsers = $filterBrowsers;
        $this->filterCities = $filterCities;
        $this->filterCountries = $filterCountries;
        $this->filterDevices = $filterDevices;
        $this->filterLanguages = $filterLanguages;
        $this->filterOs = $filterOs;
        $this->filterOsVersions = $filterOs_versions;
        $this->filterRegions = $filterRegions;
        $this->interval = $interval;
        $this->timeEnd = $time_end;
        $this->timeStart = $time_start;
    }

}
