<?php 
if (isset($_SESSION['user'])) {
 	while ($row = mysqli_fetch_array($data['Check'])) { ?>

		<table class="tbluser">
			<thead class="thead_user">
				<tr>
					<th colspan="4"><h3>Đơn Hàng</h3></th>
				</tr>
			</thead>
			<tbody class="tbody_user">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><?php echo $row['Name'] ?></td>					
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo $row['Email'] ?></td>					
				</tr>
				<tr>
					<td>Phone</td>
					<td>:</td>
					<td><?php echo $row['Phone'] ?></td>					
				</tr>
				<tr>
					<td>Address</td>
					<td>:</td>
					<td><?php echo $row['Address'] ?></td>					
				</tr>
				<tr>
					<td>MaSP</td>
					<td>:</td>
					<td><?php echo $row['MaSP'] ?></td>					
				</tr>
				<tr>
					<td>TenSP</td>
					<td>:</td>
					<td><?php echo $row['TenSP'] ?></td>					
				</tr>
				<tr>
					<td>SL</td>
					<td>:</td>
					<td><?php echo $row['SL'] ?></td>					
				</tr>
				<tr>
					<td>Phuongthuc</td>
					<td>:</td>
					<td><?php echo $row['Phuongthuc'] ?></td>					
				</tr>
				<tr>
					<td>Tổng Tiền</td>
					<td>:</td>
					<td><?php echo $row['Grandtotal'] ?></td>					
				</tr>
				<tr>
					<td>Message</td>
					<td>:</td>
					<td><?php echo $row['Message'] ?></td>					
				</tr>
				<tr>
					<td>Date</td>
					<td>:</td>
					<td><?php echo $row['date_order'] ?></td>					
				</tr>
			</tbody>
		</table>

<?php } } ?>