<?php

namespace Timmy\FrontModule;

use \VisualPaginator;

/**
 * Articles presenter.
 *
 * @author     Michal Mikoláš
 * @package    Timmy
 */
class ArticlesPresenter extends BasePresenter
{

    public function renderDefault($tag)
    {
        $offset = $this['visualPaginator']->getPaginator()->offset;
        $itemsPerPage = $this['visualPaginator']->getPaginator()->itemsPerPage;
        $this->template->articles = $this->context->articlesModel->getAll($offset, $itemsPerPage, $tag);
    }

    public function renderShow($name_slug)
    {
        $this->template->article = $this->context->articlesModel->getArticle($name_slug);
    }
    
    
    
    public function createComponentVisualPaginator()
    {
        $vp = new VisualPaginator();
        $paginator = $vp->getPaginator();
        $paginator->itemsPerPage = 10;
        $paginator->itemCount = $this->context->articlesModel->getArticlesCount();
        
        return $vp;
    }

}
