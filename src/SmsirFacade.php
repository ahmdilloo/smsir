<?php
namespace phpluahmd\smsir;
use Illuminate\Support\Facades\Facade;

class SmsirFacade extends Facade
{
	protected static function getFacadeAccessor() {
		return 'Smsir';
	}
}