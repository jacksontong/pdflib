<?php

namespace toantv;

/**
 * Class Pdflib
 *
 * @author Jackson Tong <jackson@snapfrozen.com.au>
 * @link http://www.pdflib.com/fileadmin/pdflib/pdf/manuals/PDFlib-9.0.6-API-reference.pdf
 * @version 9.0.6
 */
class Pdflib extends  \Pdflib
{
    /**
     * Set one or more global options.
     * @param string $optlist An option list specifying global options
     * @return void
     */
    public function set_option($optlist)
    {
        parent::set_option($optlist);
    }

    /**
     * Create a new PDF document subject to various options.
     * @param string $filename Absolute or relative name of the PDF output file to be generated.
     * Iffilename is empty, the PDF document will be generated in memory instead of on file,
     * and the generated PDF data must be fetched by the client with the @see get_buffer()
     * function. On Windows it is OK to use UNC paths or mapped network drives.
     * @param string $optlist An option list specifying document options
     * @return boolean If filename is empty this function will always succeed,
     * and never return the error value.
     */
    public function begin_document($filename,$optlist)
    {
        return parent::begin_document($filename,$optlist);
    }

    /**
     * Fill document information field key with value.
     * @param $key (Name string) The name of the document info field, which may be any of the standard
     * names, or an arbitrary custom name (see Table 14.1). There is no limit for the number
     * of custom fields. Regarding the use and semantics of custom document information
     * fields, PDFlib users are encouraged to take a look at the Dublin Core Metadata element
     * set.
     * @param string $value (Hypertext string) The string to which the key parameter will be set. Acrobat imposes
     * a maximum length of value of 255 bytes.
     * @return void
     */
    public function set_info($key, $value)
    {
        parent::set_info($key, $value);
    }

    /**
     * Open a disk-based or virtual PDF document and prepare it for later use.
     * @param string $filename Name of the PDF file.
     * @param string $optlist An option list specifying PDF open options
     * @return boolean|integer A PDI document handle which can be used for processing individual pages of the document
     * or for querying document properties. A return value of 0 indicates that
     * the PDF document couldn’t be opened. An arbitrary number of PDF documents can be
     * opened simultaneously. The return value can be used until the end of the enclosing
     * document scope. If the function call fails you can request the reason of the failure with
     * @see get_errmsg() The error behavior can be changed with the errorpolicy option.
     */
    public function open_pdi_document($filename, $optlist)
    {
        return parent::open_pdi_document($filename, $optlist);
    }

    /**
     * Get the text of the last thrown exception or the reason of a failed function call.
     * @return string Text containing the description of the most recent error condition.
     */
    public function get_errmsg()
    {
        return parent::get_errmsg();
    }

    /**
     * @param integer $doc
     * @param string $path
     * @return boolean|integer The numerical value of the object identified by the pCOS path. For Boolean values 1 will
     * be returned if they are true, and 0 otherwise
     */
    public function pcos_get_number($doc, $path)
    {
        return parent::pcos_get_number($doc, $path);
    }

    /**
     * @param integer $doc A valid PDF document handle
     * retrieved with @see open_pdi_document()
     * @param integer $pagenumber The number of the page to be opened. The first page has page number.
     * @param string $optlist An option list specifying page-specific options
     * @return boolean|mixed A PDI page handle which can be used
     * for placing pages with @see fit_pdi_page(). A return
     * value of -1 (in PHP: 0) indicates that the page couldn’t be opened. If the function call fails
     * you can request the reason of the failure
     * with @see get_errmsg()
     * The returned handle can be used until the end of the
     * enclosing document scope. If the infomode option was
     * true when the document has been opened with @see open_pdi_document(), the handle
     * can not be used with @see open_pdi_page().
     * The error behavior can be changed with the errorpolicy option.
     */
    public function open_pdi_page($doc, $pagenumber, $optlist)
    {
        parent::open_pdi_page($doc, $pagenumber, $optlist);
    }

    /**
     * Add a new page to the document and specify various options.
     * @param float $width
     * @param float $height
     * The width and height parameters are the dimensions of the new page in
     * points (or user units, if the userunit option has been specified). They can be overridden
     * by the options with the same name (the dummy value 0 can be used for the parameters
     * in this case). A list of commonly used page formats can be found in Table 3.8. The PDFlib
     * Tutorial lists applicable page size limits in Acrobat. See also Table 3.9 for more details
     * (options width and height).
     * @param string $optlist An option list with page options according to Table 3.9. These options have lower
     * priority than identical options specified in @see end_page_ext()
     * action, artbox, associatedfiles, bleedbox, blocks, cropbox, defaultcmyk, defaultgray, defaultrgb,
     * duration, group, height, label, mediabox, metadata, pagenumber, rotate, separationinfo,
     * taborder, topdown, transition, transparencygroup, trimbox, userunit, viewports, width
     * @return void
     */
    public function begin_page_ext($width, $height, $optlist)
    {
        parent::begin_page_ext($width, $height, $optlist);
    }

    /**
     * Finish a page and apply various options.
     * @param string $optlist An option list according to Table 3.9.
     * Options specified in @see end_page_ext()
     * have priority over identical options specified in @see begin_page_ext()
     * @return void
     */
    public function end_page_ext($optlist)
    {
        parent::end_page_ext($optlist);
    }

    /**
     * Place an imported PDF page on the output page subject to various options.
     * @param int $page A valid PDF page handle (not a page number!)
     * retrieved with @see open_pdi_page()
     * The infomode option must have been false when opening the document. The
     * page handle must not have been closed.
     * @param float $x
     * @param float $y
     * The coordinates of the reference point in the user coordinate system where the
     * page will be located, subject to various options.
     * @param string $optlist An option list specifying page options
     * @return void
     */
    public function fit_pdi_page($page, $x, $y, $optlist)
    {
        parent::fit_pdi_page($page, $x, $y, $optlist);
    }

    /**
     * Close the page handle and free all page-related resources.
     * @param integer $page A valid PDF page handle (not a page number!)
     * retrieved with @see open_pdi_page().
     * @return void
     */
    public function close_pdi_page($page)
    {
        parent::close_pdi_page($page);
    }

    /**
     * Close the generated PDF document and apply various options.
     * @param string $optlist An option list specifying
     * document processing options
     * @return void
     */
    public function end_document($optlist)
    {
        parent::end_document($optlist);
    }

    /**
     * Get the contents of the PDF output buffer.
     * @return resource A buffer full of binary PDF data for consumption by the client. The function returns a
     * language-specific data type for binary data. The returned buffer must be used by the client
     * before calling any other PDFlib function.
     */
    public function get_buffer()
    {
        return parent::get_buffer();
    }
}