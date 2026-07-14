<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Policies;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListUserPolicies
*/
class PoliciesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("user%2EuserId")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new PoliciesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userUserId 
    */
    public function __construct(?string $userUserId = null) {
        $this->userUserId = $userUserId;
    }

}
