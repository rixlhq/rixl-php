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
     * @param string|null $interval 
     * @param string|null $time_end 
     * @param string|null $time_start 
    */
    public function __construct(?string $interval = null, ?string $time_end = null, ?string $time_start = null) {
        $this->interval = $interval;
        $this->timeEnd = $time_end;
        $this->timeStart = $time_start;
    }

}
