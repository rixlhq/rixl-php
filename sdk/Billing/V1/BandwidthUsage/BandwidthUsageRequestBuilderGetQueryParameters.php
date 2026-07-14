<?php

namespace Rixl\Sdk\Billing\V1\BandwidthUsage;

/**
 * GetBandwidthUsage
*/
class BandwidthUsageRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new BandwidthUsageRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
