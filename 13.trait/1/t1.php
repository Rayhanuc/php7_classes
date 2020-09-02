<?php
trait NumberSeriesOne{
    private function NumberSeriesA(){
        echo "Number Series A\n<br>";
    }
    function NumberSeriesB(){
        $this->NumberSeriesA();
        echo "Number Series B\n<br>";
    }
}
trait NumberSeriesTwo{
    use NumberSeriesOne;
    function NumberSeriesC(){
        echo "Number Series C\n<br>";
    }
    function NumberSeriesD(){
        $this->NumberSeriesA();
        echo "Number Series D\n<br>";
    }
}

class NumberSeries{
    use /* NumberSeriesOne, */ NumberSeriesTwo;
}

$ns = new NumberSeries();
// $ns->NumberSeriesA();
$ns->NumberSeriesB();
$ns->NumberSeriesC();
$ns->NumberSeriesD();