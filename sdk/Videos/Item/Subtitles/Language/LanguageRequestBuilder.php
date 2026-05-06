<?php

namespace Rixl\Sdk\Videos\Item\Subtitles\Language;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Videos\Item\Subtitles\Language\Item\WithLang_codeItemRequestBuilder;

/**
 * Builds and executes requests for operations under /videos/{videoId}/subtitles/language
*/
class LanguageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.videos.item.subtitles.language.item collection
     * @param string $lang_code Language Code (BCP 47)
     * @return WithLang_codeItemRequestBuilder
    */
    public function byLang_code(string $lang_code): WithLang_codeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['lang_code'] = $lang_code;
        return new WithLang_codeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LanguageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/videos/{videoId}/subtitles/language');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
