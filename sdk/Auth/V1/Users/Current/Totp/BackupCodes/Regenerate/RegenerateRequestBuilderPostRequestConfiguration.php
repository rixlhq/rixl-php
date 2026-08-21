<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\BackupCodes\Regenerate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RegenerateRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RegenerateRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?RegenerateRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RegenerateRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RegenerateRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RegenerateRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RegenerateRequestBuilderPostQueryParameters.
     * @param string|null $user_id 
     * @return RegenerateRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): RegenerateRequestBuilderPostQueryParameters {
        return new RegenerateRequestBuilderPostQueryParameters($user_id);
    }

}
