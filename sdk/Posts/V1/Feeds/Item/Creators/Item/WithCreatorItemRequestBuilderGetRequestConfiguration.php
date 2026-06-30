<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Creators\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithCreatorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithCreatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithCreatorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithCreatorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithCreatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithCreatorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithCreatorItemRequestBuilderGetQueryParameters.
     * @param int|null $limit Page size
     * @param int|null $offset Page offset
     * @return WithCreatorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null): WithCreatorItemRequestBuilderGetQueryParameters {
        return new WithCreatorItemRequestBuilderGetQueryParameters($limit, $offset);
    }

}
