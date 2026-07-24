<?php

namespace Rixl\Sdk\Billing\V1\Subscription\Cancel;

/**
 * CancelSubscription
*/
class CancelRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new CancelRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $org_id 
    */
    public function __construct(?string $org_id = null) {
        $this->orgId = $org_id;
    }

}
