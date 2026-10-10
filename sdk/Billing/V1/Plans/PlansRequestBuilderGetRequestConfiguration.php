<?php

namespace Rixl\Sdk\Billing\V1\Plans;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlansRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlansRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlansRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlansRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlansRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlansRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlansRequestBuilderGetQueryParameters.
     * @param string|null $currency 
     * @param string|null $free 
     * @param string|null $interval 
     * @return PlansRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $currency = null, ?string $free = null, ?string $interval = null): PlansRequestBuilderGetQueryParameters {
        return new PlansRequestBuilderGetQueryParameters($currency, $free, $interval);
    }

}
