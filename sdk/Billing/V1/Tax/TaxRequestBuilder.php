<?php

namespace Rixl\Sdk\Billing\V1\Tax;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Billing\V1\Tax\Calculate\CalculateRequestBuilder;
use Rixl\Sdk\Billing\V1\Tax\CalculateGeneric\CalculateGenericRequestBuilder;

/**
 * Builds and executes requests for operations under /billing/v1/tax
*/
class TaxRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The calculate property
    */
    public function calculate(): CalculateRequestBuilder {
        return new CalculateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calculateGeneric property
    */
    public function calculateGeneric(): CalculateGenericRequestBuilder {
        return new CalculateGenericRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TaxRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1/tax');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
