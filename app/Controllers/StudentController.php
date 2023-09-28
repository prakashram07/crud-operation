<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Student;

class StudentController extends BaseController {

    public function index() {
        $students = new Student();
        $student[ 'student' ] = $students->where( 'is_active', 1 )->orderBy( 'id', 'DESC' )->findAll();
        return view( 'student/listing', $student );
    }

    public function add() {
        return view( 'student/add' );
    }

    public function save() {
        $student = new Student();
        $insertData = [
            'name' => $this->request->getVar( 'name' ),
            'email' => $this->request->getVar( 'email' ),
            'contact'  => $this->request->getVar( 'contact' ),
            'address'  => $this->request->getVar( 'address' ),
        ];
        $student->insert( $insertData );
        session()->setFlashdata( 'success', 'Student Created Successfully' );

        return $this->response->redirect( site_url( '/student' ) );
    }

    public function delete( $id = null ) {
        $student = new Student();
        $student->where( 'id', $id )->set( [ 'is_active'=> 0 ] )->update();
        session()->setFlashdata( 'success', 'Student Deleted Successfully' );
        return $this->response->redirect( site_url( '/student' ) );
    }

    public function edit( $id = null ) {
        $students = new Student();
        $student[ 'student' ] = $students->where( 'id', $id )->first();
        return view( 'student/edit', $student );
    }

    public function update( $id ) {

        $student = new Student();
        $updateData = [
            'name' => $this->request->getVar( 'name' ),
            'email' => $this->request->getVar( 'email' ),
            'contact'  => $this->request->getVar( 'contact' ),
            'address'  => $this->request->getVar( 'address' ),

        ];
        $student->update( $id, $updateData );
        session()->setFlashdata( 'success', 'Student Updated Successfully' );
        return $this->response->redirect( site_url( '/student' ) );
    }

    public function show( $id = null ) {
        $students = new Student();
        $student[ 'student' ] = $students->where( 'id', $id )->first();
        return view( 'student/show', $student );
    }

}
