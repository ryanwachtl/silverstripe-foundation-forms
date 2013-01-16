<?php

/**
 * @author Ryan Wachtl <ryan.wachtl@gmail.com>
 * @package foundation_forms
 */
class FoundationFormTransformation {
	
	protected static $template = "FoundationForm";
	
	public static function transform(Form $form) {
		self::applyFoundation($form);
		$form->addExtraClass('custom');
		$form->setTemplate(self::$template);
	}
	
	/**
	 * Changes the templates of all the {@link FormField}
	 * objects in a given {@link FieldList} object to those
	 * that work the Foundation framework
	 *
	 * @param FieldList $fields
	 */
	public static function apply_foundation_to_fieldlist(FieldList $fields) {
		
		foreach($fields as $field) {
			
			// tabset
			if($field instanceof TabSet) {
				self::apply_foundation_to_fieldlist($field->Tabs());
			}
			
			// tab
			if($field instanceof Tab) {
				self::apply_foundation_to_fieldlist($field->Fields());
			}
			
			$template = "Foundation{$field->class}_holder";
			
			if(SSViewer::hasTemplate($template)) {
				$field->setFieldHolderTemplate($template);
			}
			else {
				$field->setFieldHolderTemplate("FoundationFieldHolder");
			}
	
			foreach(array_reverse(ClassInfo::ancestry($field)) as $className) {
				$foundationCandidate = "Foundation{$className}";
				$nativeCandidate = $className;
				if(SSViewer::hasTemplate($foundationCandidate)) {
					$field->setTemplate($foundationCandidate);
					break;
				}
				elseif(SSViewer::hasTemplate($nativeCandidate)) {
					$field->setTemplate($nativeCandidate);
					break;
				}
			}
		}
	}
	
	
	
	/**
	 * Applies the Foundation transformation to the fields and actions
	 * of the form
	 */
	public static function applyFoundation(Form $form) {
		self::applyFoundationToFieldList($form->Fields());
		self::applyFoundationToFieldList($form->Actions());
	}
	
	
	
	/**
	 * Changes the templates of all the {@link FormField}
	 * objects in a given {@link FieldList} object to those
	 * that work the Foundation framework
	 *
	 * @param FieldList $fields
	 */
	protected static function applyFoundationToFieldList(FieldList $fields) {
		self::apply_foundation_to_fieldlist($fields);
	}

}