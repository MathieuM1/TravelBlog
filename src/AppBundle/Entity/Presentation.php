<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presentation
 *
 * @ORM\Table(name="presentation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PresentationRepository")
 */
class Presentation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Paragraphe1", type="text", nullable=true)
     */
    private $paragraphe1;

    /**
     * @var string
     *
     * @ORM\Column(name="Paragraphe2", type="text", nullable=true)
     */
    private $paragraphe2;

    /**
     * @var string
     *
     * @ORM\Column(name="Paragraphe3", type="text", nullable=true)
     */
    private $paragraphe3;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set paragraphe1
     *
     * @param string $paragraphe1
     *
     * @return Presentation
     */
    public function setParagraphe1($paragraphe1)
    {
        $this->paragraphe1 = $paragraphe1;

        return $this;
    }

    /**
     * Get paragraphe1
     *
     * @return string
     */
    public function getParagraphe1()
    {
        return $this->paragraphe1;
    }

    /**
     * Set paragraphe2
     *
     * @param string $paragraphe2
     *
     * @return Presentation
     */
    public function setParagraphe2($paragraphe2)
    {
        $this->paragraphe2 = $paragraphe2;

        return $this;
    }

    /**
     * Get paragraphe2
     *
     * @return string
     */
    public function getParagraphe2()
    {
        return $this->paragraphe2;
    }

    /**
     * Set paragraphe3
     *
     * @param string $paragraphe3
     *
     * @return Presentation
     */
    public function setParagraphe3($paragraphe3)
    {
        $this->paragraphe3 = $paragraphe3;

        return $this;
    }

    /**
     * Get paragraphe3
     *
     * @return string
     */
    public function getParagraphe3()
    {
        return $this->paragraphe3;
    }
}
