<?php

namespace Rixl\Sdk\Analytics\V1\Top\Feeds;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FeedsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FeedsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FeedsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FeedsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FeedsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FeedsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FeedsRequestBuilderGetQueryParameters.
     * @param string|null $end End date (inclusive)
     * @param string|null $limit Maximum number of results
     * @param string|null $start Start date (inclusive)
     * @return FeedsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $end = null, ?string $limit = null, ?string $start = null): FeedsRequestBuilderGetQueryParameters {
        return new FeedsRequestBuilderGetQueryParameters($end, $limit, $start);
    }

}
