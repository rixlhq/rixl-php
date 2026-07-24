<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Policies;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListUserPolicies
*/
class PoliciesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new PoliciesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userUser_id 
    */
    public function __construct(?string $userUser_id = null) {
        $this->userUserId = $userUser_id;
    }

}
