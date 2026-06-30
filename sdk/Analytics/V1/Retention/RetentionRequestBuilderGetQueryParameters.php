<?php

namespace Rixl\Sdk\Analytics\V1\Retention;

/**
 * Returns retention cohorts over a date range
*/
class RetentionRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $end End date (inclusive)
    */
    public ?string $end = null;
    
    /**
     * @var string|null $period Cohort period (day, week, month)
    */
    public ?string $period = null;
    
    /**
     * @var string|null $start Start date (inclusive)
    */
    public ?string $start = null;
    
    /**
     * Instantiates a new RetentionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end End date (inclusive)
     * @param string|null $period Cohort period (day, week, month)
     * @param string|null $start Start date (inclusive)
    */
    public function __construct(?string $end = null, ?string $period = null, ?string $start = null) {
        $this->end = $end;
        $this->period = $period;
        $this->start = $start;
    }

}
