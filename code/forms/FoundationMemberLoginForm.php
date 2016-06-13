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
class FoundationMemberLoginForm extends MemberLoginForm {

	public function __construct($controller = null, $name = null, $fields = null, $actions = null, $checkCurrentUser = true) {
		if (!$controller) $controller = Controller::curr();
		if (!$name) $name = "LoginForm";
		parent::__construct($controller, $name, $fields, $actions, $checkCurrentUser);
		$this->Fields()->bootstrapify();
		$this->Actions()->bootstrapify();
		$this->setTemplate("FoundationForm");
		$this->invokeWithExtensions('updateFoundationMemberLoginForm', $this);
		Requirements::css(FOUNDATIONFORMS_DIR . '/css/foundationforms.css');
	}

}
