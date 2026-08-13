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
     * @var array<string>|null $filterBrowsers 
    */
    public ?array $filterBrowsers = null;
    
    /**
     * @QueryParameter("filter%2Ecities")
     * @var array<string>|null $filterCities 
    */
    public ?array $filterCities = null;
    
    /**
     * @QueryParameter("filter%2Ecountries")
     * @var array<string>|null $filterCountries 
    */
    public ?array $filterCountries = null;
    
    /**
     * @QueryParameter("filter%2Edevices")
     * @var array<string>|null $filterDevices 
    */
    public ?array $filterDevices = null;
    
    /**
     * @QueryParameter("filter%2Elanguages")
     * @var array<string>|null $filterLanguages 
    */
    public ?array $filterLanguages = null;
    
    /**
     * @QueryParameter("filter%2Eos")
     * @var array<string>|null $filterOs 
    */
    public ?array $filterOs = null;
    
    /**
     * @QueryParameter("filter%2Eos_versions")
     * @var array<string>|null $filterOsVersions 
    */
    public ?array $filterOsVersions = null;
    
    /**
     * @QueryParameter("filter%2Eregions")
     * @var array<string>|null $filterRegions 
    */
    public ?array $filterRegions = null;
    
    /**
     * @var string|null $interval 
    */
    public ?string $interval = null;
    
    /**
     * @QueryParameter("time_end")
     * @var string|null $timeEnd 
    */
    public ?string $timeEnd = null;
    
    /**
     * @QueryParameter("time_start")
     * @var string|null $timeStart 
    */
    public ?string $timeStart = null;
    
    /**
     * Instantiates a new DashboardRequestBuilderGetQueryParameters and sets the default values.
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
