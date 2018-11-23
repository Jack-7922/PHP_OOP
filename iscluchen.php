<?
function test($var = false) {
    try{
        echo "Start\n";
        if(!$var) {
            throw new Exception('file not found');
        }
        echo "Great";
    }catch (Exception $e){
        echo $e->getMessage();
    }
}
var_dump(test());