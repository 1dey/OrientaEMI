<?php
require_once 'requires.php';
require_once ('../fuzzy_logic-master/fuzzy-logic-class.php');
$x = new Fuzzy_Logic();
$x->clearMembers();
$x->SetInputNames(array('prg5','prg15','prg25','prg35','prg45','prg55'));
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
$x->addMember($x->getOutputName(0),'financiera',0, 25 ,35 ,LINFINITY);
$x->addMember($x->getOutputName(0),'economia',30,array(40,60),70 ,TRAPEZOID);
$x->addMember($x->getOutputName(0),'comercial',65, 75 ,100 ,RINFINITY);

$x->clearRules();

$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mdt AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mdt AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.me5.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg4i AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.md AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mei AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.md AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mdt AND prg25.md AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.md AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.md AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mdt AND prg55.mei THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mdt THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.md THEN carrera.financiera');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mdt AND prg35.mdt AND prg45.mei AND prg55.mei THEN carrera.financiera');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.economia');
$x->addRule('IF prg5.mei AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.economia');

$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mg AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mgm AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.sistemmas');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mg AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mei AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mg AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mgm AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mgm AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mg AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mei AND prg55.mgm THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mei THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mg THEN carrera.comercial');
$x->addRule('IF prg5.mgm AND prg15.mg AND prg25.mei AND prg35.mei AND prg45.mgm AND prg55.mgm THEN carrera.comercial');

$prueba_fuzzy=Pruebas::query()->where('id_estudiante','=',$dataUser["ciOid"])->get();
$prueba_fuzzy=Respuestas::query()->where('id_prueba','=',$prueba_fuzzy[0]['id'])->get();
$prg1 = $prueba_fuzzy[4]['valor']*20;
$prg2 = $prueba_fuzzy[14]['valor']*20;
$prg3 = $prueba_fuzzy[24]['valor']*20;
$prg4 = $prueba_fuzzy[34]['valor']*20;
$prg5 = $prueba_fuzzy[44]['valor']*20;
$prg6 = $prueba_fuzzy[54]['valor']*20;

$x->setRealInput('prg5',$prg1);
$x->setRealInput('prg15',$prg2);
$x->setRealInput('prg25',$prg3);
$x->setRealInput('prg35',$prg4);
$x->setRealInput('prg45',$prg5);
$x->setRealInput('prg55',$prg6);
$fuzzy_arr = $x->calcFuzzy();
$probCarrera = $fuzzy_arr['carrera'];
if($probCarrera>66 && $probCarrera<=100)
{
    $carrera="INGENIERIA COMERCIAL";
}
elseif($probCarrera>33 && $probCarrera<=66)
{
    $probCarrera=100-$probCarrera;
    $carrera="INGENIERIA ECONOMICA";
}
elseif($probCarrera>=0 && $probCarrera<=33)
{
    $probCarrera=100-$probCarrera;
    $carrera="INGENIERIA FINANCIERA";
}

?>