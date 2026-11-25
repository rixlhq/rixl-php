<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Invitations;

/**
 * ListMyInvitations
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
     * Instantiates a new InvitationsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page_size 
     * @param string|null $page_token 
    */
    public function __construct(?int $page_size = null, ?string $page_token = null) {
        $this->pageSize = $page_size;
        $this->pageToken = $page_token;
    }

}
