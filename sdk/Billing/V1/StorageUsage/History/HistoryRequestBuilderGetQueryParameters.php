<?php

namespace Rixl\Sdk\Billing\V1\StorageUsage\History;

/**
 * Returns the organization's storage usage history
*/
class HistoryRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $days Number of days of history
    */
    public ?int $days = null;
    
    /**
     * Instantiates a new HistoryRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $days Number of days of history
    */
    public function __construct(?int $days = null) {
        $this->days = $days;
    }

}
