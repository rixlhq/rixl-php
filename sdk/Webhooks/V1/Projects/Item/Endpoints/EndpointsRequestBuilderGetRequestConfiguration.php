<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EndpointsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EndpointsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EndpointsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EndpointsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EndpointsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EndpointsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EndpointsRequestBuilderGetQueryParameters.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @return EndpointsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $paginationLimit = null, ?int $paginationOffset = null): EndpointsRequestBuilderGetQueryParameters {
        return new EndpointsRequestBuilderGetQueryParameters($paginationLimit, $paginationOffset);
    }

}
