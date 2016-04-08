<?php

namespace tongtoanbs;

/**
 * Class Pdflib
 *
 * @author Jackson Tong <jackson@snapfrozen.com.au>
 * @link http://www.pdflib.com/fileadmin/pdflib/pdf/manuals/PDFlib-9.0.6-API-reference.pdf
 * @version 9.0.6
 *
 * @method boolean begin_document(string $filename, string $optlist)
 * @method void begin_page_ext(string $optlist)
 * @method void close_pdi_page(integer $page)
 * @method void end_document(string $optlist)
 * @method void end_page_ext(string $optlist)
 * @method void fit_pdi_page(integer $page, float $x, float $y, string $optlist)
 * @method resource get_buffer()
 * @method string get_errmsg()
 * @method boolean|integer open_pdi_document(string $filename, string $optlist)
 * @method boolean|mixed open_pdi_page(integer $doc, integer $pagenumber, string $optlist)
 * @method boolean|integer pcos_get_number(integer $doc, string $path)
 * @method void set_info() set_info(string $key, string $value)
 * @method void set_option(string $optlist)
 */
class Pdflib extends  \Pdflib
{

}