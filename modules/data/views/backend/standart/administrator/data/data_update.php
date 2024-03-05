

<script type="text/javascript">
    function domo() {

        $('*').bind('keydown', 'Ctrl+s', function() {
            $('#btn_save').trigger('click');
            return false;
        });

        $('*').bind('keydown', 'Ctrl+x', function() {
            $('#btn_cancel').trigger('click');
            return false;
        });

        $('*').bind('keydown', 'Ctrl+d', function() {
            $('.btn_save_back').trigger('click');
            return false;
        });

    }

    jQuery(document).ready(domo);
</script>
<section class="content-header">
    <h1>
        Data        <small>Edit Data</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?= site_url('administrator/data'); ?>">Data</a></li>
        <li class="active">Edit</li>
    </ol>
</section>

<style>

</style>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-body ">
                    <div class="box box-widget widget-user-2">
                        <div class="widget-user-header ">
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <h3 class="widget-user-username">Data</h3>
                            <h5 class="widget-user-desc">Edit Data</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/data/edit_save/'.$this->uri->segment(4)), [
                            'name' => 'form_data',
                            'class' => 'form-horizontal form-step',
                            'id' => 'form_data',
                            'method' => 'POST'
                        ]); ?>

                        <?php
                        $user_groups = $this->model_group->get_user_group_ids();
                        ?>

                                                    
                        
                        <div class="form-group group-device_id  ">
                                <label for="device_id" class="col-sm-2 control-label">Device Id                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="device_id" id="device_id" placeholder="" value="<?= set_value('device_id', $data->device_id); ?>">
                                    <small class="info help-block">
                                        <b>Input Device Id</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f1  ">
                                <label for="f1" class="col-sm-2 control-label">F1                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f1" name="f1" rows="10" cols="80"> <?= set_value('f1', $data->f1); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f2  ">
                                <label for="f2" class="col-sm-2 control-label">F2                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f2" name="f2" rows="10" cols="80"> <?= set_value('f2', $data->f2); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f3  ">
                                <label for="f3" class="col-sm-2 control-label">F3                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f3" name="f3" rows="10" cols="80"> <?= set_value('f3', $data->f3); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f4  ">
                                <label for="f4" class="col-sm-2 control-label">F4                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f4" name="f4" rows="10" cols="80"> <?= set_value('f4', $data->f4); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f5  ">
                                <label for="f5" class="col-sm-2 control-label">F5                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f5" name="f5" rows="10" cols="80"> <?= set_value('f5', $data->f5); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f6  ">
                                <label for="f6" class="col-sm-2 control-label">F6                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f6" name="f6" rows="10" cols="80"> <?= set_value('f6', $data->f6); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f7  ">
                                <label for="f7" class="col-sm-2 control-label">F7                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f7" name="f7" rows="10" cols="80"> <?= set_value('f7', $data->f7); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f8  ">
                                <label for="f8" class="col-sm-2 control-label">F8                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="f8" name="f8" rows="10" cols="80"> <?= set_value('f8', $data->f8); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f9  ">
                                <label for="f9" class="col-sm-2 control-label">F9                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f9" id="f9" placeholder="" value="<?= set_value('f9', $data->f9); ?>">
                                    <small class="info help-block">
                                        <b>Input F9</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f10  ">
                                <label for="f10" class="col-sm-2 control-label">F10                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f10" id="f10" placeholder="" value="<?= set_value('f10', $data->f10); ?>">
                                    <small class="info help-block">
                                        <b>Input F10</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f11  ">
                                <label for="f11" class="col-sm-2 control-label">F11                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f11" id="f11" placeholder="" value="<?= set_value('f11', $data->f11); ?>">
                                    <small class="info help-block">
                                        <b>Input F11</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f12  ">
                                <label for="f12" class="col-sm-2 control-label">F12                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f12" id="f12" placeholder="" value="<?= set_value('f12', $data->f12); ?>">
                                    <small class="info help-block">
                                        <b>Input F12</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f13  ">
                                <label for="f13" class="col-sm-2 control-label">F13                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f13" id="f13" placeholder="" value="<?= set_value('f13', $data->f13); ?>">
                                    <small class="info help-block">
                                        <b>Input F13</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f14  ">
                                <label for="f14" class="col-sm-2 control-label">F14                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f14" id="f14" placeholder="" value="<?= set_value('f14', $data->f14); ?>">
                                    <small class="info help-block">
                                        <b>Input F14</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f15  ">
                                <label for="f15" class="col-sm-2 control-label">F15                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f15" id="f15" placeholder="" value="<?= set_value('f15', $data->f15); ?>">
                                    <small class="info help-block">
                                        <b>Input F15</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f16  ">
                                <label for="f16" class="col-sm-2 control-label">F16                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f16" id="f16" placeholder="" value="<?= set_value('f16', $data->f16); ?>">
                                    <small class="info help-block">
                                        <b>Input F16</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f17  ">
                                <label for="f17" class="col-sm-2 control-label">F17                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f17" id="f17" placeholder="" value="<?= set_value('f17', $data->f17); ?>">
                                    <small class="info help-block">
                                        <b>Input F17</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f18  ">
                                <label for="f18" class="col-sm-2 control-label">F18                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f18" id="f18" placeholder="" value="<?= set_value('f18', $data->f18); ?>">
                                    <small class="info help-block">
                                        <b>Input F18</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f19  ">
                                <label for="f19" class="col-sm-2 control-label">F19                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f19" id="f19" placeholder="" value="<?= set_value('f19', $data->f19); ?>">
                                    <small class="info help-block">
                                        <b>Input F19</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f20  ">
                                <label for="f20" class="col-sm-2 control-label">F20                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f20" id="f20" placeholder="" value="<?= set_value('f20', $data->f20); ?>">
                                    <small class="info help-block">
                                        <b>Input F20</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f21  ">
                                <label for="f21" class="col-sm-2 control-label">F21                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f21" id="f21" placeholder="" value="<?= set_value('f21', $data->f21); ?>">
                                    <small class="info help-block">
                                        <b>Input F21</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f22  ">
                                <label for="f22" class="col-sm-2 control-label">F22                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f22" id="f22" placeholder="" value="<?= set_value('f22', $data->f22); ?>">
                                    <small class="info help-block">
                                        <b>Input F22</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f23  ">
                                <label for="f23" class="col-sm-2 control-label">F23                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f23" id="f23" placeholder="" value="<?= set_value('f23', $data->f23); ?>">
                                    <small class="info help-block">
                                        <b>Input F23</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f24  ">
                                <label for="f24" class="col-sm-2 control-label">F24                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f24" id="f24" placeholder="" value="<?= set_value('f24', $data->f24); ?>">
                                    <small class="info help-block">
                                        <b>Input F24</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-f25  ">
                                <label for="f25" class="col-sm-2 control-label">F25                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="f25" id="f25" placeholder="" value="<?= set_value('f25', $data->f25); ?>">
                                    <small class="info help-block">
                                        <b>Input F25</b> Max Length : 45.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-longitude  ">
                                <label for="longitude" class="col-sm-2 control-label">Longitude                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="" value="<?= set_value('longitude', $data->longitude); ?>">
                                    <small class="info help-block">
                                        <b>Input Longitude</b> Max Length : 11.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-latitude  ">
                                <label for="latitude" class="col-sm-2 control-label">Latitude                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="" value="<?= set_value('latitude', $data->latitude); ?>">
                                    <small class="info help-block">
                                        <b>Input Latitude</b> Max Length : 10.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-altitude  ">
                                <label for="altitude" class="col-sm-2 control-label">Altitude                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="altitude" id="altitude" placeholder="" value="<?= set_value('altitude', $data->altitude); ?>">
                                    <small class="info help-block">
                                        <b>Input Altitude</b> Max Length : 11.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-speed  ">
                                <label for="speed" class="col-sm-2 control-label">Speed                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="speed" id="speed" placeholder="" value="<?= set_value('speed', $data->speed); ?>">
                                    <small class="info help-block">
                                        <b>Input Speed</b> Max Length : 20.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-heading  ">
                                <label for="heading" class="col-sm-2 control-label">Heading                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="heading" id="heading" placeholder="" value="<?= set_value('heading', $data->heading); ?>">
                                    <small class="info help-block">
                                        <b>Input Heading</b> Max Length : 10.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-battery  ">
                                <label for="battery" class="col-sm-2 control-label">Battery                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="battery" id="battery" placeholder="" value="<?= set_value('battery', $data->battery); ?>">
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-created_at  ">
                                <label for="created_at" class="col-sm-2 control-label">Created At                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-6">
                                    <div class="input-group date col-sm-8">
                                        <input type="text" class="form-control pull-right datetimepicker" name="created_at" placeholder="" id="created_at" value="<?= set_value('created_at', $data->created_at); ?>">
                                    </div>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-updated_at  ">
                                <label for="updated_at" class="col-sm-2 control-label">Updated At                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-6">
                                    <div class="input-group date col-sm-8">
                                        <input type="text" class="form-control pull-right datetimepicker" name="updated_at" placeholder="" id="updated_at" value="<?= set_value('updated_at', $data->updated_at); ?>">
                                    </div>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                        
                                                    <div class="message"></div>
                                                <div class="row-fluid col-md-7 container-button-bottom">
                            <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                                <i class="fa fa-save"></i> <?= cclang('save_button'); ?>
                            </button>
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                                <i class="ion ion-ios-list-outline"></i> <?= cclang('save_and_go_the_list_button'); ?>
                            </a>

                            <div class="custom-button-wrapper">

                                                        </div>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                                <i class="fa fa-undo"></i> <?= cclang('cancel_button'); ?>
                            </a>
                            <span class="loading loading-hide">
                                <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg">
                                <i><?= cclang('loading_saving_data'); ?></i>
                            </span>
                        </div>
                                                <?= form_close(); ?>
                        </div>
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
        </div>
    </div>
</section>

    <script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>

<script>
    $(document).ready(function() {

        "use strict";
        
    window.event_submit_and_action = '';
            
    
      
      
      
        
        
    CKEDITOR.replace('f1');
    var f1 = CKEDITOR.instances.f1;
        CKEDITOR.replace('f2');
    var f2 = CKEDITOR.instances.f2;
        CKEDITOR.replace('f3');
    var f3 = CKEDITOR.instances.f3;
        CKEDITOR.replace('f4');
    var f4 = CKEDITOR.instances.f4;
        CKEDITOR.replace('f5');
    var f5 = CKEDITOR.instances.f5;
        CKEDITOR.replace('f6');
    var f6 = CKEDITOR.instances.f6;
        CKEDITOR.replace('f7');
    var f7 = CKEDITOR.instances.f7;
        CKEDITOR.replace('f8');
    var f8 = CKEDITOR.instances.f8;
        
    $('#btn_cancel').click(function() {
        swal({
                title: "Are you sure?",
                text: "the data that you have created will be in the exhaust!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes!",
                cancelButtonText: "No!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = BASE_URL + 'administrator/data';
                }
            });

        return false;
    }); /*end btn cancel*/

    $('.btn_save').click(function() {
        $('.message').fadeOut();
        $('#f1').val(f1.getData());
        $('#f2').val(f2.getData());
        $('#f3').val(f3.getData());
        $('#f4').val(f4.getData());
        $('#f5').val(f5.getData());
        $('#f6').val(f6.getData());
        $('#f7').val(f7.getData());
        $('#f8').val(f8.getData());
        
    var form_data = $('#form_data');
    var data_post = form_data.serializeArray();
    var save_type = $(this).attr('data-stype');
    data_post.push({
        name: 'save_type',
        value: save_type
    });

    
      
    data_post.push({
        name: 'event_submit_and_action',
        value: window.event_submit_and_action
    });

    $('.loading').show();

    $.ajax({
            url: form_data.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: data_post,
        })
        .done(function(res) {
            $('form').find('.form-group').removeClass('has-error');
            $('form').find('.error-input').remove();
            $('.steps li').removeClass('error');
            if (res.success) {
                var id = $('#data_image_galery').find('li').attr('qq-file-id');
                if (save_type == 'back') {
                    window.location.href = res.redirect;
                    return;
                }

                $('.message').printMessage({
                    message: res.message
                });
                $('.message').fadeIn();
                $('.data_file_uuid').val('');

            } else {
                if (res.errors) {
                    parseErrorField(res.errors);
                }
                $('.message').printMessage({
                    message: res.message,
                    type: 'warning'
                });
            }

        })
        .fail(function() {
            $('.message').printMessage({
                message: 'Error save data',
                type: 'warning'
            });
        })
        .always(function() {
            $('.loading').hide();
            $('html, body').animate({
                scrollTop: $(document).height()
            }, 2000);
        });

    return false;
    }); /*end btn save*/

    

    

    async function chain() {
            }

    chain();




    }); /*end doc ready*/
</script>