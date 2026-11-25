<?php

namespace Rixl\Sdk\Auth\V1\SignIns\RevokeOthers;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RevokeOthersRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RevokeOthersRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?RevokeOthersRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RevokeOthersRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RevokeOthersRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RevokeOthersRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RevokeOthersRequestBuilderPostQueryParameters.
     * @param string|null $user_id 
     * @return RevokeOthersRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): RevokeOthersRequestBuilderPostQueryParameters {
        return new RevokeOthersRequestBuilderPostQueryParameters($user_id);
    }

}
