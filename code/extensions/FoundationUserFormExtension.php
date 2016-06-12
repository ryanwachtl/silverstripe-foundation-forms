<?php
/**
 * Performs the FoundationFormTransformation on UserForm
 * @author Ryan Wachtl
 * @package foundationforms
 */
class FoundationUserFormExtension extends DataExtension {

	public function updateForm()
	{
		$this->owner->transform(new FoundationFormTransformation());
		$this->owner->setTemplate('FoundationUserForm', 'FoundationForm', 'Form');
	}

}
