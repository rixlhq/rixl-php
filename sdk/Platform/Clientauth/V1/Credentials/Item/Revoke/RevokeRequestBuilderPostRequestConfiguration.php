<?php

namespace Rixl\Sdk\Platform\Clientauth\V1\Credentials\Item\Revoke;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RevokeRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RevokeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?RevokeRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RevokeRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RevokeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RevokeRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RevokeRequestBuilderPostQueryParameters.
     * @param string|null $orgId 
     * @return RevokeRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $orgId = null): RevokeRequestBuilderPostQueryParameters {
        return new RevokeRequestBuilderPostQueryParameters($orgId);
    }

}
