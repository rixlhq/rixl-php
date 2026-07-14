<?php

namespace Rixl\Sdk\Auth\V1\Userinfo;

/**
 * GetUserInfo
*/
class UserinfoRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new UserinfoRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
