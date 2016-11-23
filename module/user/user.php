<?php

class user extends common {

	public static $actions = [
		'login' => self::RANK_VISITOR,
		'logout' => self::RANK_MEMBER
	];

	/**
	 * Connexion
	 */
	public function login() {
		// Soumission du formulaire
		if($this->isPost()) {
			// Connexion si les informations sont correctes
			if(
				$this->getData(['user', $this->getInput('userId')])
				AND $this->getData(['user', $this->getInput('userId'), 'password']) === hash('sha256', $this->getInput('userPassword'))
			) {
				$expire = $this->getInput('userLongTime') ? strtotime("+1 year") : 0;
				setcookie('ZWII_USER_ID', $this->getInput('userId'), $expire);
				setcookie('ZWII_USER_PASSWORD', hash('sha256', $this->getInput('userPassword')), $expire);
				return [
					'notification' => 'Connexion réussie',
					'redirect' => implode('/', array_slice(explode('/', $this->getUrl()), 2)),
					'state' => true
				];
			}
			// Sinon notification d'échec
			else {
				return [
					'display' => self::DISPLAY_POPUP,
					'notification' => 'Identifiant ou mot de passe incorrect',
					'title' => 'Connexion',
					'view' => true
				];
			}
		}
		// Affichage du template
		else {
			return [
				'display' => self::DISPLAY_POPUP,
				'title' => 'Connexion',
				'view' => true
			];
		}
	}

	/**
	 * Déconnexion
	 */
	public function logout() {
		helper::deleteCookie('ZWII_USER_ID');
		helper::deleteCookie('ZWII_USER_PASSWORD');
		return [
			'notification' => 'Déconnexion réussie',
			'redirect' => implode('/', array_slice(explode('/', $this->getUrl()), 2)),
			'state' => true
		];
	}

}