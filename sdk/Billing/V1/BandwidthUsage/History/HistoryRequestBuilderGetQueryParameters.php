<?php

namespace Rixl\Sdk\Billing\V1\BandwidthUsage\History;

/**
 * GetBandwidthUsageHistory
*/
class HistoryRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $days 
    */
    public ?int $days = null;
    
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new HistoryRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $days 
     * @param string|null $orgId 
    */
    public function __construct(?int $days = null, ?string $orgId = null) {
        $this->days = $days;
        $this->orgId = $orgId;
    }

}
