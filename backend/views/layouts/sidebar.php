<?php

use yii\helpers\Url;
use yii\helpers\Html;

$MODULE_OBJECT = Yii::$app->controller->module;
$module_name = (isset($MODULE_OBJECT->module->id)?$MODULE_OBJECT->module->id:'');
$controllers_name = (isset($MODULE_OBJECT->module->module->controller->id)?$MODULE_OBJECT->module->module->controller->id:'');
$submodule_name = $MODULE_OBJECT->id;
?>

<section class="sidebar">
    <ul class="sidebar-menu">
        <li class="header"><?php echo $controllers_name; ?>MAIN NAVIGATION <?php print_r(Yii::$app->controller->module) ?></li>
        <?php foreach ($adminmenus as $key => $menu): ?>
  <?php $firstchild = $menu['menu_has_child']; ?>
  <?php if (!empty($firstchild)) { ?>
            <li class="treeview <?php echo ($menu['menu_id'] == $module_name ? 'active' : ''); ?>">
                <a href="<?php echo ($menu['menu_url'] == '#' ? 'javascript:void(0)' : $menu['menu_url']) ?>">
                    <i class="<?php echo $menu['menu_icon_class'] ?>"></i><span><?php echo $menu["menu_title"] ?></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
    <?php foreach ($firstchild as $firstchildKey => $firstchildMenu): ?>
                      <li class="<?php echo ($firstchildMenu['menu_id'] == $submodule_name ? 'active' : ''); ?>">
                          <a href="<?php echo ($firstchildMenu['menu_url'] == '#' ? 'javascript:void(0)' : $firstchildMenu['menu_url']) ?>">
                              <i class="<?php echo $firstchildMenu["menu_icon_class"] ?>"></i><?php echo $firstchildMenu["parent_menu_name"] ?><i class="fa fa-angle-left pull-right"></i>
                          </a>
                              <?php if (!empty($firstchildMenu["submenu"])): ?>
                            <ul class="treeview-menu">
                                <?php foreach ($firstchildMenu["submenu"] as $secondchildKey => $secondchildMenu): ?>
          <?php $links = Yii::$app->urlManager->createUrl([$menu["menu_id"] . '/' . $firstchildMenu["menu_id"] . '/' . $secondchildMenu["url"]]); ?>
                                      <?php $links = ($secondchildMenu['url'] == '#' ? 'javascript:void(0)' : $links); ?>
                                  <li class="<?php echo ($secondchildMenu['menu_id'] == $controllers_name ? 'active' : ''); ?>">
                                      <a href="<?php echo $links ?>"><i class="<?php echo $secondchildMenu["menu_icon_class"] ?>"></i><?php echo $secondchildMenu["name"] ?></a>
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