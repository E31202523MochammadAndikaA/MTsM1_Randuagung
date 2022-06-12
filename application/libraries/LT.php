<?php
class LT
{
	protected $_ci;
	function __construct()
	{
		$this->_ci = &get_instance();
	}
	function views($lt = NULL, $data = NULL)
	{
		if ($lt != NULL) {
			$data['head'] = $this->_ci->load->view(
				'Admin/Template/head',
				$data,
				TRUE
			);
			$data['topbar'] = $this->_ci->load->view(
				'Admin/Halaman/topbar',
				$data,
				TRUE
			);
			$data['sidebar'] = $this->_ci->load->view(
				'Admin/Halaman/sidebar',
				$data,
				TRUE
			);
			$data['kontent'] = $this->_ci->load->view($lt, $data, TRUE);
			$data['content'] = $this->_ci->load->view(
				'Admin/Halaman/content',
				$data,
				TRUE
			);
			$data['footer'] = $this->_ci->load->view('Admin/Template/footer', $data, TRUE);
			// Bagian $data['template'] untuk menampilkan file template.php dari folder Admin/_Template/
			// view('Admin/_Template/Template', $data, TRUE); untuk memanggil $data diatasseperti $data['head'], dll
			echo $data['template'] = $this->_ci->load->view('Admin/Halaman/template', $data, TRUE);
			echo $data['js'] = $this->_ci->load->view('Admin/Halaman/js', $data, TRUE);
		}
	}
}
