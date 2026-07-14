<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\Setup;

/**
 * SetupOTP
*/
class SetupRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new SetupRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
