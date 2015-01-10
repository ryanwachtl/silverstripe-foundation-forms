<?php
/**
 * Transformation that sets custom templates compatible with the Zurb Foundation framework.
 * @author Ryan Wachtl
 * @package foundationforms
 */
class FoundationFormTransformation extends FormTransformation {
	
	public function transform(FormField $field)
	{ 
		Requirements::css(FOUNDATIONFORMS_DIR . '/css/foundationforms.css');
		
		// tab
		if ($field instanceof Tab) {
			$field->Fields()->transform(new FoundationFormTransformation());
		}

		// tabset
		if ($field instanceof TabSet) {
			$field->Tabs()->transform(new FoundationFormTransformation());
		}
		
		// fieldgroup
		if ($field instanceof FieldGroup) {
			$field->FieldList()->transform(new FoundationFormTransformation());
		}
		
		// compositefield
		if ($field instanceof CompositeField) {
			$field->FieldList()->transform(new FoundationFormTransformation());
		}
		
		$holder = "Foundation{$field->class}_holder";
			
		if (SSViewer::hasTemplate($holder)) {
			$field->setFieldHolderTemplate($holder);
		}
		else {
			$field->setFieldHolderTemplate("FoundationFieldHolder");
		}
		
		$holder_small = "Foundation{$field->class}_holder_small";
			
		if (SSViewer::hasTemplate($holder_small)) {
			$field->setSmallFieldHolderTemplate($holder_small);
		}
		else {
			$field->setSmallFieldHolderTemplate("FoundationFieldHolderMinimal");
		}
	
		foreach (array_reverse(ClassInfo::ancestry($field)) as $className) {
			$foundationCandidate = "Foundation{$className}";
			$nativeCandidate = $className;
			if (SSViewer::hasTemplate($foundationCandidate)) {
				$field->setTemplate($foundationCandidate);
				break;
			}
			elseif (SSViewer::hasTemplate($nativeCandidate)) {
				$field->setTemplate($nativeCandidate);
				break;
			}
		}
		
		return $field;
	}
	
}