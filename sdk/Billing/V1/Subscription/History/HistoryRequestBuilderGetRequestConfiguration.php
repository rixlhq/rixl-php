<?php

namespace Rixl\Sdk\Billing\V1\Subscription\History;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HistoryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HistoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HistoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HistoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HistoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HistoryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HistoryRequestBuilderGetQueryParameters.
     * @param string|null $org_id 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @return HistoryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $org_id = null, ?int $paginationLimit = null, ?int $paginationOffset = null): HistoryRequestBuilderGetQueryParameters {
        return new HistoryRequestBuilderGetQueryParameters($org_id, $paginationLimit, $paginationOffset);
    }

}
