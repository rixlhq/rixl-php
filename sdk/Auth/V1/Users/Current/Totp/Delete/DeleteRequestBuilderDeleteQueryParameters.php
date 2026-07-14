<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\Delete;

/**
 * DeleteOTP
*/
class DeleteRequestBuilderDeleteQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new DeleteRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
