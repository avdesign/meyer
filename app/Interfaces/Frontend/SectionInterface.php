<?php

namespace AVD\Interfaces\Frontend;

interface SectionInterface
{
    /**
     * Interface model Section
     *
     * @return \AVD\Repositories\Frontend\SectionRepository
     */
    public function get();
    public function setId($id);

}