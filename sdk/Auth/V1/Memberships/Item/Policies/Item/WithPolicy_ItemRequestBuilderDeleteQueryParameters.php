<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * DeletePolicy
*/
class WithPolicy_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("user%2EuserId")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new WithPolicy_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userUserId 
    */
    public function __construct(?string $userUserId = null) {
        $this->userUserId = $userUserId;
    }

}
