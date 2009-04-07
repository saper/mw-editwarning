<?php

/**
 * EditWarningMsgFactory interface
 * 
 * This file is part of the MediaWiki extension EditWarning. It contains
 * the interface for EditWarningMessage subclass factories.
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @author		Thomas David <ThomasDavid@gmx.de>
 * @copyright	2007-2009 Thomas David <ThomasDavid@gmx.de>
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU GPL 2.0 or later
 * @version		0.4-prealpha
 * @category	Extensions
 * @package		EditWarning
 */

interface EditWarningMsgFactory {
	public static function getInstance( $type, $url = null, $params = null );
}
