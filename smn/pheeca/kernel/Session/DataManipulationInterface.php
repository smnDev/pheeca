<?php
namespace smn\pheeca\kernel\Session;

/**
 *
 * @author Simone Esposito
 */
interface DataManipulationInterface {
    
    public function storage($session_id, $data);
    public function retrieve($data);
    public function setOptions($options = array());
    
}
