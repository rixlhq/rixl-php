<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PaymentMethodsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PaymentMethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PaymentMethodsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PaymentMethodsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PaymentMethodsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PaymentMethodsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PaymentMethodsRequestBuilderGetQueryParameters.
     * @param string|null $orgId 
     * @param bool|null $refresh 
     * @return PaymentMethodsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $orgId = null, ?bool $refresh = null): PaymentMethodsRequestBuilderGetQueryParameters {
        return new PaymentMethodsRequestBuilderGetQueryParameters($orgId, $refresh);
    }

}
