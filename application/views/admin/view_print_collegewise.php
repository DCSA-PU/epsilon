<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Event Name</th>
                                <th>Team Name</th>
                            </thead>
                            <tbody>
                                <form method="post" action="<?php echo base_url()."admin/dashboard/pdf_collegewise"?>">
                                <?php 
                                    $clg_id=0;
                                    foreach($result as $row):
                                        if($clg_id!=$row->c_id)
                                            {          
                                ?>
                                <tr>       
                                    <td><?php echo $row->clg_name; ?></td>
                                    <input type="hidden" name="<?php echo $row->c_id; ?>" value="<?php echo $row->clg_name; ?>">
                                    <td><button type="submit" class="btn btn-default" id="collegewise" name="clg_id" value="<?php echo $row->c_id; ?>">Print Pdf</button></td>
                                </tr> 
                                <?php 
                                                $clg_id=$row->c_id;
                                    
                                            }
                                ?>
                                
                                     
                                    <div class="clearfix"></div>
                                    <tr> 
                                        <td><?php echo $row->s_name; ?></td>
                                        <td><?php echo $row->s_phn; ?></td>
                                        <td><?php echo $row->s_email; ?></td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->team_name; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
