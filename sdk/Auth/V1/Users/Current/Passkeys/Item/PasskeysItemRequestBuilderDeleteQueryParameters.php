<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Item;

/**
 * DeletePasskey
*/
class PasskeysItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new PasskeysItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
