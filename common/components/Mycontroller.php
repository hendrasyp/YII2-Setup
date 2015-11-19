<?php
namespace common\components;

class Mycontroller extends \yii\web\Controller
{
    public $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']]
    ];
	
	public function define_adminMenus()
	{
		$menus = array(
			array(
				'menu_name'=>'Dashboard',
				'menu_title'=>'Dashboard',
				'menu_icon_class'=>'fa fa-dashboard',
				'menu_url'=>Url::base(),
				'menu_has_child'=>array()
				),
			);
		return $menus;
		
	}
}

?>