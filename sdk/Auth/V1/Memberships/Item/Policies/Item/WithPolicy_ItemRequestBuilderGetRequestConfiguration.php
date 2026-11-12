<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithPolicy_ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithPolicy_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithPolicy_ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithPolicy_ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithPolicy_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithPolicy_ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithPolicy_ItemRequestBuilderGetQueryParameters.
     * @param string|null $userUser_id 
     * @return WithPolicy_ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userUser_id = null): WithPolicy_ItemRequestBuilderGetQueryParameters {
        return new WithPolicy_ItemRequestBuilderGetQueryParameters($userUser_id);
    }

}
