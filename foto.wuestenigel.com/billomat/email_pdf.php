<?php
namespace MarcoVerch;

require_once(__DIR__ . '/src/Api.php');
require_once(__DIR__ . '/src/Request.php');

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

use MarcoVerch\Billomat\Objects\Invoice;

/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 08/09/2017
 * Time: 19:35
 */

$invoice_id = (int)Request::get('invoice_id');

$email   = Request::get('email');
$email   = "marco.verch@gmail.com";
$name    = Request::get('name');
$subject = Request::get('subject');

$text = Request::get('text');

$email_bcc = Request::get('email_bcc');
$name_bcc  = Request::get('name_bcc');

$domain        = Request::get('domain');
$amountTotal   = Request::get('amountTotal');
$invoiceNumber = Request::get('invoiceNumber');


if ($invoice_id == 0 || $email === false)
{
	echo "Missing Arguments";
	exit;
}

$invoice = new Invoice();
$invoice->setId($invoice_id);

$invoiceArray = Api::xmlToArray(Billomat::getInvoice($invoice));
$pdf          = Api::xmlToArray(Billomat::getInvoicePdf($invoice));

$invoiceArrayTaxes    = Request::getFromArray($invoiceArray, 'taxes', []);
$invoiceArrayTaxesTax = Request::getFromArray($invoiceArrayTaxes, 'tax', []);
$amount_gross_rounded = Request::getFromArray($invoiceArrayTaxesTax, 'amount_gross_rounded');

/**
 * Set Invoice Amount / Number
 */
$amountTotal   = Api::pricify_two_decimal($amount_gross_rounded);
$invoiceNumber = Request::getFromArray($invoiceArray, 'invoice_number');

$message = new Mandrill\Objects\Message($name, $email);

if (isset($pdf['mimetype']) && isset($pdf['filename']) && isset($pdf['base64file']))
{
	$message->addAttachment($pdf['mimetype'], $pdf['filename'], $pdf['base64file']);
}

$subject = "Rechnung für Fotonutzung auf " . $domain;
if ($subject)
{
	$message->setSubject($subject);
}

$text = "
Sehr geehrte Damen und Herren,<br><br>

anbei erhalten Sie Rechnung $invoiceNumber über $amountTotal Euro für die Nutzung eines meiner Fotos auf $domain.<br><br>

Ich bitte um Zahlung innerhalb von 14 Tagen auf folgendes Konto:<br><br>

IBAN: DE51200100200708888201<br>
BIC: PBNKDEFF<br><br>

Nach Ablauf der Frist werde ich den Fall meinem Anwalt übergeben.<br><br>

Haben Sie Fragen? Probieren Sie es telefonisch unter 0221 99750813 oder vereinbaren Sie hier einen Rückruf: https://calendly.com/verch/lizenz<br><br>
Mit freundlichen Grüßen<br>
Marco Verch<br><br>

Web: foto.wuestenigel.com<br>
Oskar-Jäger-Str. 9, 50931 Köln<br>
USt-IdNr.: DE815414509<br>";


if ($text)
{
	$message->setText($text);
}
$from_name = "Marco Verch";
$name_bcc  = "Marco Verch";
// $email_bcc = "marco.verch@gmail.com";

if ($email_bcc)
{
	$message->addEmail($name_bcc, $email_bcc, 'bcc');
}

if ($from_name)
{
	$message->setFromName($from_name);
}

print_r(json_decode(Mandrill::sendMessages($message)));