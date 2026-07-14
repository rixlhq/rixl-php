<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Passkeys;

/**
 * ListPasskeys
*/
class PasskeysRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new PasskeysRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
