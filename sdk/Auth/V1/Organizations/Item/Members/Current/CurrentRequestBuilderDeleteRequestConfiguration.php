<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\Members\Current;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CurrentRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CurrentRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?CurrentRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CurrentRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CurrentRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CurrentRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CurrentRequestBuilderDeleteQueryParameters.
     * @param string|null $user_id 
     * @return CurrentRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): CurrentRequestBuilderDeleteQueryParameters {
        return new CurrentRequestBuilderDeleteQueryParameters($user_id);
    }

}
