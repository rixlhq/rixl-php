<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithPolicy_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithPolicy_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithPolicy_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithPolicy_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithPolicy_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithPolicy_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithPolicy_ItemRequestBuilderDeleteQueryParameters.
     * @param string|null $userUser_id 
     * @return WithPolicy_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $userUser_id = null): WithPolicy_ItemRequestBuilderDeleteQueryParameters {
        return new WithPolicy_ItemRequestBuilderDeleteQueryParameters($userUser_id);
    }

}
