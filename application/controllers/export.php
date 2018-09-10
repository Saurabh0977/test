<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

    
	public function index()
	{
    
        $this->load->view('csv_view');
    
    }

    public function createXLS() {
        
        $this->load->model('model_user');
        $this->load->library('excel'); 
        
        //$empInfo = $this->model_user->employeeList();
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'ID');
        $object->getActiveSheet()->setCellValue('B1', 'NAME');
        $object->getActiveSheet()->setCellValue('C1', 'PHONE');
        $object->getActiveSheet()->setCellValue('D1', 'EMAIL');
        $object->getActiveSheet()->setCellValue('E1', 'STATUS'); 
        $object->getActiveSheet()->setCellValue('F1', 'EMP_ID'); 
        $object->getActiveSheet()->setCellValue('G1', 'POSTAL_ADDRESS'); 
        $object->getActiveSheet()->setCellValue('H1', 'PERMANENT_ADDRESS');
        $object->getActiveSheet()->setCellValue('I1', 'DEP_TITLE');
        $object->getActiveSheet()->setCellValue('J1', 'DEP_MANAGER');



        $employee_data = $this->model_user->employeelist();
        
        

        $excel_row = 2;
        
        foreach ($employee_data as $element) {
            
            $object->getActiveSheet()->setCellValue('A' . $excel_row, $element->ID);
            $object->getActiveSheet()->setCellValue('B' . $excel_row, $element->NAME);
            $object->getActiveSheet()->setCellValue('C' . $excel_row, $element->PHONE);
            $object->getActiveSheet()->setCellValue('D' . $excel_row, $element->EMAIL);
            $object->getActiveSheet()->setCellValue('E' . $excel_row, $element->STATUS);
            $object->getActiveSheet()->setCellValue('F' . $excel_row, $element->EMP_ID);
            $object->getActiveSheet()->setCellValue('G' . $excel_row, $element->POSTAL_ADDRESS);
            $object->getActiveSheet()->setCellValue('H' . $excel_row, $element->PERMANENT_ADDRESS);
            $object->getActiveSheet()->setCellValue('I' . $excel_row, $element->DEP_TITLE);
            $object->getActiveSheet()->setCellValue('J' . $excel_row, $element->DEP_MANAGER);

            $excel_row++;
        }
        $object_writer = PHPExcel_IOFactory::createWriter($object,'Excel5');
       // $object_Writer->save(ROOT_UPLOAD_IMPORT_PATH.$fileName);
		// download file
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="EmployeeData.xls"');
       $object_writer->save('php://output');
        
        //redirect(HTTP_UPLOAD_IMPORT_PATH.$fileName);        
    }
 }   

    ?>