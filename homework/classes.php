<?php
class Form{

    function input($arr){
        $str="<input ".$this->arrToAtr($arr).">";
        echo $str;

    }
    function submit($arr){

    }
    function password($arr){

    }
    function textarea($arr){

    }
    function open($arr){

    }
    function close($arr){

    }
    private function arrToAtr($arr){
        $str='';
        while($atr=current($arr)){
            $str+=" ".key($arr).'="'.current($arr).'"';
        }
        return $str;
    }
}

$form=new Form();
$form->input(['type'=>'text', 'value'=>'!!!']);
