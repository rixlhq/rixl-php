<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain\Verify;

/**
 * CheckDomainVerification
*/
class VerifyRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("user_id")
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new VerifyRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $user_id 
    */
    public function __construct(?string $user_id = null) {
        $this->userId = $user_id;
    }

}
