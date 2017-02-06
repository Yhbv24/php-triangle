<?php

    class Triangle
    {
        public $side1;
        public $side2;
        public $side3;

        function __construct($side1,$side2,$side3)
        {
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
        }

        function isTriangle()
        {
          if ($this->side1+$this->side2<$this->side3||
          $this->side2+$this->side3<$this->side1||
          $this->side1+$this->side3<$this->side2)
          {
              return false;
          } else {
              return true;
            }
      }

      function triangleType()
      {
          if ($this->side1==$this->side2 && $this->side2==$this->side3){
              return "This triangle is equilateral!";
          } elseif ($this->side1 != $this->side2 && $this->side2 != $this->side3 && $this->side1 != $this->side3)
          {
              return "This triangle is Scalene";
          } else
          {
              return "This triangle is Isosceles";
          }
      }

      function createOutput()
      {
          if ($this->isTriangle()) {
              return $this->triangleType();
          } else
          {
              return "Those are fine lengths for a side, but they don't make a triangle.";
          }
      }

    }

    $myTriangle = new Triangle($_GET["side1"],$_GET["side2"],$_GET["side3"]);

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Triangles</title>
  </head>
  <body>
    <h1>Here's some details of your triangle:</h1>
    <?php
        echo "<h3>".$myTriangle->createOutput()."</h3>";
    ?>
  </body>
</html>
