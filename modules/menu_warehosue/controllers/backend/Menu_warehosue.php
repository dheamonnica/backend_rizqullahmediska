<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Menu Warehosue Controller
*| --------------------------------------------------------------------------
*| Menu Warehosue site
*|
*/
class Menu_warehosue extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_menu_warehosue');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	* show all Menu Warehosues
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('menu_warehosue_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['menu_warehosues'] = $this->model_menu_warehosue->get($filter, $field, $this->limit_page, $offset);
		$this->data['menu_warehosue_counts'] = $this->model_menu_warehosue->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/menu_warehosue/index/',
			'total_rows'   => $this->data['menu_warehosue_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Menu Warehosue List');
		$this->render('backend/standart/administrator/menu_warehosue/menu_warehosue_list', $this->data);
	}
	
	/**
	* Add new menu_warehosues
	*
	*/
	public function add()
	{
		$this->is_allowed('menu_warehosue_add');

		$this->template->title('Menu Warehosue New');
		$this->render('backend/standart/administrator/menu_warehosue/menu_warehosue_add', $this->data);
	}

	/**
	* Add New Menu Warehosues
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('menu_warehosue_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		

		$this->form_validation->set_rules('nama_warehouse', 'Nama Warehouse', 'trim|required|max_length[255]');
		

		$this->form_validation->set_rules('no_wa_cs', 'No Wa Cs', 'trim|required|max_length[255]');
		

		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'nama_warehouse' => $this->input->post('nama_warehouse'),
				'no_wa_cs' => $this->input->post('no_wa_cs'),
			];

			
			



			
			
			$save_menu_warehosue = $id = $this->model_menu_warehosue->store($save_data);
            

			if ($save_menu_warehosue) {
				
				
					
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_menu_warehosue;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/menu_warehosue/edit/' . $save_menu_warehosue, 'Edit Menu Warehosue'),
						anchor('administrator/menu_warehosue', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/menu_warehosue/edit/' . $save_menu_warehosue, 'Edit Menu Warehosue')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/menu_warehosue');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/menu_warehosue');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}
	
		/**
	* Update view Menu Warehosues
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('menu_warehosue_update');

		$this->data['menu_warehosue'] = $this->model_menu_warehosue->find($id);

		$this->template->title('Menu Warehosue Update');
		$this->render('backend/standart/administrator/menu_warehosue/menu_warehosue_update', $this->data);
	}

	/**
	* Update Menu Warehosues
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('menu_warehosue_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
				$this->form_validation->set_rules('nama_warehouse', 'Nama Warehouse', 'trim|required|max_length[255]');
		

		$this->form_validation->set_rules('no_wa_cs', 'No Wa Cs', 'trim|required|max_length[255]');
		

		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'nama_warehouse' => $this->input->post('nama_warehouse'),
				'no_wa_cs' => $this->input->post('no_wa_cs'),
			];

			

			


			
			
			$save_menu_warehosue = $this->model_menu_warehosue->change($id, $save_data);

			if ($save_menu_warehosue) {

				

				
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/menu_warehosue', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/menu_warehosue');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/menu_warehosue');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}
	
	/**
	* delete Menu Warehosues
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('menu_warehosue_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'menu_warehosue'), 'success');
        } else {
            set_message(cclang('error_delete', 'menu_warehosue'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Menu Warehosues
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('menu_warehosue_view');

		$this->data['menu_warehosue'] = $this->model_menu_warehosue->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Menu Warehosue Detail');
		$this->render('backend/standart/administrator/menu_warehosue/menu_warehosue_view', $this->data);
	}
	
	/**
	* delete Menu Warehosues
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$menu_warehosue = $this->model_menu_warehosue->find($id);

		
		
		return $this->model_menu_warehosue->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('menu_warehosue_export');

		$this->model_menu_warehosue->export(
			'menu_warehosue', 
			'menu_warehosue',
			$this->model_menu_warehosue->field_search
		);
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('menu_warehosue_export');

		$this->model_menu_warehosue->pdf('menu_warehosue', 'menu_warehosue');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('menu_warehosue_export');

		$table = $title = 'menu_warehosue';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_menu_warehosue->find($id);
        $fields = $result->list_fields();

        $content = $this->pdf->loadHtmlPdf('core_template/pdf/pdf_single', [
            'data' => $data,
            'fields' => $fields,
            'title' => $title
        ], TRUE);

        $this->pdf->initialize($config);
        $this->pdf->pdf->SetDisplayMode('fullpage');
        $this->pdf->writeHTML($content);
        $this->pdf->Output($table.'.pdf', 'H');
	}

	
}


/* End of file menu_warehosue.php */
/* Location: ./application/controllers/administrator/Menu Warehosue.php */