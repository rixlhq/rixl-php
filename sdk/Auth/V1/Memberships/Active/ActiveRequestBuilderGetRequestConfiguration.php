<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Active;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActiveRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ActiveRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActiveRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ActiveRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActiveRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActiveRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ActiveRequestBuilderGetQueryParameters.
     * @param int|null $limit Limit
     * @param int|null $offset Offset
     * @return ActiveRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null): ActiveRequestBuilderGetQueryParameters {
        return new ActiveRequestBuilderGetQueryParameters($limit, $offset);
    }

}
