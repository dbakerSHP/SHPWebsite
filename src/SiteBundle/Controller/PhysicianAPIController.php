<?php

namespace SiteBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\FileParam;

class PhysicianAPIController extends FOSRestController
{

	/**
	 * @QueryParam(name="pcp", nullable=true, strict=false)
	 * @QueryParam(name="practice", nullable=true, strict=false)
	 * @QueryParam(name="physician", nullable=true, strict=false)
	 * @QueryParam(name="specialty", nullable=true, strict=false)
	 * @QueryParam(name="city", nullable=true, strict=false)
	 * @QueryParam(name="postal_code", nullable=true, strict=false)
	 * @QueryParam(name="location_distance", nullable=true, strict=false)
	 *
	 * @Get("/physician-directory")
	 */
	public function apiAllPracticesAction(ParamFetcher $paramFetcher)
	{

		$practices = $this->getDoctrine()
			->getRepository('SiteBundle:Practices')
			->getAllPractices($paramFetcher);

		$joins = array(
			'location' =>
				array(
					'location_id'=>'location_id',
					'address1'=>'address1',
					'address2'=>'address2',
					'city'=>'city',
					'state'=>'state',
					'zip'=>'zip',
					'phone'=>'phone',
					'latitude'=>'latitude',
					'longitude'=>'longitude'
				),
			'physicians' => array(
				'physician_id' => 'physician_id',
				'full_name' => 'full_name',
				'specialty' => 'specialty'
			)
		);

		$practices = $this->create_join_array($practices, $joins, 'location_id');

		$view = View::create()
			->setFormat('json')
			->setStatusCode(200)
			->setData(['practices' => $practices])
		;

		return $this->get('fos_rest.view_handler')->handle($view);
	}


	/**
	 * Build associative multidimensional array
	 * with joined tables from query rows
	 */
	private function create_join_array($rows, $joins, $joinOn){

		$out = null;

		foreach((array)$rows as $row)
		{
			if (!isset($out[$row[$joinOn]]))
			{
				$out[$row[$joinOn]] = $row;
			}

			foreach($joins as $name => $item)
			{
				unset($newitem);
				foreach($item as $field => $newfield)
				{
					unset($out[$row[$joinOn]][$field]);

					if (!empty($row[$field]))
					{
						$newitem[$newfield] = $row[$field];
					}
				}

				if (!empty($newitem))
				{
					$out[$row[$joinOn]][$name][$newitem[key($newitem)]] = $newitem;
				}

			}

		}

		if ( $this->multiKeyExists($out, 'distance') ) {
			usort($out, function($a, $b) {
				if ($a['distance'] == $b['distance']) {
					return 0;
				}
				return ($a['distance'] < $b['distance']) ? -1 : 1;
			});
		}

		return $out;

	}


	function multiKeyExists(array $arr, $key) {

		// is in base array?
		if (array_key_exists($key, $arr)) {
			return true;
		}

		// check arrays contained in this array
		foreach ($arr as $element) {
			if (is_array($element)) {
				if ($this->multiKeyExists($element, $key)) {
					return true;
				}
			}

		}

		return false;
	}

}
