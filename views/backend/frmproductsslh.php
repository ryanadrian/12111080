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
            <option value="SupplierID">ID Supplier</option>
			</select>	
			<input type=submit value="   cari   ">
			</form>
			
			<br />
			
			<?php
			echo 'Data Tidak ditemukan!! Silahkan cek kembali Data yang ingin dicari!! <br \>';
			echo anchor(site_url('backend/products'),'Kembali');
			
			?>
			

		