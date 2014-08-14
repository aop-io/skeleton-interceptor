<?php
namespace SkeletonInterceptor;

use
    Aop\Aop,
    Aop\Weaver\Interceptor,
    Aop\Advice\AdviceInterface,
    Aop\Pointcut\PointcutInterface
;

/**
 * @see \Aop\Weaver\Interceptor
 */
class SkeletonInterceptor extends Interceptor
{

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::isEnabled()
     */
    public function isEnabled($index = null, $selector = null)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::enable()
     */
    public function enable($index = null, $selector = null)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::disable()
     */
    public function disable($index = null, $selector = null)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::getPointcut()
     */
    public function getPointcut($index)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::getIndexOfSelector()
     */
    public function getIndexOfSelector($selector, $status = WeaverInterface::ENABLE)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::addBefore()
     */
    public function addBefore(Pointcutinterface $pointcut, AdviceInterface $advice,
                              array $options = [])
    {
        // assign the index of this
        $this->lastIndex++;

        // your code here
        // ...

        return $this->lastIndex;
    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::addAround()
     */
    public function addAround(Pointcutinterface $pointcut, AdviceInterface $advice,
                              array $options = [])
    {
        // assign the index of this
        $this->lastIndex++;

        // your code here
        // ...

        return $this->lastIndex;
    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::addAfter()
     */
    public function addAfter(Pointcutinterface $pointcut, AdviceInterface $advice,
                             array $options = [])
    {
        // assign the index of this
        $this->lastIndex++;

        // your code here
        // ...

        return $this->lastIndex;
    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::addAfterThrow()
     */
    public function addAfterThrow(PointcutInterface $pointcut, AdviceInterface $advice,
                                  array $options = [])
    {
        // assign the index of this
        $this->lastIndex++;

        // your code here
        // ...

        return $this->lastIndex;
    }

    /**
     * @inheritdoc
     * @see \Aop\Weaver\WeaverInterface::addAfterReturn()
     */
    public function addAfterReturn(PointcutInterface $pointcut, AdviceInterface $advice,
                                   array $options = [])
    {
        // assign the index of this
        $this->lastIndex++;

        // your code here
        // ...

        return $this->lastIndex;
    }
}
