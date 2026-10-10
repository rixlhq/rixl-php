<?php

namespace Rixl\Sdk\Billing\V1\BandwidthUsage\History;

/**
 * GetBandwidthUsageHistory
*/
class HistoryRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $days The days query parameter.
    */
    public ?int $days = null;
    
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId The org_id query parameter.
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new HistoryRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $days The days query parameter.
     * @param string|null $org_id The org_id query parameter.
    */
    public function __construct(?int $days = null, ?string $org_id = null) {
        $this->days = $days;
        $this->orgId = $org_id;
    }

}
