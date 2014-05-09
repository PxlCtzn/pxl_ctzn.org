<?php

namespace PxlCtzn\BlogBundle\Entity\Blog;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PxlCtzn\BlogBundle\Entity\Blog\TagRepository")
 */
class Category
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
     * @Assert\NotEmpty
     */
    private $label;

    /**
     * Returns the ID of the category.
     * @return int : Category's ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the Label associate to the category.
     * @return string
     */
    public function getLabel()
    {
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
