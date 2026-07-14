<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain\AutoJoin;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AutoJoinRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AutoJoinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AutoJoinRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AutoJoinRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AutoJoinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AutoJoinRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AutoJoinRequestBuilderGetQueryParameters.
     * @param string|null $userId 
     * @return AutoJoinRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): AutoJoinRequestBuilderGetQueryParameters {
        return new AutoJoinRequestBuilderGetQueryParameters($userId);
    }

}
