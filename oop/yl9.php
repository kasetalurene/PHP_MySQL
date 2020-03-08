<?php
class auto
{
    var $varv;
    var $mark;
    var $kiirus = 0;

    function kiirendus()
    {
        while ($this->kiirus <= 90) {
            $this->kiirus += 10;
            echo 'Kiirus: ' . $this->kiirus;
            echo '<br>';

        }
    }

    function auto()
    {
        echo $this->mark . ' ' . $this->varv;
        echo '<br>';
        echo '<hr>';
    }

}

$auto1 = new auto;
$auto1->mark='Ziguli';
$auto1->varv='must';
$auto1->auto();
$auto1->kiirendus();

