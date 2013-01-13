<?php

/**
 * @author Ryan Wachtl <ryan.wachtl@gmail.com>
 * @package foundation_forms
 */
class FoundationUserDefinedForm_Controller extends DataExtension {

	public function updateForm(Form $form) {
		FoundationFormTransformation::transform($form);
	}
	
}