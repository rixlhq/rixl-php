<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\Domain\SuggestJoin;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SuggestJoinRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SuggestJoinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SuggestJoinRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SuggestJoinRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SuggestJoinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SuggestJoinRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SuggestJoinRequestBuilderGetQueryParameters.
     * @param string|null $user_id 
     * @return SuggestJoinRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): SuggestJoinRequestBuilderGetQueryParameters {
        return new SuggestJoinRequestBuilderGetQueryParameters($user_id);
    }

}
