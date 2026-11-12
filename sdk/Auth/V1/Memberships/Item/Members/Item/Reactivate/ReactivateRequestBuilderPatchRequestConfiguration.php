<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Reactivate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReactivateRequestBuilderPatchRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReactivateRequestBuilderPatchQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReactivateRequestBuilderPatchQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReactivateRequestBuilderPatchRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReactivateRequestBuilderPatchQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReactivateRequestBuilderPatchQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReactivateRequestBuilderPatchQueryParameters.
     * @param string|null $userActor_id 
     * @return ReactivateRequestBuilderPatchQueryParameters
    */
    public static function createQueryParameters(?string $userActor_id = null): ReactivateRequestBuilderPatchQueryParameters {
        return new ReactivateRequestBuilderPatchQueryParameters($userActor_id);
    }

}
