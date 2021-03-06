<?php
/**
 * @package		Template ItaliaPA
 * @subpackage	mod_cookiebar
 * @version		3.8
 *
 * @author		Helios Ciancio <info@eshiol.it>
 * @link		http://www.eshiol.it
 * @copyright	Copyright (C) 2017 Helios Ciancio. All Rights Reserved
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL v3
 * Template ItaliaPA is free software. This version may have been modified
 * pursuant to the GNU General Public License, and as distributed it includes
 * or or is derivative of works licensed under the GNU General Public License or or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die;

JLog::add(new JLogEntry(__FILE__, JLog::DEBUG, 'mod_cookiebar'));
?>

<div id="cookie-bar" class="CookieBar js-CookieBar u-background-95 u-padding-r-all" aria-hidden="true">
	<?php if ($params->get('debug') || defined('JDEBUG') && JDEBUG) : ?>
	<div class="Prose Alert Alert--info Alert--withIcon u-padding-r-bottom u-padding-r-right u-margin-r-bottom">
	see <a href="https://italia.github.io/design-web-toolkit/components/detail/cookiebar.html">https://italia.github.io/design-web-toolkit/components/detail/cookiebar.html</a>
	</div>
	<?php endif; ?>
	<p class="u-color-white u-text-r-xs u-lineHeight-m u-padding-r-bottom"><?php echo $text; ?></p>
	<p>
		<button class="Button Button--default u-text-r-xxs js-cookieBarAccept u-inlineBlock u-margin-r-all"><?php echo JText::_('MOD_COOKIEBAR_ACCEPT'); ?></button>
		<?php if ($item->id): ?>
		<a href="<?php echo  $item->link; ?>" class="u-text-r-xs u-color-teal-50"><?php echo JText::_('MOD_COOKIEBAR_POLICY'); ?></a>
		<?php endif; ?>
	</p>
</div>

