<?php
/**
 * Performs the FoundationFormTransformation on UserForm
 * @author Ryan Wachtl
 * @package foundationforms
 */
class FoundationUserFormExtension extends DataExtension {

	public function updateForm()
	{
		$this->owner->Fields()->bootstrapify();
		$this->owner->Actions()->bootstrapify();
		$this->owner->setTemplate('FoundationUserForm', 'FoundationForm');
		Requirements::css(FOUNDATIONFORMS_DIR . '/css/foundationforms.css');
	}

}
