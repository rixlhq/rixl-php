<?php

namespace Rixl\Sdk\Auth\V1\Providers;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProvidersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProvidersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProvidersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProvidersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProvidersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProvidersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProvidersRequestBuilderGetQueryParameters.
     * @param string|null $user_id 
     * @return ProvidersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): ProvidersRequestBuilderGetQueryParameters {
        return new ProvidersRequestBuilderGetQueryParameters($user_id);
    }

}
