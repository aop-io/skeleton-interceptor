<?php
namespace SkeletonInterceptor;

use
    Aop\Aop,
    Aop\Exception\InterceptorException,
    Aop\Exception\JoinPointException,
    Aop\JoinPoint\Support\JoinPointSupportInterceptorInterface,
    Aop\JoinPoint\Traits
;

/**
 * @see \Aop\JoinPoint\Support\JoinPointSupportInterceptorInterface
 * @see \SkeletonInterceptor\SkeletonInterceptor
 */
class JoinPointSupportInterceptor implements JoinPointSupportInterceptorInterface
{
    use
        Traits\ReflectionClassTrait,
        Traits\ReflectionFunctionTrait,
        Traits\ReflectionMethodTrait,
        Traits\ReflectionPropertyTrait
    ;

    /**
     * The patch.
     */
    protected $patch;

    /**
     * Constructor.
     *
     * @param &$patch
     */
    public function __construct(&$patch)
    {
        if (!$patch) {

            throw new InterceptorException(
                '$patch is required.'
            );
        }

        $this->patch = $patch;
    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\JoinPointSupportInterceptorInterface::getPatch()
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\KindSupportInterface::getKind()
     */
    public function getKind()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\PointcutSupportInterface::getPointcut()
     */
    public function getPointcut()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ArgsGetterSupportInterface::getArgs()
     */
    public function getArgs()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ArgsSetterSupportInterface::setArgs()
     */
    public function setArgs(array $args)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ClassSupportInterface::getClassName()
     */
    public function getClassName()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ClassSupportInterface::getObject()
     */
    public function getObject()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\PropertySupportInterface::getPropertyName()
     */
    public function getPropertyName()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\PropertyValueGetterSupportInterface::getPropertyValue()
     */
    public function getPropertyValue()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\PropertyValueSetterSupportInterface::setPropertyValue()
     */
    public function setPropertyValue($value)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\MethodSupportInterface::getMethodName()
     */
    public function getMethodName()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\FunctionSupportInterface::getFunctionName()
     */
    public function getFunctionName()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ExceptionGetterSupportInterface::getException()
     */
    public function getException()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ReturnValueGetterSupportInterface::getReturnValue()
     */
    public function &getReturnValue()
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ReturnValueSetterSupportInterface::setReturnValue()
     */
    public function setReturnValue($value)
    {

    }

    /**
     * @inheritdoc
     * @see \Aop\JoinPoint\Support\ProceedSupportInterface::proceed()
     */
    public function proceed()
    {

    }

}
