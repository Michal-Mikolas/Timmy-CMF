<?php

namespace Timmy\FrontModule;

/**
 * Home presenter.
 *
 * @author     Michal Mikoláš <nanuqcz@gmail.com>
 * @package    Timmy
 */
class HomepagePresenter extends BasePresenter
{
    
    public function renderDefault($label)
    {
        //$this->template->articles = $this->context->articlesModel->getAll();
    }

    public function renderShow($url_name)
    {
        $this->template->article = $this->context->articlesModel->getArticle($url_name);
    }



    /********************* Components *********************/
    public function createComponentFilter()
    {
        $form = new \Nette\Application\AppForm();
        $form->setMethod('get');

        $filter_data = $form->addContainer('data');

        $staty = array('0' => 'Všechny státy');
        $staty = \Nette\ArrayTools::mergeTree($staty, \ArticlesModel::getDataByKey('stát'));
        $filter_data->addSelect('stat', 'Stát: ', $staty);

        $form->addSubmit('send', 'Filtrovat');

        return $form;
    }



    /********************* Helpers *********************/
    public static function fileicon($filename)
    {
        $filename = strtolower($filename);
        $pripona = preg_replace("#^.*\\.([a-zA-Z0-9]+)$#", "\\1", $filename);

        $icons_uri = \Nette\Environment::getVariable('baseUri') . 'public/' . \Nette\Environment::getConfig('variable')->skin . '/images/fileicons';
        $icons_path = 'public/' . \Nette\Environment::getConfig('variable')->skin . '/images/fileicons';

        if( !file_exists($icons_path . '/' . $pripona . '.png') )
            return $icons_uri . '/default.png';

        return $icons_uri . '/' . $pripona . '.png';
    }
}
