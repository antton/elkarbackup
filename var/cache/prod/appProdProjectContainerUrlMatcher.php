<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                    $ret = array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::generatePublicKeyAction',  '_route' => 'generatePublicKey',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_generatePublicKey;
                    }

                    return $ret;
                }
                not_generatePublicKey:

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
                $ret = array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::getRepositoryBackupScriptAction',  '_route' => 'getRepositoryBackupScript',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_getRepositoryBackupScript;
                }

                return $ret;
            }
            not_getRepositoryBackupScript:

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
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteClient']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteClientAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_deleteClient;
                }

                return $ret;
            }
            not_deleteClient:

            // editClient
            if (preg_match('#^/client(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'editClient']), array (  'id' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editClientAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_editClient;
                }

                return $ret;
            }
            not_editClient:

            // saveClient
            if (preg_match('#^/client(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'saveClient']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveClientAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_saveClient;
                }

                return $ret;
            }
            not_saveClient:

            // deleteJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteJob']), array (  'idJob' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteJobAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_deleteJob;
                }

                return $ret;
            }
            not_deleteJob:

            // editJob
            if (preg_match('#^/client/(?P<idClient>[^/]++)/job(?:/(?P<idJob>[^/]++))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'editJob']), array (  'idJob' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editJobAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_editJob;
                }

                return $ret;
            }
            not_editJob:

            // runJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/run$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'runJob']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::runJobAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_runJob;
                }

                return $ret;
            }
            not_runJob:

            // abortJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/abort$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'abortJob']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::runAbortAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_abortJob;
                }

                return $ret;
            }
            not_abortJob:

            // showJobConfig
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/config$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'showJobConfig']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showJobConfigAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_showJobConfig;
                }

                return $ret;
            }
            not_showJobConfig:

            // saveJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job(?:/(?P<idJob>\\d+))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'saveJob']), array (  'idJob' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveJobAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_saveJob;
                }

                return $ret;
            }
            not_saveJob:

            // showJobBackup
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/backup/(?P<action>view|download|downloadzip)(?:/(?P<idBackupLocation>\\d+)(?:/(?P<path>.*))?)?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'showJobBackup']), array (  'path' => '/',  'idBackupLocation' => 0,  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showJobBackupAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_showJobBackup;
                }

                return $ret;
            }
            not_showJobBackup:

            // showClients
            if ('/clients' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showClientsAction',  '_route' => 'showClients',);
            }

            // cloneClient
            if (0 === strpos($pathinfo, '/client/clone') && preg_match('#^/client/clone/(?P<idClient>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cloneClient']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::cloneClientAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_cloneClient;
                }

                return $ret;
            }
            not_cloneClient:

        }

        elseif (0 === strpos($pathinfo, '/log')) {
            // login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_login;
                }

                return $ret;
            }
            not_login:

            // showLogs
            if ('/logs' === $pathinfo) {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showLogsAction',  '_route' => 'showLogs',);
            }

            // downloadLog
            if (preg_match('#^/log/(?P<id>[^/]++)/download$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'downloadLog']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::downloadLogAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_downloadLog;
                }

                return $ret;
            }
            not_downloadLog:

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
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'editPolicy']), array (  'id' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editPolicyAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_editPolicy;
                    }

                    return $ret;
                }
                not_editPolicy:

                // deletePolicy
                if (preg_match('#^/policy/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deletePolicy']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deletePolicyAction',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_deletePolicy;
                    }

                    return $ret;
                }
                not_deletePolicy:

                // savePolicy
                if (preg_match('#^/policy(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'savePolicy']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::savePolicyAction',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_savePolicy;
                    }

                    return $ret;
                }
                not_savePolicy:

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
        if ('/job/generate/token/' === $pathinfo) {
            $ret = array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::generateTokenAction',  '_route' => 'generateToken',);
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_generateToken;
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
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteScript']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteScriptAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_deleteScript;
                }

                return $ret;
            }
            not_deleteScript:

            // downloadScript
            if (preg_match('#^/script/(?P<id>[^/]++)/download$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'downloadScript']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::downloadScriptAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_downloadScript;
                }

                return $ret;
            }
            not_downloadScript:

            // editScript
            if (preg_match('#^/script/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'editScript']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editScriptAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_editScript;
                }

                return $ret;
            }
            not_editScript:

            // saveScript
            if (preg_match('#^/script(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'saveScript']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveScriptAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_saveScript;
                }

                return $ret;
            }
            not_saveScript:

        }

        // setLocale
        if (0 === strpos($pathinfo, '/setlocale') && preg_match('#^/setlocale/(?P<locale>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'setLocale']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::setLanguage',));
        }

        if (0 === strpos($pathinfo, '/backupLocation')) {
            // saveBackupLocation
            if (preg_match('#^/backupLocation/(?P<id>[^/]++)/save$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'saveBackupLocation']), array (  'id' => 'new',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveBackupLocationAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_saveBackupLocation;
                }

                return $ret;
            }
            not_saveBackupLocation:

            // deleteBackupLocation
            if (preg_match('#^/backupLocation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteBackupLocation']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteBackupLocationAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_deleteBackupLocation;
                }

                return $ret;
            }
            not_deleteBackupLocation:

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // deleteUser
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteUser']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteUserAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_deleteUser;
                }

                return $ret;
            }
            not_deleteUser:

            // editUser
            if (preg_match('#^/user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'editUser']), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editUserAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_editUser;
                }

                return $ret;
            }
            not_editUser:

            // saveUser
            if (preg_match('#^/user(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'saveUser']), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveUserAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_saveUser;
                }

                return $ret;
            }
            not_saveUser:

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
