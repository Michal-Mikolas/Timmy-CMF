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

    public function renderDefault($label)
    {
        $this->template->articles = $this->context->articlesModel->getAll();
    }

    public function renderShow($name_slug)
    {
        $this->template->article = $this->context->articlesModel->getArticle($name_slug);
    }

}
