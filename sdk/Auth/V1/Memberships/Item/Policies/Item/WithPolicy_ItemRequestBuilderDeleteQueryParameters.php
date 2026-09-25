<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * DeletePolicy
*/
class WithPolicy_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new WithPolicy_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userUser_id 
    */
    public function __construct(?string $userUser_id = null) {
        $this->userUserId = $userUser_id;
    }

}
