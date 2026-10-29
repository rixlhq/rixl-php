<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\Attempts;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttemptsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AttemptsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttemptsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AttemptsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AttemptsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttemptsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AttemptsRequestBuilderGetQueryParameters.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @return AttemptsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $paginationLimit = null, ?int $paginationOffset = null): AttemptsRequestBuilderGetQueryParameters {
        return new AttemptsRequestBuilderGetQueryParameters($paginationLimit, $paginationOffset);
    }

}
