<?php

    class Shapes{

        // PROPERTIES
        protected $PI = 3.14;

        protected $radius;
        protected $width;
        protected $length;

        // METHOD
        public function calculateArea(){
            return 0;
        }

    }

    class Circle extends Shapes{

        //CONSTRUCTOR
        public function __construct($radius)
        {
            $this->radius = $radius;
        }

        // AREA CALCULATION METHOD
        public function calculateArea()
        {
            $result = pi() * ($this->radius * $this->radius);
            return $result;
        }
        
    }

    class Rectangle extends Shapes{
        
        // CONSTRUCTOR
        public function __construct($width, $length)
        {
            $this->width    = $width;
            $this->length   = $length;
        }

        // AREA CALCULATION METHOD
        public function calculateArea()
        {
            $result = $this->length * $this->width;
            return $result;
        }

    }