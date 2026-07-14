<?php

namespace Rixl\Sdk\Platform\Clientauth\V1\Credentials\Item\Revoke;

/**
 * RevokeClientCredential
*/
class RevokeRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new RevokeRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
