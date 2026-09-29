<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Check;

/**
 * CheckMembership
*/
class CheckRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("user_id")
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new CheckRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $user_id 
    */
    public function __construct(?string $user_id = null) {
        $this->userId = $user_id;
    }

}
