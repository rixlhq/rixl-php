<?php

namespace Rixl\Sdk\Billing\V1\Subscription;

/**
 * GetSubscription
*/
class SubscriptionRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
