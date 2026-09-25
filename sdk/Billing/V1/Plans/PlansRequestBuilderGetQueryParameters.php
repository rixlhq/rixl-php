<?php

namespace Rixl\Sdk\Billing\V1\Plans;

/**
 * ListPlans
*/
class PlansRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $currency 
    */
    public ?string $currency = null;
    
    /**
     * @var string|null $free 
    */
    public ?string $free = null;
    
    /**
     * @var string|null $interval 
    */
    public ?string $interval = null;
    
    /**
     * Instantiates a new PlansRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $currency 
     * @param string|null $free 
     * @param string|null $interval 
    */
    public function __construct(?string $currency = null, ?string $free = null, ?string $interval = null) {
        $this->currency = $currency;
        $this->free = $free;
        $this->interval = $interval;
    }

}
