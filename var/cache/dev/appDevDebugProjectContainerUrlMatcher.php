<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // about
        if ('/about' === $pathinfo) {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
        }

        if (0 === strpos($pathinfo, '/config')) {
            if (0 === strpos($pathinfo, '/config/p')) {
                // downloadPublicKey
                if ('/config/publickey/get' === $pathinfo) {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::downloadPublicKeyAction',  '_route' => 'downloadPublicKey',);
                }

                // generatePublicKey
                if ('/config/publickey/generate' === $pathinfo) {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::generatePublicKeyAction',  '_route' => 'generatePublicKey',);
                }

                // manageParameters
                if ('/config/params' === $pathinfo) {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::manageParametersAction',  '_route' => 'manageParameters',);
                }

                // managePreferences
                if ('/config/preferences' === $pathinfo) {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::managePreferencesAction',  '_route' => 'managePreferences',);
                }

            }

            // getRepositoryBackupScript
            if ('/config/repositorybackupscript/download' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::getRepositoryBackupScriptAction',  '_route' => 'getRepositoryBackupScript',);
            }

            // configureRepositoryBackupScript
            if ('/config/repositorybackupscript/manage' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::configureRepositoryBackupScriptAction',  '_route' => 'configureRepositoryBackupScript',);
            }

            if (0 === strpos($pathinfo, '/config/backupLocation')) {
                // editBackupLocation
                if (preg_match('#^/config/backupLocation(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'editBackupLocation']), array (  'id' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editBackupLocationAction',));
                }

                // manageBackupLocations
                if ('/config/backupLocations' === $pathinfo) {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::manageBackupLocationsAction',  '_route' => 'manageBackupLocations',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/client')) {
            // deleteClient
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteClient']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteClientAction',));
            }

            // editClient
            if (preg_match('#^/client(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editClient']), array (  'id' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editClientAction',));
            }

            // saveClient
            if (preg_match('#^/client(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'saveClient']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveClientAction',));
            }

            // deleteJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteJob']), array (  'idJob' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteJobAction',));
            }

            // editJob
            if (preg_match('#^/client/(?P<idClient>[^/]++)/job(?:/(?P<idJob>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editJob']), array (  'idJob' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editJobAction',));
            }

            // runJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/run$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'runJob']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::runJobAction',));
            }

            // abortJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/abort$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'abortJob']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::runAbortAction',));
            }

            // showJobConfig
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/config$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'showJobConfig']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showJobConfigAction',));
            }

            // saveJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job(?:/(?P<idJob>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'saveJob']), array (  'idJob' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveJobAction',));
            }

            // showJobBackup
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/backup/(?P<action>view|download|downloadzip)(?:/(?P<idBackupLocation>\\d+)(?:/(?P<path>.*))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'showJobBackup']), array (  'path' => '/',  'idBackupLocation' => 0,  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showJobBackupAction',));
            }

            // showClients
            if ('/clients' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showClientsAction',  '_route' => 'showClients',);
            }

            // cloneClient
            if (0 === strpos($pathinfo, '/client/clone') && preg_match('#^/client/clone/(?P<idClient>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'cloneClient']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::cloneClientAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/log')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // showLogs
            if ('/logs' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showLogsAction',  '_route' => 'showLogs',);
            }

            // downloadLog
            if (preg_match('#^/log/(?P<id>[^/]++)/download$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'downloadLog']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::downloadLogAction',));
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return ['_route' => 'login_check'];
            }

            // logout
            if ('/logout' === $pathinfo) {
                return ['_route' => 'logout'];
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        // binovo_elkarbackup_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'binovo_elkarbackup_default_index']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/policy')) {
                // editPolicy
                if (preg_match('#^/policy(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'editPolicy']), array (  'id' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editPolicyAction',));
                }

                // deletePolicy
                if (preg_match('#^/policy/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletePolicy']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deletePolicyAction',));
                }

                // savePolicy
                if (preg_match('#^/policy(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'savePolicy']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::savePolicyAction',));
                }

            }

            // showPolicies
            if ('/policies' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showPoliciesAction',  '_route' => 'showPolicies',);
            }

            // changePassword
            if ('/password' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::changePasswordAction',  '_route' => 'changePassword',);
            }

        }

        // sortJobs
        if ('/jobs/sort' === $pathinfo) {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::sortJobsAction',  '_route' => 'sortJobs',);
        }

        // generateToken
        if ('/job/generate/token' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::generateTokenAction',  '_route' => 'generateToken',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_generateToken;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'generateToken'));
            }

            return $ret;
        }
        not_generateToken:

        if (0 === strpos($pathinfo, '/script')) {
            // showScripts
            if ('/scripts' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showScriptsAction',  '_route' => 'showScripts',);
            }

            // deleteScript
            if (preg_match('#^/script/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteScript']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteScriptAction',));
            }

            // downloadScript
            if (preg_match('#^/script/(?P<id>[^/]++)/download$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'downloadScript']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::downloadScriptAction',));
            }

            // editScript
            if (preg_match('#^/script/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editScript']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editScriptAction',));
            }

            // saveScript
            if (preg_match('#^/script(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'saveScript']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveScriptAction',));
            }

        }

        // setLocale
        if (0 === strpos($pathinfo, '/setlocale') && preg_match('#^/setlocale/(?P<locale>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'setLocale']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::setLanguage',));
        }

        if (0 === strpos($pathinfo, '/backupLocation')) {
            // saveBackupLocation
            if (preg_match('#^/backupLocation/(?P<id>[^/]++)/save$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'saveBackupLocation']), array (  'id' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveBackupLocationAction',));
            }

            // deleteBackupLocation
            if (preg_match('#^/backupLocation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteBackupLocation']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteBackupLocationAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // deleteUser
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteUser']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteUserAction',));
            }

            // editUser
            if (preg_match('#^/user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editUser']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editUserAction',));
            }

            // saveUser
            if (preg_match('#^/user(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'saveUser']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveUserAction',));
            }

            // showUsers
            if ('/users' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showUsersAction',  '_route' => 'showUsers',);
            }

        }

        // tahoeConfig
        if ('/tahoe/config' === $pathinfo) {
            return array (  '_controller' => 'Binovo\\ElkarTahoeBundle\\Controller\\DefaultController::tahoeConfigAction',  '_route' => 'tahoeConfig',);
        }

        // showJobTahoeBackup
        if (0 === strpos($pathinfo, '/tahoe/backup') && preg_match('#^/tahoe/backup/(?P<action>view|download|downloadzip)/(?P<file>.*)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'showJobTahoeBackup']), array (  '_controller' => 'Binovo\\ElkarTahoeBundle\\Controller\\DefaultController::showJobTahoeBackupAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_showJobTahoeBackup;
            }

            return $ret;
        }
        not_showJobTahoeBackup:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
