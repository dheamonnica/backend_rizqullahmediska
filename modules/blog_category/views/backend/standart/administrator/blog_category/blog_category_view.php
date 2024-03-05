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
      Blog Category      <small><?= cclang('detail', ['Blog Category']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/blog_category'); ?>">Blog Category</a></li>
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
                     <h3 class="widget-user-username">Blog Category</h3>
                     <h5 class="widget-user-desc">Detail Blog Category</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal form-step" name="form_blog_category" id="form_blog_category" >
                  
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Category Id </label>

                        <div class="col-sm-8">
                        <span class="detail_group-category_id"><?= _ent($blog_category->category_id); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Category Name </label>

                        <div class="col-sm-8">
                        <span class="detail_group-category_name"><?= _ent($blog_category->category_name); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Category Desc </label>

                        <div class="col-sm-8">
                        <span class="detail_group-category_desc"><?= _ent($blog_category->category_desc); ?></span>
                        </div>
                    </div>
                                        
                    <br>
                    <br>


                     
                         
                    <div class="view-nav">
                        <?php is_allowed('blog_category_update', function() use ($blog_category){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit blog_category (Ctrl+e)" href="<?= site_url('administrator/blog_category/edit/'.$blog_category->category_id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Blog Category']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/blog_category/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Blog Category']); ?></a>
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