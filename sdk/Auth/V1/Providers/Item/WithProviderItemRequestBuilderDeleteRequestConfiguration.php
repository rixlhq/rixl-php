<?php

namespace Rixl\Sdk\Auth\V1\Providers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithProviderItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithProviderItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithProviderItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithProviderItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithProviderItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithProviderItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithProviderItemRequestBuilderDeleteQueryParameters.
     * @param string|null $userUser_id 
     * @return WithProviderItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $userUser_id = null): WithProviderItemRequestBuilderDeleteQueryParameters {
        return new WithProviderItemRequestBuilderDeleteQueryParameters($userUser_id);
    }

}
