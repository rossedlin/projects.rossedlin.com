<?php
namespace MarcoVerch;

require_once(__DIR__ . '/src/Api.php');

/**
 * Billomat
 */
require_once(__DIR__ . '/src/Billomat.php');
require_once(__DIR__ . '/src/Billomat/Url.php');
require_once(__DIR__ . '/src/Billomat/Objects/Email.php');
require_once(__DIR__ . '/src/Billomat/Objects/Invoice.php');

/**
 * Mandrill
 */
require_once(__DIR__ . '/src/Mandrill.php');
require_once(__DIR__ . '/src/Mandrill/Url.php');
require_once(__DIR__ . '/src/Mandrill/Objects/Message.php');

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 08/09/2017
 * Time: 10:44
 */

use MarcoVerch\Billomat\Objects\Invoice;

$invoice_id = (int)$_GET['invoice_id'];

if ($invoice_id)
{
	$invoice = new Invoice();
	$invoice->setId($invoice_id);

	try
	{
		if (Billomat::setInvoiceComplete($invoice))
		{
			echo "I've successfully updated the invoice: " . $invoice->getId();
		}
	}
	catch (\Exception $e)
	{
		echo "Hmmmm, something went wrong, <b>don't worry I'm a safe way of throwing an error</b> so I can be handled!<br />";
		echo "Here is the error response...<br /><br />";
		print_r($e->getMessage());
	}
}
else
{
	echo "http://code.cuttingweb.co.uk/marco-verch/index.php<span style='color: #aa0000;'>?invoice_id=12345678</span>";
}