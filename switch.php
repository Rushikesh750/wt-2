<?php
		$first=array(
                        array(1,2,3,4),
                        array(5,6,7,8),
                        array(9,10,11,12),
                        array(13,14,15,16)
                    );
        $second=array(
                        array(1,1,1,1),
                        array(1,1,1,1),
                        array(1,1,1,1),
                        array(1,1,1,1)
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
		function pass($ch)
		{
			switch($ch)
			{
				case 1:
					echo "The additon of first and second matrix is : <br>";
					for($i=0;$i<4;$i=$i+1)
        			{
            			for($j=0;$j<4;$j=$j+1)
            			{
                			$result[$i][$j] = $first[$i][$j] + $second[$i][$j]; 
                			echo $result[$i][$j]." ";
            			}
            			echo "<br>";
        			}

					break;
				case 2:
					
					break;
				case 3:
					
					break;
				case 4:
					
					break;
				default:
					echo "You enter a invalid choice";
					break;
			}
		}
		pass(1,4,4);
?>