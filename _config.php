<?php
/**
 * Decorates all of the FormField subclasses that get special
 * treatment from Foundation
 */

$dir = basename(dirname(__FILE__));

define('FOUNDATION_FORM_DIR', $dir);

// TODO Opt-in Use
Object::useCustomClass('MemberLoginForm', 'FoundationMemberLoginForm');

// TODO Opt-in Use
if (class_exists('UserDefinedForm')) {
	Object::add_extension('UserDefinedForm_Controller', 'FoundationUserDefinedForm_Controller');
}

// TODO Decorate Fields
//Object::add_extension("FormField", "FoundationFormField");
//Object::add_extension("TextField", "FoundationTextField");
//Object::add_extension("OptionsetField", "FoundationOptionsetField");
//Object::add_extension("FormAction","FoundationFormAction");
//Object::add_extension("TextareaField", "FoundationTextField");