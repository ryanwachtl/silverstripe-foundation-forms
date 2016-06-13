<?php
/**
 * Builds a form that renders {@link FormField} objects
 * using templates that are compatible with Zurb Foundation.
 * Extra methods are decorated on to the {@link FoundationFormField}
 * objects and their subclasses to support special features
 * of the framework.
 *
 * @author Ryan Wachtl
 * @package foundationforms
 */
class FoundationForm extends Form {

	/**
	 * @var string The template that will render this form
	 */
	protected $template = "FoundationForm";

	/**
	 * Includes the dependency if necessary, applies the Bootstrap templates,
	 * and renders the form HTML output
	 *
	 * @return string
	 */
	public function forTemplate()
	{
		$this->Fields()->bootstrapify();
		$this->Actions()->bootstrapify();
		Requirements::css(FOUNDATIONFORMS_DIR . '/css/foundationforms.css');

		return parent::forTemplate();
	}

}
