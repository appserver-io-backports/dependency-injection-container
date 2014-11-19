<?php

/**
 * TechDivision\DependencyInjectionContainer\ProviderFactory
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Library
 * @package    TechDivision_DependencyInjectionContainer
 * @subpackage Interfaces
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_DependencyInjectionContainer
 * @link       http://www.appserver.io
 */

namespace TechDivision\DependencyInjectionContainer;

use TechDivision\Storage\GenericStackable;
use TechDivision\Application\Interfaces\ApplicationInterface;
use TechDivision\Application\Interfaces\ManagerConfigurationInterface;

// ATTENTION: this is necessary for Windows
use TechDivision\Naming\InitialContext as NamingContext;

/**
 * The factory for the dependency injection provider.
 *
 * @category  Library
 * @package   TechDivision_DependencyInjectionContainer
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_DependencyInjectionContainer
 * @link      http://www.appserver.io
 */
class ProviderFactory
{

    /**
     * The main method that creates new instances in a separate context.
     *
     * @param \TechDivision\Application\Interfaces\ApplicationInterface          $application          The application instance to register the class loader with
     * @param \TechDivision\Application\Interfaces\ManagerConfigurationInterface $managerConfiguration The manager configuration
     *
     * @return void
     */
    public static function visit(ApplicationInterface $application, ManagerConfigurationInterface $managerConfiguration)
    {

        // create the initial context instance
        $initialContext = new NamingContext();
        $initialContext->injectApplication($application);

        // create the application specific aliases
        $namingDirectoryAliases = new GenericStackable();

        // create and initialize the DI provider instance
        $provider = new Provider();
        $provider->injectInitialContext($initialContext);
        $provider->injectNamingDirectory($application);
        $provider->injectNamingDirectoryAliases($namingDirectoryAliases);

        // attach the instance
        $application->addManager($provider, $managerConfiguration);
    }
}
