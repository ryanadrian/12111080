			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br />
			<?php
			   echo anchor(site_url('backend/products/form/insert/'),'Tambah',' class="input-submit"');	
			/*
			
			*/			
			?>
			
			<br />
			<b>Cari Data Berdasarkan  : </b> 
			<form action="<?php print site_url();?>backend/products/cari" method=POST>	
			<input type=text name="cari"> 
			<select name="jenis">
			<option value="ProductName">Nama Produk</option>
            <option value="CategoryID">ID Kategori</option>
			</select>	
			<input type=submit value="   cari   ">
			</form>
			
			<br />
			<table>
				<tr>
					<th>No</th>
					<th>Action</th>
					<th>Nama Produk</th>
					<th>ID Supplier</th>					    
				    <th>ID Kategori</th>
					<th>Jumlah per Unit</th>
					<th>Harga per Unit</th>
					<th>Jumlah Stok</th>					    
				    <th>Pra Order</th>
					<th>Order Ulang</th>					    
				    <th>Dihentikan</th>
				    				   				   
				</tr>
				<?php
					$no=0;
					foreach($array_products as $row):	
					$id=$row->ProductID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>
				    <td><?=anchor(site_url('backend/products/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('backend/products/form/update/'.$id),'[update]');?></td>				    
				    <td><?=$row->ProductName;?></td>
				    <td><?=$row->SupplierID;?></td>
					<td><?=$row->CategoryID;?></td>
				    <td><?=$row->QuantityPerUnit;?></td>
					<td><?=$row->UnitPrice;?></td>
				    <td><?=$row->UnitsInStock;?></td>
					<td><?=$row->UnitsOnOrder;?></td>
				    <td><?=$row->ReorderLevel;?></td>
					<td><?=$row->Discontinued;?></td>
				</tr>
				<?php  endforeach; ?>
			</table>

		