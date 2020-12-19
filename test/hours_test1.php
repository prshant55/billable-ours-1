<?php
//hours_test1.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class hoursForm extends WebTestCase {

	  function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/hours1.php');
		$this->assertResponse(200);

        $this->setField("hours", "5");
		$this->setField("rate", "10");
		$this->clickSubmit("Show Pay");

		$this->assertResponse(200);
		$this->assertText("You input 5 hours at a rate of $10 and your pay is $50");
	}
	}
