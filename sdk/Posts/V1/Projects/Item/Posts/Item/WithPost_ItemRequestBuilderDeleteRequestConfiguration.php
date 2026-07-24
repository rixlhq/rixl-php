<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Posts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithPost_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithPost_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithPost_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithPost_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithPost_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithPost_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithPost_ItemRequestBuilderDeleteQueryParameters.
     * @param string|null $feed_id feed_id is accepted from the feed-scoped delete path but not used by the backend (deletion is keyed by post_id).
     * @return WithPost_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $feed_id = null): WithPost_ItemRequestBuilderDeleteQueryParameters {
        return new WithPost_ItemRequestBuilderDeleteQueryParameters($feed_id);
    }

}
