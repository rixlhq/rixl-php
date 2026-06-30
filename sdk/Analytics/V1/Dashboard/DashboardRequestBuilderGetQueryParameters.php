<?php

namespace Rixl\Sdk\Analytics\V1\Dashboard;

/**
 * Returns time-bucketed dashboard statistics
*/
class DashboardRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("end_time")
     * @var string|null $endTime End time (RFC3339)
    */
    public ?string $endTime = null;
    
    /**
     * @var string|null $interval Bucket interval (1m, 1h, 1d)
    */
    public ?string $interval = null;
    
    /**
     * @QueryParameter("start_time")
     * @var string|null $startTime Start time (RFC3339)
    */
    public ?string $startTime = null;
    
    /**
     * Instantiates a new DashboardRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end_time End time (RFC3339)
     * @param string|null $interval Bucket interval (1m, 1h, 1d)
     * @param string|null $start_time Start time (RFC3339)
    */
    public function __construct(?string $end_time = null, ?string $interval = null, ?string $start_time = null) {
        $this->endTime = $end_time;
        $this->interval = $interval;
        $this->startTime = $start_time;
    }

}
