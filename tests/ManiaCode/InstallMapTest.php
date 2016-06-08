<?php

require_once __DIR__ . '/../../autoload.php';

use FML\ManiaCode\InstallMap;

class InstallMapTest extends \PHPUnit_Framework_TestCase {

	public function testConstruct() {
		$installMap = new InstallMap("new-name", "new-url");

		$this->assertNotNull($installMap);
		$this->assertEquals($installMap->getName(), "new-name");
		$this->assertEquals($installMap->getUrl(), "new-url");
	}

	public function testName() {
		$installMap = new InstallMap();

		$this->assertNull($installMap->getName());

		$this->assertSame($installMap->setName("test-name"), $installMap);

		$this->assertEquals($installMap->getName(), "test-name");
	}

	public function testUrl() {
		$installMap = new InstallMap();

		$this->assertNull($installMap->getUrl());

		$this->assertSame($installMap->setUrl("test-url"), $installMap);

		$this->assertEquals($installMap->getUrl(), "test-url");
	}

	public function testRender() {
		$installMap = new InstallMap("some-name", "some-url");

		$xmlString = (string)$installMap;

		$this->assertEquals($xmlString, "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>
<install_map><name>some-name</name><url>some-url</url></install_map>
");
	}

}
