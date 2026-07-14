<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\Setup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SetupRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SetupRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?SetupRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SetupRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SetupRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SetupRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SetupRequestBuilderPostQueryParameters.
     * @param string|null $userId 
     * @return SetupRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): SetupRequestBuilderPostQueryParameters {
        return new SetupRequestBuilderPostQueryParameters($userId);
    }

}
