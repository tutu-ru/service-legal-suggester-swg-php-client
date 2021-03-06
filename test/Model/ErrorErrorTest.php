<?php
/**
 * ErrorErrorTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  TutuRu\LegalSuggesterClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* Service suggestions api
 *
* No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
* OpenAPI spec version: 1.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace TutuRu\LegalSuggesterClient;

use TutuRu\LegalSuggesterClient\Model\ErrorError;

/**
 * ErrorErrorTest Class Doc Comment
 *
 * @category    Class
 * @description ErrorError
 * @package     TutuRu\LegalSuggesterClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ErrorErrorTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "ErrorError"
     */
    public function testErrorError()
    {
        $object = new ErrorError();
        $this->assertNotNull($object->__toString());
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
        $object = new ErrorError();
        $object->code = null;
        $this->assertNull($object->code);
    }

    /**
     * Test attribute "messages"
     */
    public function testPropertyMessages()
    {
        $object = new ErrorError();
        $object->messages = null;
        $this->assertNull($object->messages);
    }
}
