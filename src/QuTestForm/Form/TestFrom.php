<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuTestForm\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class TestFrom extends Form
{
    public function __construct()
    {
        parent::__construct();

        $form = $this;

        $form->setInputFilter( $filter = new InputFilter() );

       // Radio on main form
        $form->add( array(
            'type' => 'Zend\Form\Element\Radio',
            'name' => 'radio',
            'options' => array(
                'value_options' => array(
                    '1' => 'Approve',
                    '2' => 'Deny',
                ),
                'label' => 'Radio',
            ),
        ) );

        $filter->add( array(
            'name' => 'radio',
            'required' => true,
        ) );

        // MultiCheckbox on main form
        $form->add( array(
            'type' => 'Zend\Form\Element\MultiCheckbox',
            'name' => 'multicheckbox',
            'options' => array(
                'value_options' => array(
                    '1' => 'Approve',
                    '2' => 'Deny',
                ),
                'label' => 'MultiCheckbox',
            ),
        ) );

        $filter->add( array(
            'name' => 'multicheckbox',
            'required' => false,
        ) );

        // Select on main form
        $form->add( array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'select',
            'options' => array(
                'value_options' => array(
                    '' => 'Select...',
                    '1' => 'Approve',
                    '2' => 'Deny',
                ),
                'label' => 'Select',
            ),
        ) );

        $filter->add( array(
            'name' => 'select',
            'required' => false,
        ) );

        // Text on main form
        $form->add( array(
            'name' => 'text',
            'options' => array(
                'label' => 'Text',
            ),
        ) );

        $filter->add( array(
            'name' => 'text',
            'required' => false,
        ) );

        // Checkbox on main form
        $form->add( array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'checkbox',
            'options' => array(
                'label' => 'Checkbox',
            ),
        ) );

        $filter->add( array(
            'name' => 'checkbox',
            'required' => false,
        ) );

        // Textarea on main form
        $form->add( array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => 'textarea',
            'options' => array(
                'label' => 'Textarea',
            ),
        ) );

        $filter->add( array(
            'name' => 'textarea',
            'required' => false,
        ) );


        // Subform
        $form->add( $subForm = new Form(), array( 'name' => 'subform' ) );
        $subForm->setInputFilter( $subFilter = new InputFilter() );

        // Radio on subform
        $subForm->add( array(
            'type' => 'Zend\Form\Element\Radio',
            'name' => 'subradio',
            'options' => array(
                'value_options' => array(
                    '1' => 'Approve',
                    '2' => 'Deny',
                ),
                'label' => 'Radio',
            ),
        ) );

        $subFilter->add( array(
            'name' => 'subradio',
            'required' => false,
        ) );

        // MultiCheckbox on subform
        $subForm->add( array(
            'type' => 'Zend\Form\Element\MultiCheckbox',
            'name' => 'submulticheckbox',
            'options' => array(
                'value_options' => array(
                    '1' => 'Approve',
                    '2' => 'Deny',
                ),
                'label' => 'MultiCheckbox',
            ),
        ) );

        $subFilter->add( array(
            'name' => 'submulticheckbox',
            'required' => false,
        ) );

        // Select on subform
        $subForm->add( array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'subselect',
            'options' => array(
                'value_options' => array(
                    '' => 'Select...',
                    '1' => 'Approve',
                    '2' => 'Deny',
                ),
                'label' => 'Select',
            ),
        ) );

        $subFilter->add( array(
            'name' => 'subselect',
            'required' => false,
        ) );

        // Text on subform
        $subForm->add( array(
            'name' => 'subtext',
            'options' => array(
                'label' => 'Text',
            ),
        ) );

        $subFilter->add( array(
            'name' => 'subtext',
            'required' => false,
        ) );

        // Checkbox on subform
        $subForm->add( array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'subcheckbox',
            'options' => array(
                'label' => 'Checkbox',
            ),
        ) );

        $subFilter->add( array(
            'name' => 'subcheckbox',
            'required' => false,
        ) );

        // Textarea on subform
        $subForm->add( array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => 'subtextarea',
            'options' => array(
                'label' => 'Textarea',
            ),
        ) );

        $subFilter->add( array(
            'name' => 'subtextarea',
            'required' => false,
        ) );

        // Submit
        $form->add( array(
            'name' => 'submit',
            'attributes' => array(
                'value' => 'Submit',
            ),
        ) );
    }
}