<?php

use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Acl\Adapter\Memory as AclList;

/**
 * SecurityPlugin
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class SecurityPlugin extends Plugin
{
	/**
	 * Returns an existing or new access control list
	 *
	 * @returns AclList
	 */
	public function getAcl()
	{
		if (!isset($this->persistent->acl)) {

			$acl = new AclList();

			$acl->setDefaultAction(Acl::DENY);

			// Register roles
			$roles = [
				'users'  => new Role(
					'Users',
					'Member privileges, granted after sign in.'
				),
				'guests' => new Role(
					'Guests',
					'logged guests to be a "Guest".'
				),
				'visitors' => new Role(
					'Visitors',
					'Anyone browsing the site who is not signed in is considered to be a "Visitor".'
				)
			];

			foreach ($roles as $role) {
				$acl->addRole($role);
			}

			//Private area resources
			$privateResources = array(
				'invoices'     => array('index', 'profile')
			);
			foreach ($privateResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}

			//Public area resources
			$publicResources = array(
				'index'      => array('index'),
				'about'      => array('index'),
				'register'   => array('index'),
				'errors'     => array('show401', 'show404', 'show500'),
				'session'    => array('index', 'register', 'start', 'end'),
				'contact'    => array('index', 'send'),
				'test' 		 => array('index'),
				'guests'	 => array('index', 'terms'),
				'outro'		 => array('index')	
			);
			foreach ($publicResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}

			//Guests area resources
			$guestsResources = array(
				'guests'     => array('begin_forms','terms', 'eoa_first', 'eoa_second', 'eoaSendSecond', 'eoa_third', 'eoaSendThird',
				'banerjee', 'banerjeeSend','banerjee_second', 'banerjeeSendSecond','banerjee_third', 'banerjeeSendThird','pi', 'piSend','pi_second', 'piSendSecond','pi_third', 'piSendThird')
			);
			foreach ($guestsResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}

			//Grant access to public areas to all roles
			foreach ($roles as $role) {
				foreach ($publicResources as $resource => $actions) {
					foreach ($actions as $action){
						$acl->allow($role->getName(), $resource, $action);
					}
				}
			}

			//Grant access to private area to role Users
			foreach ($privateResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Users', $resource, $action);
				}
			}

			//Grant access to guests area to role guests
			foreach ($guestsResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Guests', $resource, $action);
				}
			}

			//The acl is stored in session, APC would be useful here too
			$this->persistent->acl = $acl;
		}

		return $this->persistent->acl;
	}

	/**
	 * This action is executed before execute any action in the application
	 *
	 * @param Event $event
	 * @param Dispatcher $dispatcher
	 * @return bool
	 */
	public function beforeDispatch(Event $event, Dispatcher $dispatcher)
	{

		$auth = $this->session->get('auth');
		if (!$auth){
			$role = 'Visitors';
		} else {
			$role = $auth['role'];
		}

		$controller = $dispatcher->getControllerName();
		$action = $dispatcher->getActionName();

		$acl = $this->getAcl();

		if (!$acl->isResource($controller)) {
			$dispatcher->forward([
				'controller' => 'errors',
				'action'     => 'show404'
			]);

			return false;
		}

		$allowed = $acl->isAllowed($role, $controller, $action);
		if (!$allowed) {
			$dispatcher->forward(array(
				'controller' => 'errors',
				'action'     => 'show401'
			));
                        $this->session->destroy();
			return false;
		}
	}
}
