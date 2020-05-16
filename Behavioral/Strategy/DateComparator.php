<?php

namespace DesignPatterns\Behavioral\Strategy;

class DateComparator implements ComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function compare($a, $b)
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        if ($aDate == $bDate) {
            return 0;
        }
        
        return $aDate < $bDate ? -1 : 1;
    }
}
