<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithPayment_method_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithPayment_method_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithPayment_method_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithPayment_method_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithPayment_method_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithPayment_method_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithPayment_method_ItemRequestBuilderDeleteQueryParameters.
     * @param string|null $org_id 
     * @return WithPayment_method_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $org_id = null): WithPayment_method_ItemRequestBuilderDeleteQueryParameters {
        return new WithPayment_method_ItemRequestBuilderDeleteQueryParameters($org_id);
    }

}
