<?php

namespace Timmy\FrontModule;

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
        $this->template->articles = $this->context->articlesModel->getAll($tag);
    }

    public function renderShow($name_slug)
    {
        $this->template->article = $this->context->articlesModel->getArticle($name_slug);
    }

}
