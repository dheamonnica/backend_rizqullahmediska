<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Data Controller
*| --------------------------------------------------------------------------
*| Data site
*|
*/
class Data extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_data');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	* show all Datas
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('data_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['datas'] = $this->model_data->get($filter, $field, $this->limit_page, $offset);
		$this->data['data_counts'] = $this->model_data->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/data/index/',
			'total_rows'   => $this->data['data_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Data List');
		$this->render('backend/standart/administrator/data/data_list', $this->data);
	}
	
	/**
	* Add new datas
	*
	*/
	public function add()
	{
		$this->is_allowed('data_add');

		$this->template->title('Data New');
		$this->render('backend/standart/administrator/data/data_add', $this->data);
	}

	/**
	* Add New Datas
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('data_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		

		$this->form_validation->set_rules('device_id', 'Device Id', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f1', 'F1', 'trim|required');
		

		$this->form_validation->set_rules('f2', 'F2', 'trim|required');
		

		$this->form_validation->set_rules('f3', 'F3', 'trim|required');
		

		$this->form_validation->set_rules('f4', 'F4', 'trim|required');
		

		$this->form_validation->set_rules('f5', 'F5', 'trim|required');
		

		$this->form_validation->set_rules('f6', 'F6', 'trim|required');
		

		$this->form_validation->set_rules('f7', 'F7', 'trim|required');
		

		$this->form_validation->set_rules('f8', 'F8', 'trim|required');
		

		$this->form_validation->set_rules('f9', 'F9', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f10', 'F10', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f11', 'F11', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f12', 'F12', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f13', 'F13', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f14', 'F14', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f15', 'F15', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f16', 'F16', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f17', 'F17', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f18', 'F18', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f19', 'F19', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f20', 'F20', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f21', 'F21', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f22', 'F22', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f23', 'F23', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f24', 'F24', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f25', 'F25', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|max_length[11]');
		

		$this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|max_length[10]');
		

		$this->form_validation->set_rules('altitude', 'Altitude', 'trim|required|max_length[11]');
		

		$this->form_validation->set_rules('speed', 'Speed', 'trim|required|max_length[20]');
		

		$this->form_validation->set_rules('heading', 'Heading', 'trim|required|max_length[10]');
		

		$this->form_validation->set_rules('battery', 'Battery', 'trim|required');
		

		$this->form_validation->set_rules('created_at', 'Created At', 'trim|required');
		

		$this->form_validation->set_rules('updated_at', 'Updated At', 'trim|required');
		

		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'device_id' => $this->input->post('device_id'),
				'f1' => $this->input->post('f1'),
				'f2' => $this->input->post('f2'),
				'f3' => $this->input->post('f3'),
				'f4' => $this->input->post('f4'),
				'f5' => $this->input->post('f5'),
				'f6' => $this->input->post('f6'),
				'f7' => $this->input->post('f7'),
				'f8' => $this->input->post('f8'),
				'f9' => $this->input->post('f9'),
				'f10' => $this->input->post('f10'),
				'f11' => $this->input->post('f11'),
				'f12' => $this->input->post('f12'),
				'f13' => $this->input->post('f13'),
				'f14' => $this->input->post('f14'),
				'f15' => $this->input->post('f15'),
				'f16' => $this->input->post('f16'),
				'f17' => $this->input->post('f17'),
				'f18' => $this->input->post('f18'),
				'f19' => $this->input->post('f19'),
				'f20' => $this->input->post('f20'),
				'f21' => $this->input->post('f21'),
				'f22' => $this->input->post('f22'),
				'f23' => $this->input->post('f23'),
				'f24' => $this->input->post('f24'),
				'f25' => $this->input->post('f25'),
				'longitude' => $this->input->post('longitude'),
				'latitude' => $this->input->post('latitude'),
				'altitude' => $this->input->post('altitude'),
				'speed' => $this->input->post('speed'),
				'heading' => $this->input->post('heading'),
				'battery' => $this->input->post('battery'),
				'created_at' => $this->input->post('created_at'),
				'updated_at' => $this->input->post('updated_at'),
			];

			
			



			
			
			$save_data = $id = $this->model_data->store($save_data);
            

			if ($save_data) {
				
				
					
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_data;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/data/edit/' . $save_data, 'Edit Data'),
						anchor('administrator/data', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/data/edit/' . $save_data, 'Edit Data')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/data');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/data');
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
	* Update view Datas
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('data_update');

		$this->data['data'] = $this->model_data->find($id);

		$this->template->title('Data Update');
		$this->render('backend/standart/administrator/data/data_update', $this->data);
	}

	/**
	* Update Datas
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('data_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
				$this->form_validation->set_rules('device_id', 'Device Id', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f1', 'F1', 'trim|required');
		

		$this->form_validation->set_rules('f2', 'F2', 'trim|required');
		

		$this->form_validation->set_rules('f3', 'F3', 'trim|required');
		

		$this->form_validation->set_rules('f4', 'F4', 'trim|required');
		

		$this->form_validation->set_rules('f5', 'F5', 'trim|required');
		

		$this->form_validation->set_rules('f6', 'F6', 'trim|required');
		

		$this->form_validation->set_rules('f7', 'F7', 'trim|required');
		

		$this->form_validation->set_rules('f8', 'F8', 'trim|required');
		

		$this->form_validation->set_rules('f9', 'F9', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f10', 'F10', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f11', 'F11', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f12', 'F12', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f13', 'F13', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f14', 'F14', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f15', 'F15', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f16', 'F16', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f17', 'F17', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f18', 'F18', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f19', 'F19', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f20', 'F20', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f21', 'F21', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f22', 'F22', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f23', 'F23', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f24', 'F24', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('f25', 'F25', 'trim|required|max_length[45]');
		

		$this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|max_length[11]');
		

		$this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|max_length[10]');
		

		$this->form_validation->set_rules('altitude', 'Altitude', 'trim|required|max_length[11]');
		

		$this->form_validation->set_rules('speed', 'Speed', 'trim|required|max_length[20]');
		

		$this->form_validation->set_rules('heading', 'Heading', 'trim|required|max_length[10]');
		

		$this->form_validation->set_rules('battery', 'Battery', 'trim|required');
		

		$this->form_validation->set_rules('created_at', 'Created At', 'trim|required');
		

		$this->form_validation->set_rules('updated_at', 'Updated At', 'trim|required');
		

		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'device_id' => $this->input->post('device_id'),
				'f1' => $this->input->post('f1'),
				'f2' => $this->input->post('f2'),
				'f3' => $this->input->post('f3'),
				'f4' => $this->input->post('f4'),
				'f5' => $this->input->post('f5'),
				'f6' => $this->input->post('f6'),
				'f7' => $this->input->post('f7'),
				'f8' => $this->input->post('f8'),
				'f9' => $this->input->post('f9'),
				'f10' => $this->input->post('f10'),
				'f11' => $this->input->post('f11'),
				'f12' => $this->input->post('f12'),
				'f13' => $this->input->post('f13'),
				'f14' => $this->input->post('f14'),
				'f15' => $this->input->post('f15'),
				'f16' => $this->input->post('f16'),
				'f17' => $this->input->post('f17'),
				'f18' => $this->input->post('f18'),
				'f19' => $this->input->post('f19'),
				'f20' => $this->input->post('f20'),
				'f21' => $this->input->post('f21'),
				'f22' => $this->input->post('f22'),
				'f23' => $this->input->post('f23'),
				'f24' => $this->input->post('f24'),
				'f25' => $this->input->post('f25'),
				'longitude' => $this->input->post('longitude'),
				'latitude' => $this->input->post('latitude'),
				'altitude' => $this->input->post('altitude'),
				'speed' => $this->input->post('speed'),
				'heading' => $this->input->post('heading'),
				'battery' => $this->input->post('battery'),
				'created_at' => $this->input->post('created_at'),
				'updated_at' => $this->input->post('updated_at'),
			];

			

			


			
			
			$save_data = $this->model_data->change($id, $save_data);

			if ($save_data) {

				

				
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/data', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/data');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/data');
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
	* delete Datas
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('data_delete');

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
            set_message(cclang('has_been_deleted', 'data'), 'success');
        } else {
            set_message(cclang('error_delete', 'data'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Datas
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('data_view');

		$this->data['data'] = $this->model_data->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Data Detail');
		$this->render('backend/standart/administrator/data/data_view', $this->data);
	}
	
	/**
	* delete Datas
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$data = $this->model_data->find($id);

		
		
		return $this->model_data->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('data_export');

		$this->model_data->export(
			'data', 
			'data',
			$this->model_data->field_search
		);
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('data_export');

		$this->model_data->pdf('data', 'data');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('data_export');

		$table = $title = 'data';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_data->find($id);
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


/* End of file data.php */
/* Location: ./application/controllers/administrator/Data.php */