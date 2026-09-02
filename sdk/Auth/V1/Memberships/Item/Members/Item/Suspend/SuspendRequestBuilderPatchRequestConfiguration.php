<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Suspend;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SuspendRequestBuilderPatchRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SuspendRequestBuilderPatchQueryParameters|null $queryParameters Request query parameters
    */
    public ?SuspendRequestBuilderPatchQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SuspendRequestBuilderPatchRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SuspendRequestBuilderPatchQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SuspendRequestBuilderPatchQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SuspendRequestBuilderPatchQueryParameters.
     * @param string|null $userActor_id 
     * @return SuspendRequestBuilderPatchQueryParameters
    */
    public static function createQueryParameters(?string $userActor_id = null): SuspendRequestBuilderPatchQueryParameters {
        return new SuspendRequestBuilderPatchQueryParameters($userActor_id);
    }

}
