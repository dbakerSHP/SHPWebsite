<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/30/15
 * Time: 9:11 AM
 */

namespace SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SiteBundle\Entity\PostalCodes;

class LoadPostalCodes extends AbstractFixture implements OrderedFixtureInterface
{
	
	public function getOrder()
	{
		return 5;
	}
	
	public function load(ObjectManager $manager)
	{
		
		// LOAD AZ POSTAL CODES
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("00014");
		$postal_code->setLatitude("32.1846");
		$postal_code->setLongitude("-113.026");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("00015");
		$postal_code->setLatitude("32.3739");
		$postal_code->setLongitude("-110.657");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("00197");
		$postal_code->setLatitude("32.8091");
		$postal_code->setLongitude("-112.718");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("00199");
		$postal_code->setLatitude("33.9604");
		$postal_code->setLongitude("-111.896");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85003");
		$postal_code->setLatitude("33.4512");
		$postal_code->setLongitude("-112.078");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85004");
		$postal_code->setLatitude("33.451");
		$postal_code->setLongitude("-112.069");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85006");
		$postal_code->setLatitude("33.4658");
		$postal_code->setLongitude("-112.048");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85007");
		$postal_code->setLatitude("33.4471");
		$postal_code->setLongitude("-112.091");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85008");
		$postal_code->setLatitude("33.4647");
		$postal_code->setLongitude("-111.987");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85009");
		$postal_code->setLatitude("33.4455");
		$postal_code->setLongitude("-112.125");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85012");
		$postal_code->setLatitude("33.509");
		$postal_code->setLongitude("-112.069");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85013");
		$postal_code->setLatitude("33.5093");
		$postal_code->setLongitude("-112.082");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85014");
		$postal_code->setLatitude("33.5093");
		$postal_code->setLongitude("-112.056");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85015");
		$postal_code->setLatitude("33.5094");
		$postal_code->setLongitude("-112.102");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85016");
		$postal_code->setLatitude("33.5273");
		$postal_code->setLongitude("-112.022");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85017");
		$postal_code->setLatitude("33.5098");
		$postal_code->setLongitude("-112.123");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85018");
		$postal_code->setLatitude("33.4999");
		$postal_code->setLongitude("-111.982");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85019");
		$postal_code->setLatitude("33.5094");
		$postal_code->setLongitude("-112.143");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85020");
		$postal_code->setLatitude("33.5677");
		$postal_code->setLongitude("-112.053");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85021");
		$postal_code->setLatitude("33.5609");
		$postal_code->setLongitude("-112.094");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85022");
		$postal_code->setLatitude("33.6281");
		$postal_code->setLongitude("-112.052");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85023");
		$postal_code->setLatitude("33.6318");
		$postal_code->setLongitude("-112.094");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85024");
		$postal_code->setLatitude("33.6895");
		$postal_code->setLongitude("-112.046");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85027");
		$postal_code->setLatitude("33.6921");
		$postal_code->setLongitude("-112.101");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85028");
		$postal_code->setLatitude("33.5825");
		$postal_code->setLongitude("-112.006");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85029");
		$postal_code->setLatitude("33.5955");
		$postal_code->setLongitude("-112.11");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85031");
		$postal_code->setLatitude("33.495");
		$postal_code->setLongitude("-112.169");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85032");
		$postal_code->setLatitude("33.6259");
		$postal_code->setLongitude("-112.005");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85033");
		$postal_code->setLatitude("33.4947");
		$postal_code->setLongitude("-112.212");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85034");
		$postal_code->setLatitude("33.4358");
		$postal_code->setLongitude("-112.019");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85035");
		$postal_code->setLatitude("33.4731");
		$postal_code->setLongitude("-112.195");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85037");
		$postal_code->setLatitude("33.491");
		$postal_code->setLongitude("-112.267");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85040");
		$postal_code->setLatitude("33.4061");
		$postal_code->setLongitude("-112.025");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85041");
		$postal_code->setLatitude("33.3846");
		$postal_code->setLongitude("-112.105");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85042");
		$postal_code->setLatitude("33.3774");
		$postal_code->setLongitude("-112.035");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85043");
		$postal_code->setLatitude("33.4305");
		$postal_code->setLongitude("-112.195");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85044");
		$postal_code->setLatitude("33.3334");
		$postal_code->setLongitude("-111.989");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85045");
		$postal_code->setLatitude("33.2995");
		$postal_code->setLongitude("-112.107");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85048");
		$postal_code->setLatitude("33.327");
		$postal_code->setLongitude("-112.06");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85050");
		$postal_code->setLatitude("33.6912");
		$postal_code->setLongitude("-111.998");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85051");
		$postal_code->setLatitude("33.5595");
		$postal_code->setLongitude("-112.133");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85053");
		$postal_code->setLatitude("33.6303");
		$postal_code->setLongitude("-112.132");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85054");
		$postal_code->setLatitude("33.6829");
		$postal_code->setLongitude("-111.947");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85085");
		$postal_code->setLatitude("33.7635");
		$postal_code->setLongitude("-112.123");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85086");
		$postal_code->setLatitude("33.8389");
		$postal_code->setLongitude("-112.095");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85087");
		$postal_code->setLatitude("33.9288");
		$postal_code->setLongitude("-112.146");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85201");
		$postal_code->setLatitude("33.4361");
		$postal_code->setLongitude("-111.849");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85202");
		$postal_code->setLatitude("33.3846");
		$postal_code->setLongitude("-111.874");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85203");
		$postal_code->setLatitude("33.4524");
		$postal_code->setLongitude("-111.805");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85204");
		$postal_code->setLatitude("33.3972");
		$postal_code->setLongitude("-111.787");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85205");
		$postal_code->setLatitude("33.4337");
		$postal_code->setLongitude("-111.719");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85206");
		$postal_code->setLatitude("33.3973");
		$postal_code->setLongitude("-111.718");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85207");
		$postal_code->setLatitude("33.4551");
		$postal_code->setLongitude("-111.645");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85208");
		$postal_code->setLatitude("33.3921");
		$postal_code->setLongitude("-111.645");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85210");
		$postal_code->setLatitude("33.39");
		$postal_code->setLongitude("-111.843");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85212");
		$postal_code->setLatitude("33.3344");
		$postal_code->setLongitude("-111.635");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85213");
		$postal_code->setLatitude("33.4497");
		$postal_code->setLongitude("-111.771");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85215");
		$postal_code->setLatitude("33.4763");
		$postal_code->setLongitude("-111.714");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85218");
		$postal_code->setLatitude("33.374");
		$postal_code->setLongitude("-111.359");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85219");
		$postal_code->setLatitude("33.4235");
		$postal_code->setLongitude("-111.506");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85220");
		$postal_code->setLatitude("33.4185");
		$postal_code->setLongitude("-111.574");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85222");
		$postal_code->setLatitude("32.7261");
		$postal_code->setLongitude("-111.905");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85224");
		$postal_code->setLatitude("33.3241");
		$postal_code->setLongitude("-111.876");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85225");
		$postal_code->setLatitude("33.3181");
		$postal_code->setLongitude("-111.832");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85226");
		$postal_code->setLatitude("33.2619");
		$postal_code->setLongitude("-111.936");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85228");
		$postal_code->setLatitude("32.9353");
		$postal_code->setLongitude("-111.532");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85231");
		$postal_code->setLatitude("32.6624");
		$postal_code->setLongitude("-111.553");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85232");
		$postal_code->setLatitude("32.8253");
		$postal_code->setLongitude("-111.196");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85233");
		$postal_code->setLatitude("33.3522");
		$postal_code->setLongitude("-111.811");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85234");
		$postal_code->setLatitude("33.3644");
		$postal_code->setLongitude("-111.748");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85236");
		$postal_code->setLatitude("33.3297");
		$postal_code->setLongitude("-111.702");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85237");
		$postal_code->setLatitude("33.1162");
		$postal_code->setLongitude("-110.945");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85239");
		$postal_code->setLatitude("32.924");
		$postal_code->setLongitude("-112.049");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85242");
		$postal_code->setLatitude("33.2366");
		$postal_code->setLongitude("-111.534");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85247");
		$postal_code->setLatitude("33.1372");
		$postal_code->setLongitude("-111.886");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85248");
		$postal_code->setLatitude("33.2437");
		$postal_code->setLongitude("-111.868");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85249");
		$postal_code->setLatitude("33.2436");
		$postal_code->setLongitude("-111.793");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85250");
		$postal_code->setLatitude("33.5243");
		$postal_code->setLongitude("-111.906");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85251");
		$postal_code->setLatitude("33.4945");
		$postal_code->setLongitude("-111.921");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85253");
		$postal_code->setLatitude("33.5454");
		$postal_code->setLongitude("-111.959");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85254");
		$postal_code->setLatitude("33.6151");
		$postal_code->setLongitude("-111.953");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85255");
		$postal_code->setLatitude("33.6912");
		$postal_code->setLongitude("-111.812");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85256");
		$postal_code->setLatitude("33.5215");
		$postal_code->setLongitude("-111.798");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85257");
		$postal_code->setLatitude("33.4645");
		$postal_code->setLongitude("-111.916");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85258");
		$postal_code->setLatitude("33.5647");
		$postal_code->setLongitude("-111.897");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85259");
		$postal_code->setLatitude("33.6069");
		$postal_code->setLongitude("-111.815");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85260");
		$postal_code->setLatitude("33.61");
		$postal_code->setLongitude("-111.892");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85262");
		$postal_code->setLatitude("33.8498");
		$postal_code->setLongitude("-111.616");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85263");
		$postal_code->setLatitude("33.754");
		$postal_code->setLongitude("-111.681");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85264");
		$postal_code->setLatitude("33.5847");
		$postal_code->setLongitude("-111.412");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85268");
		$postal_code->setLatitude("33.6069");
		$postal_code->setLongitude("-111.74");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85272");
		$postal_code->setLatitude("32.9282");
		$postal_code->setLongitude("-111.971");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85273");
		$postal_code->setLatitude("33.2705");
		$postal_code->setLongitude("-111.168");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85281");
		$postal_code->setLatitude("33.4279");
		$postal_code->setLongitude("-111.933");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85282");
		$postal_code->setLatitude("33.3931");
		$postal_code->setLongitude("-111.932");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85283");
		$postal_code->setLatitude("33.3638");
		$postal_code->setLongitude("-111.932");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85284");
		$postal_code->setLatitude("33.3369");
		$postal_code->setLongitude("-111.934");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85287");
		$postal_code->setLatitude("33.4185");
		$postal_code->setLongitude("-111.933");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85292");
		$postal_code->setLatitude("33.0597");
		$postal_code->setLongitude("-110.672");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85296");
		$postal_code->setLatitude("33.3126");
		$postal_code->setLongitude("-111.758");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85297");
		$postal_code->setLatitude("33.2594");
		$postal_code->setLongitude("-111.714");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85301");
		$postal_code->setLatitude("33.5329");
		$postal_code->setLongitude("-112.179");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85302");
		$postal_code->setLatitude("33.5673");
		$postal_code->setLongitude("-112.178");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85303");
		$postal_code->setLatitude("33.5312");
		$postal_code->setLongitude("-112.22");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85304");
		$postal_code->setLatitude("33.5953");
		$postal_code->setLongitude("-112.179");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85305");
		$postal_code->setLatitude("33.5301");
		$postal_code->setLongitude("-112.258");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85306");
		$postal_code->setLatitude("33.6248");
		$postal_code->setLongitude("-112.177");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85307");
		$postal_code->setLatitude("33.5325");
		$postal_code->setLongitude("-112.31");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85308");
		$postal_code->setLatitude("33.6611");
		$postal_code->setLongitude("-112.183");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85309");
		$postal_code->setLatitude("33.5357");
		$postal_code->setLongitude("-112.376");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85310");
		$postal_code->setLatitude("33.7032");
		$postal_code->setLongitude("-112.174");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85313");
		$postal_code->setLatitude("33.6071");
		$postal_code->setLongitude("-112.16");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85321");
		$postal_code->setLatitude("32.3714");
		$postal_code->setLongitude("-112.776");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85322");
		$postal_code->setLatitude("33.3127");
		$postal_code->setLongitude("-112.794");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85323");
		$postal_code->setLatitude("33.3777");
		$postal_code->setLongitude("-112.327");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85324");
		$postal_code->setLatitude("34.0958");
		$postal_code->setLongitude("-111.866");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85326");
		$postal_code->setLatitude("33.3253");
		$postal_code->setLongitude("-112.89");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85328");
		$postal_code->setLatitude("33.5699");
		$postal_code->setLongitude("-114.47");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85331");
		$postal_code->setLatitude("33.8217");
		$postal_code->setLongitude("-111.941");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85332");
		$postal_code->setLatitude("34.17");
		$postal_code->setLongitude("-112.805");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85333");
		$postal_code->setLatitude("32.876");
		$postal_code->setLongitude("-113.427");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85335");
		$postal_code->setLatitude("33.5854");
		$postal_code->setLongitude("-112.33");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85337");
		$postal_code->setLatitude("32.9828");
		$postal_code->setLongitude("-112.745");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85338");
		$postal_code->setLatitude("33.3804");
		$postal_code->setLongitude("-112.394");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85339");
		$postal_code->setLatitude("33.3517");
		$postal_code->setLongitude("-112.198");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85340");
		$postal_code->setLatitude("33.5071");
		$postal_code->setLongitude("-112.411");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85341");
		$postal_code->setLatitude("31.9183");
		$postal_code->setLongitude("-112.854");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85342");
		$postal_code->setLatitude("33.8714");
		$postal_code->setLongitude("-112.557");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85343");
		$postal_code->setLatitude("33.3303");
		$postal_code->setLongitude("-112.708");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85344");
		$postal_code->setLatitude("33.8412");
		$postal_code->setLongitude("-114.103");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85345");
		$postal_code->setLatitude("33.5717");
		$postal_code->setLongitude("-112.248");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85347");
		$postal_code->setLatitude("32.748");
		$postal_code->setLongitude("-113.563");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85348");
		$postal_code->setLatitude("33.8294");
		$postal_code->setLongitude("-113.56");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85350");
		$postal_code->setLatitude("32.5298");
		$postal_code->setLongitude("-114.697");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85351");
		$postal_code->setLatitude("33.6042");
		$postal_code->setLongitude("-112.284");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85353");
		$postal_code->setLatitude("33.4148");
		$postal_code->setLongitude("-112.277");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85354");
		$postal_code->setLatitude("33.4216");
		$postal_code->setLongitude("-112.982");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85355");
		$postal_code->setLatitude("33.5585");
		$postal_code->setLongitude("-112.424");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85356");
		$postal_code->setLatitude("32.9002");
		$postal_code->setLongitude("-114.158");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85361");
		$postal_code->setLatitude("33.7181");
		$postal_code->setLongitude("-112.584");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85362");
		$postal_code->setLatitude("34.4243");
		$postal_code->setLongitude("-112.625");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85363");
		$postal_code->setLatitude("33.5908");
		$postal_code->setLongitude("-112.305");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85364");
		$postal_code->setLatitude("32.7003");
		$postal_code->setLongitude("-114.674");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85365");
		$postal_code->setLatitude("32.6795");
		$postal_code->setLongitude("-114.538");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85367");
		$postal_code->setLatitude("32.657");
		$postal_code->setLongitude("-114.384");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85373");
		$postal_code->setLatitude("33.8128");
		$postal_code->setLongitude("-112.353");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85374");
		$postal_code->setLatitude("33.6445");
		$postal_code->setLongitude("-112.388");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85375");
		$postal_code->setLatitude("33.6799");
		$postal_code->setLongitude("-112.355");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85379");
		$postal_code->setLatitude("33.6018");
		$postal_code->setLongitude("-112.403");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85381");
		$postal_code->setLatitude("33.6104");
		$postal_code->setLongitude("-112.232");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85382");
		$postal_code->setLatitude("33.6565");
		$postal_code->setLongitude("-112.249");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85383");
		$postal_code->setLatitude("33.7484");
		$postal_code->setLongitude("-112.251");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85387");
		$postal_code->setLatitude("33.7078");
		$postal_code->setLongitude("-112.448");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85390");
		$postal_code->setLatitude("33.8287");
		$postal_code->setLongitude("-112.988");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85501");
		$postal_code->setLatitude("33.5671");
		$postal_code->setLongitude("-110.726");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85530");
		$postal_code->setLatitude("33.0921");
		$postal_code->setLongitude("-110.257");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85533");
		$postal_code->setLatitude("33.4019");
		$postal_code->setLongitude("-109.264");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85534");
		$postal_code->setLatitude("32.7545");
		$postal_code->setLongitude("-109.141");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85535");
		$postal_code->setLatitude("33.0028");
		$postal_code->setLongitude("-109.93");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85539");
		$postal_code->setLatitude("33.4693");
		$postal_code->setLongitude("-110.967");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85540");
		$postal_code->setLatitude("32.9902");
		$postal_code->setLongitude("-109.344");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85541");
		$postal_code->setLatitude("34.0813");
		$postal_code->setLongitude("-111.167");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85542");
		$postal_code->setLatitude("33.6595");
		$postal_code->setLongitude("-110.403");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85543");
		$postal_code->setLatitude("32.9944");
		$postal_code->setLongitude("-109.977");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85544");
		$postal_code->setLatitude("34.3915");
		$postal_code->setLongitude("-111.428");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85545");
		$postal_code->setLatitude("33.7205");
		$postal_code->setLongitude("-111.094");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85546");
		$postal_code->setLatitude("32.7038");
		$postal_code->setLongitude("-109.486");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85550");
		$postal_code->setLatitude("33.3269");
		$postal_code->setLongitude("-109.86");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85552");
		$postal_code->setLatitude("32.7614");
		$postal_code->setLongitude("-109.852");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85601");
		$postal_code->setLatitude("31.5764");
		$postal_code->setLongitude("-111.331");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85602");
		$postal_code->setLatitude("32.1821");
		$postal_code->setLongitude("-110.284");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85603");
		$postal_code->setLatitude("31.4488");
		$postal_code->setLongitude("-109.894");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85606");
		$postal_code->setLatitude("32.0559");
		$postal_code->setLongitude("-109.914");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85607");
		$postal_code->setLatitude("31.4414");
		$postal_code->setLongitude("-109.382");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85610");
		$postal_code->setLatitude("31.7113");
		$postal_code->setLongitude("-109.453");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85611");
		$postal_code->setLatitude("31.6051");
		$postal_code->setLongitude("-110.533");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85613");
		$postal_code->setLatitude("31.5734");
		$postal_code->setLongitude("-110.392");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85614");
		$postal_code->setLatitude("31.8345");
		$postal_code->setLongitude("-111.012");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85615");
		$postal_code->setLatitude("31.4118");
		$postal_code->setLongitude("-110.235");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85616");
		$postal_code->setLatitude("31.7103");
		$postal_code->setLongitude("-110.326");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85617");
		$postal_code->setLatitude("31.5467");
		$postal_code->setLongitude("-109.685");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85618");
		$postal_code->setLatitude("32.7048");
		$postal_code->setLongitude("-110.661");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85619");
		$postal_code->setLatitude("32.4439");
		$postal_code->setLongitude("-110.77");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85621");
		$postal_code->setLatitude("31.4283");
		$postal_code->setLongitude("-110.975");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85623");
		$postal_code->setLatitude("32.5953");
		$postal_code->setLongitude("-110.797");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85624");
		$postal_code->setLatitude("31.4635");
		$postal_code->setLongitude("-110.625");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85625");
		$postal_code->setLatitude("31.9194");
		$postal_code->setLongitude("-109.63");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85629");
		$postal_code->setLatitude("31.9618");
		$postal_code->setLongitude("-110.976");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85630");
		$postal_code->setLatitude("31.8752");
		$postal_code->setLongitude("-110.201");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85631");
		$postal_code->setLatitude("32.8136");
		$postal_code->setLongitude("-110.746");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85632");
		$postal_code->setLatitude("32.17");
		$postal_code->setLongitude("-109.298");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85634");
		$postal_code->setLatitude("32.0824");
		$postal_code->setLongitude("-112.071");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85635");
		$postal_code->setLatitude("31.5842");
		$postal_code->setLongitude("-110.181");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85637");
		$postal_code->setLatitude("31.6805");
		$postal_code->setLongitude("-110.774");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85638");
		$postal_code->setLatitude("31.7278");
		$postal_code->setLongitude("-110.019");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85640");
		$postal_code->setLatitude("31.6236");
		$postal_code->setLongitude("-110.961");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85641");
		$postal_code->setLatitude("31.9481");
		$postal_code->setLongitude("-110.643");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85643");
		$postal_code->setLatitude("32.481");
		$postal_code->setLongitude("-110.005");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85645");
		$postal_code->setLatitude("31.6621");
		$postal_code->setLongitude("-111.091");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85648");
		$postal_code->setLatitude("31.4798");
		$postal_code->setLongitude("-111.062");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85650");
		$postal_code->setLatitude("31.4969");
		$postal_code->setLongitude("-110.267");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85653");
		$postal_code->setLatitude("32.4307");
		$postal_code->setLongitude("-111.373");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85701");
		$postal_code->setLatitude("32.2161");
		$postal_code->setLongitude("-110.971");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85704");
		$postal_code->setLatitude("32.3304");
		$postal_code->setLongitude("-110.986");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85705");
		$postal_code->setLatitude("32.2723");
		$postal_code->setLongitude("-110.994");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85706");
		$postal_code->setLatitude("32.0924");
		$postal_code->setLongitude("-110.908");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85707");
		$postal_code->setLatitude("32.1556");
		$postal_code->setLongitude("-110.835");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85708");
		$postal_code->setLatitude("32.183");
		$postal_code->setLongitude("-110.866");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85709");
		$postal_code->setLatitude("32.2298");
		$postal_code->setLongitude("-111.016");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85710");
		$postal_code->setLatitude("32.2137");
		$postal_code->setLongitude("-110.824");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85711");
		$postal_code->setLatitude("32.2151");
		$postal_code->setLongitude("-110.883");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85712");
		$postal_code->setLatitude("32.2526");
		$postal_code->setLongitude("-110.887");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85713");
		$postal_code->setLatitude("32.1929");
		$postal_code->setLongitude("-111.005");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85714");
		$postal_code->setLatitude("32.1702");
		$postal_code->setLongitude("-110.946");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85715");
		$postal_code->setLatitude("32.2487");
		$postal_code->setLongitude("-110.831");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85716");
		$postal_code->setLatitude("32.2417");
		$postal_code->setLongitude("-110.923");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85718");
		$postal_code->setLatitude("32.3108");
		$postal_code->setLongitude("-110.918");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85719");
		$postal_code->setLatitude("32.2466");
		$postal_code->setLongitude("-110.948");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85721");
		$postal_code->setLatitude("32.2297");
		$postal_code->setLongitude("-110.95");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85730");
		$postal_code->setLatitude("32.1776");
		$postal_code->setLongitude("-110.793");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85735");
		$postal_code->setLatitude("32.1054");
		$postal_code->setLongitude("-111.321");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85736");
		$postal_code->setLatitude("31.7567");
		$postal_code->setLongitude("-111.382");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85737");
		$postal_code->setLatitude("32.4364");
		$postal_code->setLongitude("-110.969");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85739");
		$postal_code->setLatitude("32.4847");
		$postal_code->setLongitude("-110.897");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85741");
		$postal_code->setLatitude("32.3365");
		$postal_code->setLongitude("-111.041");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85742");
		$postal_code->setLatitude("32.422");
		$postal_code->setLongitude("-111.053");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85743");
		$postal_code->setLatitude("32.307");
		$postal_code->setLongitude("-111.183");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85745");
		$postal_code->setLatitude("32.2538");
		$postal_code->setLongitude("-111.057");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85746");
		$postal_code->setLatitude("32.0739");
		$postal_code->setLongitude("-111.078");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85747");
		$postal_code->setLatitude("32.1026");
		$postal_code->setLongitude("-110.75");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85748");
		$postal_code->setLatitude("32.2086");
		$postal_code->setLongitude("-110.731");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85749");
		$postal_code->setLatitude("32.2703");
		$postal_code->setLongitude("-110.748");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85750");
		$postal_code->setLatitude("32.2985");
		$postal_code->setLongitude("-110.844");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85901");
		$postal_code->setLatitude("34.0929");
		$postal_code->setLongitude("-110.086");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85920");
		$postal_code->setLatitude("33.8111");
		$postal_code->setLongitude("-109.191");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85922");
		$postal_code->setLatitude("33.6571");
		$postal_code->setLongitude("-109.069");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85924");
		$postal_code->setLatitude("34.4332");
		$postal_code->setLongitude("-109.652");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85925");
		$postal_code->setLatitude("33.9202");
		$postal_code->setLongitude("-109.312");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85928");
		$postal_code->setLatitude("34.4388");
		$postal_code->setLongitude("-110.632");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85929");
		$postal_code->setLatitude("34.1794");
		$postal_code->setLongitude("-109.951");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85935");
		$postal_code->setLatitude("34.135");
		$postal_code->setLongitude("-109.901");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85936");
		$postal_code->setLatitude("34.4975");
		$postal_code->setLongitude("-109.241");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85937");
		$postal_code->setLatitude("34.5835");
		$postal_code->setLongitude("-110.011");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("85938");
		$postal_code->setLatitude("34.1574");
		$postal_code->setLongitude("-109.452");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86001");
		$postal_code->setLatitude("35.4866");
		$postal_code->setLongitude("-111.74");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86004");
		$postal_code->setLatitude("35.1871");
		$postal_code->setLongitude("-111.258");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86021");
		$postal_code->setLatitude("36.67");
		$postal_code->setLongitude("-112.961");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86022");
		$postal_code->setLatitude("36.5312");
		$postal_code->setLongitude("-112.238");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86024");
		$postal_code->setLatitude("34.6599");
		$postal_code->setLongitude("-111.481");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86025");
		$postal_code->setLatitude("34.9249");
		$postal_code->setLongitude("-110.075");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86030");
		$postal_code->setLatitude("36.2434");
		$postal_code->setLongitude("-110.59");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86033");
		$postal_code->setLatitude("36.6868");
		$postal_code->setLongitude("-110.266");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86034");
		$postal_code->setLatitude("35.7964");
		$postal_code->setLongitude("-110.203");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86035");
		$postal_code->setLatitude("35.3518");
		$postal_code->setLongitude("-111.001");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86036");
		$postal_code->setLatitude("36.8666");
		$postal_code->setLongitude("-111.813");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86038");
		$postal_code->setLatitude("34.9453");
		$postal_code->setLongitude("-111.427");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86039");
		$postal_code->setLatitude("35.6367");
		$postal_code->setLongitude("-110.529");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86040");
		$postal_code->setLatitude("36.8392");
		$postal_code->setLongitude("-111.152");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86042");
		$postal_code->setLatitude("35.9142");
		$postal_code->setLongitude("-110.474");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86043");
		$postal_code->setLatitude("35.9159");
		$postal_code->setLongitude("-110.658");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86044");
		$postal_code->setLatitude("35.9318");
		$postal_code->setLongitude("-110.87");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86045");
		$postal_code->setLatitude("35.974");
		$postal_code->setLongitude("-111.356");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86046");
		$postal_code->setLatitude("35.6163");
		$postal_code->setLongitude("-112.441");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86047");
		$postal_code->setLatitude("35.1859");
		$postal_code->setLongitude("-110.363");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86053");
		$postal_code->setLatitude("36.4987");
		$postal_code->setLongitude("-111.305");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86054");
		$postal_code->setLatitude("36.7586");
		$postal_code->setLongitude("-110.597");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86301");
		$postal_code->setLatitude("34.6027");
		$postal_code->setLongitude("-112.419");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86303");
		$postal_code->setLatitude("34.4897");
		$postal_code->setLongitude("-112.436");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86305");
		$postal_code->setLatitude("34.7181");
		$postal_code->setLongitude("-112.896");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86314");
		$postal_code->setLatitude("34.6467");
		$postal_code->setLongitude("-112.316");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86320");
		$postal_code->setLatitude("35.1858");
		$postal_code->setLongitude("-112.644");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86321");
		$postal_code->setLatitude("34.6689");
		$postal_code->setLongitude("-113.216");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86322");
		$postal_code->setLatitude("34.5204");
		$postal_code->setLongitude("-111.862");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86323");
		$postal_code->setLatitude("34.8678");
		$postal_code->setLongitude("-112.507");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86324");
		$postal_code->setLatitude("34.8439");
		$postal_code->setLongitude("-112.161");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86325");
		$postal_code->setLatitude("34.7397");
		$postal_code->setLongitude("-111.903");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86326");
		$postal_code->setLatitude("34.6315");
		$postal_code->setLongitude("-112.103");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86327");
		$postal_code->setLatitude("34.5028");
		$postal_code->setLongitude("-112.226");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86332");
		$postal_code->setLatitude("34.4857");
		$postal_code->setLongitude("-112.903");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86333");
		$postal_code->setLatitude("34.3355");
		$postal_code->setLongitude("-112.001");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86334");
		$postal_code->setLatitude("35.0137");
		$postal_code->setLongitude("-112.465");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86335");
		$postal_code->setLatitude("34.6381");
		$postal_code->setLongitude("-111.761");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86336");
		$postal_code->setLatitude("34.6891");
		$postal_code->setLongitude("-111.281");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86337");
		$postal_code->setLatitude("35.1592");
		$postal_code->setLongitude("-113.127");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86343");
		$postal_code->setLatitude("34.2352");
		$postal_code->setLongitude("-112.305");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86351");
		$postal_code->setLatitude("34.7787");
		$postal_code->setLongitude("-111.799");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86401");
		$postal_code->setLatitude("35.5028");
		$postal_code->setLongitude("-113.879");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86403");
		$postal_code->setLatitude("34.4829");
		$postal_code->setLongitude("-114.337");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86404");
		$postal_code->setLatitude("34.6631");
		$postal_code->setLongitude("-114.198");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86406");
		$postal_code->setLatitude("34.5884");
		$postal_code->setLongitude("-113.698");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86413");
		$postal_code->setLatitude("35.3429");
		$postal_code->setLongitude("-114.395");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86426");
		$postal_code->setLatitude("35.0104");
		$postal_code->setLongitude("-114.574");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86429");
		$postal_code->setLatitude("35.1619");
		$postal_code->setLongitude("-114.49");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86432");
		$postal_code->setLatitude("36.439");
		$postal_code->setLongitude("-113.623");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86434");
		$postal_code->setLatitude("35.809");
		$postal_code->setLongitude("-113.249");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86435");
		$postal_code->setLatitude("36.1619");
		$postal_code->setLongitude("-112.615");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86436");
		$postal_code->setLatitude("34.7896");
		$postal_code->setLongitude("-114.474");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86440");
		$postal_code->setLatitude("34.9096");
		$postal_code->setLongitude("-114.545");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86441");
		$postal_code->setLatitude("35.8897");
		$postal_code->setLongitude("-114.599");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86442");
		$postal_code->setLatitude("34.9242");
		$postal_code->setLongitude("-114.131");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86444");
		$postal_code->setLatitude("35.8687");
		$postal_code->setLongitude("-114.333");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86502");
		$postal_code->setLatitude("34.9482");
		$postal_code->setLongitude("-109.473");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86503");
		$postal_code->setLatitude("36.1003");
		$postal_code->setLongitude("-109.586");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86505");
		$postal_code->setLatitude("35.6053");
		$postal_code->setLongitude("-109.458");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86507");
		$postal_code->setLatitude("36.4465");
		$postal_code->setLongitude("-109.249");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86510");
		$postal_code->setLatitude("36.2002");
		$postal_code->setLongitude("-110.221");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86514");
		$postal_code->setLatitude("36.7518");
		$postal_code->setLongitude("-109.364");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86535");
		$postal_code->setLatitude("36.7403");
		$postal_code->setLongitude("-109.854");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86538");
		$postal_code->setLatitude("36.4497");
		$postal_code->setLongitude("-109.576");
		$manager->persist($postal_code);
		$manager->flush();
		
		$postal_code = new PostalCodes();
		$postal_code->setPostalCode("86556");
		$postal_code->setLatitude("36.3275");
		$postal_code->setLongitude("-109.253");
		$manager->persist($postal_code);
		$manager->flush();
		
		// END INSERTING AZ POSTAL CODES
	}
	
}