<?php

/**
 |-----------------------------------------------------
 | CreateEnvironment Class
 |
 | This clas is responsible to instantiate/return
 | different types of environment classes as per
 | client's requirements.

 | @date    06-12-2017
 | @author  Swapnil Bhikule(bhikules.com)
 |-----------------------------------------------------
 */

class CreateEnvironment
{
    private $sea;
    private $plains;
    private $forest;

    /**
     * CreateEnvironment Constructor.
     * Create new instance of our environment classes
     *
     * @param \Environment\Sea $sea
     * @param \Environment\Plains $plains
     * @param \Environment\Forest $forest
     */
    public function __construct(
        \Environment\Sea $sea,
        \Environment\Plains $plains,
        \Environment\Forest $forest
    ) {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    /**
     * Return clone of instance of type \Environment\Sea
     *
     * @return \Environment\Sea
     */
    public function createSea() : \Environment\Sea
    {
        return clone $this->sea;
    }

    /**
     * Return clone of instance of type \Environment\Plains
     *
     * @return \Environment\Plains
     */
    public function createPlains() : \Environment\Plains
    {
        return clone $this->plains;
    }

    /**
     * Return clone of instance of type \Environment\Forest
     *
     * @return \Environment\Forest
     */
    public function createForest() : \Environment\Forest
    {
        return clone $this->forest;
    }
}
