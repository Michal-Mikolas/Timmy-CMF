<?php

namespace FrontModule;

/**
 * Homepage presenter.
 *
 * @author     Michal Mikoláš
 * @package    Timmy
 */
class HomepagePresenter extends BasePresenter
{

    public function renderDefault()
    {
        $this->template->anyVariable = 'any value';
    }

}