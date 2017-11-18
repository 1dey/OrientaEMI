<?php
require_once 'requires.php';
require_once ('../fuzzy_logic-master/fuzzy-logic-class.php');
$x = new Fuzzy_Logic();
$x->clearMembers();
$x->SetInputNames(array('prg1','prg11','prg21','prg31','prg41','prg51'));
$x->addMember($x->getInputName(0),'mdt',  0, 10, 23 ,LINFINITY);
$x->addMember($x->getInputName(0),'md',  17, 30, 43 ,TRIANGLE);
$x->addMember($x->getInputName(0),'mei'  , 37, 50, 63 ,TRIANGLE);
$x->addMember($x->getInputName(0),'mg'  , 57, 70, 83 ,TRIANGLE);
$x->addMember($x->getInputName(0),'mgm'  , 77, 90, 100,RINFINITY);
$x->addMember($x->getInputName(1),'mdt',  0, 10, 23 ,LINFINITY);
$x->addMember($x->getInputName(1),'md',  17, 30, 43 ,TRIANGLE);
$x->addMember($x->getInputName(1),'mei'  , 37, 50, 63 ,TRIANGLE);
$x->addMember($x->getInputName(1),'mg'  , 57, 70, 83 ,TRIANGLE);
$x->addMember($x->getInputName(1),'mgm'  , 77, 90, 100,RINFINITY);
$x->addMember($x->getInputName(2),'mdt',  0, 10, 23 ,LINFINITY);
$x->addMember($x->getInputName(2),'md',  17, 30, 43 ,TRIANGLE);
$x->addMember($x->getInputName(2),'mei'  , 37, 50, 63 ,TRIANGLE);
$x->addMember($x->getInputName(2),'mg'  , 57, 70, 83 ,TRIANGLE);
$x->addMember($x->getInputName(2),'mgm'  , 77, 90, 100,RINFINITY);
$x->addMember($x->getInputName(3),'mdt',  0, 10, 23 ,LINFINITY);
$x->addMember($x->getInputName(3),'md',  17, 30, 43 ,TRIANGLE);
$x->addMember($x->getInputName(3),'mei'  , 37, 50, 63 ,TRIANGLE);
$x->addMember($x->getInputName(3),'mg'  , 57, 70, 83 ,TRIANGLE);
$x->addMember($x->getInputName(3),'mgm'  , 77, 90, 100,RINFINITY);
$x->addMember($x->getInputName(4),'mdt',  0, 10, 23 ,LINFINITY);
$x->addMember($x->getInputName(4),'md',  17, 30, 43 ,TRIANGLE);
$x->addMember($x->getInputName(4),'mei'  , 37, 50, 63 ,TRIANGLE);
$x->addMember($x->getInputName(4),'mg'  , 57, 70, 83 ,TRIANGLE);
$x->addMember($x->getInputName(4),'mgm'  , 77, 90, 100,RINFINITY);
$x->addMember($x->getInputName(5),'mdt',  0, 10, 23 ,LINFINITY);
$x->addMember($x->getInputName(5),'md',  17, 30, 43 ,TRIANGLE);
$x->addMember($x->getInputName(5),'mei'  , 37, 50, 63 ,TRIANGLE);
$x->addMember($x->getInputName(5),'mg'  , 57, 70, 83 ,TRIANGLE);
$x->addMember($x->getInputName(5),'mgm'  , 77, 90, 100,RINFINITY);

$x->SetOutputNames(array('carrera'));
$x->addMember($x->getOutputName(0),'telecomunicaciones',0, 25 ,60 ,LINFINITY);
$x->addMember($x->getOutputName(0),'sistemas',55, 75 ,100 ,RINFINITY);

$x->clearRules();

$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mdt AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mdt AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.md AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mei AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.md AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mdt AND prg21.md AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.md AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.md AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mdt AND prg51.mei THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mdt THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.md THEN carrera.telecomunicaciones');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mdt AND prg31.mdt AND prg41.mei AND prg51.mei THEN carrera.telecomunicaciones');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mei AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mg AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mgm AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemmas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mg AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mei AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mg AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mgm AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mgm AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mg AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mei AND prg51.mgm THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mei THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mg THEN carrera.sistemas');
$x->addRule('IF prg1.mgm AND prg11.mg AND prg21.mei AND prg31.mei AND prg41.mgm AND prg51.mgm THEN carrera.sistemas');

$prueba_fuzzy=Pruebas::query()->where('id_estudiante','=',$dataUser["ciOid"])->get();
$prueba_fuzzy=Respuestas::query()->where('id_prueba','=',$prueba_fuzzy[0]['id'])->get();
$prg1 = $prueba_fuzzy[0]['valor']*20;
$prg2 = $prueba_fuzzy[10]['valor']*20;
$prg3 = $prueba_fuzzy[20]['valor']*20;
$prg4 = $prueba_fuzzy[30]['valor']*20;
$prg5 = $prueba_fuzzy[40]['valor']*20;
$prg6 = $prueba_fuzzy[50]['valor']*20;

$x->setRealInput('prg1',$prg1);
$x->setRealInput('prg11',$prg2);
$x->setRealInput('prg21',$prg3);
$x->setRealInput('prg31',$prg4);
$x->setRealInput('prg41',$prg5);
$x->setRealInput('prg51',$prg6);
$fuzzy_arr = $x->calcFuzzy();
$probCarrera = $fuzzy_arr['carrera'];
if($probCarrera>50)
{
    $carrera="INGENIERIA DE SISTEMAS";
}
else
{
    $probCarrera=100-$probCarrera;
    $carrera="INGENIERIA DE TELECOMUNICACIONES";
}

?>