<?php

namespace Rixl\Sdk\Billing\V1\Address;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AddressRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AddressRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AddressRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AddressRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AddressRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AddressRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AddressRequestBuilderGetQueryParameters.
     * @param string|null $org_id 
     * @return AddressRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $org_id = null): AddressRequestBuilderGetQueryParameters {
        return new AddressRequestBuilderGetQueryParameters($org_id);
    }

}
