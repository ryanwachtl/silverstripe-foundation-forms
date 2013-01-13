<?php

//forms
Object::useCustomClass('Form', 'FoundationForm', true);
Object::useCustomClass('MemberLoginForm', 'FoundationMemberLoginForm', true);
if (class_exists('UserDefinedForm')) {
	Object::add_extension('UserDefinedForm_Controller', 'FoundationUserDefinedForm_Controller');
}

//fields
//Object::add_extension("FormField", "FoundationFormField");
//Object::add_extension("TextField", "FoundationTextField");