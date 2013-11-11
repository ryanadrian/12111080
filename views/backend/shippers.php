			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br />
			<?php
			   echo anchor(site_url('backend/categories/form/insert/'),'Add',' class="input-submit"');	
			?>
			<br />
			<table>
				<tr>
					<th>No</th>
					<th>Tindakan</th>
					<th>Nama Perusahaan</th>					    
				    <th>Telepon</th>
				    				   				   
				</tr>
				<?php
					$no=0;
					foreach($array_Shippers as $row):	
					$id=$row->ShipperID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>
				    <td><?=anchor(site_url('backend/categories/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('backend/categories/form/update/'.$id),'[update]');?></td>				    
				    <td><?=$row->CompanyName;?></td>
				    <td><?=$row->Phone;?></td>				    
				</tr>
				<?php  endforeach; ?>
			</table>

		