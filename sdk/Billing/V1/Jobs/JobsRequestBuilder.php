<?php

namespace Rixl\Sdk\Billing\V1\Jobs;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Billing\V1\Jobs\CleanupBandwidthSnapshots\CleanupBandwidthSnapshotsRequestBuilder;
use Rixl\Sdk\Billing\V1\Jobs\DailyBandwidthCalculation\DailyBandwidthCalculationRequestBuilder;
use Rixl\Sdk\Billing\V1\Jobs\MonthlyBandwidthCalculation\MonthlyBandwidthCalculationRequestBuilder;

/**
 * Builds and executes requests for operations under /billing/v1/jobs
*/
class JobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The cleanupBandwidthSnapshots property
    */
    public function cleanupBandwidthSnapshots(): CleanupBandwidthSnapshotsRequestBuilder {
        return new CleanupBandwidthSnapshotsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dailyBandwidthCalculation property
    */
    public function dailyBandwidthCalculation(): DailyBandwidthCalculationRequestBuilder {
        return new DailyBandwidthCalculationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The monthlyBandwidthCalculation property
    */
    public function monthlyBandwidthCalculation(): MonthlyBandwidthCalculationRequestBuilder {
        return new MonthlyBandwidthCalculationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new JobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1/jobs');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
