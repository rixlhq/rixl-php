<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PasskeysItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PasskeysItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?PasskeysItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PasskeysItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PasskeysItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PasskeysItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PasskeysItemRequestBuilderDeleteQueryParameters.
     * @param string|null $user_id 
     * @return PasskeysItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): PasskeysItemRequestBuilderDeleteQueryParameters {
        return new PasskeysItemRequestBuilderDeleteQueryParameters($user_id);
    }

}
