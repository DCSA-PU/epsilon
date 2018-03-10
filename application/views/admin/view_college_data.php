        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Username</th>
                                    	<th>Phn No</th>
                                        <th>Alt Phn No</th>
                                    	<th>Email</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result  as $row): ?>
                                            <tr> 
                                                <form method="post"  action="<?php echo base_url() . "admin/dashboard/college_data"?>">
                                                <td><input type="hidden" name="id" value="<?php echo $row->id; ?>"/><?php echo $row->id; ?></td>
                                                <td><input type="text" placeholder="Enter User Name" name="clg_usr" id="clg_usr" value="<?php echo $row->clg_usr; ?>"/></td>
                                                <td><input type="number" placeholder="Enter Phone No" name="phone" id="phone" value="<?php echo $row->phone; ?>"/></td>
                                                <td><input type="number" placeholder="Enter Alt Phone No" name="alt_phone" id="alt_phone" value="<?php echo $row->alt_phone; ?>"/></td>
                                                <td><input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo $row->email; ?>"/></td>
                                                <td><button type="submit" class="btn btn-default" id="update" name="update" value="update">Update</button></td>
                                                </form>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

