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

    public function renderDefault($label)
    {
        $this->template->anyVariable = 'any value';
    }

}