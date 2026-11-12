<?php

namespace Rixl\Sdk\Platform\Clientauth\V1\Credentials\Item\Revoke;

/**
 * RevokeClientCredential
*/
class RevokeRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new RevokeRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $org_id 
    */
    public function __construct(?string $org_id = null) {
        $this->orgId = $org_id;
    }

}
