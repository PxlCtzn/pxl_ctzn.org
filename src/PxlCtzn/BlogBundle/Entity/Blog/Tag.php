<?php

namespace PxlCtzn\BlogBundle\Entity\Blog;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
/**
 * Tag
 *
 * @ORM\Table(name="Blog_Tag")
 * @ORM\Entity(repositoryClass="PxlCtzn\BlogBundle\Entity\Blog\TagRepository")
 */
class Tag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string")
     * @Assert\NotBlank
     */
    private $label;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Return the label associate to the tag.
     * @return string
     */
    public function getLabel(){
        return $this->label;
    }

    /**
     * @param string $label
     * @return string : The label of the category.
     */
    public function setLabel($newLabel)
    {
        $newLabel = trim($newLabel);
        if($newLabel != "")
            $this->label = $newLabel;
        return $this->label;
    }
}
