<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ReservationController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->call->model('Reservation_model');
        $this->call->model('Venue_model');
    }
	public function reservation(){
        $this->call->view('reservation/reservation');

    }
    public function booksave(){
		if($this->form_validation->submitted()){
            $this->form_validation
                ->name('fullname')->required()
                ->min_length(2)
                ->name('address')->required()
                ->min_length(2)
                ->name('email')->required()
                ->min_length(2)
                ->name('contact')->required()
                ->min_length(2)
                ->name('duration')->required()
                ->min_length(2);
            if($this->form_validation->run())
            {
                if($this->Reservation_model->booksave(
                    $this->io->post('fullname'),
                    $this->io->post('address'),
                    $this->io->post('email'),
                    $this->io->post('contact'),
                    $this->io->post('duration')))
                {
                    redirect('venue');
                } 
                else
                {
                    $this->form_validation->errors();
                }
            }
        } 
        $data['home'] = $this->Dashboard_model->getbooks();
        $this->call->view('admin/allbooks', $data); 
	}

    public function getdata(){
       $data['venue'] = $this->Venue_model->getVenue();
        
       return $this->call->view('reservation/reservation', $data);
        
    }
}
?>
