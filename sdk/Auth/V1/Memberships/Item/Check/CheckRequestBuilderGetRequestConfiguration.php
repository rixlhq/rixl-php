<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Check;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CheckRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CheckRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CheckRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CheckRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CheckRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CheckRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CheckRequestBuilderGetQueryParameters.
     * @param string|null $userId 
     * @return CheckRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): CheckRequestBuilderGetQueryParameters {
        return new CheckRequestBuilderGetQueryParameters($userId);
    }

}
