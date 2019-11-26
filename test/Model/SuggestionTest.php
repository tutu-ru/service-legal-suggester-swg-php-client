<?php
/**
 * SuggestionTest
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

use TutuRu\LegalSuggesterClient\Model\Suggestion;

/**
 * SuggestionTest Class Doc Comment
 *
 * @category    Class
 * @description Suggestion
 * @package     TutuRu\LegalSuggesterClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SuggestionTest extends \PHPUnit\Framework\TestCase
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
     * Test "Suggestion"
     */
    public function testSuggestion()
    {
        $object = new Suggestion();
        $this->assertNotNull($object->__toString());
    }

    /**
     * Test attribute "inn"
     */
    public function testPropertyInn()
    {
        $object = new Suggestion();
        $object->inn = null;
        $this->assertNull($object->inn);
    }

    /**
     * Test attribute "kpp"
     */
    public function testPropertyKpp()
    {
        $object = new Suggestion();
        $object->kpp = null;
        $this->assertNull($object->kpp);
    }

    /**
     * Test attribute "okpo"
     */
    public function testPropertyOkpo()
    {
        $object = new Suggestion();
        $object->okpo = null;
        $this->assertNull($object->okpo);
    }

    /**
     * Test attribute "ogrn"
     */
    public function testPropertyOgrn()
    {
        $object = new Suggestion();
        $object->ogrn = null;
        $this->assertNull($object->ogrn);
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        $object = new Suggestion();
        $object->name = null;
        $this->assertNull($object->name);
    }

    /**
     * Test attribute "legal_address"
     */
    public function testPropertyLegalAddress()
    {
        $object = new Suggestion();
        $object->legal_address = null;
        $this->assertNull($object->legal_address);
    }

    /**
     * Test attribute "registration_date"
     */
    public function testPropertyRegistrationDate()
    {
        $object = new Suggestion();
        $object->registration_date = null;
        $this->assertNull($object->registration_date);
    }

    /**
     * Test attribute "director_full_name"
     */
    public function testPropertyDirectorFullName()
    {
        $object = new Suggestion();
        $object->director_full_name = null;
        $this->assertNull($object->director_full_name);
    }

    /**
     * Test attribute "contact_phones"
     */
    public function testPropertyContactPhones()
    {
        $object = new Suggestion();
        $object->contact_phones = null;
        $this->assertNull($object->contact_phones);
    }

    /**
     * Test attribute "full_with_opf"
     */
    public function testPropertyFullWithOpf()
    {
        $object = new Suggestion();
        $object->full_with_opf = null;
        $this->assertNull($object->full_with_opf);
    }

    /**
     * Test attribute "short_with_opf"
     */
    public function testPropertyShortWithOpf()
    {
        $object = new Suggestion();
        $object->short_with_opf = null;
        $this->assertNull($object->short_with_opf);
    }
}
