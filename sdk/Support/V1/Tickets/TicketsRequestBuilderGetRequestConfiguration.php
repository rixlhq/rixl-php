<?php

namespace Rixl\Sdk\Support\V1\Tickets;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;
use Rixl\Sdk\Models\Support\V1\TicketStatus;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TicketsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TicketsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TicketsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TicketsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TicketsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TicketsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TicketsRequestBuilderGetQueryParameters.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param TicketStatus|null $status 
     * @return TicketsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $paginationLimit = null, ?int $paginationOffset = null, ?TicketStatus $status = null): TicketsRequestBuilderGetQueryParameters {
        return new TicketsRequestBuilderGetQueryParameters($paginationLimit, $paginationOffset, $status);
    }

}
