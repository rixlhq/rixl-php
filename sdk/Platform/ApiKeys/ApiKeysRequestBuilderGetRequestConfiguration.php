<?php

namespace Rixl\Sdk\Platform\ApiKeys;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApiKeysRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApiKeysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApiKeysRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApiKeysRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApiKeysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApiKeysRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApiKeysRequestBuilderGetQueryParameters.
     * @param int|null $limit Pagination limit
     * @param int|null $offset Pagination offset
     * @return ApiKeysRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null): ApiKeysRequestBuilderGetQueryParameters {
        return new ApiKeysRequestBuilderGetQueryParameters($limit, $offset);
    }

}
