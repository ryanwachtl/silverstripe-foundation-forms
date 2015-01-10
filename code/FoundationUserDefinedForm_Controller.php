<?php
/**
 * Performs the FoundationFormTransformation on UserDefinedForm
 * @author Ryan Wachtl
 * @package foundationforms
 */
class FoundationUserDefinedForm_Controller extends DataExtension {

	public function updateForm(Form $form)
	{
		$form->transform(new FoundationFormTransformation());
		$form->setTemplate('FoundationUserDefinedForm', 'FoundationForm', 'Form');
		$form->addExtraClass('custom');
	}

}