

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
                                    	<th>Clg Name</th>
                                    	<th>Team Name</th>
                                    </thead>
                                    <tbody>
                                        
                                        <?php foreach($result  as $row): ?>
                                            <tr>                        
                                                <form method="post"  action="<?php echo base_url()."admin/dashboard/updateteam"?>">
                                                    <td><input type="hidden" name="id" value="<?php echo $row->id; ?>"><?php echo $row->id; ?></td>
                                                    <td><?php echo $row->clg_name; ?></td>
                                                    <td><input type="text" placeholder="Enter Team Name" name="team_name" id="team_name" value="<?php echo $row->team_name; ?>"/> </td>
                                                
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

