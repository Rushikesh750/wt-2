
<?php


    $mysqli = mysqli_connect('localhost','root','','rushikesh');
    if (!$mysqli) 
    {
        die('Connect Error: ' . mysqli_connect_errno());
    }
    else
    {
        $roll = $_GET['roll'];
        $name = $_GET['name1'];
        $sql = "UPDATE be SET name='$name' WHERE roll=$roll";
        $res = mysqli_query($mysqli,$sql);
        echo $sql.$res;
        if($res)
        {
            echo 'Record UPDATED Successfully';
        }
        else
        {
            echo 'Record NOT updated';

        }
        
        
        $sql2="SELECT * FROM be";
        $res2 = mysqli_query($mysqli,$sql2);
?>
        <table border="1">
            <tr>
                <th>Roll</th>
                <th>Name</th>
            </tr>
<?php               
    if($res2)
    {
        while($newarr = mysqli_fetch_array($res2))
        {
           
            $r=$newarr['roll'];
            $n=$newarr['name'];
           echo"<tr><td>$r</td><td>$n</td></tr>";

        }
    }
    }
?>
