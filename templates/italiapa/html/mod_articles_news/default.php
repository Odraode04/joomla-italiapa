<?php
/**
 * @package		Template ItaliaPA
 * @subpackage	tpl_italiapa
 *
 * @author		Helios Ciancio <info@eshiol.it>
 * @link		http://www.eshiol.it
 * @copyright	Copyright (C) 2017 Helios Ciancio. All Rights Reserved
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL v3
 * Template ItaliaPA is free software. This version may have been modified
 * pursuant to the GNU General Public License, and as distributed it includes
 * or is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die;
JLog::add(new JLogEntry(__FILE__, JLog::DEBUG, 'tpl_italiapa'));

JFactory::getLanguage()->load('com_content');

if ($module->position == 'featured') :
?>
<div class="u-layout-centerContent u-background-grey-20 <?php echo $moduleclass_sfx; ?>">
	<section class="u-layout-wide u-padding-top-xxl u-padding-bottom-xxl">
		<h2 id="news<?php echo $module->id?>" class="u-text-r-l u-padding-r-bottom">
			<a class="u-color-50 u-textClean u-text-h3 " href=""><?php echo $module->title; ?></a>
		</h2>

		<div class="Grid Grid--withGutter">

			<?php
			if (($n = json_decode($module->params)->bootstrap_size) == 0)
			{
				// minimo 4 cells massimo 6 per riga
				$n = min(6, max(4, count($list)));
			}
			foreach ($list as $item) : ?>
			<div class="Grid-cell u-md-size1of<?php echo $n; ?> u-lg-size1of<?php echo $n; ?>">
				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_cell'); ?>
			</div>
			<?php endforeach; ?>

		</div>
		<?php
		$catid = json_decode($module->params)->catid;
		if (is_array($catid = json_decode($module->params)->catid) && (count($catid) == 1)) {
			$link = JRoute::_(ContentHelperRoute::getCategoryRoute($catid[0]));
			echo JLayoutHelper::render('eshiol.content.readall', array('params' => $params, 'link' => $link));
		}
		?>
	</section>
</div>
<?php elseif ($module->position == 'news') : ?>
<div class="u-background-compl-10 u-layout-centerContent u-padding-r-top <?php echo $moduleclass_sfx; ?>">

	<section class="u-layout-wide u-layout-r-withGutter u-text-r-s u-padding-r-top u-padding-r-bottom">

		<h2 id="news<?php echo $module->id?>" class="u-layout-centerLeft u-text-r-s">
			<a class="u-color-50 u-textClean u-text-h3 " href=""><?php echo $module->title; ?></a>
		</h2>

		<div class="Grid Grid--withGutterM">

			<?php
			if (($n = json_decode($module->params)->bootstrap_size) == 0)
			{
				// minimo 3 cards massimo 6 per riga
				$n = min(6, max(3, count($list)));
			}
			foreach ($list as $item) : ?>
			<div class="Grid-cell u-md-size1of<?php echo $n; ?> u-lg-size1of<?php echo $n; ?> u-flex u-margin-r-bottom u-flexJustifyCenter">
				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_card'); ?>
			</div>
			<?php endforeach; ?>

		</div>
		<?php
		$catid = json_decode($module->params)->catid;
		if (is_array($catid = json_decode($module->params)->catid) && (count($catid) == 1)) {
			$link = JRoute::_(ContentHelperRoute::getCategoryRoute($catid[0]));
			echo JLayoutHelper::render('eshiol.content.readall', array('params' => $params, 'link' => $link));
		}
		?>
	</section>
</div>
<?php endif; ?>
