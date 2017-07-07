<?php
	$list = array(
	array('id'=>1, 'pid'=>1, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>1, 'pid'=>1, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>1, 'pid'=>1, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>1, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>1, 'pid'=>1, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>1, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),

	array('id'=>1, 'pid'=>2, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>1, 'pid'=>2, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>1, 'pid'=>2, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>1, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>1, 'pid'=>2, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>1, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发'),

	array('id'=>2, 'pid'=>1, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>2, 'pid'=>1, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>2, 'pid'=>1, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>2, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>2, 'pid'=>1, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>2, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),

	array('id'=>2, 'pid'=>2, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>2, 'pid'=>2, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>2, 'pid'=>2, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>2, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>2, 'pid'=>2, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>2, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发'),

	array('id'=>3, 'pid'=>1, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>3, 'pid'=>1, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>3, 'pid'=>1, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>3, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>3, 'pid'=>1, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>3, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),

	array('id'=>3, 'pid'=>2, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>3, 'pid'=>2, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>3, 'pid'=>2, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>3, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>3, 'pid'=>2, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>3, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发'),

	array('id'=>4, 'pid'=>1, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>4, 'pid'=>1, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>4, 'pid'=>1, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>4, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>4, 'pid'=>1, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>4, 'pid'=>1, 'text'=>'猪流感在广东群体性暴发'),

	array('id'=>4, 'pid'=>2, 'text'=>'河南再次发生矿难，死伤人数超砖石'),
	array('id'=>4, 'pid'=>2, 'text'=>'禽流感在全国物农延，温家宝指示'),
	array('id'=>4, 'pid'=>2, 'text'=>'南方大旱，农作物减产绝收面积上亩'),
	array('id'=>4, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发'),
	array('id'=>4, 'pid'=>2, 'text'=>'禽流感在全农作物继续蔓延，温家宝指示'),
	array('id'=>4, 'pid'=>2, 'text'=>'猪流感在广东群体性暴发')
	);

	$id=$_GET['index'];
	$newArr=Array();
	foreach ($list as $key => $val) {
		if($id==$val['id']){
			$newArr[]=$val;
			
		};
		if($id==$val['id']){
			$newArr[]=$val;
			
		};
		if($id==$val['id']){
			$newArr[]=$val;
			
		};
		if($id==$val['id']){
			$newArr[]=$val;
		};
	};
	echo json_encode($newArr);
?>