<?php

namespace Rixl\Sdk\Auth\V1\MembershipApplications;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;
use Rixl\Sdk\Models\Auth\V1\MembershipApplicationState;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MembershipApplicationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MembershipApplicationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MembershipApplicationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MembershipApplicationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MembershipApplicationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MembershipApplicationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MembershipApplicationsRequestBuilderGetQueryParameters.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param MembershipApplicationState|null $state 
     * @param string|null $userUser_id 
     * @return MembershipApplicationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null, ?MembershipApplicationState $state = null, ?string $userUser_id = null): MembershipApplicationsRequestBuilderGetQueryParameters {
        return new MembershipApplicationsRequestBuilderGetQueryParameters($limit, $offset, $state, $userUser_id);
    }

}
