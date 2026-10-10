<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\Setup;

/**
 * SetupOTP
*/
class SetupRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("user_id")
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new SetupRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $user_id 
    */
    public function __construct(?string $user_id = null) {
        $this->userId = $user_id;
    }

}
