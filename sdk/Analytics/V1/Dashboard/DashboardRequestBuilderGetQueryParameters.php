<?php

namespace Rixl\Sdk\Analytics\V1\Dashboard;

/**
 * GetDashboardStats
*/
class DashboardRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $interval 
    */
    public ?string $interval = null;
    
    /**
     * @var string|null $timeEnd 
    */
    public ?string $timeEnd = null;
    
    /**
     * @var string|null $timeStart 
    */
    public ?string $timeStart = null;
    
    /**
     * Instantiates a new DashboardRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $interval 
     * @param string|null $timeEnd 
     * @param string|null $timeStart 
    */
    public function __construct(?string $interval = null, ?string $timeEnd = null, ?string $timeStart = null) {
        $this->interval = $interval;
        $this->timeEnd = $timeEnd;
        $this->timeStart = $timeStart;
    }

}
