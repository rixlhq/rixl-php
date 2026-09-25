<?php

namespace Rixl\Sdk\Billing\V1\Invoices;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListInvoices
*/
class InvoicesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * @QueryParameter("pagination%2Elimit")
     * @var int|null $paginationLimit Maximum number of items to return.
    */
    public ?int $paginationLimit = null;
    
    /**
     * @QueryParameter("pagination%2Eoffset")
     * @var int|null $paginationOffset Number of items to skip before collecting the result set.
    */
    public ?int $paginationOffset = null;
    
    /**
     * Instantiates a new InvoicesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $org_id 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
    */
    public function __construct(?string $org_id = null, ?int $paginationLimit = null, ?int $paginationOffset = null) {
        $this->orgId = $org_id;
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
    }

}
