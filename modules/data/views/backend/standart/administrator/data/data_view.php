<script type="text/javascript">
function domo(){
   $('*').bind('keydown', 'Ctrl+e', function() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function() {
      $('#btn_back').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<section class="content-header">
   <h1>
      Data      <small><?= cclang('detail', ['Data']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/data'); ?>">Data</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
   </ol>
</section>
<section class="content">
   <div class="row" >
     
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">

               <div class="box box-widget widget-user-2">
                  <div class="widget-user-header ">
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <h3 class="widget-user-username">Data</h3>
                     <h5 class="widget-user-desc">Detail Data</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal form-step" name="form_data" id="form_data" >
                  
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                        <span class="detail_group-id"><?= _ent($data->id); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Device Id </label>

                        <div class="col-sm-8">
                        <span class="detail_group-device_id"><?= _ent($data->device_id); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F1 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f1"><?= _ent($data->f1); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F2 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f2"><?= _ent($data->f2); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F3 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f3"><?= _ent($data->f3); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F4 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f4"><?= _ent($data->f4); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F5 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f5"><?= _ent($data->f5); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F6 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f6"><?= _ent($data->f6); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F7 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f7"><?= _ent($data->f7); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F8 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f8"><?= _ent($data->f8); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F9 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f9"><?= _ent($data->f9); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F10 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f10"><?= _ent($data->f10); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F11 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f11"><?= _ent($data->f11); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F12 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f12"><?= _ent($data->f12); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F13 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f13"><?= _ent($data->f13); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F14 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f14"><?= _ent($data->f14); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F15 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f15"><?= _ent($data->f15); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F16 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f16"><?= _ent($data->f16); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F17 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f17"><?= _ent($data->f17); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F18 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f18"><?= _ent($data->f18); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F19 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f19"><?= _ent($data->f19); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F20 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f20"><?= _ent($data->f20); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F21 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f21"><?= _ent($data->f21); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F22 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f22"><?= _ent($data->f22); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F23 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f23"><?= _ent($data->f23); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F24 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f24"><?= _ent($data->f24); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">F25 </label>

                        <div class="col-sm-8">
                        <span class="detail_group-f25"><?= _ent($data->f25); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Longitude </label>

                        <div class="col-sm-8">
                        <span class="detail_group-longitude"><?= _ent($data->longitude); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Latitude </label>

                        <div class="col-sm-8">
                        <span class="detail_group-latitude"><?= _ent($data->latitude); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Altitude </label>

                        <div class="col-sm-8">
                        <span class="detail_group-altitude"><?= _ent($data->altitude); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Speed </label>

                        <div class="col-sm-8">
                        <span class="detail_group-speed"><?= _ent($data->speed); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Heading </label>

                        <div class="col-sm-8">
                        <span class="detail_group-heading"><?= _ent($data->heading); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Battery </label>

                        <div class="col-sm-8">
                        <span class="detail_group-battery"><?= _ent($data->battery); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Created At </label>

                        <div class="col-sm-8">
                        <span class="detail_group-created_at"><?= _ent($data->created_at); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Updated At </label>

                        <div class="col-sm-8">
                        <span class="detail_group-updated_at"><?= _ent($data->updated_at); ?></span>
                        </div>
                    </div>
                                        
                    <br>
                    <br>


                     
                         
                    <div class="view-nav">
                        <?php is_allowed('data_update', function() use ($data){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit data (Ctrl+e)" href="<?= site_url('administrator/data/edit/'.$data->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Data']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/data/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Data']); ?></a>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
$(document).ready(function(){

    "use strict";
    
   
   });
</script>