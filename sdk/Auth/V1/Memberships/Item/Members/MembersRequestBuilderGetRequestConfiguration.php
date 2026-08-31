<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MembersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MembersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MembersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MembersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MembersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MembersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MembersRequestBuilderGetQueryParameters.
     * @param int|null $limit 
     * @param int|null $offset 
     * @return MembersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null): MembersRequestBuilderGetQueryParameters {
        return new MembersRequestBuilderGetQueryParameters($limit, $offset);
    }

}
