<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Invite\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithUser_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithUser_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithUser_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithUser_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithUser_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithUser_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithUser_ItemRequestBuilderDeleteQueryParameters.
     * @param string|null $userActor_id 
     * @return WithUser_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $userActor_id = null): WithUser_ItemRequestBuilderDeleteQueryParameters {
        return new WithUser_ItemRequestBuilderDeleteQueryParameters($userActor_id);
    }

}
