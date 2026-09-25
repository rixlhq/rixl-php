<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts;

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
     * @param string|null $creator_id 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @return PostsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $creator_id = null, ?int $paginationLimit = null, ?int $paginationOffset = null): PostsRequestBuilderGetQueryParameters {
        return new PostsRequestBuilderGetQueryParameters($creator_id, $paginationLimit, $paginationOffset);
    }

}
