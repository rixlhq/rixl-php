<?php

namespace Rixl\Sdk\Analytics\V1\Top\Posts;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PostsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PostsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PostsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PostsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PostsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PostsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PostsRequestBuilderGetQueryParameters.
     * @param string|null $end End date (inclusive)
     * @param string|null $feed_id Filter by feed
     * @param string|null $limit Maximum number of results
     * @param string|null $start Start date (inclusive)
     * @return PostsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $end = null, ?string $feed_id = null, ?string $limit = null, ?string $start = null): PostsRequestBuilderGetQueryParameters {
        return new PostsRequestBuilderGetQueryParameters($end, $feed_id, $limit, $start);
    }

}
