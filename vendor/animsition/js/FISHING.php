<?php
$text = "Это текст";
$title = "Это заголовок";


abstract class Shape {
    private $width, $height;

    abstract public function getArea();

    public function setColor($color) {
        // ...
    }

    public function render($area) {
        // ...
    }
}

class Rectangle extends Shape {
    public function __construct {
    parent::__construct();
        $this->width = 0;
        $this->height = 0;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

class Square extends Shape {
    public function __construct {
        parent::__construct();
        $this->length = 0;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getArea() {
        return $this->length * $this->length;
    }
}

function renderLargeRectangles($rectangles) {
    foreach($rectangle in $rectangles) {
        if ($rectangle instanceof Square) {
            $rectangle->setLength(5);
        } else if ($rectangle instanceof Rectangle) {
            $rectangle->setWidth(4);
            $rectangle->setHeight(5);
        }

        $area = $rectangle->getArea(); 
        $rectangle->render($area);
    });
}

$shapes = [new Rectangle(), new Rectangle(), new Square()];
renderLargeRectangles($shapes);


interface WorkerInterface {
    public function work();
}

class Worker implements WorkerInterface {
    public function work() {
        // ....working
    }
}

class SuperWorker implements WorkerInterface {
    public function work() {
        //.... working much more
    }
}

class Manager {
    /** @var Worker $worker **/
    private $worker;

    public function __construct(WorkerInterface $worker) {
        $this->worker = $worker;
    }

    public function manage() {
        $this->worker->work();
    }
}
echo "<body><h2>PHP variables</h2><hr>";
$param = 5;
echo "param = $param <br>";
$type = gettype($param);
echo "param type is $type <br>";

echo "check variable type <br>";
if(is_int($param)) echo "param type is integer";

settype($param, "string");
echo "<br>";
$type = gettype($param);
echo "now param type is $type <br>";
echo "check variable type <br>";
if(is_string($param)) echo "param type is string <br>";

if(isset($param)) echo "param exists";
echo "<br>";

$perem = 123;
if(isset($perem)) echo "perem exists and is equal to ";
echo $perem;
echo "<br>";
unset($perem);
if(isset($perem)) echo "perem exists";
else echo "perem does not exist";




?>












