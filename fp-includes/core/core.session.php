<?php

function sess_setup() {
	if (SESSION_PATH != '')
		session_save_path(SESSION_PATH);

	session_name(SESS_COOKIE);

	session_start();
}

function sess_add($key, $val) {
	$_SESSION [$key] = $val;
}

function sess_remove($key) {
	if (isset($_SESSION [$key])) {
		$oldval = $_SESSION [$key];
		unset($_SESSION [$key]);
		return $oldval;
	}
}

function sess_get($key) {
	if (isset($_SESSION [$key]))
		return $_SESSION [$key];
	else
		return false;
}

function sess_close() {
	session_write_close();
	unset($_SESSION);
	if (isset($_COOKIE [session_name()])) {
		setcookie(session_name(), '', time() - 42000, '/');
		session_set_cookie_params(0);
	}
}

/**
 * Generates a CSRF token and adds it to the session.
 */
function sess_setCsrfToken() {
	if (!isset($_SESSION ['csrftoken'])) {
		$_SESSION ['csrftoken'] = uniqid('', true);
	}
}

/**
 * Returns the current CSRF token.
 *
 * @return string the current CSRF token
 */
function sess_getCsrfToken() {
	return isset($_SESSION ['csrftoken']) ? $_SESSION ['csrftoken'] : '';
}

/**
 * Checks if the given token is the correct CSRF token.
 *
 * @param string $token
 *        	the token string to be checked
 * @return boolean <code>true</code> if the token is correct; <code>false</code> otherwise
 */
function sess_isValidCsrfToken($token) {
	return isset($_SESSION ['csrftoken']) && $token === $_SESSION ['csrftoken'];
}

/**
 * Checks if the given token is the correct CSRF token.
 * Kills the whole script with error message.
 *
 * @param string $token
 *        	the token string to be checked
 */
function sess_checkCsrfToken($token) {
	if (!sess_isValidCsrfToken($token)) {
		die('Invalid CSRF token given. Possible CSRF attack!');
	}
}