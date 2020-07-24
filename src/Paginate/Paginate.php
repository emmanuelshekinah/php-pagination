<?php
namespace Paginate;

class getPages
{
    public static function getPages($total,$limitPerPage)
    {
        $results = array();

        $count=0;
        for($i=0; $i<$total;){
            $results[$count] = $i;
            $count= $count+1;
            $i=$i+$limitPerPage;
        }

        return $results;
    }
}
?>