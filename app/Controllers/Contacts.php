<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contacts extends BaseController
{
    public function index() {
       try {
           $user_model = new ContactModel();
           /*$data['users'] = $user_model->orderBy('id', 'DESC')->paginate(10);
           $data['pagination_link'] = $user_model->pager;*/
           $data['users'] = $user_model->findAll();
           return view('contacts/index', $data);
       } catch (\Exception $e) {
           echo $e->getMessage();
        }
    }

    public function add() {
        return view('contacts/create');
    }

    public function store() {
        $contact_model = new ContactModel();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'family_name' => $this->request->getPost('family_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),

        ];

        $contact_model->save($data);
        return redirect()->to(base_url('/'))->with('status', 'Contact added');
    }

    public function edit(int $userId) {
        $contact = new ContactModel();
        $data['contact'] = $contact->find($userId);
        return view('contacts/edit', $data);
    }

    public function update(int $userId) {
        $contact = new ContactModel();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'family_name' => $this->request->getPost('family_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
        ];

        $contact->update($userId, $data);
        return redirect()->to(base_url('/'))->with('status', 'Contact updated');
    }

    public function delete(int $userId) {
        $contact = new ContactModel();
        $contact->delete($userId);
        return redirect()->to(base_url('/'))->with('status', 'Contact deleted');

    }

    public function hardDelete(int $userId) {
        $contact = new ContactModel();
        $contact->delete($userId);
        return redirect()->to(base_url('/'))->with('status', 'Contact deleted');

    }

}