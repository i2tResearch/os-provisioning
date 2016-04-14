<?php

namespace Modules\ProvBase\Http\Controllers;

use Modules\ProvBase\Entities\Contract;
use Modules\ProvBase\Entities\Qos;

class ContractController extends \BaseModuleController {

	// TODO: temporary helper until we have a global config or billing module or field specific visibility
	private $billing = 1;


	private function _qos_next_month($model)
	{
		$h = $model->html_list(Qos::all(), 'name');
		$h['0'] = '';
		asort($h);

		return $h;
	}

    /**
     * defines the formular fields for the edit and create view
     */
	public function get_form_fields($model = null)
	{
		$r = $a = $b = $c = [];

		// label has to be the same like column in sql table
		$a = array(
			array('form_type' => 'text', 'name' => 'number', 'description' => 'Contract Number', 'options' => ['readonly']),
		//	array('form_type' => 'text', 'name' => 'number2', 'description' => 'Contract Number 2', 'options' => ['readonly']),
			array('form_type' => 'text', 'name' => 'salutation', 'description' => 'Salutation'),
			array('form_type' => 'text', 'name' => 'company', 'description' => 'Company'),
			array('form_type' => 'text', 'name' => 'firstname', 'description' => 'Firstname', 'create' => '1'),
			array('form_type' => 'text', 'name' => 'lastname', 'description' => 'Lastname', 'create' => '1', 'space' => '1'),

			array('form_type' => 'text', 'name' => 'street', 'description' => 'Street', 'create' => '1'),
			array('form_type' => 'text', 'name' => 'zip', 'description' => 'Postcode', 'create' => '1'),
			array('form_type' => 'text', 'name' => 'city', 'description' => 'City', 'create' => '1'),

			array('form_type' => 'text', 'name' => 'phone', 'description' => 'Phone'),
			array('form_type' => 'text', 'name' => 'fax', 'description' => 'Fax'),
			array('form_type' => 'text', 'name' => 'email', 'description' => 'E-Mail Address'),
			array('form_type' => 'text', 'name' => 'birthday', 'description' => 'Birthday', 'space' => '1'),
		);

		if ($this->billing)
			$b = array(
				array('form_type' => 'checkbox', 'name' => 'network_access', 'description' => 'Internet Access', 'checked' => true, 'create' => '1'),
				array('form_type' => 'text', 'name' => 'contract_start', 'description' => 'Contract Start'), // TODO: create default 'value' => date("Y-m-d")
				array('form_type' => 'text', 'name' => 'contract_end', 'description' => 'Contract End', 'space' => '1'),

				array('form_type' => 'select', 'name' => 'qos_id', 'description' => 'QoS', 'create' => '1', 'value' => $model->html_list(Qos::all(), 'name')),
				array('form_type' => 'select', 'name' => 'next_qos_id', 'description' => 'QoS next month', 'value' => $this->_qos_next_month($model)),
				array('form_type' => 'text', 'name' => 'voip_id', 'description' => 'Phone ID'),
				array('form_type' => 'text', 'name' => 'next_voip_id', 'description' => 'Phone ID next month', 'space' => '1'),

				array('form_type' => 'text', 'name' => 'sepa_holder', 'description' => 'Bank Account Holder'),
				array('form_type' => 'text', 'name' => 'sepa_iban', 'description' => 'IBAN'),
				array('form_type' => 'text', 'name' => 'sepa_bic', 'description' => 'BIC'),
				array('form_type' => 'text', 'name' => 'sepa_institute', 'description' => 'Bank Institute'),
				array('form_type' => 'checkbox', 'name' => 'create_invoice', 'description' => 'Create Invoice', 'value' => '1', 'space' => '1'),
			);

		$c = array (
			array('form_type' => 'textarea', 'name' => 'description', 'description' => 'Description'),
		);

		return array_merge($a, $b, $c);
	}

}
