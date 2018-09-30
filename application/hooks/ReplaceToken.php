<?php 

class ReplaceToken{

    public function replacecode()
    {
        $this->CI =& get_instance();
        $contents = $this->CI->output->get_output();

        $contents = str_replace("Welcome" , "hooks" , $contents);
        echo $contents;
        return;
    }

} 


?>