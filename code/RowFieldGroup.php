<?php

/**
 * Created by PhpStorm.
 * User: julianw
 * Date: 19/11/14
 * Time: 9:17 AM
 */
class RowFieldGroup extends FieldGroup {

    protected $rowClass;

    /**
     * @var $extraClasses array Extra CSS-classes for the formfield-container
     */
    protected $rowClasses;


    public function rowClass() {
        $classes = array();
        if ($this->rowClasses) $classes = array_merge($classes, array_values($this->rowClasses));
        return implode(' ', $classes);
    }


    /**
     * Add a CSS-class to the row-container.
     *
     * @param $class String
     */
    public function addRowClass($class) {
        $classes = preg_split('/\s+/', $class);
        foreach ($classes as $class) {
            $this->rowClasses[$class] = $class;
        }
        return $this;
    }


    /**
     * Remove a CSS-class from the row-container.
     *
     * @param $class String
     */
    public function removeRowClass($class) {
        $pos = array_search($class, $this->rowClasses);
        if ($pos !== false) unset($this->rowClasses[$pos]);
        return $this;
    }
    public function isComposite() {
   		return true;
   	}

   	public function hasData() {
   		return false;
   	}

}