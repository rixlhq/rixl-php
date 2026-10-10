<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Passkeys;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PasskeysRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PasskeysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PasskeysRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PasskeysRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PasskeysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PasskeysRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PasskeysRequestBuilderGetQueryParameters.
     * @param string|null $user_id 
     * @return PasskeysRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): PasskeysRequestBuilderGetQueryParameters {
        return new PasskeysRequestBuilderGetQueryParameters($user_id);
    }

}
