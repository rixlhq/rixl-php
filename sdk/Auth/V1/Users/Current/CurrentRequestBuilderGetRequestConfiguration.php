<?php

namespace Rixl\Sdk\Auth\V1\Users\Current;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CurrentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CurrentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CurrentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CurrentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CurrentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CurrentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CurrentRequestBuilderGetQueryParameters.
     * @param string|null $userId 
     * @return CurrentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): CurrentRequestBuilderGetQueryParameters {
        return new CurrentRequestBuilderGetQueryParameters($userId);
    }

}
