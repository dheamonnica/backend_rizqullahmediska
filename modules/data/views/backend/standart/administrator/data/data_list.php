<script type="text/javascript">
function domo(){
 
   $('*').bind('keydown', 'Ctrl+a', function() {
       window.location.href = BASE_URL + '/administrator/Data/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function() {

       $('#reset').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<section class="content-header">
   <h1>
      <?= cclang('data') ?><small><?= cclang('list_all'); ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?= cclang('data') ?></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row" >
      
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">
               <div class="box box-widget widget-user-2">
                  <div class="widget-user-header ">
                     <div class="row pull-right">
                        <?php is_allowed('data_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="<?= cclang('add_new_button', [cclang('data')]); ?>  (Ctrl+a)" href="<?=  site_url('administrator/data/add'); ?>"><i class="fa fa-plus-square-o" ></i> <?= cclang('add_new_button', [cclang('data')]); ?></a>
                        <?php }) ?>
                        <?php is_allowed('data_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> <?= cclang('data') ?> " href="<?= site_url('administrator/data/export?q='.$this->input->get('q').'&f='.$this->input->get('f')); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?> XLS</a>
                        <?php }) ?>
                                                <?php is_allowed('data_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf <?= cclang('data') ?> " href="<?= site_url('administrator/data/export_pdf?q='.$this->input->get('q').'&f='.$this->input->get('f')); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
                        <?php }) ?>
                                             </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><?= cclang('data') ?></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', [cclang('data')]); ?>  <i class="label bg-yellow"><?= $data_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_data" id="form_data" action="<?= base_url('administrator/data/index'); ?>">
                  


                     <!-- /.widget-user -->
                  <div class="row">
                     <div class="col-md-8">
                                                <div class="col-sm-2 padd-left-0 " >
                           <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                                                         <option value="delete">Delete</option>
                                                      </select>
                        </div>
                        <div class="col-sm-2 padd-left-0 ">
                           <button type="button" class="btn btn-flat" name="apply" id="apply" title="<?= cclang('apply_bulk_action'); ?>"><?= cclang('apply_button'); ?></button>
                        </div>
                                                <div class="col-sm-3 padd-left-0  " >
                           <input type="text" class="form-control" name="q" id="filter" placeholder="<?= cclang('filter'); ?>" value="<?= $this->input->get('q'); ?>">
                        </div>
                        <div class="col-sm-3 padd-left-0 " >
                           <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                              <option value=""><?= cclang('all'); ?></option>
                               <option <?= $this->input->get('f') == 'device_id' ? 'selected' :''; ?> value="device_id">Device Id</option>
                            <option <?= $this->input->get('f') == 'f1' ? 'selected' :''; ?> value="f1">F1</option>
                            <option <?= $this->input->get('f') == 'f2' ? 'selected' :''; ?> value="f2">F2</option>
                            <option <?= $this->input->get('f') == 'f3' ? 'selected' :''; ?> value="f3">F3</option>
                            <option <?= $this->input->get('f') == 'f4' ? 'selected' :''; ?> value="f4">F4</option>
                            <option <?= $this->input->get('f') == 'f5' ? 'selected' :''; ?> value="f5">F5</option>
                            <option <?= $this->input->get('f') == 'f6' ? 'selected' :''; ?> value="f6">F6</option>
                            <option <?= $this->input->get('f') == 'f7' ? 'selected' :''; ?> value="f7">F7</option>
                            <option <?= $this->input->get('f') == 'f8' ? 'selected' :''; ?> value="f8">F8</option>
                            <option <?= $this->input->get('f') == 'f9' ? 'selected' :''; ?> value="f9">F9</option>
                            <option <?= $this->input->get('f') == 'f10' ? 'selected' :''; ?> value="f10">F10</option>
                            <option <?= $this->input->get('f') == 'f11' ? 'selected' :''; ?> value="f11">F11</option>
                            <option <?= $this->input->get('f') == 'f12' ? 'selected' :''; ?> value="f12">F12</option>
                            <option <?= $this->input->get('f') == 'f13' ? 'selected' :''; ?> value="f13">F13</option>
                            <option <?= $this->input->get('f') == 'f14' ? 'selected' :''; ?> value="f14">F14</option>
                            <option <?= $this->input->get('f') == 'f15' ? 'selected' :''; ?> value="f15">F15</option>
                            <option <?= $this->input->get('f') == 'f16' ? 'selected' :''; ?> value="f16">F16</option>
                            <option <?= $this->input->get('f') == 'f17' ? 'selected' :''; ?> value="f17">F17</option>
                            <option <?= $this->input->get('f') == 'f18' ? 'selected' :''; ?> value="f18">F18</option>
                            <option <?= $this->input->get('f') == 'f19' ? 'selected' :''; ?> value="f19">F19</option>
                            <option <?= $this->input->get('f') == 'f20' ? 'selected' :''; ?> value="f20">F20</option>
                            <option <?= $this->input->get('f') == 'f21' ? 'selected' :''; ?> value="f21">F21</option>
                            <option <?= $this->input->get('f') == 'f22' ? 'selected' :''; ?> value="f22">F22</option>
                            <option <?= $this->input->get('f') == 'f23' ? 'selected' :''; ?> value="f23">F23</option>
                            <option <?= $this->input->get('f') == 'f24' ? 'selected' :''; ?> value="f24">F24</option>
                            <option <?= $this->input->get('f') == 'f25' ? 'selected' :''; ?> value="f25">F25</option>
                            <option <?= $this->input->get('f') == 'longitude' ? 'selected' :''; ?> value="longitude">Longitude</option>
                            <option <?= $this->input->get('f') == 'latitude' ? 'selected' :''; ?> value="latitude">Latitude</option>
                            <option <?= $this->input->get('f') == 'altitude' ? 'selected' :''; ?> value="altitude">Altitude</option>
                            <option <?= $this->input->get('f') == 'speed' ? 'selected' :''; ?> value="speed">Speed</option>
                            <option <?= $this->input->get('f') == 'heading' ? 'selected' :''; ?> value="heading">Heading</option>
                            <option <?= $this->input->get('f') == 'battery' ? 'selected' :''; ?> value="battery">Battery</option>
                            <option <?= $this->input->get('f') == 'created_at' ? 'selected' :''; ?> value="created_at">Created At</option>
                            <option <?= $this->input->get('f') == 'updated_at' ? 'selected' :''; ?> value="updated_at">Updated At</option>
                           </select>
                        </div>
                        <div class="col-sm-1 padd-left-0 ">
                           <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                           Filter
                           </button>
                        </div>
                        <div class="col-sm-1 padd-left-0 ">
                           <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/data');?>" title="<?= cclang('reset_filter'); ?>">
                           <i class="fa fa-undo"></i>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                           <?= $pagination; ?>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive"> 

                  <br>
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                                                     <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                                                    <th data-field="device_id"data-sort="1" data-primary-key="0"> <?= cclang('device_id') ?></th>
                           <th data-field="f1"data-sort="1" data-primary-key="0"> <?= cclang('f1') ?></th>
                           <th data-field="f2"data-sort="1" data-primary-key="0"> <?= cclang('f2') ?></th>
                           <th data-field="f3"data-sort="1" data-primary-key="0"> <?= cclang('f3') ?></th>
                           <th data-field="f4"data-sort="1" data-primary-key="0"> <?= cclang('f4') ?></th>
                           <th data-field="f5"data-sort="1" data-primary-key="0"> <?= cclang('f5') ?></th>
                           <th data-field="f6"data-sort="1" data-primary-key="0"> <?= cclang('f6') ?></th>
                           <th data-field="f7"data-sort="1" data-primary-key="0"> <?= cclang('f7') ?></th>
                           <th data-field="f8"data-sort="1" data-primary-key="0"> <?= cclang('f8') ?></th>
                           <th data-field="f9"data-sort="1" data-primary-key="0"> <?= cclang('f9') ?></th>
                           <th data-field="f10"data-sort="1" data-primary-key="0"> <?= cclang('f10') ?></th>
                           <th data-field="f11"data-sort="1" data-primary-key="0"> <?= cclang('f11') ?></th>
                           <th data-field="f12"data-sort="1" data-primary-key="0"> <?= cclang('f12') ?></th>
                           <th data-field="f13"data-sort="1" data-primary-key="0"> <?= cclang('f13') ?></th>
                           <th data-field="f14"data-sort="1" data-primary-key="0"> <?= cclang('f14') ?></th>
                           <th data-field="f15"data-sort="1" data-primary-key="0"> <?= cclang('f15') ?></th>
                           <th data-field="f16"data-sort="1" data-primary-key="0"> <?= cclang('f16') ?></th>
                           <th data-field="f17"data-sort="1" data-primary-key="0"> <?= cclang('f17') ?></th>
                           <th data-field="f18"data-sort="1" data-primary-key="0"> <?= cclang('f18') ?></th>
                           <th data-field="f19"data-sort="1" data-primary-key="0"> <?= cclang('f19') ?></th>
                           <th data-field="f20"data-sort="1" data-primary-key="0"> <?= cclang('f20') ?></th>
                           <th data-field="f21"data-sort="1" data-primary-key="0"> <?= cclang('f21') ?></th>
                           <th data-field="f22"data-sort="1" data-primary-key="0"> <?= cclang('f22') ?></th>
                           <th data-field="f23"data-sort="1" data-primary-key="0"> <?= cclang('f23') ?></th>
                           <th data-field="f24"data-sort="1" data-primary-key="0"> <?= cclang('f24') ?></th>
                           <th data-field="f25"data-sort="1" data-primary-key="0"> <?= cclang('f25') ?></th>
                           <th data-field="longitude"data-sort="1" data-primary-key="0"> <?= cclang('longitude') ?></th>
                           <th data-field="latitude"data-sort="1" data-primary-key="0"> <?= cclang('latitude') ?></th>
                           <th data-field="altitude"data-sort="1" data-primary-key="0"> <?= cclang('altitude') ?></th>
                           <th data-field="speed"data-sort="1" data-primary-key="0"> <?= cclang('speed') ?></th>
                           <th data-field="heading"data-sort="1" data-primary-key="0"> <?= cclang('heading') ?></th>
                           <th data-field="battery"data-sort="1" data-primary-key="0"> <?= cclang('battery') ?></th>
                           <th data-field="created_at"data-sort="1" data-primary-key="0"> <?= cclang('created_at') ?></th>
                           <th data-field="updated_at"data-sort="1" data-primary-key="0"> <?= cclang('updated_at') ?></th>
                           <th>Action</th>                        </tr>
                     </thead>
                     <tbody id="tbody_data">
                     <?php foreach($datas as $data): ?>
                        <tr>
                                                       <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $data->id; ?>">
                           </td>
                                                       
                           <td><span class="list_group-device_id"><?= _ent($data->device_id); ?></span></td> 
                           <td><span class="list_group-f1"><?= _ent($data->f1); ?></span></td> 
                           <td><span class="list_group-f2"><?= _ent($data->f2); ?></span></td> 
                           <td><span class="list_group-f3"><?= _ent($data->f3); ?></span></td> 
                           <td><span class="list_group-f4"><?= _ent($data->f4); ?></span></td> 
                           <td><span class="list_group-f5"><?= _ent($data->f5); ?></span></td> 
                           <td><span class="list_group-f6"><?= _ent($data->f6); ?></span></td> 
                           <td><span class="list_group-f7"><?= _ent($data->f7); ?></span></td> 
                           <td><span class="list_group-f8"><?= _ent($data->f8); ?></span></td> 
                           <td><span class="list_group-f9"><?= _ent($data->f9); ?></span></td> 
                           <td><span class="list_group-f10"><?= _ent($data->f10); ?></span></td> 
                           <td><span class="list_group-f11"><?= _ent($data->f11); ?></span></td> 
                           <td><span class="list_group-f12"><?= _ent($data->f12); ?></span></td> 
                           <td><span class="list_group-f13"><?= _ent($data->f13); ?></span></td> 
                           <td><span class="list_group-f14"><?= _ent($data->f14); ?></span></td> 
                           <td><span class="list_group-f15"><?= _ent($data->f15); ?></span></td> 
                           <td><span class="list_group-f16"><?= _ent($data->f16); ?></span></td> 
                           <td><span class="list_group-f17"><?= _ent($data->f17); ?></span></td> 
                           <td><span class="list_group-f18"><?= _ent($data->f18); ?></span></td> 
                           <td><span class="list_group-f19"><?= _ent($data->f19); ?></span></td> 
                           <td><span class="list_group-f20"><?= _ent($data->f20); ?></span></td> 
                           <td><span class="list_group-f21"><?= _ent($data->f21); ?></span></td> 
                           <td><span class="list_group-f22"><?= _ent($data->f22); ?></span></td> 
                           <td><span class="list_group-f23"><?= _ent($data->f23); ?></span></td> 
                           <td><span class="list_group-f24"><?= _ent($data->f24); ?></span></td> 
                           <td><span class="list_group-f25"><?= _ent($data->f25); ?></span></td> 
                           <td><span class="list_group-longitude"><?= _ent($data->longitude); ?></span></td> 
                           <td><span class="list_group-latitude"><?= _ent($data->latitude); ?></span></td> 
                           <td><span class="list_group-altitude"><?= _ent($data->altitude); ?></span></td> 
                           <td><span class="list_group-speed"><?= _ent($data->speed); ?></span></td> 
                           <td><span class="list_group-heading"><?= _ent($data->heading); ?></span></td> 
                           <td><span class="list_group-battery"><?= _ent($data->battery); ?></span></td> 
                           <td><span class="list_group-created_at"><?= _ent($data->created_at); ?></span></td> 
                           <td><span class="list_group-updated_at"><?= _ent($data->updated_at); ?></span></td> 
                           <td width="200">
                            
                                                              <?php is_allowed('data_view', function() use ($data){?>
                                                              <a href="<?= site_url('administrator/data/view/' . $data->id); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('view_button'); ?>
                              <?php }) ?>
                              <?php is_allowed('data_update', function() use ($data){?>
                              <a href="<?= site_url('administrator/data/edit/' . $data->id); ?>" class="label-default"><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a>
                              <?php }) ?>
                              <?php is_allowed('data_delete', function() use ($data){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/data/delete/' . $data->id); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                               <?php }) ?>

                           </td>                        </tr>
                      <?php endforeach; ?>
                      <?php if ($data_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Data data is not available
                           </td>
                         </tr>
                      <?php endif; ?>

                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
             
            </div>
            </form>            
         </div>
      </div>
   </div>
</section>


<script>
  $(document).ready(function(){

    "use strict";
   
    
      
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "<?= cclang('are_you_sure'); ?>",
          text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
          cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_data').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/data/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "<?= cclang('please_choose_bulk_action_first'); ?>",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Okay!",
            closeOnConfirm: true,
            closeOnCancel: true
          });

        return false;
      }

      return false;

    });/*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });
    initSortable('data', $('table.dataTable'));
  }); /*end doc ready*/
</script>