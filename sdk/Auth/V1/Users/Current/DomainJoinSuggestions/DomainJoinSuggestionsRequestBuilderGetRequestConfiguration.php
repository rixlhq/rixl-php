<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\DomainJoinSuggestions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DomainJoinSuggestionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DomainJoinSuggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DomainJoinSuggestionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DomainJoinSuggestionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DomainJoinSuggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DomainJoinSuggestionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DomainJoinSuggestionsRequestBuilderGetQueryParameters.
     * @param int|null $page_size 
     * @param string|null $page_token 
     * @return DomainJoinSuggestionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page_size = null, ?string $page_token = null): DomainJoinSuggestionsRequestBuilderGetQueryParameters {
        return new DomainJoinSuggestionsRequestBuilderGetQueryParameters($page_size, $page_token);
    }

}
