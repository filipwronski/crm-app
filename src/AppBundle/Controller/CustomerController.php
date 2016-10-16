<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller {

    /**
     * @Route("/customer", name="list_customers")
     */
    public function listCustomers(Request $request) {
        
        $page_title="Customers list";
        return $this->render('customer/customer_list.html.twig', array(
            'page_title' => $page_title,
        ));
    }
    
    /**
     * @Route("/customer/details/{id}", name="customer_details")
     */
    
    public function listCustomerDetails(Request $requeset, $id){
        
        $page_title="Customer details";
        return $this->render('customer/customer_details.html.twig', array(
            'page_title' => $page_title,
            'id' => $id
        )); 
    }
    
    /**
     * @Route("/customer/add", name="add_customer")
     */
    
    public function addCustomer(Request $request){
        $page_title="Add Customer";
        return $this->render('customer/customer_add.html.twig', array(
            'page_title' => $page_title
        ));
    }
    
    /**
     * @Route("/customer/edit/{id}", name="edit_customer")
     */
    
    public function editCustomer(Request $request){
        $page_title="Edit Customer";
        return $this->render('customer/customer_edit.html.twig', array(
            'page_title'=> $page_title
        ));
    }
    
    /**
     * @Route("/customer/delete/{id}", name="delete_customer")
     */
    
    public function deleteCustomer(Request $request, $id){
      
    }
}
