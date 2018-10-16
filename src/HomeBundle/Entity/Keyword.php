<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keyword
 *
 * @ORM\Table(name="keyword")
 * @ORM\Entity
 */
class Keyword
{
    /**
     * @var integer
     *
     * @ORM\Column(name="keyword_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keywordId;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword_content", type="string", length=100, nullable=false)
     */
    private $keywordContent;



    /**
     * Get keywordId
     *
     * @return integer
     */
    public function getKeywordId()
    {
        return $this->keywordId;
    }

    /**
     * Set keywordContent
     *
     * @param string $keywordContent
     *
     * @return Keyword
     */
    public function setKeywordContent($keywordContent)
    {
        $this->keywordContent = $keywordContent;

        return $this;
    }

    /**
     * Get keywordContent
     *
     * @return string
     */
    public function getKeywordContent()
    {
        return $this->keywordContent;
    }
}
