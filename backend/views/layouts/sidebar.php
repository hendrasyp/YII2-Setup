<?php

use yii\helpers\Url;
use yii\helpers\Html;

$MODULE_OBJECT = Yii::$app->controller->module;
$module_name = (isset($MODULE_OBJECT->module->id)?$MODULE_OBJECT->module->id:'');
$controllers_name = (isset($MODULE_OBJECT->module->module->controller->id)?$MODULE_OBJECT->module->module->controller->id:'');
$submodule_name = $MODULE_OBJECT->id;
$cname = Yii::$app->controller->id;
?>

<section class="sidebar">
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <?php foreach ($adminmenus as $key => $menu): ?>
  <?php $firstchild = $menu['submenu']; ?>
  <?php if (!empty($firstchild)) { ?>
					<?php 
					$classActive = '';
					if ($menu['menu_id'] == $submodule_name)
					{
						$classActive = 'class="treeview active"';
					}
					if ($menu['menu_id'] == $module_name)
					{
						$classActive = 'class="treeview active"';
					}
					?>
            <li <?php echo $classActive?>">
                <a href="<?php echo ($menu['menu_url'] == '#' ? 'javascript:void(0)' : $menu['menu_url']) ?>">
                    <i class="<?php echo $menu['menu_icon_class'] ?>"></i><span><?php echo $menu["menu_title"] ?> </span>
										<i class="fa fa-angle-left pull-right"></i>
                </a>
								<?php 
									$classActive = '';
									if ($menu['menu_id'] == $submodule_name)
									{
										$classActive = 'class="treeview-menu menu-open" style="display: block;"';
									}
									else{
										$classActive = 'class="treeview-menu"';
									}
								?>
                <ul <?php echo $classActive;?>>
    <?php foreach ($firstchild as $firstchildKey => $firstchildMenu): ?>
		<?php 
			$classActive = '';
			if ($firstchildMenu['menu_id'] == $submodule_name)
			{
				$classActive = 'class="active"';
			}
			if ($firstchildMenu['menu_id'] == $cname)
			{
				$classActive = 'class="active"';
			}
		?>
                      <li <?php echo $classActive ?>>
											<?php 
												$companyLink = 'javascript:void(0)' ;
												if ($firstchildMenu['menu_url'] == '#')
												{
													$companyLink = 'javascript:void(0)' ;
												}
												elseif($firstchildMenu['menu_url']=='##')
												{
													if (Yii::$app->user->identity->is_admin==1){
														$companyLink = '/admin/'.$menu['menu_id'].'/companies/index';
													}else{
														$companyLink = '/admin/'.$menu['menu_id'].'/companies/update?id='.Yii::$app->user->identity->company_id;
													}
												}else{
													$companyLink = $firstchildMenu['menu_url'];
												}
											?>
                          <a class="<?php echo $firstchildMenu['parent_of'];?>" href="<?php echo $companyLink; ?>">
                              <i class="<?php echo $firstchildMenu["menu_icon_class"] ?>"></i><?php echo $firstchildMenu["parent_menu_name"] ?>
															<?php if (sizeof ($firstchildMenu['submenu'])) : ?>
															<i class="fa fa-angle-left pull-right"></i>
															<?php endif; ?>
                          </a>
                              <?php if (!empty($firstchildMenu["submenu"])): ?>
                            <ul class="treeview-menu">
                                <?php foreach ($firstchildMenu["submenu"] as $secondchildKey => $secondchildMenu): ?>
          <?php $links = Yii::$app->urlManager->createUrl([$menu["menu_id"] . '/' . $firstchildMenu["menu_id"] . '/' . $secondchildMenu["url"]]); ?>
                                      <?php $links = ($secondchildMenu['url'] == '#' ? 'javascript:void(0)' : $links); ?>
                                  <li class="<?php echo ($secondchildMenu['menu_id'] == $controllers_name ? 'active' : ''); ?>">
                                      <a href="<?php echo $links ?>"><i class="<?php echo $secondchildMenu["menu_icon_class"] ?>"></i>
																			<?php echo $secondchildMenu["name"] ?>
																			<?php if (sizeof ($secondchildMenu['submenu'])) : ?>
																			<i class="fa fa-angle-left pull-right"></i>
																			<?php endif; ?>
																			</a>
                                          <?php if (!empty($secondchildMenu["submenu"])): ?>
                                        <ul class="treeview-menu">
                                            <?php foreach ($secondchildMenu["submenu"] as $thirdchildKey => $thirdchildMenu): ?>
              <?php $links = Yii::$app->urlManager->createUrl([$menu["menu_id"] . '/' . $firstchildMenu["menu_id"] . '/' . $thirdchildMenu["url"]]); ?>
              <?php $links = ($thirdchildMenu['url'] == '#' ? 'javascript:void(0)' : $links) ?>
                                              <li class="<?php echo ($thirdchildMenu['menu_id'] == $controllers_name ? 'active' : ''); ?>">
                                                  <a href="<?php echo $links; ?>"><i class="<?php echo $thirdchildMenu["menu_icon_class"] ?>"></i> <?php echo $thirdchildMenu["name"] ?></a>
                                              </li>
                                        <?php endforeach; ?>
                                        </ul>
                                  <?php endif; ?>
                                  </li>
                            <?php endforeach; ?>
                            </ul>
                      <?php endif; ?>
                      </li>
            <?php endforeach; ?>
                </ul>
            </li>
  <?php }else { ?>
            <li class="<?php echo ($module_name==''?'active':'')?>">
                <a href="<?php echo ($menu['menu_url']=='#1'?Url::base():$menu['menu_url']) ?>">
                    <i class="<?php echo $menu["menu_icon_class"] ?>"></i> <span><?php echo $menu["menu_title"] ?></span></i>
                </a>
            </li>
  <?php } ?>
<?php endforeach; ?>
    </ul>
</section>