<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item\Attachments;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListPolicyAttachments
*/
class AttachmentsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new AttachmentsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userUser_id 
    */
    public function __construct(?string $userUser_id = null) {
        $this->userUserId = $userUser_id;
    }

}
