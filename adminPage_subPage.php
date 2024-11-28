public function admin_menu_callback(){
		 add_menu_page("Heart Beat", "Heart Beat", "manage_options", "heart-beat", array($this, 'heartbeat_callbackk'));
		 add_submenu_page("heart-beat", "Dashboard", "Dashboard", "manage_options", "heart-beat", array($this, 'heartbeat_callbackk'));

		 add_submenu_page("heart-beat", "Doctor", "Doctor", "manage_options", "heart-beat-doctor", array($this, 'heartbeat_doctor'));
	}

	 public function heartbeat_callbackk(){
	 	echo "mastan";
	 }

	 public function heartbeat_doctor(){
	 	echo "doctor";
	 }
