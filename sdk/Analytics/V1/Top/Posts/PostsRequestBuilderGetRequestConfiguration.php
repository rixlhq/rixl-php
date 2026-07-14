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
     * @param string|null $feedId 
     * @param int|null $limit 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
     * @return PostsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $feedId = null, ?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null): PostsRequestBuilderGetQueryParameters {
        return new PostsRequestBuilderGetQueryParameters($feedId, $limit, $rangeEnd, $rangeStart);
    }

}
