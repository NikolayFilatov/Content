<?php
/**
 * @namespace
 */
namespace Content\Entity\Content;

use Base\Entity\AbstractEntityBase;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index as Index;

/**
 * @ORM\Entity(repositoryClass="Content\Entity\Content\ContentRepository")
 * @ORM\Table(
 *      name="alt_content", options={"collate"="utf8_general_ci"},
 *      indexes={@Index(name="link_type_idx", columns={"link_type"})}
 * )
 *
 * @category    Content
 * @package     Alt
 */
class ContentBase extends AbstractEntityBase
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
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    protected $content;

    /**
     * @ORM\Column(type="string", length=1024)
     * @var string
     */
    protected $path;

    /**
     * @ORM\Column(type="string", length=20)
     * @var string
     */
    protected $link_type;


    /**
     * @param null $data
     */
    public function __construct($data = null)
    {
        return parent::__construct($data);
    }

}