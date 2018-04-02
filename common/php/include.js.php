<?php
	function base_include_js() {
		static $output ;
		
		$output = "<script src=\"//code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>" ;
		$output.= "<script src=\"/common/js/alert.js\"></script>" ;
		$output.= "<script src=\"/common/js/jquery.sequence-min.js\"></script>" ;
		$output.= "<script src=\"/common/js/jquery.fancybox.pack.js\"></script>" ;
		$output.= "<script src=\"/common/js/jquery.scrollUp.min.js\"></script>" ;
		$output.= "<script src=\"/common/js/jquery.smoothscroll.min.js\"></script>" ;
		$output.= "<script src=\"/common/js/jquery.meanmenu.min.js\"></script>" ;
		$output.= "<script src=\"/common/js/pace.min.js\"></script>" ;
		$output.= "<script src=\"/common/js/jquery.flexslider-min.js\"></script>" ;
 		$output.= "<script src=\"/common/js/custom.js\"></script>" ;
 		
 		return $output ;
	}
?>