<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Subtitles\Language;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Subtitles\Language\Item\WithLangItemRequestBuilder;

/**
 * Builds and executes requests for operations under /media/v1/projects/{projectId}/videos/{videoId}/subtitles/language
*/
class LanguageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.media.v1.projects.item.videos.item.subtitles.language.item collection
     * @param string $lang Language code
     * @return WithLangItemRequestBuilder
    */
    public function byLang(string $lang): WithLangItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['lang'] = $lang;
        return new WithLangItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LanguageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{projectId}/videos/{videoId}/subtitles/language');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
