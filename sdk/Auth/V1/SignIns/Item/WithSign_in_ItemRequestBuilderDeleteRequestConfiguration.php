<?php

namespace Rixl\Sdk\Auth\V1\SignIns\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithSign_in_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithSign_in_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithSign_in_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithSign_in_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithSign_in_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithSign_in_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithSign_in_ItemRequestBuilderDeleteQueryParameters.
     * @param string|null $userUser_id 
     * @return WithSign_in_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $userUser_id = null): WithSign_in_ItemRequestBuilderDeleteQueryParameters {
        return new WithSign_in_ItemRequestBuilderDeleteQueryParameters($userUser_id);
    }

}
