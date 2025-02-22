<?php

	$lang['admin']['widgets']['submenu']['default'] = 'Διαχείριση στοιχείων';
	$lang['admin']['widgets']['submenu']['raw'] 	= 'Διαχείριση στοιχείων (κώδικας)';

	/* default action */
	
	$lang['admin']['widgets']['default'] = array(
		'head'		=> 'Διαχείριση στοιχείων (<em>πειραματικό στάδιο</em>)',
		
		'descr'		=> 	'Ένα <a class="hint" '.
						'href="https://wiki.flatpress.org/doc:techfaq#widgets" target="_blank" title="Τι είναι ένα στοιχείο;">'.
						'Στοιχείο</a> είναι ένα δυναμικό αντικείμενο προβολής διαφόρων δεδομένων και διάδρασης με τον χρήστη.
						Ενώ τα <strong>Θέματα</strong> αλλάζουν την εμφάνιση του ιστολογίου σας, τα Στοιχεία 
						<strong>επεκτείνουν</strong> την εμφάνιση και την λειτουργικότητα.</p>

						<p>Τα Στοιχεία μπορούν να συρθούν στις ειδικές περιοχές του θέματος σας που ονομάζονται 
						<strong>Θέσεις Στοιχείων</strong>. Η ποσότητα και τα ονόματα των Θέσεων Στοιχείων μπορεί να ποικίλει με βάση το 
						θέμα που έχετε επιλέξει.</p>

						<p>Το FlatPress παρέχεται με διάφορα στοιχεία: υπάρχουν στοιχεία που βοηθούν με την σύνδεση, που 
						εμφανίζουν ένα πεδίο αναζήτησης, και άλλα.</p>
						
						<p>Κάθε Στοιχείο ορίζεται από κάποιο <a class="hint" '.
						'href="https://wiki.flatpress.org/doc:techfaq#plugins" target="_blank" title="Τι είναι ένα πρόσθετο;">πρόσθετο</a>.',
						
		'availwdgs'	=> 'Διαθέσιμα Στοιχεία',
		'trashcan'	=> 'Σύρετε εδώ για διαγραφή',
		
		'themewdgs' => 'Θέσεις Στοιχείων αυτού του θέματος',
		'themewdgsdescr' => 'Το θέμα που έχετε επιλέξει επιτρέπει να έχετε τις ακόλουθες Θέσεις Στοιχείων',
		'oldwdgs'	=> 'Άλλες Θέσεις Στοιχείων',
		'oldwdgsdescr' =>'Οι ακόλουθες Θέσεις Στοιχείων φαίνεται πως δεν ανήκουν σε καμία από τις '.
						'Θέσεις Στοιχείων που αναγράφονται παραπάνω. Μπορεί να έχου ξεμείνει από κάποιο άλλο θέμα.',
		
		'submit'	=> 'Αποθήκευση αλλαγών',

	);
	
	$lang['admin']['widgets']['default']['stdsets'] = array(
		'top'		=> 'Πάνω μπάρα',
		'bottom'	=> 'Κάτω μπάρα',
		'left'		=> 'Αριστερή μπάρα',
		'right'		=> 'Δεξιά μπάρα',
	);
	
	$lang['admin']['widgets']['default']['msgs'] = array(
		1	=> 'Η ρύθμιση αποθηκεύτηκε',
		-1	=> 'Προέκυψε κάποιο σφάλμα κατά την αποθήκευση, παρακαλώ προσπαθήστε ξανά',
	);


	
	/* "raw" panel */	
	
	$lang['admin']['widgets']['raw'] = array(
		'head'		=> 'Διαχείριση Στοιχείων (<em>Κώδικας</em>)',
		'descr'		=> 'Ένα <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:widgets" title="Τι είναι ένα Στοιχείο;">'.
						'Στοιχείο</a> είναι η γραφική απεικόνιση ενός <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="Τι είναι ένα πρόσθετο;">'.
						'Πρόσθετου</a> που μπορεί να τοποθετηθεί σε ειδικές περιοχές (τις <em>Θέσεις Στοιχείων</em>) του ιστολογίου σας. </p>'.
						'<p>Αυτός είναι ο επεξεργαστής του <strong>κώδικα</strong>; κάποιοι χρήστες που '.
						'δεν χρησιμοποιούν JavaScript μπορεί να τον προτιμούν.',
						
		'fset1'		=> 'Επεξεργαστής',
		'fset2'		=> 'Εφαρμογή αλλαγών',
		'submit'	=> 'Εφαρμογή',

	);
	
	
	$lang['admin']['widgets']['raw']['msgs'] = array(
		1	=> 'Η ρύθμιση αποθηκεύτηκε',
		-1	=> 'Προέκυψε κάποιο σφάλμα κατά την αποθήκευση. Αυτό μπορεί να συνέβη για διάφορους λόγους: ίσως το αρχείο περιέχει συντακτικά λάθη.',
	);

		

	/* system errors */
		
	$lang['admin']['widgets']['errors'] = array(
		'generic'	=> 'Το στοιχείο με την ονομασία <strong>%s</strong> δεν είναι καταχωρημένο και θα παρακαμφθεί. '.
 				'Είναι το πρόσθετο ενεργοποιημένο από τον <a href="admin.php?p=plugin">πίνακα ελέγχου προσθέτων</a>?'

	);
	
?>
