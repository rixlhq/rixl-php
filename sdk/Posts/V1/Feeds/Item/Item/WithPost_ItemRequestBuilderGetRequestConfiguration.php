<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithPost_ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithPost_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithPost_ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithPost_ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithPost_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithPost_ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithPost_ItemRequestBuilderGetQueryParameters.
     * @param string|null $projectId 
     * @return WithPost_ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $projectId = null): WithPost_ItemRequestBuilderGetQueryParameters {
        return new WithPost_ItemRequestBuilderGetQueryParameters($projectId);
    }

}
