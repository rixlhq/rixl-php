<?php

namespace Rixl\Sdk\Auth\V1\Organizations;

/**
 * ListOrganizations
*/
class OrganizationsRequestBuilderGetQueryParameters 
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
     * @QueryParameter("show_deleted")
     * @var bool|null $showDeleted Includes deleted organizations visible to their retained active owners.
    */
    public ?bool $showDeleted = null;
    
    /**
     * Instantiates a new OrganizationsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page_size 
     * @param string|null $page_token 
     * @param bool|null $show_deleted Includes deleted organizations visible to their retained active owners.
    */
    public function __construct(?int $page_size = null, ?string $page_token = null, ?bool $show_deleted = null) {
        $this->pageSize = $page_size;
        $this->pageToken = $page_token;
        $this->showDeleted = $show_deleted;
    }

}
