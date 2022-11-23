<?php

    class ViewNotFoundException extends Exception
    {
        public function __construct($message = "No view has been found")
        {
            parent::__construct($message, "0003");
        }

        public function getMoreDetail()
		{
			return "View has not been found with route";
		}
    }

?>