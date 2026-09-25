<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Member_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Member_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?Member_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Member_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Member_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Member_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Member_ItemRequestBuilderDeleteQueryParameters.
     * @param string|null $userActor_id 
     * @return Member_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $userActor_id = null): Member_ItemRequestBuilderDeleteQueryParameters {
        return new Member_ItemRequestBuilderDeleteQueryParameters($userActor_id);
    }

}
