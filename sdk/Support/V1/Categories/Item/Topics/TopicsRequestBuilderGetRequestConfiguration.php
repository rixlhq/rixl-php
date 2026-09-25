<?php

namespace Rixl\Sdk\Support\V1\Categories\Item\Topics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TopicsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TopicsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TopicsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TopicsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TopicsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TopicsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TopicsRequestBuilderGetQueryParameters.
     * @param string|null $query 
     * @return TopicsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $query = null): TopicsRequestBuilderGetQueryParameters {
        return new TopicsRequestBuilderGetQueryParameters($query);
    }

}
