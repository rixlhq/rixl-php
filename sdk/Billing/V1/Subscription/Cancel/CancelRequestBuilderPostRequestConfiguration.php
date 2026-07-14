<?php

namespace Rixl\Sdk\Billing\V1\Subscription\Cancel;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CancelRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CancelRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?CancelRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CancelRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CancelRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CancelRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CancelRequestBuilderPostQueryParameters.
     * @param string|null $orgId 
     * @return CancelRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $orgId = null): CancelRequestBuilderPostQueryParameters {
        return new CancelRequestBuilderPostQueryParameters($orgId);
    }

}
