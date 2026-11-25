<?php

namespace Rixl\Sdk\Auth\V1\SignIns\RevokeOthers;

/**
 * Revokes all of the caller's sign-ins except the current one.
*/
class RevokeOthersRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("user_id")
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new RevokeOthersRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $user_id 
    */
    public function __construct(?string $user_id = null) {
        $this->userId = $user_id;
    }

}
