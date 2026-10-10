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
     * @param string|null $feed_id The feed_id query parameter.
     * @param int|null $limit The limit query parameter.
     * @param string|null $rangeEnd The range.end query parameter.
     * @param string|null $rangeStart The range.start query parameter.
     * @return PostsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $feed_id = null, ?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null): PostsRequestBuilderGetQueryParameters {
        return new PostsRequestBuilderGetQueryParameters($feed_id, $limit, $rangeEnd, $rangeStart);
    }

}
