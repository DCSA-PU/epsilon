        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <?php
                                if(isset($clg_set)){
                                    $checkbox_value = unserialize($clg_selected);
                                if (isset($checkbox_value) && $checkbox_value != NULL) {
                                    foreach ($checkbox_value as $value) {
                                        $data=$checkbox_value;
                                        }     
                                    }
                                }
                                else{        
                                ?>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <col width="20">
                                    <col width="20">
                                    <col width="300">
                                    <thead>
                                        <th>Select College</th>
                                        <th>College Id</th>
                                    	<th>College Name</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result  as $row): ?>
                                        <form method="post" action="<?php echo base_url()."admin/dashboard/select_collegewise"?>">
                                            <tr>
                                                <td><input value="<?php echo $row->id; ?>" type="checkbox" name="clg_sel[]"></td>
                                                <td><?php echo $row->id; ?></td>
                                                <td><?php echo $row->clg_name; ?></td>	
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                            <button type="submit" class="btn btn-default" id="sel_clgwise" name="sel_clgwise" value="sel_clgwise">Select College</button>
                                        </form>

                                
                              <?php
                                    }
                                    ?>  
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

