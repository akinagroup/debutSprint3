<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // akina_immobilier_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'akina_immobilier_homepage');
            }

            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'akina_immobilier_homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // akina_
            if ('/accueil' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::listAction',  '_route' => 'akina_',);
            }

            if (0 === strpos($pathinfo, '/add')) {
                // disponi
                if ('/add' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::addAction',  '_route' => 'disponi',);
                }

                // akina_immobilier_restfull_addbien
                if ('/addBien' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_akina_immobilier_restfull_addbien;
                    }

                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\RestFullController::addBienAction',  '_route' => 'akina_immobilier_restfull_addbien',);
                }
                not_akina_immobilier_restfull_addbien:

            }

            elseif (0 === strpos($pathinfo, '/admin')) {
                // easyadmin
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'easyadmin');
                    }

                    return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                }

                // admin
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/res')) {
            // Reserve
            if (0 === strpos($pathinfo, '/reserve') && preg_match('#^/reserve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reserve')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::ReserveAction',));
            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            // Resultat
            if ('/resultat' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::listAction',  '_route' => 'Resultat',);
            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        // search
        if ('/search' === $pathinfo) {
            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::searchAction',  '_route' => 'search',);
        }

        if (0 === strpos($pathinfo, '/tes')) {
            // tes
            if ('/test' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::testAction',  '_route' => 'tes',);
            }

            // teste
            if ('/tes' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::testeAction',  '_route' => 'teste',);
            }

        }

        elseif (0 === strpos($pathinfo, '/con')) {
            // valid
            if ('/con' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::valideAction',  '_route' => 'valid',);
            }

            // contrat
            if (preg_match('#^/con/(?P<id>[^/]++)/(?P<bien>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::contratAction',));
            }

            // contratProprietaire
            if (0 === strpos($pathinfo, '/contratProp') && preg_match('#^/contratProp/(?P<id>[^/]++)/(?P<bien>[^/]++)/(?P<proprio>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contratProprietaire')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::contratProprietaireAction',));
            }

        }

        // va
        if (0 === strpos($pathinfo, '/vvv') && preg_match('#^/vvv/(?P<id>[^/]++)/(?P<bien>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'va')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::detailAction',));
        }

        // valide
        if (0 === strpos($pathinfo, '/valide') && preg_match('#^/valide/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'valide')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::valideAction',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/list')) {
                // Res
                if ('/list' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::listAction',  '_route' => 'Res',);
                }

                // poni
                if ('/listRes' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::listResAction',  '_route' => 'poni',);
                }

                // ponid
                if ('/listConfession' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::listConfessionAction',  '_route' => 'ponid',);
                }

                // listdeBien
                if ('/listb' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\RestFullController::listBienAction',  '_route' => 'listdeBien',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // disponibilite
        if (0 === strpos($pathinfo, '/disponibilite') && preg_match('#^/disponibilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'disponibilite')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::disponibiliteAction',));
        }

        if (0 === strpos($pathinfo, '/de')) {
            if (0 === strpos($pathinfo, '/detail')) {
                // detail
                if (preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::DetailAction',));
                }

                // akina_immobilier_restfull_detailbien
                if ('/detailBien' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\RestFullController::detailBienAction',  '_route' => 'akina_immobilier_restfull_detailbien',);
                }

            }

            // detailBien
            if (0 === strpos($pathinfo, '/detBien') && preg_match('#^/detBien/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailBien')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::detailBienAction',));
            }

            // akina_immobilier_restfull_deletebien
            if (0 === strpos($pathinfo, '/deleteBien') && preg_match('#^/deleteBien/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_akina_immobilier_restfull_deletebien;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'akina_immobilier_restfull_deletebien')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\RestFullController::deleteBienAction',));
            }
            not_akina_immobilier_restfull_deletebien:

        }

        // paiement
        if ('/paye' === $pathinfo) {
            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::paiementAction',  '_route' => 'paiement',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // akina_immobilier_restfull_updatebien
        if ('/updateBien' === $pathinfo) {
            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\RestFullController::updateBienAction',  '_route' => 'akina_immobilier_restfull_updatebien',);
        }

        // akina_immobilier_restfull_findbien
        if ('/findBien' === $pathinfo) {
            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\RestFullController::findBienAction',  '_route' => 'akina_immobilier_restfull_findbien',);
        }

        // akina_immobilier_restfull_editbien
        if (0 === strpos($pathinfo, '/editBien') && preg_match('#^/editBien/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_akina_immobilier_restfull_editbien;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'akina_immobilier_restfull_editbien')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\RestFullController::editBienAction',));
        }
        not_akina_immobilier_restfull_editbien:

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
