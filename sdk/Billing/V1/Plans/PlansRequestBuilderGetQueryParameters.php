<?php

namespace Rixl\Sdk\Billing\V1\Plans;

/**
 * ListPlans
*/
class PlansRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $currency The currency query parameter.
    */
    public ?string $currency = null;
    
    /**
     * @var string|null $free The free query parameter.
    */
    public ?string $free = null;
    
    /**
     * @var string|null $interval The interval query parameter.
    */
    public ?string $interval = null;
    
    /**
     * Instantiates a new PlansRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $currency The currency query parameter.
     * @param string|null $free The free query parameter.
     * @param string|null $interval The interval query parameter.
    */
    public function __construct(?string $currency = null, ?string $free = null, ?string $interval = null) {
        $this->currency = $currency;
        $this->free = $free;
        $this->interval = $interval;
    }

}
