<?php

/**
 * TechDivision\DependencyInjectionContainer\ProviderTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision_DependencyInjectionContainer
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_DependencyInjectionContainer
 * @link      http://www.appserver.io
 */

namespace TechDivision\DependencyInjectionContainer;

/**
 * Test implementation for the DI provider.
 *
 * @category  Library
 * @package   TechDivision_DependencyInjectionContainer
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_DependencyInjectionContainer
 * @link      http://www.appserver.io
 */
class ProviderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The provider instance we want to test.
     *
     * @var \TechDivision\DependencyInjectionContainer\Provider
     */
    protected $provider;

    /**
     * Initialize the instance to test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->provider = new Provider();
    }

    /**
     * A dummy test implementation.
     *
     * @return void
     */
    public function testDummy()
    {
        $this->assertTrue(true);
    }
}
