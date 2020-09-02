<?php
trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n<br>";
        parent::NumberSeriesA();
    }
    function NumberSeriesB(){
        echo "Number Series B\n<br>";
    }
}

class SomeClass{
    function NumberSeriesA(){
        echo "Printing + Printing Number Series A\n";
    }
}

class NumberSeries extends SomeClass{
    use NumberSeriesOne;    
}


$ns = new NumberSeries();
$ns->NumberSeriesA();