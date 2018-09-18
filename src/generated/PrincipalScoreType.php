<?php

namespace src\generated;

/**
 * Class representing PrincipalScoreType
 *
 * 
 * XSD Type: principalScore
 */
class PrincipalScoreType
{

    /**
     * @property integer $score
     */
    public $score = null;

    /**
     * @property string $description
     */
    public $description = null;

    /**
     * Gets as score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * @param integer $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

