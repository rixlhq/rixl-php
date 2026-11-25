<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\AuditEvents;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuditEventsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuditEventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuditEventsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuditEventsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuditEventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuditEventsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuditEventsRequestBuilderGetQueryParameters.
     * @param int|null $page_size 
     * @param string|null $page_token 
     * @return AuditEventsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page_size = null, ?string $page_token = null): AuditEventsRequestBuilderGetQueryParameters {
        return new AuditEventsRequestBuilderGetQueryParameters($page_size, $page_token);
    }

}
