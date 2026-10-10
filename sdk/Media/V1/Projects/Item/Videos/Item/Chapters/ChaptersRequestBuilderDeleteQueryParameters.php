<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Chapters;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * UpdateVideoChapters
*/
class ChaptersRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("chapters%2Estart_time_sec")
     * @var float|null $chaptersStartTimeSec The chapters.start_time_sec query parameter.
    */
    public ?float $chaptersStartTimeSec = null;
    
    /**
     * @QueryParameter("chapters%2Etitle")
     * @var string|null $chaptersTitle The chapters.title query parameter.
    */
    public ?string $chaptersTitle = null;
    
    /**
     * Instantiates a new ChaptersRequestBuilderDeleteQueryParameters and sets the default values.
     * @param float|null $chaptersStart_time_sec The chapters.start_time_sec query parameter.
     * @param string|null $chaptersTitle The chapters.title query parameter.
    */
    public function __construct(?float $chaptersStart_time_sec = null, ?string $chaptersTitle = null) {
        $this->chaptersStartTimeSec = $chaptersStart_time_sec;
        $this->chaptersTitle = $chaptersTitle;
    }

}
