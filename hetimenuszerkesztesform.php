<?php
while ($hetimenu = $szerkeszt->fetch(PDO::FETCH_ASSOC)){
print "<option value='".$hetimenu['id']."' >".$hetimenu['napok']."</option>";
?>
<form name="rogzit" method="post" class="ajax">

	<div class="container" style="background-color: white">
		<div class="row clearfix">
			<div class="col-md-12 col-lg-12 column">
				<table class="table alert-dark" >
					<thead>
					<tr>
						<td>Sorszám</td>
						<td>Hét</td>
						<td>Leves</td>
						<td>Második</td>
						<td>Időszak kezdete</td>
						<td>Időszak vége
						</td>
						<td>Napi dátum</td>
						<td>Ár</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							<label><input name="id[<?php echo $hetimenu['id'] ?>]" value="<?php echo $hetimenu['id'] ?>"></label>
						</td>
						<td>
							<label><input name="napok[<?php echo $hetimenu['id'] ?>]" value="<?php echo $hetimenu['napok'] ?>"></label>
						</td>
						<td>
							<label><input name="leves[<?php echo $hetimenu['id'] ?>]" value="<?php echo $hetimenu['leves']; ?>"></label>
						</td>
						<td>
							<label><input name="masodik[<?php echo $hetimenu['id'] ?>]" value="<?php echo $hetimenu['masodik'] ?>"></label>
						</td>
						<td>
							<label><input name="date_tol[<?php echo $hetimenu['id'] ?>]" type="date"
							              value="<?php echo $hetimenu['date_tol'] ?>"></label>
						</td>
						<td>
							<label><input name="date_ig[<?php echo $hetimenu['id'] ?>]" type="date" value="<?php echo $hetimenu['date_ig'] ?>"></label>
						</td>
						<td>
							<label><input name="napi_date[<?php echo $hetimenu['id'] ?>]" type="date"
							              value="<?php echo $hetimenu['napi_date'] ?>"></label>
						</td>
						<td>
							<label><input name="ar[<?php echo $hetimenu['id'] ?>]" value="<?php echo $hetimenu['ar'] ?>"></label>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php } ?>

<button class="btn-danger pull-right" id="rogzit" name="btn-rogzit" value="rogzit"
        type="submit" onclick="myFunction()">Rögzít
</button>
</form>