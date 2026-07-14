<?php

namespace Rixl\Sdk\Auth\V1\Providers\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * DisconnectProvider
*/
class WithProviderItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("user%2EuserId")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new WithProviderItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userUserId 
    */
    public function __construct(?string $userUserId = null) {
        $this->userUserId = $userUserId;
    }

}
