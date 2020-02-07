<?php 
		$mysqli=new mysqli("localhost","root","","rushikesh");
		if(mysqli_connect_errno())
		{
			echo "Connection failed ".mysqli_connect_errno();
			exit();
		}
		else
		{
			$sql="select * from be";
			$res=mysqli_query($mysqli,$sql);
?>
				<table border="1">
				<tr>
					<th>Roll no</th>
					<th>Name</th>
				</tr>
<?php 
			if($res)
			{
				while($new_array=mysqli_fetch_array($res))
				{
					$r=$new_array['roll'];
					$nm=$new_array['name'];
?>
					<tr>
						<td><?php echo "$r"; ?></td>
						<td><?php echo "$nm"; ?></td>
					</tr>
<?php }} ?>
</table>
<?php } ?>