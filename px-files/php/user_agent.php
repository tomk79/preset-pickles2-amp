<?php
/**
 * UserAgent Checker
 */
namespace tomk79\pickles2\presetPickles2Amp;

/**
 * UserAgent Checker class
 */
class userAgent{

	/**
	 * 変換処理の実行
	 * @param object $px Picklesオブジェクト
	 * @param object $json プラグインオプション
	 */
	public static function detect( $px, $json ){
		if( preg_match( '/(iPhone|iPod|(Android.*Mobile)|Windows Phone)/', $_SERVER['HTTP_USER_AGENT'] ) ){
			// モバイルのUAでなければ、変換しない。
			$px->conf()->UA = 'smt';
		}else{
			$px->conf()->UA = 'pc';
		}
		return true;
	}
}
