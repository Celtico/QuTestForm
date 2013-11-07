<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
namespace QuTestForm\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;
use QuTestForm\Form\TestFrom;

class TestFormController extends AbstractActionController
{

    public function indexAction()
    { 
        $valid = '';
        $form  =  new TestFrom();
        if($this->request->isPost())
        {
            $post = $this->request->getPost();
            $form->setData($post);
            $valid = $form->isValid();
        }
        $model =   new ViewModel(array('form'=>$form,'valid'=>$valid));
        return  $model->setTemplate('test/form');
    }
}