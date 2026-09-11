<?php

namespace Rixl\Sdk\Support\V1\Chat\Messages;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessagesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MessagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessagesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MessagesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MessagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MessagesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MessagesRequestBuilderGetQueryParameters.
     * @param DateTime|null $after A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param int|null $limit The limit query parameter.
     * @return MessagesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?DateTime $after = null, ?int $limit = null): MessagesRequestBuilderGetQueryParameters {
        return new MessagesRequestBuilderGetQueryParameters($after, $limit);
    }

}
