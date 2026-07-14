<?php

namespace Rixl\Sdk\Organizations\Item\ApiKeys\V1;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class V1RequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var V1RequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?V1RequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new V1RequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param V1RequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?V1RequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new V1RequestBuilderGetQueryParameters.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @return V1RequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $paginationLimit = null, ?int $paginationOffset = null): V1RequestBuilderGetQueryParameters {
        return new V1RequestBuilderGetQueryParameters($paginationLimit, $paginationOffset);
    }

}
