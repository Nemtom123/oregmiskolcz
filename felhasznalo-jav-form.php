<div class="select-selected"></div>
<?php
while ($userRow = $stmt->fetch(PDO::FETCH_ASSOC)){
print "<option value='".$userRow['user_id']."' >".$userRow['user_name']."</option>";
?>
<body style="background-color: #FFFFFF">
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <form method="post" class="form-signin">
                <?php
                if(isset($error))
                {
                    foreach($error as $error)
                    {
                        ?>
                        <div class="alert alert-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                        </div>
                        <?php
                    }
                }
                else if(isset($_GET['joined']))
                {
                    ?>
                    <div class="alert alert-info">
                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres regisztráció

                    </div>
                    <?php
                }
                ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="txt_uname" placeholder="Felhasználó neve"
                           value="<?php if(isset($error)){echo $uname;}?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txt_umail" placeholder="E-Mail" value="<?php if(isset($error)){echo $umail;}?>" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="txt_upass" placeholder="Password" required>
                </div>
                <div class="clearfix"></div><hr />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="btn-signup" onclick="myFunction()">
                        <i class="glyphicon glyphicon-open-file" onclick="myFunction()"></i>&nbsp;Regisztrálás
                    </button>
                </div>
                <br />
                <label></label>
                <?php } ?>
            </form>
        </div>
    </div>
</div>
</body>