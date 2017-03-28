<?php
/**
 * Performs the FoundationFormTransformation on UserForm
 * @author Ryan Wachtl
 * @package foundationforms
 */
class FoundationUserFormExtension extends DataExtension {

	public function updateForm() {
		$form = $this->owner;
		$form->setTemplate("BootstrapForm");
	}

	public function updateFormFields($fields) {
		$fields->bootstrapify();
	}

	public function updateFormActions($actions) {
		$actions->bootstrapify();
	}

}
