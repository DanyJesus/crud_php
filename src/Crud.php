<?php 
namespace Crud;
use Conexao;
require_once 'conexao.php';

class Crud{

function __construct()
{
  
}

     public function insert(){
       $db = new Conexao;
      
      $db->exec("INSERT INTO periodic_table (element_name,symbol, atomic_number, period)
                      values ('Prata','p', 9, 9); "); 
     $resultado= $db->query(" SELECT id from periodic_table  order by id DESC  limit 1;");  
      while ($row = $resultado->fetchArray()) {
      $id= $row['id'];
 
        }   
        return $id;
    }
    public function update($id){
        $db = new Conexao;
     return  $db->exec("UPDATE periodic_table set symbol='yf' where id=$id");
     
    }   

    public function delete($id){
        $db = new Conexao;
        return  $db->exec("DELETE FROM periodic_table where id=$id");
    }
    public function listAll(){
        $db = new Conexao;
        $resultado= $db->query(" SELECT * from periodic_table "); 
       $cont=0;
        while ($row = $resultado->fetchArray()) {
           
            $array[$cont]['id']= $row['id'];
            $array[$cont]['element_name']= $row['element_name'];
            $array[$cont]['symbol']= $row['symbol'];
            $array[$cont]['atomic_number']= $row['atomic_number'];
            $array[$cont]['period']= $row['period'];
       $cont++;
              }
              return $array;
        
    }
    public function listOne($id){
        $db = new Conexao;
     $resultado = $db->query(" SELECT id from periodic_table where id = $id ");   
   
     return $resultado->fetchArray();
         
    
}
     
             
    }


//$value = new Crud();
//$results= $value->listOne(68);
//var_dump($results);

?>