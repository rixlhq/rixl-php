<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetPolicy
*/
class WithPolicy_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("user%2EuserId")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new WithPolicy_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userUserId 
    */
    public function __construct(?string $userUserId = null) {
        $this->userUserId = $userUserId;
    }

}
