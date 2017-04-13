/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <remi.jean@outlook.com>
 * @copyright Copyright (C) 2008-2017, Rémi Jean
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

/**
 * Soumission du formulaire pour enregistrer en brouillon
 */
$("#newsEditDraft").on("click", function() {
	$("#newsEditState").val(0);
	$("#newsEditForm").trigger("submit");
});