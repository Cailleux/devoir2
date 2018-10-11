<?php

class controllerDevoir extends CI_Controller {
	public function index()
	{
		$this->load->view('viewAccueil');
	}
    public function afficherCreateConf(){
        $this->load->model("modelTheme");
		$data['lesThemes']=$this->modelTheme->getAllThemes();
		$this->load->model("modelNiveau");
		$data['lesNiveaux']=$this->modelNiveau->getAllNiveaux();
		$this->load->model("modelTechnologie");
		$data['lesTechnologies']=$this->modelTechnologie->getAllTechnologies();
		$this->load->model("modelConf");
		$data['numeroConf']=$this->modelConf->getIdConf();
		$this->load->view('viewCreateConf',$data);

    }
}
