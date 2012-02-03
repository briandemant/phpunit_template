<?php 
require_once 'Doctrine/Common/ClassLoader.php';
$classLoader = new \Doctrine\Common\ClassLoader(null,  __DIR__ . '/../../src/');
$classLoader->register();

define("TEST_TMP", __DIR__ . "/../tmp");
function resetTestTmp() {
	if (file_exists(TEST_TMP)) {
		exec('rm -rf ' . TEST_TMP);
	}
	mkdir(TEST_TMP, 0700);
} 
resetTestTmp();


// unused but caused problems
class PHPUnit_Extensions_Database_TestCase {
}

class PHPUnit_Extensions_SeleniumTestCase {
}