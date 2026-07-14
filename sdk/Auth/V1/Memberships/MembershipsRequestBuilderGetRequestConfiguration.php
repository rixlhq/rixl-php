<?php

namespace Rixl\Sdk\Auth\V1\Memberships;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;
use Rixl\Sdk\Models\Auth\V1\MembershipState;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MembershipsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MembershipsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MembershipsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MembershipsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MembershipsRequestBuilderGetQueryParameters.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param MembershipState|null $state 
     * @param string|null $userUserId 
     * @return MembershipsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null, ?MembershipState $state = null, ?string $userUserId = null): MembershipsRequestBuilderGetQueryParameters {
        return new MembershipsRequestBuilderGetQueryParameters($limit, $offset, $state, $userUserId);
    }

}
