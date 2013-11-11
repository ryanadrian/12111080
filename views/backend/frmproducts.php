	<h3 class="tit"><?=$title;?></h3>
	<?php
	   $mode=$this->uri->segment(4);
	   if($mode=='insert'):
	   		$id = '';
	   		$a1 = '';
	   		$a2 = '';
			$a3 = '';
	   		$a4 = '';
			$a5 = '';
	   		$a6 = '';
			$a7 = '';
	   		$a8 = '';
			$a9 = '';
	   else :	   		
	   		$id = $products->ProductID;
	   		$a1 = $products->ProductName;
	   		$a2 = $products->SupplierID;
			$a3 = $products->CategoryID;
	   		$a4 = $products->QuantityPerUnit;
			$a5 = $products->UnitPrice;
	   		$a6 = $products->UnitsInStock;
			$a7 = $products->UnitsOnOrder;
	   		$a8 = $products->ReorderLevel;
			$a9 = $products->Discontinued;
	   endif;		

	?>
			<!-- Table (TABLE) -->
			<br /><br />
	
      <form id="commentForm" name="commentForm"  method="post" action="<?=site_url('backend/products/process/'.$mode.'/'.$id);?>">
      		<input type="hidden" name='id' value="<?=$id;?>">
      		<input type="hidden" name='mode' value="<?=$mode;?>">
			<fieldset>				
				<table class="nostyle">
					<tr>
						<td style="width:100px;">Nama Produk:</td>
						<td><input type="text" value="<?=$a1;?>" size="40" name="ProductName" class="input-text" required="required" /></td>
					</tr>					
					<tr>
						<td style="width:100px;">Id Supplier:</td>
						<td><input type="text" value="<?=$a2;?>" size="5" name="SupplierID" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Id Kategori:</td>
						<td><input type="text" value="<?=$a3;?>" size="5" name="CategoryID" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Jumlah per Unit:</td>
						<td><input type="text" value="<?=$a4;?>" size="30" name="QuantityPerUnit" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Harga per Unit:</td>
						<td><input type="text" value="<?=$a5;?>" size="15" name="UnitPrice" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Pra Order:</td>
						<td><input type="text" value="<?=$a6;?>" size="5" name="UnitsInStock" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Order Ulang:</td>
						<td><input type="text" value="<?=$a7;?>" size="5" name="UnitsOnOrder" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Id Supplier:</td>
						<td><input type="text" value="<?=$a8;?>" size="5" name="ReorderLevel" class="input-text" required="required" /></td>
					</tr>
					<tr>
						<td style="width:100px;">Dihentikan:</td>
						<td><input type="text" value="<?=$a9;?>" size="5" name="Discontinued" class="input-text" required="required" /></td>
					</tr>					
					<tr>
						<td colspan="2" class="t-right">
							<input type="submit" name="btnSimpan"  class="input-submit" value="Submit" /></td>
					</tr>
				</table>
			</fieldset>
      </form>

		