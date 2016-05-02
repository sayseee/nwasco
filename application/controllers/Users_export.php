<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('include_path', ini_get('include_path').';../Classes/');
require_once APPPATH.'/third_party/PHPExcel.php';
 
class Users_export extends CI_Controller {
  
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model'); // load model
        $this->load->model('utilities_model'); // load model
  
        // Here you should add some sort of user validation
        // to prevent strangers from pulling your table data
    }
  
    public function index($users = false)
    {
        $query = $this->db->get('users');
 
        if(!$query)
            return false;
  
        // Starting the PHPExcel library
        $this->load->library('excel'); 
  
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
  
        $objPHPExcel->setActiveSheetIndex(0);
  
        // Field names in the first row
        $fields = $query->list_fields();
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
  
        // Fetching the table data
        $row = 2;
        foreach($query->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                $col++;
            }
  
            $row++;
        }
  
        $objPHPExcel->setActiveSheetIndex(0);
  
        $objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
  
        // Sending headers to force the user to download the file
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Products_'.date('dMy').'.xls"');
        header('Cache-Control: max-age=0');
  
        $objWriter->save('php://output');
    }
  
 
}