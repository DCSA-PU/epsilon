

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
                                    	<th>Name</th>
                                    	<th>Phn No</th>
                                    	<th>Email</th>
                                    	<th>Event Name</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row): ?>
                                            <tr>
                                                <form method="post"  action="<?php echo base_url()."admin/dashboard/student_data"?>">
                                                <td><input type="hidden" name="id" value="<?php echo $row->s_id; ?>"><?php echo $row->s_id; ?></td>
                                                <td><input type="text" placeholder="Enter Student Name" name="s_name" id="s_name" value="<?php echo $row->s_name; ?>"/></td>
                                                <td><input type="number" placeholder="Enter Phone Number" name="s_phn" id="s_phn" value="<?php echo $row->s_phn; ?>"/></td>
                                                <td><input type="email" placeholder="Enter Email" name="s_email" id="s_email" value="<?php echo $row->s_email; ?>"/></td>
                                                <td>
                                                    <select name="e_name" id="e_name">
                                                        <?php foreach($events as $row1): ?>
                                                        <option value="<?php echo $row1->id; ?>"<?php echo ($row1->id==$row->e_id)?' selected':''; ?>><?php echo $row1->name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
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
        <style>

