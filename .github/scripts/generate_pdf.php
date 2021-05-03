<?php

require __DIR__ . '/../../vendor/autoload.php';

use Knp\Snappy\Pdf;
use OAndreyev\WKHTMLToPDF\WKHTMLToPDF;

$snappy = new Pdf();
$snappy->setBinary(WKHTMLToPDF::PATH);
echo $snappy->getOutputFromHtml('<p>foobar</p>');
