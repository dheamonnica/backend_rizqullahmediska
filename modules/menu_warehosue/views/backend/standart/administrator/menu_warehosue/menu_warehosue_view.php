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
      Menu Warehosue      <small><?= cclang('detail', ['Menu Warehosue']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/menu_warehosue'); ?>">Menu Warehosue</a></li>
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
                     <h3 class="widget-user-username">Menu Warehosue</h3>
                     <h5 class="widget-user-desc">Detail Menu Warehosue</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal form-step" name="form_menu_warehosue" id="form_menu_warehosue" >
                  
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                        <span class="detail_group-id"><?= _ent($menu_warehosue->id); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nama Warehouse </label>

                        <div class="col-sm-8">
                        <span class="detail_group-nama_warehouse"><?= _ent($menu_warehosue->nama_warehouse); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">No Wa Cs </label>

                        <div class="col-sm-8">
                        <span class="detail_group-no_wa_cs"><?= _ent($menu_warehosue->no_wa_cs); ?></span>
                        </div>
                    </div>
                                        
                    <br>
                    <br>


                     
                         
                    <div class="view-nav">
                        <?php is_allowed('menu_warehosue_update', function() use ($menu_warehosue){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit menu_warehosue (Ctrl+e)" href="<?= site_url('administrator/menu_warehosue/edit/'.$menu_warehosue->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Menu Warehosue']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/menu_warehosue/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Menu Warehosue']); ?></a>
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