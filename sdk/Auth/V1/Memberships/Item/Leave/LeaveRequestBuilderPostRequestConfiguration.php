<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Leave;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LeaveRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LeaveRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?LeaveRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LeaveRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LeaveRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LeaveRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LeaveRequestBuilderPostQueryParameters.
     * @param string|null $userId 
     * @return LeaveRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): LeaveRequestBuilderPostQueryParameters {
        return new LeaveRequestBuilderPostQueryParameters($userId);
    }

}
