<?php
//hours_test2.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class hoursForm extends WebTestCase {

	  function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

        $this->setField("hours", "100");
		$this->setField("rate", "1.5");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You input 100 hours at a rate of $1.5 and your pay is $150");
	}
	}
