<?php
/**
 * Transformation that sets custom templates compatible with the Zurb Foundation framework.
 * @author Ryan Wachtl <ryan@wachtl.us>
 * @package foundation_forms
 */
class FoundationFormTransformation extends FormTransformation {
    
    public function transform(FormField $field)
    { 
        // tabset
        if($field instanceof TabSet) {
            $field->Tabs()->transform(new FoundationFormTransformation());
        }
            
        // tab
        if($field instanceof Tab) {
            $field->Fields()->transform(new FoundationFormTransformation());
        }
            
        $template = "Foundation{$field->class}_holder";
            
        if(SSViewer::hasTemplate($template)) {
            $field->setFieldHolderTemplate($template);
        }
        else {
            $field->setFieldHolderTemplate("FoundationFieldHolder");
        }
        
        $templateSmall = "Foundation{$field->class}_holder_small";
            
        if(SSViewer::hasTemplate($templateSmall)) {
            $field->setSmallFieldHolderTemplate($templateSmall);
        }
        else {
            $field->setSmallFieldHolderTemplate("FoundationFieldHolderMinimal");
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
        
        return $field;
    }
    
}