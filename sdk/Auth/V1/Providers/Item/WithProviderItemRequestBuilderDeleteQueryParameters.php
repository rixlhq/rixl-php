<?php

namespace Rixl\Sdk\Auth\V1\Providers\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * DisconnectProvider
*/
class WithProviderItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId The user.user_id query parameter.
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new WithProviderItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userUser_id The user.user_id query parameter.
    */
    public function __construct(?string $userUser_id = null) {
        $this->userUserId = $userUser_id;
    }

}
