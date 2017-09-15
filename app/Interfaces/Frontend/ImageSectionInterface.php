<?php

namespace AVD\Interfaces\Frontend;

interface ImageSectionInterface
{
    /**
     * Interface model ImageSection
     *
     * @return \AVDPainel\Repositories\Frontend\ImageSectionRepository
     */
    public function getAll($id);
    public function setId($id);
}