<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain\Verify;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VerifyRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VerifyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?VerifyRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VerifyRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VerifyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VerifyRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VerifyRequestBuilderPostQueryParameters.
     * @param string|null $userId 
     * @return VerifyRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): VerifyRequestBuilderPostQueryParameters {
        return new VerifyRequestBuilderPostQueryParameters($userId);
    }

}
