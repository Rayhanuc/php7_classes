<?php
trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n<br>";
    }
}
trait NumberSeriesTwo{
    function NumberSeriesA(){
        echo "Number Series A++\n<br>";
    }
}


class NumberSeries{
    use NumberSeriesOne,NumberSeriesTwo{
        NumberSeriesOne::numberSeriesA as NumberSeriesAA;
        NumberSeriesOne::numberSeriesA as NumberSeriesAAA;
    }
    
    function NumberSeriesA(){
        echo "Printing + Printing Number Series A\n<br>";
    }
}


$ns = new NumberSeries();
$ns->NumberSeriesAAA();