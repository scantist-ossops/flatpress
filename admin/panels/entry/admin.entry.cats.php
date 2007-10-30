<?php

/**
 * plugin control panel
 *
 * Type:     
 * Name:     
 * Date:     
 * Purpose:  
 * Input:
 *         
 * @author NoWhereMan <real_nowhereman at users dot sf dot com>
 *
 */
 
 
 	class admin_entry_cats extends AdminPanelActionValidated {
		
		var $validators = array(array('content', 'content', 'notEmpty', false, false, 'trim,stripslashes'));
		var $events = array('save');
		
		
		function main() {
			
			if (isset($_GET['do']) && $_GET['do'] == 'clear') {
				$ret1 = fs_delete(CONTENT_DIR . 'categories_encoded.dat') &&
				$ret2 = fs_delete(CONTENT_DIR . 'categories.txt');
				
				$ret  = ($ret1 && $ret2) ? 2 : -2;
				
				$this->smarty->assign('success', $ret);
			}
			
			if (file_exists(CONTENT_DIR . 'categories.txt')) {
				$cats = io_load_file(CONTENT_DIR . 'categories.txt');
				$this->smarty->assign('catdefs', $cats);
			}
			
			do_action('update_categories', true);
			
			return 0;
	
			
		}
		
		
		function onsave() {
				
			$str=(stripslashes($_POST['content']));
			$success = io_write_file(CONTENT_DIR . 'categories.txt', $str);
			entry_categories_encode();
			$this->smarty->assign('success', ( $success )? 1 : -1 );
			$this->smarty->assign('catdefs', $str);

			return PANEL_REDIRECT_CURRENT;
			
		}
		
	}
 	
 ?>
