<?php
/**
 * Created by PhpStorm.
 * User: MECHREV
 * Date: 2019/4/12
 * Time: 8:37
 */
$data=new Daffodil(99,999);
print_r($data);
class Daffodil{
    public function __construct($start=99,$end=999)
    {
        return $this->traverse($start,$end);
    }
    private function traverse($start,$end){
        $arr=[];
        for($i=$start;$i<=$end;$i++){
            $res=$this->check($i);
            if($res){
                $arr[]=$i;
            }
        }
        echo $start.'到'.$end.'的水仙花数有'.implode(',',$arr);die;
    }
    private function check(int $i){
        if(!is_int($i)){
            return false;
        }
       // echo '个位'.floor($i%10).'十位'.floor(($i%100)/10).'百位'.floor($i/100).'<br/>';
        $bits=($i%10)*($i%10)*($i%10);//个位
        $decade=floor(($i%100)/10)*floor(($i%100)/10)*floor(($i%100)/10);//十位
        $hun=floor($i/100)*floor($i/100)*floor($i/100);//百位
        $num=$bits+$decade+$hun;
        if($i==$num){
            return true;
        }
    }
}