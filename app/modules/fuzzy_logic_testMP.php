<?php
require_once 'requires.php';
require_once ('../fuzzy_logic-master/fuzzy-logic-class.php');
$x = new Fuzzy_Logic();
$x->clearMembers();
$x->SetInputNames(array('prg2','prg12','prg22','prg32','prg42','prg52'));
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
$x->addMember($x->getOutputName(0),'mecatronica',0, 25 ,60 ,LINFINITY);
$x->addMember($x->getOutputName(0),'electronico',55, 75 ,100 ,RINFINITY);

$x->clearRules();

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mei AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mg AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mgm AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.sistemmas');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mg AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mei AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mg AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mgm AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mgm AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');

$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mg AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mgm THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mei THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mg THEN carrera.electronico');
$x->addRule('IF prg2.mgm AND prg12.mg AND prg22.mei AND prg32.mei AND prg42.mgm AND prg52.mgm THEN carrera.electronico');


$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mdt AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');


$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mdt AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.md AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');


$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mei AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mei AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.md AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mdt AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.md AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mei AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.md AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.md AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mdt AND prg52.mei THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mdt THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.md THEN carrera.mecatronica');
$x->addRule('IF prg2.mei AND prg12.mei AND prg22.mdt AND prg32.mdt AND prg42.mei AND prg52.mei THEN carrera.mecatronica');

$prueba_fuzzy=Pruebas::query()->where('id_estudiante','=',$dataUser["ciOid"])->get();
$prueba_fuzzy=Respuestas::query()->where('id_prueba','=',$prueba_fuzzy[0]['id'])->get();
$prg1 = $prueba_fuzzy[1]['valor']*20;
$prg2 = $prueba_fuzzy[11]['valor']*20;
$prg3 = $prueba_fuzzy[21]['valor']*20;
$prg4 = $prueba_fuzzy[31]['valor']*20;
$prg5 = $prueba_fuzzy[41]['valor']*20;
$prg6 = $prueba_fuzzy[51]['valor']*20;

$x->setRealInput('prg2',$prg1);
$x->setRealInput('prg12',$prg2);
$x->setRealInput('prg22',$prg3);
$x->setRealInput('prg32',$prg4);
$x->setRealInput('prg42',$prg5);
$x->setRealInput('prg52',$prg6);
$fuzzy_arr = $x->calcFuzzy();
$probCarrera = $fuzzy_arr['carrera'];
if($probCarrera>50)
{
    $carrera="INGENIERIA MECATRONICA";
}
else
{
    $probCarrera=100-$probCarrera;
    $carrera="INGENIERIA EN SISTEMAS ELECTRONICOS";
}

?>