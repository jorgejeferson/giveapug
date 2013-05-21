<?php
        $this->load->view('include/header');
        $this->load->view('templates/crud/menu-crud-idioma');
        if($pagina != '') $this->load->view('crud-idioma/'.$pagina);
        $this->load->view('include/footer');