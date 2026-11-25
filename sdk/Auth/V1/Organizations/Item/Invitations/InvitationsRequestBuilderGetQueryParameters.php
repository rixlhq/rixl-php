<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\Invitations;

use Rixl\Sdk\Models\Auth\V1\InvitationState;

/**
 * ListOrganizationInvitations
*/
class InvitationsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("page_size")
     * @var int|null $pageSize 
    */
    public ?int $pageSize = null;
    
    /**
     * @QueryParameter("page_token")
     * @var string|null $pageToken 
    */
    public ?string $pageToken = null;
    
    /**
     * @var InvitationState|null $state Defaults to pending.
    */
    public ?InvitationState $state = null;
    
    /**
     * Instantiates a new InvitationsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page_size 
     * @param string|null $page_token 
     * @param InvitationState|null $state Defaults to pending.
    */
    public function __construct(?int $page_size = null, ?string $page_token = null, ?InvitationState $state = null) {
        $this->pageSize = $page_size;
        $this->pageToken = $page_token;
        $this->state = $state;
    }

}
