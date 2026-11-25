<?php

namespace Rixl\Sdk\Auth\V1\SignIns\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Revokes one of the caller's sign-ins and invalidates its tokens.
*/
class WithSign_in_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new WithSign_in_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userUser_id 
    */
    public function __construct(?string $userUser_id = null) {
        $this->userUserId = $userUser_id;
    }

}
