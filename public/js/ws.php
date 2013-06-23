<?php
class rest{
 public $nombre;
 public $long;
 public $lat;
}
class rpta{
 public $restaurantes;
}

$r = new rest();
$r->nombre = "QUIMICA";
$r->long = -12.054695;
$r->lat = -77.085268;

$s = new rest();
$s->nombre = "LETRAS";
$s->long = -12.01234;
$s->lat = -72.02312;

$t = new rest();
$t->nombre = "FISICA";
$t->long = -12.02234;
$t->lat = -72.01312;

$u = new rest();
$u->nombre = "KAROmasNAa_emO_suicide666";
$u->long = -12.666;
$u->lat = -72.999;

$v = new rest();
$v->nombre = "Ya fue";
$v->long = -12.02234;
$v->lat = -72.01312;


$f = new rpta();
$f->restaurantes = array($r, $s, $t, $u, $v);

$rpta = json_encode($f);
echo $rpta;
return $rpta;

//var_dump($r);
?>