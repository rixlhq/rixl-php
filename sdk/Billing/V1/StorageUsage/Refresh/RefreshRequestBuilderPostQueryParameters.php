<?php

namespace Rixl\Sdk\Billing\V1\StorageUsage\Refresh;

/**
 * RefreshStorageUsage
*/
class RefreshRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId The org_id query parameter.
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new RefreshRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $org_id The org_id query parameter.
    */
    public function __construct(?string $org_id = null) {
        $this->orgId = $org_id;
    }

}
