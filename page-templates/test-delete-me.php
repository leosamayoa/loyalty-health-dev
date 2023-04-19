<?php

/**
 * Template Name: Delete Me
 *
 * This is the same as the blank template but queries the correct JS
 *
 * @package understrap
 */

// ck_b0b46fbbb11ec310407bf0809cbd26abbb380152

// cs_b7b2f3d842d245ae2e08efa7ba24c9ff429e977a


require_once 'dompdf/autoload.inc.php'; // Replace with the actual path to the autoload file
use Dompdf\Dompdf;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$dompdf = new Dompdf();
$header_html = '<div style="text-align:center; font-size: 12px;"><img src="https://loyaltyhea1dev.wpengine.com/wp-content/uploads/2022/10/cropped-LH-logo-color-FontRaleway-jpg@2x.png" alt="Loyalty Health"> </div>';
$html = file_get_contents('https://loyaltyhea1dev.wpengine.com/quick-start');

$final_html = get_stylesheet_directory_uri() . '/template-parts/pdf-render.php';
$get_file = file_get_contents($final_html);

// $gform_form = do_shortcode('[gravityform id="2" title="true"]');

// echo '<pre>';
//     print_r($gform_form);
// echo '</pre>';

// echo '<pre>';
//     print_r($final_html);
// echo '</pre>';

// print_r($final_html);

// set the header options
    $options = [
        'isPhpEnabled' => true,
        'header-html' => $header_html,
        'header-spacing' => '10',
    ];

    $dompdf->loadHtml($get_file);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->output('example.pdf');

    $dompdf->stream('document.pdf', array('Attachment' => false));
    $pdf_template = GPDFAPI::get_template( $template_id );
    // $pdf_data = GPDFAPI::generate_pdf( $pdf_template, $entries );
    // file_put_contents( 'my-pdf-file.pdf', $pdf_data );
    
    // Output the PDF file
    // header('Content-Type: application/pdf');
    // header('Content-Disposition: attachment; filename="my_pdf.pdf"');
    echo $pdf_data;