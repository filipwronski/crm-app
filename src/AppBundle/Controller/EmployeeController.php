<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmployeeController extends Controller {

    /**
     * @Route("/employee", name="list_employees")
     */
    public function listEmployees(Request $request) {
        
        $page_title="Employees list";
        return $this->render('employee/employee_list.html.twig', array(
            'page_title' => $page_title,
        ));
    }
    
    /**
     * @Route("/employee/details/{id}", name="employee_details")
     */
    
    public function showEmployeeDetails(Request $requeset, $id){
        
        $page_title="Customer details";
        return $this->render('employee/employee_details.html.twig', array(
            'page_title' => $page_title,
            'id' => $id
        )); 
    }
    
    /**
     * @Route("/employee/add", name="add_employee")
     */
    
    public function addEmployee(Request $request){
        $page_title="Add Employee";
        return $this->render('employee/employee_add.html.twig', array(
            'page_title' => $page_title
        ));
    }
    
    /**
     * @Route("/employee/edit/{id}", name="edit_employee")
     */
    
    public function editEmployee(Request $request){
        $page_title="Edit Employee";
        return $this->render('employee/employee_edit.html.twig', array(
            'page_title'=> $page_title
        ));
    }
    
    /**
     * @Route("/employee/delete/{id}", name="delete_employee")
     */
    
    public function deleteEmployee(Request $request, $id){
      
    }
}
