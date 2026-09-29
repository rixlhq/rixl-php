<?php

namespace Rixl\Sdk\Platform\Clientauth\V1\Credentials\Item\Revoke;

/**
 * RevokeClientCredential
*/
class RevokeRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId The org_id query parameter.
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new RevokeRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $org_id The org_id query parameter.
    */
    public function __construct(?string $org_id = null) {
        $this->orgId = $org_id;
    }

}
