<?php
/**
 * Performs the FoundationFormTransformation on CommentingController
 * @author Anselm Christophersen <ac@anselm.dk>
 * @package foundationforms
 */
class FoundationCommentingController extends DataExtension {

	public function alterCommentForm(Form $form) {
		$form->transform(new FoundationFormTransformation());
		$form->setTemplate('FoundationCommentingControllerForm', 'FoundationForm', 'Form');
		if ($form->hasExtension('FormSpamProtectionExtension')) {
			$form->enableSpamProtection();
		}
	}

}
