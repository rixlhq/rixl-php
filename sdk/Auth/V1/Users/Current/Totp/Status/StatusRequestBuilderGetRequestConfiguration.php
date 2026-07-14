<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\Status;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StatusRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StatusRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StatusRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StatusRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StatusRequestBuilderGetQueryParameters.
     * @param string|null $userId 
     * @return StatusRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): StatusRequestBuilderGetQueryParameters {
        return new StatusRequestBuilderGetQueryParameters($userId);
    }

}
