<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item\Attachments;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListPolicyAttachments
*/
class AttachmentsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("user%2EuserId")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new AttachmentsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userUserId 
    */
    public function __construct(?string $userUserId = null) {
        $this->userUserId = $userUserId;
    }

}
