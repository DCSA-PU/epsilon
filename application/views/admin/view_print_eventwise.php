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
                                <th>College/University</th>
                            </thead>
                            <tbody>
                                <form method="post"  action="<?php echo base_url()."admin/dashboard/pdf_eventwise"?>">
                                <?php 
                                    $event_id=0;
                                    foreach($result as $row):
                                    if($event_id!=$row->e_id)
                                    {          
                                ?>
                                <tr>       
                                    <td><?php echo $row->name; ?></td>
                                    <input type="hidden" name="<?php echo $row->e_id; ?>" value="<?php echo $row->name; ?>">
                                    <td><button type="submit" class="btn btn-default" id="eventwise" name="event_id" value="<?php echo $row->e_id; ?>">Print Pdf</button></td>
                                </tr> 
                                <?php 
                                        $event_id=$row->e_id;
                                    }
                                ?>
                                <div class="clearfix"></div>
                                <tr>
                                    <td><?php echo $row->s_name; ?></td>
                                    <td><?php echo $row->s_phn; ?></td>
                                    <td><?php echo $row->s_email; ?></td>
                                    <td><?php echo $row->clg_name; ?></td>
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
