<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithFeed_ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithFeed_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithFeed_ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithFeed_ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithFeed_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithFeed_ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithFeed_ItemRequestBuilderGetQueryParameters.
     * @param string|null $creator_id 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $project_id 
     * @return WithFeed_ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $creator_id = null, ?int $paginationLimit = null, ?int $paginationOffset = null, ?string $project_id = null): WithFeed_ItemRequestBuilderGetQueryParameters {
        return new WithFeed_ItemRequestBuilderGetQueryParameters($creator_id, $paginationLimit, $paginationOffset, $project_id);
    }

}
