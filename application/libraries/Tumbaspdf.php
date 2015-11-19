<?php
/**
 * Tumbaspdf, create PDF document is easy guys!
 *
 * @author tumbas
 */
require_once(APPPATH.'/third_party/html2pdf/html2pdf.class.php');

class Tumbaspdf extends Html2pdf {

  protected $author;
  protected $title;
  protected $subject;
  protected $keywords;

  public function generate_pdf($html = '', $filename = 'Document', $orientation = 'P') {
    //Author
    $author = ($this->author != '') ? $this->author : $filename; 
    $this->pdf->SetAuthor($author);
    //Title
    $title = ($this->title != '') ? $this->title : $filename; 
    $this->pdf->SetTitle($title);
    //Subject
    $subject = ($this->subject != '') ? $this->subject : $filename; 
    $this->pdf->SetSubject($subject);
    //Keyword
    $keywords = ($this->keywords != '') ? $this->keywords : $filename;
    $this->pdf->SetKeywords($keywords);
    //Orientation
    $this->_orientation = $orientation;
    //Generate PDF
    $this->WriteHTML($html);
    $this->Output($filename.'.pdf', 'I');
  }
  
  public function set_author($param) {
    $this->author = $param;
  }
  
  public function set_title($param) {
    $this->title = $param;
  }
  
  public function set_subject($param) {
    $this->subject = $param;
  }
  
  public function set_keywords($param) {
    $this->keywords = $param;
  }
  
}

?>
