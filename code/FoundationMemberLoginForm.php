<?php

/**
 * Builds a form that renders {@link FormField} objects
 * using templates that are compatible with Zurb Foundation.
 * Extra methods are decorated on to the {@link FoundationFormField}
 * objects and their subclasses to support special features
 * of the framework.
 *
 * @author Ryan Wachtl <ryan.wachtl@gmail.com>
 * @package foundation_forms
 */
class FoundationMemberLoginForm extends MemberLoginForm {

	/**
	 * Includes the dependency if necessary, applies the Foundation templates,
	 * and renders the form HTML output
	 *
	 * @return string
	 */
	public function forTemplate() {
		FoundationFormTransformation::transform($this);
		return parent::forTemplate();
	}

}