<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromSetupIntent;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FromSetupIntentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FromSetupIntentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FromSetupIntentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FromSetupIntentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FromSetupIntentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FromSetupIntentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FromSetupIntentRequestBuilderGetQueryParameters.
     * @param string|null $setup_intent_id 
     * @return FromSetupIntentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $setup_intent_id = null): FromSetupIntentRequestBuilderGetQueryParameters {
        return new FromSetupIntentRequestBuilderGetQueryParameters($setup_intent_id);
    }

}
