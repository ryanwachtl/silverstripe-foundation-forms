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
class FoundationForm extends Form {
	
	public function forTemplate() {
		FoundationFormTransformation::transform($this);
		return parent::forTemplate();
	}
	
}