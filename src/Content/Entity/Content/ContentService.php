<?php

/**
 * @namespace
 */
namespace Content\Entity\Content;

use Base\Service\AbstractDefaultService;


/**
 * @category    Alt
 * @package     Content
 */
class ContentService extends AbstractDefaultService
{
    /**
     * Repository instance.
     * @var \Content\Entity\Content\ContentRepository
     */
    protected $repository;

    /**
     * @var \Zend\ServiceManager\ServiceManager
     */
    protected $locator;


    /**
     * Function for get repository
     *
     * @return \Base\Service\AbstractDefaultRepository
     */
    public function getRepository()
    {
        $entity = $this->getServiceLocator()->get('Content\Entity\Content\ContentBase');
        $namespace = get_class($entity);

        if($this->repository == null)
            $this->setRepository($this->getEntityManager()
                ->getRepository($namespace));

        return $this->repository;
    }

    /**
     * @param \Base\Service\AbstractDefaultRepository $repository
     * @return mixed|void
     */
    public function setRepository(\Base\Service\AbstractDefaultRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param ContentBase $content
     * @param bool $flush
     * @return $this
     */
    public function saveContent(\Content\Entity\Content\ContentBase $content, $flush = true)
    {
        $this->getRepository()->save($content, $flush);
        return $content;
    }

    /**
     * @param ContentBase $content
     * @param bool $flush
     * @return $this
     */
    public function removeMessage(\Content\Entity\Content\ContentBase $content, $flush = true)
    {
        $this->getRepository()->remove($content, $flush);
        return $this;
    }

    /**
     * @param $data
     * @return \Content\Entity\Content\ContentBase
     */
    public function createContent($data)
    {
        $content = $this->getServiceLocator()->get('Content\Entity\Content\ContentBase');
        $content_namespace = get_class($content);
        $content = new $content_namespace($data);

        return $this->saveContent($content);
    }

    /**
     * @param $id
     * @return null|object
     */
    public function getContentById($id)
    {
        return $this->getRepository()->find($id);
    }

} //end class here