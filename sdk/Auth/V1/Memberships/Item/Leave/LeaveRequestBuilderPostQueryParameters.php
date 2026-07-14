<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Leave;

/**
 * LeaveOrganization
*/
class LeaveRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new LeaveRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
