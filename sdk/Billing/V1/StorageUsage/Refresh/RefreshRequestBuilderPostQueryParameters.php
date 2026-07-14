<?php

namespace Rixl\Sdk\Billing\V1\StorageUsage\Refresh;

/**
 * RefreshStorageUsage
*/
class RefreshRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new RefreshRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
