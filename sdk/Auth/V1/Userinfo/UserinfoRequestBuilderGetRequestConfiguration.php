<?php

namespace Rixl\Sdk\Auth\V1\Userinfo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserinfoRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserinfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserinfoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserinfoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserinfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserinfoRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserinfoRequestBuilderGetQueryParameters.
     * @param string|null $userId 
     * @return UserinfoRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): UserinfoRequestBuilderGetQueryParameters {
        return new UserinfoRequestBuilderGetQueryParameters($userId);
    }

}
