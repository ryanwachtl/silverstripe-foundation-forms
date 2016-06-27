<?php

/**
 * Created by PhpStorm.
 * User: julianw
 * Date: 19/11/14
 * Time: 9:17 AM
 */
class ColumnFieldGroup extends FieldGroup {

    protected $columnClass;

    /**
     * @var $extraClasses array Extra CSS-classes for the formfield-container
     */
    protected $columnClasses;


    public function columnClass() {
        $classes = array();
        if ($this->columnClasses) $classes = array_merge($classes, array_values($this->columnClasses));
        return implode(' ', $classes);
    }


    /**
     * Add a CSS-class to the column-container.
     *
     * @param $class String
     */
    public function addColumnClass($class) {
        $classes = preg_split('/\s+/', $class);
        foreach ($classes as $class) {
            $this->columnClasses[$class] = $class;
        }
        return $this;
    }


    /**
     * Remove a CSS-class from the column-container.
     *
     * @param $class String
     */
    public function removeColumnClass($class) {
        $pos = array_search($class, $this->columnClasses);
        if ($pos !== false) unset($this->columnClasses[$pos]);
        return $this;
    }
    public function isComposite() {
   		return true;
   	}

   	public function hasData() {
   		return false;
   	}

}