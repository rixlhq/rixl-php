<?php

namespace Rixl\Sdk\Billing\V1\BandwidthUsage\Refresh;

/**
 * RefreshBandwidthUsage
*/
class RefreshRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new RefreshRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $org_id 
    */
    public function __construct(?string $org_id = null) {
        $this->orgId = $org_id;
    }

}
