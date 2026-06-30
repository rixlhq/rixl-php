<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Pending;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PendingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PendingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PendingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PendingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PendingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PendingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PendingRequestBuilderGetQueryParameters.
     * @param int|null $limit Limit
     * @param int|null $offset Offset
     * @return PendingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null): PendingRequestBuilderGetQueryParameters {
        return new PendingRequestBuilderGetQueryParameters($limit, $offset);
    }

}
