<?php

namespace Rixl\Sdk\Billing\V1\Subscription\Cancel;

/**
 * CancelSubscription
*/
class CancelRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new CancelRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
