<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2019.02.27.
 * Time: 15:33
 */
?>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Login létrehozása<small></small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form method="post" class="form-signin">
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            ?>
							<div class="alert alert-danger">
								<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
							</div>
                            <?php
                        }
                    } else if (isset($_GET['joined'])) {
                        ?>
						<div class="alert alert-info">
							<i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres regisztráció

						</div>
                        <?php
                    }
                    ?>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_uname" placeholder="Felhasználó neve"
						       value="<?php if (isset($error)) {
                                   echo $uname;
                               } ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_umail" placeholder="E-Mail"
						       value="<?php if (isset($error)) {
                                   echo $umail;
                               } ?>" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="txt_upass" placeholder="Password" required>
					</div>
					<div class="clearfix"></div>
					<hr/>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="btn-signup" onclick="myFunction()">
							<i class="glyphicon glyphicon-open-file" onclick="myFunction()"></i>&nbsp;Regisztrálás
						</button>
						<button class="btn btn-primary" type="reset">Reset</button>
					</div>
					<br/>
					<label></label>
				</form>
			</div>
		</div>
	</div>
</div>



