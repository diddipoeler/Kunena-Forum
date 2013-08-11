<?php
/**
 * Kunena Component
 * @package Kunena.Template.Crypsis
 * @subpackage Topic
 *
 * @copyright (C) 2008 - 2013 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<div style="width:auto; height:auto;">
	<div id="messages" style="list-style:none;text-align:center;margin:5px;">
		<div class="pros">
			<?php if (($avatar = $this->user->getAvatarImage('', 'post'))) echo $this->user->getLink($avatar); ?>
			<div class="infos">
				<a href="http://twitter.com/kunena" class="sprite twitter">@kunena</a>
				<a href="http://www.facebook.com/kunena" class="sprite facebook">kunena</a>
				<a href="http://github.com/kunena" class="sprite github">@kunena</a>
				<a href="skype" class="sprite skype">@skype</a>
				<a href="pm" class="sprite email">@PM</a>
			</div>
		</div>
	</div>
</div>
