<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Creators\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithCreator_ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithCreator_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithCreator_ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithCreator_ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithCreator_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithCreator_ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithCreator_ItemRequestBuilderGetQueryParameters.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $project_id 
     * @return WithCreator_ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $paginationLimit = null, ?int $paginationOffset = null, ?string $project_id = null): WithCreator_ItemRequestBuilderGetQueryParameters {
        return new WithCreator_ItemRequestBuilderGetQueryParameters($paginationLimit, $paginationOffset, $project_id);
    }

}
