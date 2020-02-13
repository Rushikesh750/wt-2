<?php
        
        $first=array(
                        array(10,20,30,40),
                        array(50,60,70,80),
                        array(90,100,110,120),
                        array(130,140,150,160)
                    );
        $second=array(
                        array(1,2,3,4),
                        array(5,6,7,8),
                        array(9,10,11,12),
                        array(13,14,15,16)
                    );
        $result=array(array());
        $rows=4;
        $cols=4;
        echo "<b>The First matrix :</b>"."<br>";
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                echo $first[$i][$j]." ";
            }
            echo "<br>";
        }
        echo "<b>The second matrix :</b><br>";
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                
                echo $second[$i][$j]." ";
            
            }
            echo "<br>";
        }
        echo "<b>Addition :</b>"."<br>";
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                $result[$i][$j] = $first[$i][$j] + $second[$i][$j]; 
                echo $result[$i][$j]." ";
            }
            echo "<br>";
        }
        echo "<b>Substraction :</b>"."<br>";
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                $result[$i][$j] = $first[$i][$j] - $second[$i][$j]; 
                echo $result[$i][$j]." ";
            }
            echo "<br>";
        }
        echo "<b>Multiplication :</b>"."<br>";
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                $result[$i][$j]=0;
                for($k=0;$k<2;$k++)
                {
                    $result[$i][$j]=$result[$i][$j]+($first[$i][$k]*$second[$k][$j]); 
                        
                }
            }
        }
        for($i=0;$i<$rows;$i=$i+1)
        {
            for($j=0;$j<$cols;$j=$j+1)
            {
                
                echo $result[$i][$j]." ";
            
            }
            echo "<br>";
        }



        
?>