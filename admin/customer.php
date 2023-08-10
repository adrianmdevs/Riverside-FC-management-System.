
<table class="table table-bordered table-striped table-hover">
	<h1 >Customer Booking Details</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Match Type</th>
		<th>Occupancy</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from customer");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['match_type']; ?></td>
		<td><?php echo $res['Occupancy']; ?></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>