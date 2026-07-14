<?php

namespace Rixl\Sdk\Billing\V1\Invoices;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvoicesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvoicesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvoicesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvoicesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvoicesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvoicesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvoicesRequestBuilderGetQueryParameters.
     * @param string|null $orgId 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @return InvoicesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $orgId = null, ?int $paginationLimit = null, ?int $paginationOffset = null): InvoicesRequestBuilderGetQueryParameters {
        return new InvoicesRequestBuilderGetQueryParameters($orgId, $paginationLimit, $paginationOffset);
    }

}
