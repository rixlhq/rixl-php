<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Policies;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PoliciesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PoliciesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PoliciesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PoliciesRequestBuilderGetQueryParameters.
     * @param string|null $userUserId 
     * @return PoliciesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userUserId = null): PoliciesRequestBuilderGetQueryParameters {
        return new PoliciesRequestBuilderGetQueryParameters($userUserId);
    }

}
