<?php

namespace Timmy;

use \Nette\Application\Routers\Route,
    \Nette\Application\Request,
    \Nette\Http\IRequest,
    \Nette\Http\Url;

/**
 * NamespaceRoute
 *
 * @author     Michal Mikoláš <nanuqcz@gmail.com>
 * @package    Timmy
 */
class NamespaceRoute extends Route
{
    /** @var string */
    protected $namespace;


    
    /**
     * @param string  URL mask, e.g. '<presenter>/<action>/<id \d{1,3}>'
     * @param array|string  default values or metadata
     * @param int flags
     */
    public function __construct($mask, $metadata = array(), $flags = 0)
    {
        if (is_string($metadata) && strrpos($metadata, '\\')) {
            $this->namespace = substr_replace($metadata, '', strrpos($metadata, '\\'));
            $metadata = substr_replace($metadata, '', 0, strrpos($metadata, '\\') + 1);
        } else {
            $this->namespace = '';
        }
        
        parent::__construct($mask, $metadata, $flags);
    }
    
    
    
    /**
     * Maps HTTP request to a Request object.
     * @param IRequest
     * @return Request|NULL
     */        
    public function match(IRequest $httpRequest)
    {
        $request = parent::match($httpRequest);
        
        if ($request !== NULL && $this->namespace) {
            $request->setPresenterName($this->namespace . '\\' . $request->getPresenterName());            
        }

        return $request;
    }
    
    
    
    /**
     * Constructs absolute URL from Request object.
     * @param Request
     * @param Url
     * @return string|NULL
     */
    public function constructUrl(Request $appRequest, Url $refUrl)
    {
        if ($this->namespace) {
            $nameWithoutNamespace = substr_replace($appRequest->getPresenterName(), '', 0, strlen($this->namespace) + 1);
            $appRequest->setPresenterName($nameWithoutNamespace);
        }
        
        return parent::constructUrl($appRequest, $refUrl);
    }
    
}