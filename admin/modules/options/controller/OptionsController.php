<?php 
class OptionsController extends Controller{
	public $options;
	//public $loadPages;
	public function __construct(){
		parent::__construct();
		$this->options = $this->loadModel('Options');
	}
	public function index(){
		global $_web;
		$this->view->appendCss = '<link rel="stylesheet" href="'.base_url().'tmp/public/plugins/bootstrap-switch/css/bootstrap-switch.min.css'.'">';
		$this->view->appendJs = '<script type="text/javascript" src="'.base_url().'tmp/public/plugins/bootstrap-switch/js/bootstrap-switch.min.js'.'"></script>';

		if (isset($_POST['ok'])) {
			if ($_SESSION['group_id'] == '22' || $_SESSION['group_id'] == '20') {
				$pagination_number = (is_numeric($this->input->post('pagination_number'))) ? $this->input->post('pagination_number') : 10;
				$data_insert = array(
					'pagination_number'	=> $pagination_number,
					'comment'	=> ($_POST['comment']=='on') ? 1 : 0,
				);
				$this->options->update($data_insert);
				$mess = array(
						'flash_success' => lang('update_page_success'),
					);			
	            Session::create($mess);
	            redirect(base_url().'options/options/index');
            }else{
				$mess = array(
							'flash_warning' => "Bạn không có quyền này!!!"
						);
				Session::create($mess);
				return redirect(base_url().'settings/settings/manager');
			}
		}
		if (isset($_SESSION['flash_success'])) {
			$this->view->data['flash_success'] = Session::get('flash_success');
			unset($_SESSION['flash_success']);
		}
		if (isset($_SESSION['flash_warning'])) {
			$this->view->data['flash_warning'] = Session::get('flash_warning');
			unset($_SESSION['flash_warning']);
		}
		$this->view->data['options']  = $this->options->getInfo();
		$this->view->render('index');
	}
}