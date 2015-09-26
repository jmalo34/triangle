<?php
    class Triangle
    {
        private $first_side;
        private $second_side;
        private $third_side;

        function __construct ($first, $second, $third)
        {
            $this->first_side = $first;
            $this->second_side = $second;
            $this->third_side = $third;
        }

        function getFirst ()
        {
            return $this->first_side;
        }

        function setFirst ($new_first)
        {
            $this->first_side = (integer) $new_first;
        }

        function getSecond ()
        {
            return $this->second_side;
        }

        function setSecond ($new_second)
        {
            $this->second_side = (integer) $new_second;
        }

        function getThird ()
        {
            return $this->third_side;
        }

        function setThird ($new_third)
        {
            $this->third_side = (integer) $new_third;
        }

        function area()
        {
            return $this->first_side * $this->second_side * $this->third_side;
        }

        function type()
        {
            if (($this->first_side == $this->second_side) && ($this->second_side == $this->third_side))
            {
                return "<h4>What you have there is indeeed, an EQUILATERAL triangle!</h4>";
            }
            elseif (($this->first_side == $this->second_side) || ($this->first_side == $this->third_side) || ($this->second_side == $this->third_side))
            {
                return "<h4>What you have there is indeed, an ISOSCELES triangle!</h4>";
            }
            else
            {
                return "<h4>What you have there is indeed, a SCALENE triangle!</h4>";
            }
        }
    }
 ?>
