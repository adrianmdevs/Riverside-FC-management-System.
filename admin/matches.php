<script>
	function delmatch(id)
	{
		if(confirm("You want to delete this match booking ?"))
		{
		window.location.href='delete_match.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Match Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_matches" class="btn btn-primary">Add New Matches</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Image</th>
		<th>Match No</th>
		<th>TYpe</th>
		<th>Price</th>
		<th>Details</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from matches");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['match_id'];	
$img=$res['image'];
$path="../image/rooms/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['match_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="dashboard.php?option=update_match&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delmatch('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>