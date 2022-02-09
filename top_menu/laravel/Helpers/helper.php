<?php 
use Illuminate\Support\Facades\DB;
 function labels_menu(){

    $lmsg = array(  

        1 => "New",
        2 => "Edit",
        3 => "Approve",
        4 => "Disapprove",
        5 => "Trash",
        6 => "Preview",
        7 => "Waiting for approval",
        8 => "Default",
        9 => "Menus",
        10 => "Back",
        11 => "Media",
        12 => "Category",
        13 => "Blogs",
        14 => "Cancel",
        15 => "Save",
        16 => "Approve Status",
        17 => "View only Set",
        18 => "View only unset",
        19 => "View All",
        20 => "Latest News",
        21 => "Latest  Press Releases",
        22 => "Unset Default",
        23 => "Topic",
        24 => "Glossary",
        25 => "View",
        26 => "CMS Activate",
        27 => "Experience Certificate",
        28 => "Salary Certificate",
        29 => "Employee Status",
        30 => "Reject",
        31 => "OTP Enable",
        32 => "Import",
        33 => "Export",
        34 => "Apply DDL/DCL",
);

return  $lmsg;

}



function incre($id){

    $id = $id+1;

    return $id;
}


function getTopNavCat(){
    $result=DB::table('menus')
            ->where(['publish'=>1])
            ->get();
            $arr=[];
    foreach($result as $row){
        $arr[$row->id]['name']=$row->name;
        $arr[$row->id]['parent']=$row->parent;
    }
    $str=buildTreeView($arr,0);
    return $str;
}

$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($arr as $id=>$data){
		if($parent==$data['parent']){
			if($level>$prelevel){
				if($html==''){
					$html.='<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">';
				}else{
					$html.='<ul class="sub-menu" style="display: none;">';
				}
				
			}
			if($level==$prelevel){
				$html.='</li>';
			}
			$html.='<li><a href="#">'.$data['name'].'<span class="caret"></span></a>';
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</li></ul>';
	}
	return $html;
}

