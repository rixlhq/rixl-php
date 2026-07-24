<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Chapters;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChaptersRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ChaptersRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChaptersRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChaptersRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ChaptersRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChaptersRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ChaptersRequestBuilderDeleteQueryParameters.
     * @param float|null $chaptersStart_time_sec 
     * @param string|null $chaptersTitle 
     * @return ChaptersRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?float $chaptersStart_time_sec = null, ?string $chaptersTitle = null): ChaptersRequestBuilderDeleteQueryParameters {
        return new ChaptersRequestBuilderDeleteQueryParameters($chaptersStart_time_sec, $chaptersTitle);
    }

}
