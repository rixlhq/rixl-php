<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\BackupCodes\Regenerate;

/**
 * RegenerateBackupCodes
*/
class RegenerateRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("user_id")
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new RegenerateRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $user_id 
    */
    public function __construct(?string $user_id = null) {
        $this->userId = $user_id;
    }

}
