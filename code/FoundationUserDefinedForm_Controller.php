<?php
/**
 * Performs the FoundationFormTransformation on UserDefinedForm
 * @author Ryan Wachtl <ryan.wachtl.us>
 * @package foundation_forms
 */
class FoundationUserDefinedForm_Controller extends DataExtension {

	public function updateForm(Form $form)
	{
		$form->transform(new FoundationFormTransformation());
		$form->setTemplate('FoundationUserDefinedForm', 'FoundationForm', 'Form');
		$form->addExtraClass('custom');
	}

}