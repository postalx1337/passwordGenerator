<?
class PasswordGenerator{
    private $charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*";
    private $length = 0;

    public function setPasswordLength($length){
        $this->length = $length;
    }

    public function generatePassword(){
        if($this->length <= 0){
            return "Error: please, set password length";
        }else{
            $result = '';

            for($i=0; $i<$this->length; $i++){
                $rndCharacter = $this->charset[mt_rand(0, strlen($this->charset)-1)];
                $result .= $rndCharacter;
            }
            return $result;
        }
    }
}
?>