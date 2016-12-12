<?php

class Character{
 private $name;
 private $atk;
 private $hp;

 public function GetName(){
  return $name;
 }

 public function __construct($set_name,$set_hp,$set_atk){
  $name = $set_name;
  $atk = $set_atk;
  $hp = $set_hp;
 }

 public function BeAttacked(int $damage){
  $hp-=$damage;
  echo($name."は".$damage."ダメージを受けた");
  if($hp<=0){
   echo("HPが0になった！");
  }
 }

 public function Attack(Character &$target){
  $target->beAttacked($atk);
  echo($name."の攻撃！");
 }

}

$charaA = new Character("");

 
