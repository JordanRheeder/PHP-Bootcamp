<?php
    function ft_is_sort($tab) {
        $sorted = $tab;
        $i = 0;
        sort($sorted);
        foreach ($tab as $compare)
        {
            if ($compare != $sorted[$i])
                return FALSE;
            $i++;
        }
        return TRUE;
    }
?>