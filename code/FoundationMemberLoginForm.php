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
	 * @var string The template that will render this form
	 */
	protected $template = "FoundationForm";



	/**
	 * Changes the templates of all the {@link FormField}
	 * objects in a given {@link FieldList} object to those
	 * that work the Foundation framework
	 *
	 * @param FieldList $fields
	 */
	public static function apply_foundation_to_fieldlist($fields) {
		foreach($fields as $f) {

			// If we have a Tabset, bootstrapify all Tabs
			if($f instanceof TabSet) {
				self::apply_foundation_to_fieldlist($f->Tabs());
			}

			// If we have a Tab, bootstrapify all its Fields
			if($f instanceof Tab) {
				self::apply_foundation_to_fieldlist($f->Fields());
			}


			$template = "Foundation{$f->class}_holder";
			if(SSViewer::hasTemplate($template)) {
				$f->setFieldHolderTemplate($template);
			}
			else {
				$f->setFieldHolderTemplate("FoundationFieldHolder");
			}

			foreach(array_reverse(ClassInfo::ancestry($f)) as $className) {
				$foundationCandidate = "Foundation{$className}";
				$nativeCandidate = $className;
				if(SSViewer::hasTemplate($foundationCandidate)) {
					$f->setTemplate($foundationCandidate);
					break;
				}
				elseif(SSViewer::hasTemplate($nativeCandidate)) {
					$f->setTemplate($nativeCandidate);
					break;
				}
			}
		}
	}



	/**
	 * Applies the Foundation transformation to the fields and actiosn
	 * of the form
	 *
	 * @return FoundationForm
	 */
	public function applyFoundation() {
		$this->applyFoundationToFieldList($this->Fields());
		$this->applyFoundationToFieldList($this->Actions());
		return $this;
	}



	/**
	 * Changes the templates of all the {@link FormField}
	 * objects in a given {@link FieldList} object to those
	 * that work the Foundation framework
	 *
	 * @param FieldList $fields
	 * @return FoundationForm
	 */
	protected function applyFoundationToFieldList($fields) {
		self::apply_foundation_to_fieldlist($fields);
		return $this;
	}



	/**
	 * Includes the dependency if necessary, applies the Bootstrap templates,
	 * and renders the form HTML output
	 *
	 * @return string
	 */
	public function forTemplate() {
		$this->applyFoundation();
		$this->addExtraClass("custom");
		return parent::forTemplate();
	}



}