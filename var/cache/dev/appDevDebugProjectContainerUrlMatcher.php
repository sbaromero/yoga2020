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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        if (0 === strpos($pathinfo, '/usuario')) {
            // cya_usuario_index
            if ($pathinfo === '/usuario/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'cya_usuario_index',);
            }

            // cya_usuario_add
            if ($pathinfo === '/usuario/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::addAction',  '_route' => 'cya_usuario_add',);
            }

            // cya_usuario_rapido
            if ($pathinfo === '/usuario/rapido') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::usuariorapidoAction',  '_route' => 'cya_usuario_rapido',);
            }

            // cya_usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_usuario_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::createAction',  '_route' => 'cya_usuario_create',);
            }
            not_cya_usuario_create:

            if (0 === strpos($pathinfo, '/usuario/edit')) {
                // cya_usuario_edit
                if (preg_match('#^/usuario/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_usuario_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::editAction',));
                }

                // cya_usuario_editavatar
                if (0 === strpos($pathinfo, '/usuario/editavatar') && preg_match('#^/usuario/editavatar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_usuario_editavatar')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::editavatarAction',));
                }

                if (0 === strpos($pathinfo, '/usuario/editp')) {
                    // cya_usuario_editpublic
                    if (rtrim($pathinfo, '/') === '/usuario/editpublic') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cya_usuario_editpublic');
                        }

                        return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::editpublicAction',  '_route' => 'cya_usuario_editpublic',);
                    }

                    // cya_usuario_editpass
                    if (0 === strpos($pathinfo, '/usuario/editpass') && preg_match('#^/usuario/editpass/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_usuario_editpass')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::editpassAction',));
                    }

                }

            }

            // cya_usuario_update
            if (0 === strpos($pathinfo, '/usuario/update') && preg_match('#^/usuario/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_usuario_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_cya_usuario_update:

            // cya_usuario_view
            if (0 === strpos($pathinfo, '/usuario/view') && preg_match('#^/usuario/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_usuario_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::viewAction',));
            }

            // cya_usuario_inicio
            if ($pathinfo === '/usuario/inicio') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::inicioAction',  '_route' => 'cya_usuario_inicio',);
            }

            // cya_usuario_constru
            if ($pathinfo === '/usuario/constru') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::construAction',  '_route' => 'cya_usuario_constru',);
            }

            // cya_usuario_generarcuota
            if ($pathinfo === '/usuario/generarcuota') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::generarcuotaAction',  '_route' => 'cya_usuario_generarcuota',);
            }

            if (0 === strpos($pathinfo, '/usuario/imprimircuota')) {
                // cya_usuario_imprimircuota
                if (preg_match('#^/usuario/imprimircuota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_usuario_imprimircuota')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::imprimircuotaAction',));
                }

                // cya_usuario_imprimircuota2
                if (0 === strpos($pathinfo, '/usuario/imprimircuota2') && preg_match('#^/usuario/imprimircuota2/(?P<id>[^/]++)/(?P<valorcuota>[^/]++)/(?P<mes>[^/]++)/(?P<cc>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_usuario_imprimircuota2')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::imprimircuota2Action',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/rubro')) {
            // cya_rubro_index
            if ($pathinfo === '/rubro/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\RubroController::indexAction',  '_route' => 'cya_rubro_index',);
            }

            // cya_rubro_add
            if ($pathinfo === '/rubro/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\RubroController::addAction',  '_route' => 'cya_rubro_add',);
            }

            // cya_rubro_create
            if ($pathinfo === '/rubro/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_rubro_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\RubroController::createAction',  '_route' => 'cya_rubro_create',);
            }
            not_cya_rubro_create:

            // cya_rubro_edit
            if (0 === strpos($pathinfo, '/rubro/edit') && preg_match('#^/rubro/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_rubro_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\RubroController::editAction',));
            }

            // cya_rubro_update
            if (0 === strpos($pathinfo, '/rubro/update') && preg_match('#^/rubro/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_rubro_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_rubro_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\RubroController::updateAction',));
            }
            not_cya_rubro_update:

            // cya_rubro_view
            if (0 === strpos($pathinfo, '/rubro/view') && preg_match('#^/rubro/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_rubro_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\RubroController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/movimiento')) {
            // cya_movimiento_index
            if ($pathinfo === '/movimiento/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MovimientoController::indexAction',  '_route' => 'cya_movimiento_index',);
            }

            // cya_movimiento_add
            if ($pathinfo === '/movimiento/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MovimientoController::addAction',  '_route' => 'cya_movimiento_add',);
            }

            // cya_movimiento_create
            if ($pathinfo === '/movimiento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_movimiento_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MovimientoController::createAction',  '_route' => 'cya_movimiento_create',);
            }
            not_cya_movimiento_create:

            // cya_movimiento_details
            if (0 === strpos($pathinfo, '/movimiento/details') && preg_match('#^/movimiento/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_movimiento_details')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MovimientoController::detailsAction',));
            }

            // cya_movimiento_update
            if (0 === strpos($pathinfo, '/movimiento/update') && preg_match('#^/movimiento/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_movimiento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_movimiento_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MovimientoController::updateAction',));
            }
            not_cya_movimiento_update:

            // cya_movimiento_view
            if (0 === strpos($pathinfo, '/movimiento/view') && preg_match('#^/movimiento/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_movimiento_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MovimientoController::viewAction',));
            }

            // cya_movimiento_delete
            if (0 === strpos($pathinfo, '/movimiento/delete') && preg_match('#^/movimiento/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_movimiento_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MovimientoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/caja')) {
            // cya_caja_index
            if ($pathinfo === '/caja/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CajaController::indexAction',  '_route' => 'cya_caja_index',);
            }

            // cya_caja_add
            if ($pathinfo === '/caja/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CajaController::addAction',  '_route' => 'cya_caja_add',);
            }

        }

        if (0 === strpos($pathinfo, '/tipoproducto')) {
            // cya_tipoproducto_index
            if ($pathinfo === '/tipoproducto/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipoproductoController::indexAction',  '_route' => 'cya_tipoproducto_index',);
            }

            // cya_tipoproducto_add
            if ($pathinfo === '/tipoproducto/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipoproductoController::addAction',  '_route' => 'cya_tipoproducto_add',);
            }

            // cya_tipoproducto_create
            if ($pathinfo === '/tipoproducto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_tipoproducto_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipoproductoController::createAction',  '_route' => 'cya_tipoproducto_create',);
            }
            not_cya_tipoproducto_create:

            // cya_tipoproducto_edit
            if (0 === strpos($pathinfo, '/tipoproducto/edit') && preg_match('#^/tipoproducto/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tipoproducto_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipoproductoController::editAction',));
            }

            // cya_tipoproducto_update
            if (0 === strpos($pathinfo, '/tipoproducto/update') && preg_match('#^/tipoproducto/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_tipoproducto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tipoproducto_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipoproductoController::updateAction',));
            }
            not_cya_tipoproducto_update:

            // cya_tipoproducto_view
            if (0 === strpos($pathinfo, '/tipoproducto/view') && preg_match('#^/tipoproducto/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tipoproducto_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipoproductoController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/locker')) {
            // cya_locker_index
            if ($pathinfo === '/locker/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockerController::indexAction',  '_route' => 'cya_locker_index',);
            }

            // cya_locker_add
            if ($pathinfo === '/locker/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockerController::addAction',  '_route' => 'cya_locker_add',);
            }

            // cya_locker_create
            if ($pathinfo === '/locker/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_locker_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockerController::createAction',  '_route' => 'cya_locker_create',);
            }
            not_cya_locker_create:

            // cya_locker_edit
            if (0 === strpos($pathinfo, '/locker/edit') && preg_match('#^/locker/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_locker_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockerController::editAction',));
            }

            // cya_locker_update
            if (0 === strpos($pathinfo, '/locker/update') && preg_match('#^/locker/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_locker_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_locker_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockerController::updateAction',));
            }
            not_cya_locker_update:

            // cya_locker_view
            if (0 === strpos($pathinfo, '/locker/view') && preg_match('#^/locker/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_locker_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockerController::viewAction',));
            }

            // cya_locker_delete
            if (0 === strpos($pathinfo, '/locker/delete') && preg_match('#^/locker/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_locker_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockerController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/stock')) {
            // cya_stock_index
            if ($pathinfo === '/stock/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\StockController::indexAction',  '_route' => 'cya_stock_index',);
            }

            // cya_stock_add
            if ($pathinfo === '/stock/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\StockController::addAction',  '_route' => 'cya_stock_add',);
            }

            // cya_stock_create
            if ($pathinfo === '/stock/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_stock_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\StockController::createAction',  '_route' => 'cya_stock_create',);
            }
            not_cya_stock_create:

            // cya_stock_edit
            if (0 === strpos($pathinfo, '/stock/edit') && preg_match('#^/stock/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_stock_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\StockController::editAction',));
            }

            // cya_stock_update
            if (0 === strpos($pathinfo, '/stock/update') && preg_match('#^/stock/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_stock_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_stock_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\StockController::updateAction',));
            }
            not_cya_stock_update:

            // cya_stock_view
            if (0 === strpos($pathinfo, '/stock/view') && preg_match('#^/stock/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_stock_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\StockController::viewAction',));
            }

            // cya_stock_delete
            if (0 === strpos($pathinfo, '/stock/delete') && preg_match('#^/stock/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_stock_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\StockController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/lockersocio')) {
            // cya_lockersocio_index
            if ($pathinfo === '/lockersocio/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockersocioController::indexAction',  '_route' => 'cya_lockersocio_index',);
            }

            // cya_lockersocio_add
            if ($pathinfo === '/lockersocio/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockersocioController::addAction',  '_route' => 'cya_lockersocio_add',);
            }

            // cya_lockersocio_create
            if ($pathinfo === '/lockersocio/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_lockersocio_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockersocioController::createAction',  '_route' => 'cya_lockersocio_create',);
            }
            not_cya_lockersocio_create:

            // cya_lockersocio_edit
            if (0 === strpos($pathinfo, '/lockersocio/edit') && preg_match('#^/lockersocio/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_lockersocio_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockersocioController::editAction',));
            }

            // cya_lockersocio_update
            if (0 === strpos($pathinfo, '/lockersocio/update') && preg_match('#^/lockersocio/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_lockersocio_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_lockersocio_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockersocioController::updateAction',));
            }
            not_cya_lockersocio_update:

            // cya_lockersocio_view
            if (0 === strpos($pathinfo, '/lockersocio/view') && preg_match('#^/lockersocio/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_lockersocio_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockersocioController::viewAction',));
            }

            // cya_lockersocio_delete
            if (0 === strpos($pathinfo, '/lockersocio/delete') && preg_match('#^/lockersocio/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_lockersocio_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\LockersocioController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/producto')) {
            // cya_producto_index
            if ($pathinfo === '/producto/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProductoController::indexAction',  '_route' => 'cya_producto_index',);
            }

            // cya_producto_add
            if ($pathinfo === '/producto/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProductoController::addAction',  '_route' => 'cya_producto_add',);
            }

            // cya_producto_create
            if ($pathinfo === '/producto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_producto_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProductoController::createAction',  '_route' => 'cya_producto_create',);
            }
            not_cya_producto_create:

            // cya_producto_edit
            if (0 === strpos($pathinfo, '/producto/edit') && preg_match('#^/producto/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_producto_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProductoController::editAction',));
            }

            // cya_producto_update
            if (0 === strpos($pathinfo, '/producto/update') && preg_match('#^/producto/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_producto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_producto_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProductoController::updateAction',));
            }
            not_cya_producto_update:

            // cya_producto_view
            if (0 === strpos($pathinfo, '/producto/view') && preg_match('#^/producto/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_producto_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProductoController::viewAction',));
            }

            // cya_producto_delete
            if (0 === strpos($pathinfo, '/producto/delete') && preg_match('#^/producto/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_producto_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProductoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/alumnocc')) {
            if (0 === strpos($pathinfo, '/alumnocc/index')) {
                // cya_alumnocc_index
                if ($pathinfo === '/alumnocc/index') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::indexAction',  '_route' => 'cya_alumnocc_index',);
                }

                // cya_alumnocc_indexpublic
                if ($pathinfo === '/alumnocc/indexpublic') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::indexpublicAction',  '_route' => 'cya_alumnocc_indexpublic',);
                }

            }

            // cya_alumnocc_add
            if ($pathinfo === '/alumnocc/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::addAction',  '_route' => 'cya_alumnocc_add',);
            }

            // cya_alumnocc_pagodiario
            if ($pathinfo === '/alumnocc/pagodiarioAction') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::pagodiarioAction',  '_route' => 'cya_alumnocc_pagodiario',);
            }

            // cya_alumnocc_generacc
            if ($pathinfo === '/alumnocc/generaccAction') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::generaccAction',  '_route' => 'cya_alumnocc_generacc',);
            }

            // cya_alumnocc_create
            if ($pathinfo === '/alumnocc/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_alumnocc_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::createAction',  '_route' => 'cya_alumnocc_create',);
            }
            not_cya_alumnocc_create:

            if (0 === strpos($pathinfo, '/alumnocc/de')) {
                if (0 === strpos($pathinfo, '/alumnocc/deta')) {
                    // cya_alumnocc_detallepago
                    if (0 === strpos($pathinfo, '/alumnocc/detallepago') && preg_match('#^/alumnocc/detallepago/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_alumnocc_detallepago')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::detallepagoAction',));
                    }

                    // cya_alumnocc_details
                    if (0 === strpos($pathinfo, '/alumnocc/details') && preg_match('#^/alumnocc/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_alumnocc_details')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::detailsAction',));
                    }

                }

                // cya_alumnocc_delete
                if (0 === strpos($pathinfo, '/alumnocc/delete') && preg_match('#^/alumnocc/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_alumnocc_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::deleteAction',));
                }

            }

            // cya_alumnocc_ticket
            if (0 === strpos($pathinfo, '/alumnocc/ticket') && preg_match('#^/alumnocc/ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_alumnocc_ticket')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::ticketAction',));
            }

            // cya_alumnocc_detallepagopublic
            if (0 === strpos($pathinfo, '/alumnocc/detallepagopublic') && preg_match('#^/alumnocc/detallepagopublic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_alumnocc_detallepagopublic')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::detallepagopublicAction',));
            }

            // cya_alumnocc_pago
            if (0 === strpos($pathinfo, '/alumnocc/pago') && preg_match('#^/alumnocc/pago/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_alumnocc_pago')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::pagoAction',));
            }

            if (0 === strpos($pathinfo, '/alumnocc/indexdeuda')) {
                // cya_alumnocc_indexdeuda
                if ($pathinfo === '/alumnocc/indexdeuda') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::indexdeudaAction',  '_route' => 'cya_alumnocc_indexdeuda',);
                }

                // cya_alumnocc_indexdeudatotalizada
                if ($pathinfo === '/alumnocc/indexdeudatotalizada') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\AlumnoccController::indexdeudatotalizadaAction',  '_route' => 'cya_alumnocc_indexdeudatotalizada',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/tipocuota')) {
            // cya_tipocuota_index
            if ($pathinfo === '/tipocuota/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipocuotaController::indexAction',  '_route' => 'cya_tipocuota_index',);
            }

            // cya_tipocuota_add
            if ($pathinfo === '/tipocuota/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipocuotaController::addAction',  '_route' => 'cya_tipocuota_add',);
            }

            // cya_tipocuota_edit
            if (0 === strpos($pathinfo, '/tipocuota/edit') && preg_match('#^/tipocuota/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tipocuota_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipocuotaController::editAction',));
            }

            // cya_tipocuota_delete
            if (0 === strpos($pathinfo, '/tipocuota/delete') && preg_match('#^/tipocuota/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tipocuota_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TipocuotaController::deleteAction',));
            }

        }

        // cya_maestroventa_add
        if ($pathinfo === '/maestroventa/add') {
            return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MaestroventaController::addAction',  '_route' => 'cya_maestroventa_add',);
        }

        if (0 === strpos($pathinfo, '/detalleventa')) {
            // cya_detalleventa_add
            if ($pathinfo === '/detalleventa/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\DetalleventaController::addAction',  '_route' => 'cya_detalleventa_add',);
            }

            // cya_detalleventa_delete
            if (0 === strpos($pathinfo, '/detalleventa/delete') && preg_match('#^/detalleventa/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_detalleventa_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\DetalleventaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/curso')) {
            // cya_curso_index
            if ($pathinfo === '/curso/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursoController::indexAction',  '_route' => 'cya_curso_index',);
            }

            // cya_curso_add
            if ($pathinfo === '/curso/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursoController::addAction',  '_route' => 'cya_curso_add',);
            }

            // cya_curso_create
            if ($pathinfo === '/curso/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_curso_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursoController::createAction',  '_route' => 'cya_curso_create',);
            }
            not_cya_curso_create:

            // cya_curso_edit
            if (0 === strpos($pathinfo, '/curso/edit') && preg_match('#^/curso/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_curso_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursoController::editAction',));
            }

            // cya_curso_update
            if (0 === strpos($pathinfo, '/curso/update') && preg_match('#^/curso/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_curso_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_curso_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursoController::updateAction',));
            }
            not_cya_curso_update:

            // cya_curso_view
            if (0 === strpos($pathinfo, '/curso/view') && preg_match('#^/curso/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_curso_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursoController::viewAction',));
            }

            // cya_curso_delete
            if (0 === strpos($pathinfo, '/curso/delete') && preg_match('#^/curso/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_curso_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/modulo')) {
            // cya_materia_index
            if ($pathinfo === '/modulo/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MateriaController::indexAction',  '_route' => 'cya_materia_index',);
            }

            // cya_materia_add
            if ($pathinfo === '/modulo/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MateriaController::addAction',  '_route' => 'cya_materia_add',);
            }

            // cya_materia_create
            if ($pathinfo === '/modulo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_materia_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MateriaController::createAction',  '_route' => 'cya_materia_create',);
            }
            not_cya_materia_create:

            // cya_materia_edit
            if (0 === strpos($pathinfo, '/modulo/edit') && preg_match('#^/modulo/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_materia_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MateriaController::editAction',));
            }

            // cya_materia_update
            if (0 === strpos($pathinfo, '/modulo/update') && preg_match('#^/modulo/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_materia_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_materia_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MateriaController::updateAction',));
            }
            not_cya_materia_update:

            // cya_materia_view
            if (0 === strpos($pathinfo, '/modulo/view') && preg_match('#^/modulo/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_materia_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MateriaController::viewAction',));
            }

            // cya_materia_delete
            if (0 === strpos($pathinfo, '/modulo/delete') && preg_match('#^/modulo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_materia_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\MateriaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tema')) {
            // cya_tema_index
            if ($pathinfo === '/tema/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TemaController::indexAction',  '_route' => 'cya_tema_index',);
            }

            // cya_tema_add
            if ($pathinfo === '/tema/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TemaController::addAction',  '_route' => 'cya_tema_add',);
            }

            // cya_tema_create
            if ($pathinfo === '/tema/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_tema_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TemaController::createAction',  '_route' => 'cya_tema_create',);
            }
            not_cya_tema_create:

            // cya_tema_edit
            if (0 === strpos($pathinfo, '/tema/edit') && preg_match('#^/tema/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tema_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TemaController::editAction',));
            }

            // cya_tema_update
            if (0 === strpos($pathinfo, '/tema/update') && preg_match('#^/tema/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_tema_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tema_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TemaController::updateAction',));
            }
            not_cya_tema_update:

            // cya_tema_view
            if (0 === strpos($pathinfo, '/tema/view') && preg_match('#^/tema/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tema_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TemaController::viewAction',));
            }

            // cya_tema_delete
            if (0 === strpos($pathinfo, '/tema/delete') && preg_match('#^/tema/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_tema_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\TemaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/cursada')) {
            // cya_cursada_index
            if ($pathinfo === '/cursada/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursadaController::indexAction',  '_route' => 'cya_cursada_index',);
            }

            // cya_cursada_add
            if (0 === strpos($pathinfo, '/cursada/add') && preg_match('#^/cursada/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_cya_cursada_add;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_cursada_add')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursadaController::addAction',));
            }
            not_cya_cursada_add:

            // cya_cursada_create
            if ($pathinfo === '/cursada/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cya_cursada_create;
                }

                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursadaController::createAction',  '_route' => 'cya_cursada_create',);
            }
            not_cya_cursada_create:

            // cya_cursada_edit
            if (0 === strpos($pathinfo, '/cursada/edit') && preg_match('#^/cursada/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_cursada_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursadaController::editAction',));
            }

            // cya_cursada_update
            if (0 === strpos($pathinfo, '/cursada/update') && preg_match('#^/cursada/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_cursada_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_cursada_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursadaController::updateAction',));
            }
            not_cya_cursada_update:

            // cya_cursada_view
            if (0 === strpos($pathinfo, '/cursada/view') && preg_match('#^/cursada/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_cursada_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursadaController::viewAction',));
            }

            // cya_cursada_delete
            if (0 === strpos($pathinfo, '/cursada/delete') && preg_match('#^/cursada/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_cursada_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\CursadaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/proveedor')) {
            // cya_proveedor_index
            if ($pathinfo === '/proveedor/index') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorController::indexAction',  '_route' => 'cya_proveedor_index',);
            }

            // cya_proveedor_add
            if ($pathinfo === '/proveedor/add') {
                return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorController::addAction',  '_route' => 'cya_proveedor_add',);
            }

            // cya_proveedor_edit
            if (0 === strpos($pathinfo, '/proveedor/edit') && preg_match('#^/proveedor/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedor_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorController::editAction',));
            }

            // cya_proveedor_update
            if (0 === strpos($pathinfo, '/proveedor/update') && preg_match('#^/proveedor/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cya_proveedor_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedor_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorController::updateAction',));
            }
            not_cya_proveedor_update:

            // cya_proveedor_view
            if (0 === strpos($pathinfo, '/proveedor/view') && preg_match('#^/proveedor/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedor_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorController::viewAction',));
            }

            // cya_proveedor_delete
            if (0 === strpos($pathinfo, '/proveedor/delete') && preg_match('#^/proveedor/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedor_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/proveedorcc')) {
                // cya_proveedorcc_index
                if ($pathinfo === '/proveedorcc/index') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorccController::indexAction',  '_route' => 'cya_proveedorcc_index',);
                }

                // cya_proveedorcc_add
                if ($pathinfo === '/proveedorcc/add') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorccController::addAction',  '_route' => 'cya_proveedorcc_add',);
                }

                // cya_proveedorcc_pago
                if (0 === strpos($pathinfo, '/proveedorcc/pago') && preg_match('#^/proveedorcc/pago/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedorcc_pago')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorccController::pagoAction',));
                }

                // cya_proveedorcc_edit
                if (0 === strpos($pathinfo, '/proveedorcc/edit') && preg_match('#^/proveedorcc/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedorcc_edit')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorccController::editAction',));
                }

                // cya_proveedorcc_update
                if (0 === strpos($pathinfo, '/proveedorcc/update') && preg_match('#^/proveedorcc/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cya_proveedorcc_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedorcc_update')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorccController::updateAction',));
                }
                not_cya_proveedorcc_update:

                // cya_proveedorcc_view
                if (0 === strpos($pathinfo, '/proveedorcc/view') && preg_match('#^/proveedorcc/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedorcc_view')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorccController::viewAction',));
                }

                // cya_proveedorcc_delete
                if (0 === strpos($pathinfo, '/proveedorcc/delete') && preg_match('#^/proveedorcc/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cya_proveedorcc_delete')), array (  '_controller' => 'CYA\\YogaBundle\\Controller\\ProveedorccController::deleteAction',));
                }

            }

        }

        // cya_yoga_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\UsuarioController::homeAction',  '_route' => 'cya_yoga_home',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // cya_yoga_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\SecurityController::loginAction',  '_route' => 'cya_yoga_login',);
                }

                // cya_yoga_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'CYA\\YogaBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'cya_yoga_login_check',);
                }

            }

            // cya_yoga_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'cya_yoga_logout');
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
