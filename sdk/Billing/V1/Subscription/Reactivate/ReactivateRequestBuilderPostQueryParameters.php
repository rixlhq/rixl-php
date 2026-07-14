<?php

namespace Rixl\Sdk\Billing\V1\Subscription\Reactivate;

/**
 * ReactivateSubscription
*/
class ReactivateRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new ReactivateRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
