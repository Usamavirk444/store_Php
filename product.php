<?php
  include("./includes/conn.php");
  if (empty($_SESSION['email'])) {
    header("Location:./index.php");
  }

  if (isset($_POST['submit'])) {
      $p_cat=mysqli_real_escape_string($conn,$_POST['pcat']);
      $p_sup=mysqli_real_escape_string($conn,$_POST['psub']);
      $p_supplier=mysqli_real_escape_string($conn,$_POST['psupplier']);
      $p_code=mysqli_real_escape_string($conn,$_POST['pcode']);
      $p_name=mysqli_real_escape_string($conn,$_POST['pname']);
      $p_dec=mysqli_real_escape_string($conn,$_POST['pdec']);
      $p_price=mysqli_real_escape_string($conn,$_POST['pprice']);
      $p_dsrp=mysqli_real_escape_string($conn,$_POST['psrp']);

      $p_sql="INSERT INTO `products`( `p_cat`, `p_sub`, `p_supplier`, `p_code`, `p_name`, `p_dec`, `p_price`, `p_srp`) VALUES ('$p_cat','$p_sup','$p_supplier','$p_code','$p_name','$p_dec','$p_price','$p_dsrp')";
      $p_fire=mysqli_query($conn,$p_sql);
      if ($p_fire) {
          ?>
          <script>alert('Data has been Submited');</script>
          <?php
      }
  }
?>

<!DOCTYPE html>
<html lang="en">


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->
<?php include("./includes/head.php");?>

<body>
    <?php include("./includes/nav.php");?>
    <?php include("./includes/sidebar.php");?>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- ======= Main Content====================== -->

            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <form method="post">
                                        <div class="card-header">
                                            <h4>Add Catageory</h4>
                                        </div>
                                        <div class="card-body">
                                            
                                            <div class="form-group ">
                                            <label for="inputPassword4">Catageory</label>
                                            <select class="form-control" name="pcat" id="">
                                            <option value="">Select Catageory</option>
                                            <?php
                                            $cat_sql="SELECT * FROM `catagory`";
                                            $cat_run= mysqli_query($conn,$cat_sql);
                                            while ($cat_fet=mysqli_fetch_array($cat_run)) {
                                        ?>

                                                <option value="<?php echo $cat_fet['c_id'];?>"><?php echo $cat_fet['c_name'];?></option>
                                                <?php
                                            }
                                            ?>

                                                   
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                            <label for="inputPassword4"> Sub Catageory</label>
                                            <select class="form-control" name="psub" id="">
                                            <option value="">Select Sub Catageory</option>
                                            <?php
                                            $cat_sql="SELECT * FROM `sub_catageory`";
                                            $cat_run= mysqli_query($conn,$cat_sql);
                                            while ($cat_fet=mysqli_fetch_array($cat_run)) {
                                        ?>

                                                <option value="<?php echo $cat_fet['sub_id'];?>"><?php echo $cat_fet['sub_name'];?></option>
                                                <?php
                                            }
                                            ?>

                                                   
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                            <label for="inputPassword4">Supplier</label>
                                            <select class="form-control" name="psupplier" id="">
                                            <option value="">Select Supplier</option>
                                            <?php
                                            $cat_sql="SELECT * FROM `supplier`";
                                            $cat_run= mysqli_query($conn,$cat_sql);
                                            while ($cat_fet=mysqli_fetch_array($cat_run)) {
                                        ?>

                                                <option value="<?php echo $cat_fet['supplier_id'];?>"><?php echo $cat_fet['supplier_name'];?></option>
                                                <?php
                                            }
                                            ?>

                                                   
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Product code</label>
                                                <input type="text" name="pcode" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Product  Name</label>
                                                <input type="text" name="pname" class="form-control" required="">
                                            </div>
                                        
                                            <div class="form-group">
                                                <label>Descrition</label>
                                                <input type="text" name="pdec" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Unit Price</label>
                                                <input type="text" name="pprice" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>SRP Price</label>
                                                <input type="text" name="psrp" class="form-control" required="">
                                            </div>
                                           
                                        </div>
                                        <div class="card-footer ">
                                            <button class="btn btn-primary w-100" name="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Templateshub</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html> 