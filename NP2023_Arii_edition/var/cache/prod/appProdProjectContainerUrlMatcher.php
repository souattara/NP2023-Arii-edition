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

        // arii_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'arii_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_arii_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_homepage'));
            }

            return $ret;
        }
        not_arii_homepage:

        if (0 === strpos($pathinfo, '/ho')) {
            if (0 === strpos($pathinfo, '/home')) {
                // arii_home
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_home']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',));
                }

                // arii_Home_index
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Home_index']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_arii_Home_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_Home_index'));
                    }

                    return $ret;
                }
                not_arii_Home_index:

                // arii_Home_readme
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Home_readme']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readmeAction',));
                }

                // arii_Home_docs
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Home_docs']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::docsAction',));
                }

                // arii_Core_readme
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Core_readme']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readmeAction',));
                }

                // html_Core_readme
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_Core_readme']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readme_htmlAction',));
                }

                // html_Home_readme
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_Home_readme']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readme_htmlAction',));
                }

                // json_Home_ribbon
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_Home_ribbon']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::ribbonAction',));
                }

                // arii_favorites
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/favorites$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_favorites']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',));
                }

                // arii_docs
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_docs']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::indexAction',));
                }

                // xml_docs_tree
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs/tree\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_docs_tree']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::treeAction',));
                }

                // json_Home_docs_ribbon
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs/ribbon\\.json$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_Home_docs_ribbon']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::ribbonAction',));
                }

                // xml_doc_view
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/doc$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_doc_view']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::docAction',));
                }

                // html_doc_view
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs/view$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_doc_view']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::viewAction',));
                }

                // xml_menu
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_menu']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::menuAction',));
                }

                // xml_toolbar
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_toolbar']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::toolbarAction',));
                }

                // arii_About
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/about$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_About']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::aboutAction',));
                }

                // xml_modules
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/modules\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_modules']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::modulesAction',));
                }

                // arii_session_update
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/session/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_session_update']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\SessionController::updateAction',));
                }

                // arii_session_view
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/session/view$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_session_view']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\SessionController::viewAction',));
                }

                // xml_favorites
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/favorites\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_favorites']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::favoritesAction',));
                }

                // xml_favoritesPP
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/favoritesPP\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_favoritesPP']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::favoritesPPAction',));
                }

                // arii_filters
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_filters']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::indexAction',));
                }

                // json_filters_ribbon
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_filters_ribbon']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::ribbonAction',));
                }

                // arii_filters_list
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/list$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_filters_list']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::listAction',));
                }

                // xml_filter_list
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/list\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_filter_list']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::xmlAction',));
                }

                // xml_filter_menu
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/menu\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_filter_menu']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::menuAction',));
                }

                // xml_filter_form
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/form\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_filter_form']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::formAction',));
                }

                // xml_filter_save
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/save\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_filter_save']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::saveAction',));
                }

                // arii_global_toolbar
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/global/toolbar$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_global_toolbar']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::sendAction',));
                }

                // arii_global_toolbar_update
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/global/toolbar_update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_global_toolbar_update']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::updateAction',));
                }

                // arii_settings
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/settings$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_settings']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::settingsAction',));
                }

                // arii_form_settings_update
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/settings/form$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_form_settings_update']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DBController::filter_formAction',));
                }

                // arii_grid_filter_update
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/grid$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_grid_filter_update']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DBController::filter_gridAction',));
                }

                // arii_form_filter_update
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/form$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_form_filter_update']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DBController::filter_formAction',));
                }

                // arii_toolbar_filters
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/toolbar$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_toolbar_filters']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::filtersAction',));
                }

                // arii_toolbar_filter_add
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/toolbar_add$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_toolbar_filter_add']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::filter_addAction',));
                }

                // lang
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/lang/(?P<lang>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'lang']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::langAction',));
                }

                // xml_User_filter_save
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/save$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_User_filter_save']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::saveAction',));
                }

                // xml_User_filter_delete
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_User_filter_delete']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::deleteAction',));
                }

                // arii_my_account
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/me$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_my_account']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::indexAction',));
                }

                // json_my_account_ribbon
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/ribbon\\.json$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_my_account_ribbon']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::ribbonAction',));
                }

                // arii_my_account_save
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/me/save$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_my_account_save']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::saveAction',));
                }

                // arii_my_account_password
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/me/password$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_my_account_password']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::passwordAction',));
                }

                // arii_my_filters
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/filters$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_my_filters']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::sessionAction',));
                }

                // arii_my_session
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/session$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_my_session']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::sessionAction',));
                }

                // xml_my_session
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/session\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_my_session']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::session_xmlAction',));
                }

                // xml_user_toolbar
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_user_toolbar']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::toolbarAction',));
                }

                // arii_Home_audit
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Home_audit']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::listAction',));
                }

                // xml_Home_audit_toolbar
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Home_audit_toolbar']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::toolbarAction',));
                }

                // xml_Home_audit_list
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/list\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Home_audit_list']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::xmlAction',));
                }

                // xml_Home_audit_chart
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/chart\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Home_audit_chart']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::chartAction',));
                }

                // arii_Home_errors
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/errors$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Home_errors']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ErrorsController::listAction',));
                }

                // xml_Home_errors_toolbar
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Home_errors_toolbar']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ErrorsController::toolbarAction',));
                }

                // xml_Home_errors_list
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/errors/list\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Home_errors_list']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ErrorsController::xmlAction',));
                }

                // xml_arii_audit_detail
                if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/detail$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_arii_audit_detail']), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::detailAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/housekeeping/purge')) {
                // arii_JID_purge
                if ('/housekeeping/purge' === $pathinfo) {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purgeAction',  '_route' => 'arii_JID_purge',);
                }

                // arii_JID_purge_history
                if ('/housekeeping/purge_history' === $pathinfo) {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_historyAction',  '_route' => 'arii_JID_purge_history',);
                }

                // arii_JID_purge_order_history
                if ('/housekeeping/purge_order' === $pathinfo) {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_orderAction',  '_route' => 'arii_JID_purge_order_history',);
                }

                // arii_JID_purge_history_out
                if (0 === strpos($pathinfo, '/housekeeping/purge/history') && preg_match('#^/housekeeping/purge/history/(?P<DB>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_purge_history_out']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purgeHistoryAction',));
                }

                // arii_JID_purge_orders_history_out
                if (0 === strpos($pathinfo, '/housekeeping/purge/orders') && preg_match('#^/housekeeping/purge/orders/(?P<DB>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_purge_orders_history_out']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purgeOrdersHistoryAction',));
                }

            }

            // arii_JID_status_history
            if ('/housekeeping/status' === $pathinfo) {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::statusAction',  '_route' => 'arii_JID_status_history',);
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // arii_Admin_index
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_index']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\DefaultController::indexAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_arii_Admin_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_Admin_index'));
                }

                return $ret;
            }
            not_arii_Admin_index:

            // arii_Admin_readme
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_readme']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\DefaultController::readmeAction',));
            }

            // arii_Admin_network
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/network$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_network']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\DefaultController::networkAction',));
            }

            // json_Admin_ribbon
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_Admin_ribbon']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // xml_Admin_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ToolbarController::globalAction',));
            }

            // arii_Admin_categories
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/categories$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_categories']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoriesController::indexAction',));
            }

            // xml_Admin_categories_grid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/categories/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_categories_grid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoriesController::gridAction',));
            }

            // xml_Admin_categories_tree
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/categories/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_categories_tree']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoriesController::treeAction',));
            }

            // xml_Admin_categories_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/categories/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_categories_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoriesController::selectAction',));
            }

            // xml_Admin_category_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/category/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_category_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoryController::toolbarAction',));
            }

            // xml_Admin_category_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/category/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_category_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoryController::formAction',));
            }

            // xml_Admin_category_form_structure
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/category/form_structure\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_category_form_structure']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoryController::form_structureAction',));
            }

            // xml_Admin_category_save
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/category/save\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_category_save']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoryController::saveAction',));
            }

            // xml_Admin_category_delete
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/category/delete\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_category_delete']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoryController::deleteAction',));
            }

            // xml_Admin_category_dragdrop
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/category/dragdrop\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_category_dragdrop']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\CategoryController::dragdropAction',));
            }

            // arii_Admin_connections
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_connections']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionsController::indexAction',));
            }

            // xml_Admin_connections_grid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_connections_grid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionsController::gridAction',));
            }

            // xml_Admin_connections_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_connections_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionsController::menuAction',));
            }

            // xml_Admin_connection_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connection/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_connection_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionController::toolbarAction',));
            }

            // xml_Admin_connection_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connection/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_connection_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionController::formAction',));
            }

            // xml_Admin_connection_form_structure
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connection/form_structure\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_connection_form_structure']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionController::form_structureAction',));
            }

            // xml_Admin_connection_save
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connection/save\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_connection_save']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionController::saveAction',));
            }

            // xml_Admin_connection_delete
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connection/delete\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_connection_delete']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ConnectionController::deleteAction',));
            }

            // arii_Admin_repositories
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repositories$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_repositories']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoriesController::indexAction',));
            }

            // xml_Admin_repositories_grid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repositories/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repositories_grid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoriesController::gridAction',));
            }

            // xml_Admin_repositories_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repositories/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repositories_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoriesController::menuAction',));
            }

            // xml_Admin_repositories_connections
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repositories/connections\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repositories_connections']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoriesController::connectionsAction',));
            }

            // xml_Admin_repository_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repository/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repository_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoryController::toolbarAction',));
            }

            // xml_Admin_repository_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repository/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repository_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoryController::formAction',));
            }

            // xml_Admin_repository_save
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repository/save$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repository_save']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoryController::saveAction',));
            }

            // xml_Admin_repository_delete
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repository/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repository_delete']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoryController::deleteAction',));
            }

            // xml_Admin_repository_edit
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/repository/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_repository_edit']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RepositoryController::editAction',));
            }

            // arii_Admin_sites
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/sites$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_sites']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SitesController::indexAction',));
            }

            // xml_Admin_sites_grid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/sites/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_sites_grid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SitesController::gridAction',));
            }

            // xml_Admin_sites_show
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/sites/show\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_sites_show']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SitesController::showAction',));
            }

            // xml_Admin_sites_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/sites/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_sites_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SitesController::menuAction',));
            }

            // xml_Admin_sites_connections
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/sites/connections\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_sites_connections']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SitesController::connectionsAction',));
            }

            // xml_Admin_site_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/site/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_site_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SiteController::toolbarAction',));
            }

            // xml_Admin_site_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/site/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_site_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SiteController::formAction',));
            }

            // xml_Admin_site_save
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/site/save$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_site_save']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SiteController::saveAction',));
            }

            // xml_Admin_site_delete
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/site/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_site_delete']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SiteController::deleteAction',));
            }

            // arii_Admin_nodes
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nodes$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_nodes']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\NodesController::indexAction',));
            }

            // xml_Admin_nodes_treegrid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nodes/treegrid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_nodes_treegrid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\NodesController::treegridAction',));
            }

            // xml_Admin_nodes_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nodes/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_nodes_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\NodesController::menuAction',));
            }

            // arii_Admin_spoolers
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_spoolers']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolersController::indexAction',));
            }

            // xml_Admin_spoolers_treegrid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/treegrid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spoolers_treegrid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolersController::treegridAction',));
            }

            // xml_Admin_spoolers_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spoolers_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolersController::menuAction',));
            }

            // xml_Admin_spooler_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::toolbarAction',));
            }

            // xml_Admin_spooler_supervisors_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/supervisors/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_supervisors_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::supervisorsAction',));
            }

            // xml_Admin_spooler_sites_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/sites/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_sites_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::sitesAction',));
            }

            // xml_Admin_spooler_transfer_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/transfer/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_transfer_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::transferAction',));
            }

            // xml_Admin_spooler_mail_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/mail/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_mail_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::mailAction',));
            }

            // xml_Admin_spooler_backup_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/backup/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_backup_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::backupAction',));
            }

            // xml_Admin_spooler_repositories_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/repositories/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_repositories_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::repositoriesAction',));
            }

            // xml_Admin_spooler_http_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/http/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_http_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::httpAction',));
            }

            // xml_Admin_spooler_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::formAction',));
            }

            // xml_Admin_spooler_save
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/save\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_save']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::saveAction',));
            }

            // xml_Admin_spooler_delete
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/delete\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_spooler_delete']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\SpoolerController::deleteAction',));
            }

            // arii_Admin_teams
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/teams$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_teams']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamsController::indexAction',));
            }

            // xml_Admin_teams_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/teams/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_teams_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamsController::menuAction',));
            }

            // xml_Admin_teams_tree
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/teams/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_teams_tree']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamsController::treeAction',));
            }

            // xml_Admin_teams_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/teams/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_teams_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamsController::selectAction',));
            }

            // xml_Admin_team_add
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/add$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_team_add']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamController::addAction',));
            }

            // xml_Admin_team_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_team_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamController::formAction',));
            }

            // xml_Admin_team_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_team_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamController::toolbarAction',));
            }

            // xml_Admin_team_save
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/save\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_team_save']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamController::saveAction',));
            }

            // xml_Admin_team_delete
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/delete\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_team_delete']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamController::deleteAction',));
            }

            // xml_Admin_teamfilter_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/teamfilter/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_teamfilter_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamFilterController::menuAction',));
            }

            // xml_Admin_teamfilter_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/teamfilter/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_teamfilter_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamFilterController::toolbarAction',));
            }

            // arii_Admin_teamfilter_processor
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/teamfilter/processor$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_teamfilter_processor']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\TeamFilterController::processorAction',));
            }

            // arii_Admin_team_attachFilter
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/attach_filter$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_team_attachFilter']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::attach_filterAction',));
            }

            // arii_Admin_team_attachFilter_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/attach_filter_toolbar$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_team_attachFilter_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::attach_filter_toolbarAction',));
            }

            // arii_Admin_team_ajax_addFilter
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/ajax_addFilter$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_team_ajax_addFilter']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::ajax_addFilterAction',));
            }

            // arii_Admin_team_editFilter
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/edit_filter$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_team_editFilter']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::edit_filterAction',));
            }

            // arii_Admin_team_deleteFilter
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/delete_filter$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_team_deleteFilter']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::delete_filterAction',));
            }

            // arii_Admin_team_saveFilter
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/save_filter$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_team_saveFilter']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::save_filterAction',));
            }

            // arii_Admin_users
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/users$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_users']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UsersController::indexAction',));
            }

            // xml_Admin_users_grid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/users/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_users_grid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UsersController::gridAction',));
            }

            // xml_Admin_users_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/users/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_users_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UsersController::menuAction',));
            }

            // xml_Admin_users_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/users/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_users_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UsersController::toolbarAction',));
            }

            // arii_Admin_user
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_user']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::indexAction',));
            }

            // xml_Admin_user_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_user_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::toolbarAction',));
            }

            // xml_Admin_user_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_user_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::formAction',));
            }

            // xml_Admin_user_save
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/save\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_user_save']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::saveAction',));
            }

            // xml_Admin_user_drag
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/drag\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_user_drag']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::dragAction',));
            }

            // arii_Admin_user_select_team
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/select_team$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_user_select_team']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::select_teamAction',));
            }

            // arii_Admin_user_select_enterprise
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/select_enterprise$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_user_select_enterprise']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::select_enterpriseAction',));
            }

            // arii_Admin_user_delete
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_user_delete']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::deleteAction',));
            }

            // arii_Admin_user_userProcessor
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/userProcessor$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_user_userProcessor']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\UserController::userProcessorAction',));
            }

            // xml_Admin_rights_toolbar
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rights/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_rights_toolbar']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RightsController::toolbarAction',));
            }

            // xml_Admin_rights
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rights/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_rights']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RightsController::rightsAction',));
            }

            // xml_Admin_team_rights
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/team/rights\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_team_rights']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RightsController::team_rightsAction',));
            }

            // xml_Admin_rights_form
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rights/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_rights_form']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RightsController::formAction',));
            }

            // xml_Admin_rights_grid
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rights/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_rights_grid']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RightsController::gridAction',));
            }

            // xml_Admin_rights_menu
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rights/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_rights_menu']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\RightsController::menuAction',));
            }

            // arii_Admin_zones
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/zones$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Admin_zones']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ZonesController::indexAction',));
            }

            // xml_Admin_zones_tree
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/zones/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_zones_tree']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ZonesController::treeAction',));
            }

            // xml_Admin_zones_select
            if (preg_match('#^/admin/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/zones/select\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Admin_zones_select']), array (  '_controller' => 'Arii\\AdminBundle\\Controller\\ZonesController::selectAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/jid')) {
            // arii_JID_index
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_index']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::indexAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_arii_JID_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_JID_index'));
                }

                return $ret;
            }
            not_arii_JID_index:

            // arii_JID_readme
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_readme']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::readmeAction',));
            }

            // xml_JID_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // json_JID_ribbon
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_ribbon']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // xml_JID_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_menu']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::menuAction',));
            }

            // arii_JID_config
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/config$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_config']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ConfigController::indexAction',));
            }

            // html_JID_config
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/config\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_JID_config']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ConfigController::configAction',));
            }

            // arii_XML_Command
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/XML/command$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_XML_Command']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SOSController::XMLCommandAction',));
            }

            // arii_JID_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_jobs']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::indexAction',));
            }

            // arii_JID_jobs_index
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_jobs_index']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::indexAction',));
            }

            // xml_JID_jobs_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_tree']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::treeAction',));
            }

            // xml_JID_jobs_grid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_grid']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::gridAction',));
            }

            // xml_JID_jobs_grid_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid_menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_grid_menu']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::grid_menuAction',));
            }

            // json_JID_jobs_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_jobs_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::formAction',));
            }

            // xml_JID_jobs_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::form2Action',));
            }

            // xml_JID_jobs_form_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_form_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::form_toolbarAction',));
            }

            // arii_JID_jobs_treegrid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/treegrid$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_jobs_treegrid']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::indexTreegridAction',));
            }

            // xml_JID_jobs_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_toolbar']), array (  '_controller' => 'AriiJIDBundle:xJobs:toolbar',));
            }

            // xml_JID_jobs_folder_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/folder_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_folder_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::folder_toolbarAction',));
            }

            // xml_JID_jobs_grid_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_grid_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::grid_toolbarAction',));
            }

            // xml_JID_jobs_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_bar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::barAction',));
            }

            // xml_JID_jobs_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_pie']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::pieAction',));
            }

            // xml_JID_jobs_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_jobs_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::timelineAction',));
            }

            // xml_JID_job_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_job_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::formAction',));
            }

            // xml_JID_job_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_job_params']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::paramsAction',));
            }

            // xml_JID_job_params_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_job_params_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::params_toolbarAction',));
            }

            // xml_JID_job_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_job_log']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::logAction',));
            }

            // xml_JID_job_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/history\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_job_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::historyAction',));
            }

            // arii_JID_history_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::jobAction',));
            }

            // arii_JID_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::indexAction',));
            }

            // xml_JID_orders_grid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_grid']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::gridAction',));
            }

            // xml_JID_orders_grid_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid_menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_grid_menu']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::grid_menuAction',));
            }

            // xml_JID_orders_grid_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_grid_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::grid_toolbarAction',));
            }

            // xml_JID_orders_folder_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/folder_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_folder_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::folder_toolbarAction',));
            }

            // arii_JID_orders_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::listAction',));
            }

            // xml_JID_orders_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_tree']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::treeAction',));
            }

            // json_JID_orders_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_orders_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::formAction',));
            }

            // xml_JID_orders_form_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_form_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::form_toolbarAction',));
            }

            // xml_JID_orders_chain_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/chain_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_chain_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::chain_toolbarAction',));
            }

            // arii_JID_toolbar_purge_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/purge_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_purge_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_purge_jobAction',));
            }

            // arii_JID_toolbar_job_why
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/job_why$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_job_why']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_job_whyAction',));
            }

            // arii_JID_orders_treegrid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/treegrid$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders_treegrid']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::index_treegridAction',));
            }

            // xml_JID_orders_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_menu']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::menuAction',));
            }

            // xml_JID_orders_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbarAction',));
            }

            // arii_JID_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::indexAction',));
            }

            // svg_JID_process_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/steps\\.svg$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'svg_JID_process_steps']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::graphvizAction',));
            }

            // arii_JID_order_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_order_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::historyPageAction',));
            }

            // xml_JID_order_chart
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/chart\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_order_chart']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::chartAction',));
            }

            // xml_JID_order_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_order_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::formAction',));
            }

            // xml_JID_order_toolbar_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/toolbar_params\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_order_toolbar_params']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::toolbar_paramsAction',));
            }

            // xml_JID_order_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/params\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_order_params']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::paramsAction',));
            }

            // xml_JID_order_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/steps\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_order_steps']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::stepsAction',));
            }

            // xml_JID_order_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/history\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_order_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::historyAction',));
            }

            // xml_JID_order_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_order_log']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::logAction',));
            }

            // arii_JID_orders_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::timelineAction',));
            }

            // arii_JID_orders_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/activities$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::activitiesAction',));
            }

            // arii_JID_orders_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders_charts']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::chartsAction',));
            }

            // xml_JID_orders_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::list_xmlAction',));
            }

            // xml_JID_orders_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_pie']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::pieAction',));
            }

            // xml_JID_orders_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_bar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::barAction',));
            }

            // xml_JID_orders_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/activities\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::lastAction',));
            }

            // arii_JID_order_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_order_log']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::order_logAction',));
            }

            // arii_JID_order_log_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log/upload$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_order_log_upload']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::order_log_uploadAction',));
            }

            // arii_JID_toolbar_start_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_start_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_start_orderAction',));
            }

            // xml_JID_start_order_parameters
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/start_order/parameters$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_start_order_parameters']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::start_order_parametersAction',));
            }

            // xml_JID_toolbar_order_param
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/param\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar_order_param']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_order_paramAction',));
            }

            // xml_JID_toolbar_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbarAction',));
            }

            // arii_JID_order_doc
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/doc$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_order_doc']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::docAction',));
            }

            // arii_JID_order_purge
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/purge$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_order_purge']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::purgeAction',));
            }

            // arii_JID_toolbar_purge_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/purge/toolbar$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_purge_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_purge_orderAction',));
            }

            // arii_JID_orders_toolbar_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders_toolbar_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbar_timelineAction',));
            }

            // xml_JID_orders_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/activities/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_orders_toolbar_activities']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbar_activitiesAction',));
            }

            // arii_JID_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::indexAction',));
            }

            // arii_JID_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::lastAction',));
            }

            // xml_JID_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::last_xmlAction',));
            }

            // arii_JID_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::defaultAction',));
            }

            // arii_JID_toolbar_footer
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/footer$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_footer']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::footerAction',));
            }

            // arii_JID_toolbar_add_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/add_order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_add_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_add_orderAction',));
            }

            // arii_JID_toolbar_start_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_start_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_start_ordersAction',));
            }

            // arii_JID_orders_selected_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/selected_orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_orders_selected_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::selected_ordersAction',));
            }

            // xml_JID_toolbar_global
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/global$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar_global']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::globalAction',));
            }

            // arii_JID_timeline_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_timeline_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::toolbarAction',));
            }

            // arii_JID_history_timeline_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/timeline/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history_timeline_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::toolbar_timelineAction',));
            }

            // json_JID_spoolers_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_spoolers_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::formAction',));
            }

            // xml_JID_spooler_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spooler_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::formAction',));
            }

            // xml_JID_spooler_form_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/form_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spooler_form_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::form_toolbarAction',));
            }

            // xml_JID_spooler_tasks
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/tasks\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spooler_tasks']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::tasksAction',));
            }

            // xml_JID_spooler_task_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/task_params\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spooler_task_params']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::task_paramsAction',));
            }

            // xml_JID_spooler_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/jobs\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spooler_jobs']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::jobsAction',));
            }

            // xml_JID_spooler_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/orders\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spooler_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::ordersAction',));
            }

            // arii_JID_spooler_delete
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_spooler_delete']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::deleteAction',));
            }

            // arii_JID_history_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::activitiesAction',));
            }

            // xml_JID_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar_activities']), array (  '_controller' => 'AriiJIDBundle:Activities:toolbar',));
            }

            // xml_JID_menu_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_menu_activities']), array (  '_controller' => 'AriiJIDBundle:Activities:menu',));
            }

            // arii_JID_processes
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_processes']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::indexAction',));
            }

            // xml_JID_processes_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_processes_tree']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::treeAction',));
            }

            // xml_JID_processes_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes/steps\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_processes_steps']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::stepsAction',));
            }

            // svg_JID_processes_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes/steps\\.svg$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'svg_JID_processes_steps']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::graphvizAction',));
            }

            // arii_JID_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_chains']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::indexAction',));
            }

            // arii_JID_chains_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_chains_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::listAction',));
            }

            // arii_JID_chains_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_chains_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::timelineAction',));
            }

            // arii_JID_chains_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/activities$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_chains_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::activitiesAction',));
            }

            // arii_JID_menu_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/chains$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_menu_chains']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::menuAction',));
            }

            // xml_JID_toolbar_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/toolbar$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar_chains']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::toolbarAction',));
            }

            // xml_JID_chains_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_chains_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::list_xmlAction',));
            }

            // xml_JID_chains_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_chains_tree']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::treeAction',));
            }

            // arii_JID_toolbar_start_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_chains$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_start_chains']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_start_chainsAction',));
            }

            // arii_JID_process
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_process']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessController::indexAction',));
            }

            // arii_JID_process_graphviz
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/graphviz$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_process_graphviz']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessController::graphvizAction',));
            }

            // xml_JID_toolbar_process
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/toolbar$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar_process']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessController::toolbarAction',));
            }

            // arii_JID_detail_future_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/next$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_detail_future_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::next_jobAction',));
            }

            // arii_JID_detail_future_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/next$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_detail_future_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::next_orderAction',));
            }

            // arii_JID_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::indexAction',));
            }

            // arii_JID_history_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::listAction',));
            }

            // arii_JID_history_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history_charts']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::chartsAction',));
            }

            // xml_JID_history_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_history_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::list_xmlAction',));
            }

            // xml_JID_history_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/history\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_history_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::list_xmlAction',  'history' => 100,));
            }

            // xml_JID_job_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job_list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_job_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::job_listAction',));
            }

            // arii_JID_history_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::timelineAction',));
            }

            // xml_JID_history_pie_ordered
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/pie_ordered\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_history_pie_ordered']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::pieAction',  'ordered' => 1,));
            }

            // xml_JID_history_pie_states
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/states\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_history_pie_states']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::statesAction',));
            }

            // xml_JID_timeline_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/history\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_timeline_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::historyAction',));
            }

            // xml_JID_timeline_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/jobs\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_timeline_jobs']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::jobsAction',));
            }

            // xml_JID_timeline_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/orders\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_timeline_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::ordersAction',));
            }

            // xml_JID_timeline_events
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/events\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_timeline_events']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::eventsAction',));
            }

            // xml_JID_timeline_history_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/orders\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_timeline_history_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::history_ordersAction',));
            }

            // xml_JID_timeline_ordered_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/ordered_jobs\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_timeline_ordered_jobs']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::ordered_jobsAction',));
            }

            // xml_JID_toolbar_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_toolbar_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::toolbarAction',));
            }

            // arii_JID_history_purge
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/purge$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_history_purge']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::purgeAction',));
            }

            // arii_JID_job_doc
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/doc$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_job_doc']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::docAction',));
            }

            // arii_JID_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_planned']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::indexAction',));
            }

            // arii_JID_planned_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_planned_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::listAction',));
            }

            // arii_JID_planned_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_planned_charts']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::chartsAction',));
            }

            // xml_JID_planned_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::list_xmlAction',));
            }

            // arii_JID_planned_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_planned_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::timelineAction',));
            }

            // arii_JID_planned_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/activities$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_planned_activities']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::activitiesAction',));
            }

            // arii_JID_planned_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/activities$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_planned_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::activitiesAction',));
            }

            // xml_JID_planned_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_pie']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::pieAction',));
            }

            // xml_JID_planned_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_bar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::barAction',));
            }

            // xml_JID_planned_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::timeline_xmlAction',));
            }

            // xml_JID_planned_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::toolbarAction',));
            }

            // xml_JID_planned_toolbar_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/timeline/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_toolbar_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::toolbar_timelineAction',));
            }

            // xml_JID_planned_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/activities/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_toolbar_activities']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::toolbar_activitiesAction',));
            }

            // xml_JID_planned_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_planned_menu']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::menuAction',));
            }

            // xml_JID_timeline_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/planned\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_timeline_planned']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::plannedAction',));
            }

            // ical_JID_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/arii\\.ical$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ical_JID_planned']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::icalAction',));
            }

            // arii_JID_spoolers
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_spoolers']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::indexAction',));
            }

            // arii_JID_spoolers_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_spoolers_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::listAction',));
            }

            // arii_JID_spoolers_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_spoolers_charts']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::chartsAction',));
            }

            // arii_JID_spooler_update
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_spooler_update']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::UpdateAction',));
            }

            // xml_JID_spoolers_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spoolers_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::list_xmlAction',));
            }

            // xml_JID_spoolers_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spoolers_pie']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::pieAction',));
            }

            // xml_JID_spoolers_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spoolers_bar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::barAction',));
            }

            // xml_JID_spoolers_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spoolers_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::timeline_xmlAction',));
            }

            // xml_JID_spooler_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/log\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spooler_log']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::logAction',));
            }

            // xml_JID_spoolers_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spoolers_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::toolbarAction',));
            }

            // xml_JID_spoolers_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_spoolers_menu']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::menuAction',));
            }

            // arii_JID_clusters
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/clusters$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_clusters']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ClustersController::indexAction',));
            }

            // xml_JID_clusters_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/clusters/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_clusters_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ClustersController::list_xmlAction',));
            }

            // xml_JID_clusters_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/clusters/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_clusters_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ClustersController::toolbarAction',));
            }

            // arii_JID_events
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_events']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::indexAction',));
            }

            // arii_JID_events_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_events_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::timelineAction',));
            }

            // arii_JID_events_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/activities$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_events_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::activitiesAction',));
            }

            // xml_JID_events_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_events_pie']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::pieAction',));
            }

            // xml_JID_events
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/events\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_events']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::eventsAction',));
            }

            // html_JID_event_detail
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/event/detail\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_JID_event_detail']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::detailAction',));
            }

            // xml_JID_events_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/activities/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_events_toolbar_activities']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::toolbar_activitiesAction',));
            }

            // xml_JID_events_toolbar_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/timeline/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_events_toolbar_timeline']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::toolbar_timelineAction',));
            }

            // xml_JID_events_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/activities\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_events_last']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::lastAction',));
            }

            // arii_JID_messages
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_messages']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::indexAction',));
            }

            // arii_JID_messages_index
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_messages_index']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::indexAction',));
            }

            // xml_JID_messages_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_messages_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::toolbarAction',));
            }

            // xml_JID_messages_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_messages_pie']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::pieAction',));
            }

            // xml_JID_messages_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_messages_bar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::barAction',));
            }

            // json_JID_messages_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_messages_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::formAction',));
            }

            // xml_JID_messages_spooler
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/spooler\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_messages_spooler']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::spoolerAction',));
            }

            // xml_JID_messages_grid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_messages_grid']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::messagesAction',));
            }

            // xml_JID_message
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/message\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_message']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::messageAction',));
            }

            // arii_JID_detail_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/detail$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_detail_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::orderAction',));
            }

            // arii_JID_detail_order_plan
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/plan$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_detail_order_plan']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::planAction',));
            }

            // arii_JID_detail_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/detail$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_detail_planned']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::plannedAction',));
            }

            // arii_JID_planned_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/log$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_planned_log']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::planned_logAction',));
            }

            // arii_JID_detail_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/detail$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_detail_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::jobAction',));
            }

            // arii_JID_job_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_job_log']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::job_logAction',));
            }

            // arii_JID_job_log_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log/upload$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_job_log_upload']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::job_log_uploadAction',));
            }

            // arii_JID_start_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/start$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_start_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CmdController::startjobAction',));
            }

            // arii_JID_db_daysschedule
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/daysschedule$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_db_daysschedule']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::days_scheduleAction',));
            }

            // arii_JID_db_reorg
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/reorg$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_db_reorg']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::reorgAction',));
            }

            // arii_JID_ajax_job_info
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ajax/job_info$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_ajax_job_info']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\AjaxController::job_infoAction',));
            }

            // arii_JID_form_start_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_form_start_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::start_jobAction',));
            }

            // arii_JID_form_start_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_form_start_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::start_orderAction',));
            }

            // arii_JID_form_add_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/add_order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_form_add_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::add_orderAction',));
            }

            // arii_JID_select_start_state
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_start_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_select_start_state']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::select_start_stateAction',));
            }

            // arii_JID_select_end_state
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_end_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_select_end_state']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::select_end_stateAction',));
            }

            // arii_JID_form_kill_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/kill_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_form_kill_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::kill_jobAction',));
            }

            // arii_JID_form_stop_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/stop_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_form_stop_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::stop_jobAction',));
            }

            // arii_JID_form_unstop_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/unstop_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_form_unstop_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::unstop_jobAction',));
            }

            // arii_JID_grid_history_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_grid_history_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::grid_historyAction',));
            }

            // arii_JID_grid_history_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_order_history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_grid_history_order']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::grid_order_historyAction',));
            }

            // arii_JID_chart_history_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/chart_history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_chart_history_job']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::chart_historyAction',));
            }

            // arii_JID_timeline_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_timeline_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::timeline_historyAction',));
            }

            // arii_JID_radar_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_radar_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::radar_historyAction',));
            }

            // arii_JID_bar3_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar3_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_bar3_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::bar3_historyAction',));
            }

            // arii_JID_last_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/last_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_last_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::last_historyAction',));
            }

            // arii_JID_bar_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_bar_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::bar_historyAction',));
            }

            // arii_JID_pie_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_pie_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::pie_ordersAction',));
            }

            // arii_JID_radar_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_radar_orders']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::radar_ordersAction',));
            }

            // arii_JID_pie_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_pie_planned']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::pie_plannedAction',));
            }

            // arii_JID_radar_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_radar_planned']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::radar_plannedAction',));
            }

            // arii_JID_pie_messages
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/messages$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_pie_messages']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::pie_messagesAction',));
            }

            // arii_JID_menu_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_menu_history']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::menuAction',));
            }

            // arii_JID_menu_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_menu_planned']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MenuController::plannedAction',));
            }

            // arii_JID_menu_messages
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_menu_messages']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MenuController::messagesAction',));
            }

            // arii_JID_toolbar_job_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/job_list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_job_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_job_listAction',));
            }

            // arii_JID_toolbar_refresh
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/refresh$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_refresh']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_refreshAction',));
            }

            // arii_JID_toolbar_schedule_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/schedule_list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_toolbar_schedule_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_schedule_listAction',));
            }

            // arii_JID_select_state
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_select_state']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::select_stateAction',));
            }

            // arii_JID_doc
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/doc$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_doc']), array (  '_controller' => 'AriiJIDBundle:Doc:default',));
            }

            // arii_JID_requests
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_requests']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::indexAction',));
            }

            // xml_JID_requests_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_requests_list']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::listAction',));
            }

            // arii_JID_requests_result
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/result\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_requests_result']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::resultAction',));
            }

            // arii_JID_requests_summary
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/summary\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_requests_summary']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::summaryAction',));
            }

            // arii_JID_silent
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_silent']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::indexAction',));
            }

            // xml_JID_silent_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_silent_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::toolbarAction',));
            }

            // json_JID_silent_ribbon
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_silent_ribbon']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::ribbonAction',));
            }

            // arii_JID_silent_generate
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/generate$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_silent_generate']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::generateAction',));
            }

            // arii_JID_silent_generate_direct
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/direct$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_silent_generate_direct']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::directAction',));
            }

            // arii_JID_silent_files
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/files$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_silent_files']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::filesAction',));
            }

            // arii_JID_get_file
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/get/file$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_get_file']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::getfileAction',));
            }

            // arii_JID_monitoring
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/monitoring$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_monitoring']), array (  '_controller' => 'AriiJIDBundle:Monitoring:index',));
            }

            // arii_JID_cron
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_cron']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::indexAction',));
            }

            // arii_JID_cron_convert
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/convert$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_cron_convert']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::convertAction',));
            }

            // xml_JID_cron_dirlist
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/dirlist\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_cron_dirlist']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::dirlistAction',));
            }

            // xml_JID_cron_job_view
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/job/view$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_cron_job_view']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::job_viewAction',));
            }

            // json_JID_cron_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/upload$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_cron_upload']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::uploadAction',));
            }

            // arii_JID_cron_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/form$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_cron_form']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::formAction',));
            }

            // json_JID_cron_ribbon
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_cron_ribbon']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::ribbonAction',));
            }

            // arii_JID_task
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/task_scheduler$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_task']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::task_schedulerAction',));
            }

            // xml_JID_log_server
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_log_server']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::log_analyzerAction',));
            }

            // arii_JID_log_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_log_toolbar']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::toolbarAction',));
            }

            // arii_JID_log_server
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_log_server']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::logAction',));
            }

            // xml_JID_log_dirlist
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/dirlist\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_log_dirlist']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::dirlistAction',));
            }

            // json_JID_log_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/upload\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JID_log_upload']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::uploadAction',));
            }

            // arii_JID_log_scheduler
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_scheduler$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JID_log_scheduler']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::log_schedulerAction',));
            }

            // xml_JID_log_server_chart
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_chart\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JID_log_server_chart']), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::log_chartAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/joc')) {
            // arii_JOC_command
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/XML/command$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_command']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SOSController::XMLCommandAction',));
            }

            // arii_JOC_sync
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/sync$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_sync']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SOSController::SyncAction',));
            }

            // arii_JOC_index
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_index']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::indexAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_arii_JOC_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_JOC_index'));
                }

                return $ret;
            }
            not_arii_JOC_index:

            // arii_JOC_readme
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_readme']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DefaultController::readmeAction',));
            }

            // json_JOC_ribbon
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JOC_ribbon']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // arii_JOC_jobs_dashboard
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/dashboard$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_jobs_dashboard']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::dashboardAction',));
            }

            // xml_JOC_browser
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/browser\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_browser']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::browserAction',));
            }

            // xml_JOC_toolbar_gantt
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/gantt/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_toolbar_gantt']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GanttController::toolbarAction',));
            }

            // arii_JOC_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::defaultAction',));
            }

            // arii_JOC_toolbar_footer
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/footer$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_footer']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::footerAction',));
            }

            // arii_JOC_toolbar_start_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_start_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_start_jobAction',));
            }

            // arii_JOC_toolbar_start_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_start_jobs']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_start_jobsAction',));
            }

            // arii_JOC_toolbar_stop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/stop_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_stop_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_stop_jobAction',));
            }

            // arii_JOC_toolbar_stop_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/stop_jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_stop_jobs']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_stop_jobsAction',));
            }

            // arii_JOC_toolbar_unstop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/unstop_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_unstop_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_unstop_jobAction',));
            }

            // arii_JOC_toolbar_unstop_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/unstop_jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_unstop_jobs']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_unstop_jobsAction',));
            }

            // arii_JOC_toolbar_add_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/add_order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_add_order']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_add_orderAction',));
            }

            // xml_JOC_toolbar_global
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/global$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_toolbar_global']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::globalAction',));
            }

            // png_JOC_percent
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/percent\\.png/(?P<percent>[^/]++)/(?P<color>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'png_JOC_percent']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GraphController::percentAction',));
            }

            // arii_JOC_todo
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/todo$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_todo']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SidebarController::todoAction',));
            }

            // arii_JOC_orders_gantt
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/gantt$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_orders_gantt']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GanttController::indexAction',));
            }

            // xml_JOC_orders_gantt
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/gantt\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_gantt']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GanttController::ordersAction',));
            }

            // arii_JOC_locks
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/locks$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_locks']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\LocksController::indexAction',));
            }

            // xml_JOC_locks
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/locks/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_locks']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\LocksController::gridAction',));
            }

            // xml_JOC_locks_use
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/locks/use\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_locks_use']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\LocksController::useAction',));
            }

            // arii_JOC_remote_schedulers
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/remote_schedulers$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_remote_schedulers']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RemoteSchedulerController::indexAction',));
            }

            // xml_JOC_remote_schedulers_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/remote_schedulers/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_remote_schedulers_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RemoteSchedulerController::list_xmlAction',));
            }

            // arii_JOC_connections
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_connections']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ConnectionsController::indexAction',));
            }

            // xml_JOC_connections
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_connections']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ConnectionsController::gridAction',));
            }

            // arii_JOC_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_jobs']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::indexAction',));
            }

            // json_JOC_jobs_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JOC_jobs_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::formAction',));
            }

            // xml_JOC_jobs_form_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form_toolbar\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_jobs_form_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::form_toolbarAction',));
            }

            // xml_JOC_job_params_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params_toolbar\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_params_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::params_toolbarAction',));
            }

            // xml_JOC_jobs_grid
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_jobs_grid']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::gridAction',));
            }

            // xml_JOC_jobs_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_jobs_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::toolbarAction',));
            }

            // xml_JOC_jobs_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_jobs_menu']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::menuAction',));
            }

            // xml_JOC_start_job_parameters
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/start_job/parameters$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_start_job_parameters']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::start_job_parametersAction',));
            }

            // xml_JOC_job_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job_list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::job_listAction',));
            }

            // xml_JOC_jobs_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_jobs_pie']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::pieAction',  'ordered' => 0,));
            }

            // xml_JOC_ordered_jobs_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ordered_jobs/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_ordered_jobs_pie']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::pieAction',  'ordered' => 1,));
            }

            // json_JOC_jobs_execution_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/execution\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JOC_jobs_execution_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::executionAction',));
            }

            // json_JOC_jobs_spooler_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/spooler\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JOC_jobs_spooler_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::spoolerAction',));
            }

            // json_JOC_jobs_target_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/target\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JOC_jobs_target_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::targetAction',));
            }

            // html_JOC_job_detail
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/detail$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_JOC_job_detail']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::detailAction',));
            }

            // xml_JOC_job_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::formAction',));
            }

            // xml_JOC_job_params
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_params']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::paramsAction',));
            }

            // xml_JOC_job_execution_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/execution\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_execution_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::executionAction',));
            }

            // xml_JOC_job_spooler_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/spooler\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_spooler_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::spoolerAction',));
            }

            // xml_JOC_job_target_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/target\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_target_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::targetAction',));
            }

            // xml_JOC_job_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_job_log']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::logAction',));
            }

            // arii_JOC_jobchains
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobchains$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_jobchains']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobChainsController::listAction',));
            }

            // xml_JOC_jobchains_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobchains/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_jobchains_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobChainsController::list_xmlAction',));
            }

            // arii_JOC_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_orders']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::indexAction',));
            }

            // xml_JOC_orders_grid
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_grid']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::gridAction',));
            }

            // xml_JOC_orders_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_menu']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::menuAction',));
            }

            // xml_JOC_orders_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::grid_toolbarAction',));
            }

            // xml_JOC_orders_form_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form_toolbar\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_form_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::form_toolbarAction',));
            }

            // arii_JOC_orders_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_orders_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::listAction',));
            }

            // arii_JOC_orders_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_orders_charts']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::chartsAction',));
            }

            // xml_JOC_orders_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::list_xmlAction',));
            }

            // xml_JOC_add_order_parameters
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/add_order/parameters$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_add_order_parameters']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::add_order_parametersAction',));
            }

            // arii_JOC_orders_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_orders_timeline']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::timelineAction',));
            }

            // xml_JOC_orders_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_pie']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::pieAction',));
            }

            // xml_JOC_orders_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_bar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::barAction',));
            }

            // xml_JOC_orders_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_orders_timeline']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::timeline_xmlAction',));
            }

            // arii_JOC_order_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_order_log']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::order_logAction',));
            }

            // arii_JOC_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_order']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::indexAction',));
            }

            // arii_JOC_order_detail
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/detail$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_order_detail']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::detailAction',));
            }

            // xml_JOC_order_params
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/parameters\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_order_params']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::paramsAction',));
            }

            // json_JOC_orders_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JOC_orders_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::formAction',));
            }

            // xml_JOC_order_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_order_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::formAction',));
            }

            // svg_JOC_process_steps
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/graph\\.svg$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'svg_JOC_process_steps']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::graphvizAction',));
            }

            // arii_JOC_chains
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_chains']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::listAction',));
            }

            // arii_JOC_chains_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_chains_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::listAction',));
            }

            // arii_JOC_chains_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_chains_charts']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::chartsAction',));
            }

            // xml_JOC_chains_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_chains_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::list_xmlAction',));
            }

            // arii_JOC_chains_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_chains_timeline']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::timelineAction',));
            }

            // xml_JOC_chains_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_chains_pie']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::pieAction',));
            }

            // xml_JOC_chains_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_chains_bar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::barAction',));
            }

            // xml_JOC_chains_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_chains_timeline']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::timeline_xmlAction',));
            }

            // xml_JOC_chains_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_chains_menu']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::menuAction',));
            }

            // xml_JOC_chains_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_chains_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::toolbarAction',));
            }

            // arii_JOC_nested
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_nested']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::listAction',));
            }

            // arii_JOC_nested_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_nested_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::listAction',));
            }

            // arii_JOC_nested_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_nested_charts']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::chartsAction',));
            }

            // xml_JOC_nested_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/list\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_nested_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::list_xmlAction',));
            }

            // arii_JOC_nested_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/timeline$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_nested_timeline']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::timelineAction',));
            }

            // xml_JOC_nested_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_nested_pie']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::pieAction',));
            }

            // xml_JOC_nested_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_nested_bar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::barAction',));
            }

            // xml_JOC_nested_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_nested_timeline']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::timeline_xmlAction',));
            }

            // xml_JOC_nested_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_nested_menu']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::menuAction',));
            }

            // xml_JOC_nested_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_nested_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::toolbarAction',));
            }

            // arii_JOC_spoolers
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_spoolers']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::indexAction',));
            }

            // xml_JOC_spoolers_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spoolers_menu']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::menuAction',));
            }

            // arii_JOC_spoolers_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_spoolers_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::listAction',));
            }

            // arii_JOC_spoolers_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/charts$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_spoolers_charts']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::chartsAction',));
            }

            // xml_JOC_spoolers_grid
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spoolers_grid']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::gridAction',));
            }

            // xml_JOC_spoolers_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spoolers_pie']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::pieAction',));
            }

            // xml_JOC_spoolers_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/bar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spoolers_bar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::barAction',));
            }

            // xml_JOC_spoolers_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spoolers_timeline']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::timeline_xmlAction',));
            }

            // xml_JOC_spooler_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/log\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spooler_log']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::logAction',));
            }

            // arii_JOC_spooler_status
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/status$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_spooler_status']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::statusAction',));
            }

            // xml_JOC_spooler_delete
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spooler_delete']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::deleteAction',));
            }

            // json_JOC_spoolers_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_JOC_spoolers_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::formAction',));
            }

            // xml_JOC_spooler_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spooler_form']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::formAction',));
            }

            // xml_JOC_spooler_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_spooler_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::toolbarAction',));
            }

            // xml_JOC_subscribers
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/subscribers\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_subscribers']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::subscribersAction',));
            }

            // arii_JOC_process_classes
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process_classes$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_process_classes']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ProcessClassesController::indexAction',));
            }

            // xml_JOC_process_classes
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process_classes/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_process_classes']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ProcessClassesController::gridAction',));
            }

            // arii_JOC_detail_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/detail$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_detail_planned']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::plannedAction',));
            }

            // arii_JOC_planned_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/log$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_planned_log']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::planned_logAction',));
            }

            // arii_JOC_detail_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/detail$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_detail_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::jobAction',));
            }

            // arii_JOC_job_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_job_log']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::job_logAction',));
            }

            // arii_JOC_start_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/start$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_start_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\CmdController::startjobAction',));
            }

            // arii_JOC_db_daysschedule
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/daysschedule$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_db_daysschedule']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBController::days_scheduleAction',));
            }

            // arii_JOC_db_reorg
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/reorg$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_db_reorg']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBController::reorgAction',));
            }

            // arii_JOC_ajax_job_info
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ajax/job_info$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_ajax_job_info']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\AjaxController::job_infoAction',));
            }

            // xml_JOC_toolbar_start_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_order\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_toolbar_start_order']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::start_orderAction',));
            }

            // xml_JOC_toolbar_order_params
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_order_params\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_toolbar_order_params']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::order_paramsAction',));
            }

            // arii_JOC_form_start_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_form_start_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::start_jobAction',));
            }

            // arii_JOC_form_start_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_form_start_order']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::start_orderAction',));
            }

            // arii_JOC_form_add_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/add_order$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_form_add_order']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::add_orderAction',));
            }

            // arii_JOC_select_start_state
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_start_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_select_start_state']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::select_start_stateAction',));
            }

            // arii_JOC_select_end_state
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_end_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_select_end_state']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::select_end_stateAction',));
            }

            // arii_JOC_form_kill_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/kill_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_form_kill_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::kill_jobAction',));
            }

            // arii_JOC_form_stop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/stop_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_form_stop_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::stop_jobAction',));
            }

            // arii_JOC_form_unstop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/unstop_job$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_form_unstop_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::unstop_jobAction',));
            }

            // arii_JOC_grid_history_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_grid_history_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::grid_historyAction',));
            }

            // arii_JOC_grid_history_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_order_history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_grid_history_order']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::grid_order_historyAction',));
            }

            // arii_JOC_chart_history_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/chart_history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_chart_history_job']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::chart_historyAction',));
            }

            // arii_JOC_chart_history_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/chart_order_history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_chart_history_order']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::chart_order_historyAction',));
            }

            // arii_JOC_timeline_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_timeline_history']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::timeline_historyAction',));
            }

            // arii_JOC_radar_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_radar_history']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::radar_historyAction',));
            }

            // arii_JOC_bar3_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar3_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_bar3_history']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::bar3_historyAction',));
            }

            // arii_JOC_last_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/last_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_last_history']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::last_historyAction',));
            }

            // arii_JOC_bar_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar_chart/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_bar_history']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::bar_historyAction',));
            }

            // arii_JOC_pie_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_pie_orders']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::pie_ordersAction',));
            }

            // arii_JOC_radar_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_radar_orders']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::radar_ordersAction',));
            }

            // arii_JOC_pie_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_pie_planned']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::pie_plannedAction',));
            }

            // arii_JOC_radar_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_radar_planned']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::radar_plannedAction',));
            }

            // arii_JOC_pie_messages
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/messages$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_pie_messages']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::pie_messagesAction',));
            }

            // arii_JOC_menu_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_menu_history']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::historyAction',));
            }

            // arii_JOC_menu_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_menu_orders']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::ordersAction',));
            }

            // arii_JOC_menu_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_menu_planned']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::plannedAction',));
            }

            // arii_JOC_menu_messages
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_menu_messages']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::messagesAction',));
            }

            // arii_JOC_toolbar_job_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/job_list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_job_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_job_listAction',));
            }

            // arii_JOC_toolbar_refresh
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/refresh$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_refresh']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_refreshAction',));
            }

            // arii_JOC_toolbar_schedule_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/schedule_list$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_toolbar_schedule_list']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_schedule_listAction',));
            }

            // arii_JOC_simile_xml_all
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/all$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_simile_xml_all']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => '',));
            }

            // arii_JOC_simile_xml_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/history$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_simile_xml_history']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'history',));
            }

            // arii_JOC_simile_xml_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_simile_xml_orders']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'orders',));
            }

            // arii_JOC_simile_xml_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/planned$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_simile_xml_planned']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'planned',));
            }

            // arii_JOC_simile_xml_events
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/events$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_simile_xml_events']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'events',));
            }

            // xml_JOC_reports_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/reports/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_reports_toolbar']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ReportsController::toolbarAction',));
            }

            // arii_JOC_report_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/reports/jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_report_jobs']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ReportsController::jobsAction',));
            }

            // xml_JOC_report_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/reports/jobs\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_report_jobs']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ReportsController::report_jobsAction',));
            }

            // arii_JOC_runtimes
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_runtimes']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::listAction',));
            }

            // xml_JOC_runtimes_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes/orders\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_runtimes_orders']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::ordersAction',));
            }

            // xml_JOC_runtimes_steps
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes/steps$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_runtimes_steps']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::stepsAction',));
            }

            // xml_JOC_runtimes_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes/jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_runtimes_jobs']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::jobsAction',));
            }

            // arii_JOC_schedules
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/schedules$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_JOC_schedules']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SchedulesController::indexAction',));
            }

            // xml_JOC_schedules
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/schedules/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_JOC_schedules']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SchedulesController::gridAction',));
            }

            // arii_Focus_get
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/(?P<spooler>[^/]++)/(?P<port>[^/]++)/get$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Focus_get']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::getAction',));
            }

            // arii_Focus_refresh
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/refresh$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Focus_refresh']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::refreshAction',));
            }

            // arii_Cache_post
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/post$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Cache_post']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::postAction',));
            }

            // arii_Cache_file
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/file$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Cache_file']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::fileAction',));
            }

            // arii_Cache_get
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/(?P<spooler>[^/]++)/(?P<port>[^/]++)/get$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Cache_get']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::getAction',));
            }

            // arii_Cache_test
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/(?P<spooler>[^/]++)/(?P<port>[^/]++)/test$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Cache_test']), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::testAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/public')) {
            // rss_JID_history_job
            if ('/public/jobs.atom' === $pathinfo) {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RSSController::jobsAction',  '_route' => 'rss_JID_history_job',);
            }

            // rss_JID_history_orders
            if ('/public/orders.atom' === $pathinfo) {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RSSController::ordersAction',  '_route' => 'rss_JID_history_orders',);
            }

            // rss_JID_history_chains
            if ('/public/chains.atom' === $pathinfo) {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RSSController::chainsAction',  '_route' => 'rss_JID_history_chains',);
            }

            // ical_JID_waiting
            if ('/public/waiting.ical' === $pathinfo) {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::icalAction',  '_route' => 'ical_JID_waiting',);
            }

            // png_JID_gantt
            if ('/public/gantt' === $pathinfo) {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\GanttController::imageAction',  '_route' => 'png_JID_gantt',);
            }

            if (0 === strpos($pathinfo, '/public/purge')) {
                // arii_JID_purge_history_public
                if ('/public/purge/history' === $pathinfo) {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_historyAction',  '_route' => 'arii_JID_purge_history_public',);
                }

                // arii_JID_purge_order_public
                if ('/public/purge/orders' === $pathinfo) {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_orderAction',  '_route' => 'arii_JID_purge_order_public',);
                }

                // arii_JID_purge_order_step_public
                if ('/public/purge/steps' === $pathinfo) {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_order_stepsAction',  '_route' => 'arii_JID_purge_order_step_public',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

        }

        // nagios_JID_jobs
        if ('/nagios/jobs' === $pathinfo) {
            return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\NagiosController::jobsAction',  '_route' => 'nagios_JID_jobs',);
        }

        if (0 === strpos($pathinfo, '/ds')) {
            // arii_DS_Command
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/XML/command$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_DS_Command']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\SOSController::XMLCommandAction',));
            }

            // arii_DS_index
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_DS_index']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::indexAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_arii_DS_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_DS_index'));
                }

                return $ret;
            }
            not_arii_DS_index:

            // arii_DS_readme
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_DS_readme']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::readmeAction',));
            }

            // xml_DS_toolbar
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_toolbar']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // json_DS_ribbon
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_DS_ribbon']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // xml_DS_menu
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_menu']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::menuAction',));
            }

            // arii_DS_jobs
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_DS_jobs']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::indexAction',));
            }

            // xml_DS_jobs_grid
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_jobs_grid']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::gridAction',));
            }

            // xml_DS_jobs_pie
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_jobs_pie']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::pieAction',));
            }

            // xml_DS_jobs_toolbar
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_jobs_toolbar']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::toolbarAction',));
            }

            // xml_DS_jobs_timeline
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_jobs_timeline']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::timelineAction',));
            }

            // json_DS_jobs_form
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_DS_jobs_form']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::formAction',));
            }

            // xml_DS_jobs_form
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_jobs_form']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobController::formAction',));
            }

            // xml_DS_jobs_form_toolbar
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_jobs_form_toolbar']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::form_toolbarAction',));
            }

            // arii_DS_orders
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_DS_orders']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::indexAction',));
            }

            // xml_DS_orders_grid
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_orders_grid']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::gridAction',));
            }

            // xml_DS_orders_pie
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/pie\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_orders_pie']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::pieAction',));
            }

            // xml_DS_orders_toolbar
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_orders_toolbar']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::toolbarAction',));
            }

            // json_DS_orders_form
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_DS_orders_form']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::formAction',));
            }

            // xml_DS_order_form
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/form\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_order_form']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrderController::formAction',));
            }

            // xml_DS_orders_form_toolbar
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form_toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_orders_form_toolbar']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::form_toolbarAction',));
            }

            // xml_DS_orders_timeline
            if (preg_match('#^/ds/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_DS_orders_timeline']), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::timelineAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/gvz')) {
            // arii_GVZ_index
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_index']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::indexAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_arii_GVZ_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_GVZ_index'));
                }

                return $ret;
            }
            not_arii_GVZ_index:

            // arii_GVZ_readme
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_readme']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::readmeAction',));
            }

            // xml_GVZ_toolbar
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_GVZ_toolbar']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // xml_GVZ_legend
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/legend\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_GVZ_legend']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::legendAction',));
            }

            // json_GVZ_ribbon
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_GVZ_ribbon']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // txt_GVZ_file
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/file$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'txt_GVZ_file']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::fileAction',));
            }

            // arii_GVZ_generate
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/generate$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_generate']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\GraphvizController::generateAction',));
            }

            // arii_GVZ_generate_config
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/generate_config$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_generate_config']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\GraphvizController::configAction',));
            }

            // arii_GVZ_dropzone
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dropzone$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_dropzone']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DropzoneController::indexAction',));
            }

            // arii_GVZ_upload
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/upload$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_upload']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DropzoneController::uploadAction',));
            }

            // xml_GVZ_tree
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_GVZ_tree']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\FoldersController::treeAction',));
            }

            // xml_GVZ_tree_remote
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/remote/tree\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_GVZ_tree_remote']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\FoldersController::treeAction',  'path' => 'remote',));
            }

            // arii_GVZ_audit
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_audit']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::indexAction',));
            }

            // arii_GVZ_audit_generate
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/generate$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_GVZ_audit_generate']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::generateAction',));
            }

            // json_GVZ_audit_ribbon
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_GVZ_audit_ribbon']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::ribbonAction',));
            }

            // xml_GVZ_audit_comments
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/comments\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_GVZ_audit_comments']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::commentsAction',));
            }

            // xml_GVZ_audit_toolbar
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_GVZ_audit_toolbar']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::toolbarAction',));
            }

            // xml_GVZ_audit_menu
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_GVZ_audit_menu']), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::menuAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/report')) {
                // arii_Report_index
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_index']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::indexAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_arii_Report_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'arii_Report_index'));
                    }

                    return $ret;
                }
                not_arii_Report_index:

                // arii_Report_readme
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_readme']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::readmeAction',));
                }

                // xml_Report_tree
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/tree\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_tree']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::treeAction',));
                }

                // xml_Report_form
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/form\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_form']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::infoAction',));
                }

                // xml_Report_view
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/view\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_view']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::docAction',));
                }

                // json_Report_ribbon
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_Report_ribbon']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::ribbonAction',));
                }

                // arii_Report_documents
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/documents$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_documents']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::indexAction',));
                }

                // xml_Report_documents_toolbar
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/documents/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_documents_toolbar']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::toolbarAction',));
                }

                // arii_Report_document
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/document$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_document']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentController::docAction',));
                }

                // arii_Report_document_get
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/document/get$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_document_get']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentController::getAction',));
                }

                // xml_Report_document_toolbar
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/document/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_document_toolbar']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentController::toolbarAction',));
                }

                // arii_Report_status
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_status']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::statusAction',));
                }

                // arii_Report_history
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_history']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::historyAction',));
                }

                // xml_Report_grid
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/grid\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_grid']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\OrdersController::gridAction',));
                }

                // xml_Report_docs
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/documents/grid\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_docs']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::gridAction',));
                }

                // arii_Report_requests
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_requests']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::indexAction',));
                }

                // xml_Report_requests_list
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/list\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_requests_list']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::listAction',));
                }

                // xml_Report_requests_toolbar
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_requests_toolbar']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::toolbarAction',));
                }

                // arii_Report_requests_result
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/result\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_requests_result']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::resultAction',));
                }

                // arii_Report_requests_summary
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/summary\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_requests_summary']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::summaryAction',));
                }

                // arii_Report_import
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/import$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_import']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ImportController::indexAction',));
                }

                // html_Report_import
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/import\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_Report_import']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ImportController::getAction',));
                }

                // arii_Report_jasper
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jasper$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_jasper']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::indexAction',));
                }

                // arii_Report_process
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_process']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ProcessController::indexAction',));
                }

                // xml_Report_process_tree
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/tree\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_process_tree']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ProcessController::treeAction',));
                }

                // xml_Report_process_orders
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/orders\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_process_orders']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ProcessController::ordersAction',));
                }

                // arii_Report_edit
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_edit']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\EditController::indexAction',));
                }

                // xml_Report_edit_tree
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/edit/tree\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_edit_tree']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\EditController::treeAction',));
                }

                // html_Report_edit_sql
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/edit/sql\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_Report_edit_sql']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\EditController::sqlAction',));
                }

                // arii_Report_ipam
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'arii_Report_ipam']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::indexAction',));
                }

                // html_Report_ipam_get
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam/get\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_Report_ipam_get']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::getAction',));
                }

                // xml_Report_ipam_grid
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam/grid\\.xml$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_Report_ipam_grid']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::gridAction',));
                }

                // html_Report_ipam_pop
                if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam/pop\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'html_Report_ipam_pop']), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::popAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        // fos_user_change_password
        if ('/change-password/change-password' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_change_password;
            }

            return $ret;
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/user')) {
            // json_User_login_form
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/login\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_User_login_form']), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::loginAction',));
            }

            // xml_User_menu
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_User_menu']), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::menuAction',));
            }

            // xml_User_toolbar
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'xml_User_toolbar']), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::toolbarAction',));
            }

            // json_User_ribbon
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/login/ribbon\\.json$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'json_User_ribbon']), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::ribbonAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
