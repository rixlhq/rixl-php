<?php

namespace Rixl\Sdk\Auth\V1\Notifications\Item\Preferences;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PreferencesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PreferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PreferencesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PreferencesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PreferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PreferencesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PreferencesRequestBuilderGetQueryParameters.
     * @param string|null $user_id 
     * @return PreferencesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): PreferencesRequestBuilderGetQueryParameters {
        return new PreferencesRequestBuilderGetQueryParameters($user_id);
    }

}
