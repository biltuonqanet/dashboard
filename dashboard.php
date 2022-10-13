<?php 
include("header.php");
include("sidebar.php");

?>

<div class="content-body">
    <div class="container-fluid">       
      
        <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Manage Employee</h4>
                        <p>
                        <a href="form.php" class="btn btn-primary">Add Employee</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm" id="example">
                                <thead>
                                    <tr align="center">
                                        <th>SL.No</th>
                                        <th>Employe ID</th>
                                        <th>Employe Name</th>
                                        <th>Employe Number</th>
                                        <th>Employe Email</th>
                                        <th>Profile Image</th>
                                        <th>Employe Details</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align="center">
                                        <th>1</th>
                                        <td>EMP001</td>
                                        <td>Biltu </td>
                                        <td>8967091964</td>
                                        <td>biltudas258@gmail.com</td>
                                        <td>biltudas258@gmail.com</td>
                                        <td>
                                            <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include("footer.php");
?>