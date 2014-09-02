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
class Post
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="slug", type="string", length=128, nullable=false)
     */
    private $slug;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotNull
     */
    private $title;

    /**
     * @var text
     * @ORM\Column(name="content", type="text")
     * @Assert\NotNull
     */
    private $content;

    /**
     * @var boolean
     * @ORM\Column(name="published", type="boolean")
     */
    private $published = false;

    /**
     * @var date
     * @ORM\Column(name="publish_date", type="datetime", nullable=true)
     */
    private $publish_date;

    /**
     * @var date
     * @ORM\Column(name="edit_date", type="datetime", nullable=true)
     */
    private $edit_date;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="PxlCtzn\BlogBundle\Entity\Category", cascade={"persist"})
     */
    private $categories;

    /**
     * @ORM\ManyToMany(targetEntity="PxlCtzn\BlogBundle\Entity\Category", cascade={"persist"})
     */
    private $tags;

    /**
     * @ORM\ManyToMany(targetEntity="PxlCtzn\SiteBundle\Entity\Members", cascade={"persist"})
     */
    private $authors;
}
