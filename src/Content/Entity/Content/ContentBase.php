<?php
/**
 * @namespace
 */
namespace Content\Entity\Content;

use Base\Entity\AbstractEntityBase;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Content\Entity\Content\ContentRepository")
 * @ORM\Table(name="alt_content", options={"collate"="utf8_general_ci"})
 *
 * @category    Content
 * @package     Alt
 */
class Content extends AbstractEntityBase
{
    /**
     * Protected entity properties
     * @var array
     */
    protected $protectedProperties = ['id'];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=4096, nullable=true)
     * @var string
     */
    protected $content;




    /**
     * @param null $data
     */
    public function __construct($data = null)
    {

        return parent::__construct($data);
    }
}