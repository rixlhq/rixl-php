<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Chapters;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * UpdateVideoChapters
*/
class ChaptersRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("chapters%2EstartTimeSec")
     * @var float|null $chaptersStartTimeSec 
    */
    public ?float $chaptersStartTimeSec = null;
    
    /**
     * @QueryParameter("chapters%2Etitle")
     * @var string|null $chaptersTitle 
    */
    public ?string $chaptersTitle = null;
    
    /**
     * Instantiates a new ChaptersRequestBuilderDeleteQueryParameters and sets the default values.
     * @param float|null $chaptersStartTimeSec 
     * @param string|null $chaptersTitle 
    */
    public function __construct(?float $chaptersStartTimeSec = null, ?string $chaptersTitle = null) {
        $this->chaptersStartTimeSec = $chaptersStartTimeSec;
        $this->chaptersTitle = $chaptersTitle;
    }

}
